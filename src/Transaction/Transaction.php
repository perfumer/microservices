<?php

namespace Perfumer\Microservices\Transaction;

use GuzzleHttp\Client;
use Perfumer\Microservices\Microservice;
use Perfumer\Microservices\Request;
use Perfumer\Microservices\Response;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Uuid;

class Transaction
{
    /**
     * @var TransactionProvider
     */
    protected $provider;

    /**
     * @var TransactionRequest[]
     */
    protected $transaction_requests = [];

    public function __construct(TransactionProvider $provider)
    {
        $this->provider = $provider;
    }

    public function add(Microservice $microservice, Request $request, callable $executable): void
    {
        $transaction_request = new TransactionRequest();
        $transaction_request->microservice = $microservice;
        $transaction_request->request = $request;
        $transaction_request->executable = $executable;

        $http_request = new HttpRequest();
        $http_request->timeout = $request->_timeout;
        $http_request->json = $request->getBody();

        if (strpos($request->_request_url, 'http') === 0) {
            $http_request->url = $request->_request_url;
        } else {
            $http_request->url = $microservice->getHost() . $request->_request_url;
        }

        $headers = array_merge($microservice->getHeaders(), $request->getHeaders());

        $http_request->headers = $headers;
        $http_request->method = $request->_request_method;
        $http_request->uuid = Uuid::uuid4()->toString();

        $transaction_request->http_request = $http_request;

        $this->transaction_requests[] = $transaction_request;
    }

    public function commit(): void
    {
        $http_requests_to_save = array_map(function ($transaction_request) {
            return $transaction_request->http_request;
        }, $this->transaction_requests);

        $this->provider->saveHttpRequests($http_requests_to_save);

        foreach ($this->transaction_requests as $transaction_request) {
            $executable = $transaction_request->executable;

            /** @var Response $response */
            $response = $executable($transaction_request->microservice, $transaction_request->request);

            if (in_array($response->_http_status_code, [200, 201])) {
                $this->provider->deleteHttpRequest($transaction_request->http_request);
            }
        }
    }

    /**
     * @param HttpRequest $http_request
     * @return ResponseInterface
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendHttpRequest(HttpRequest $http_request): ResponseInterface
    {
        $options = [
            'connect_timeout' => $http_request->timeout,
            'read_timeout' => $http_request->timeout,
            'timeout' => $http_request->timeout,
        ];

        $json = $http_request->json;
        $headers = $http_request->headers;

        if ($json) {
            $options['json'] = $json;
        }

        if ($headers) {
            $options['headers'] = $headers;
        }

        $client = new Client();

        return $client->request($http_request->method, $http_request->url, $options);
    }
}
