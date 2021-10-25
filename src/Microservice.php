<?php

namespace Perfumer\Microservices;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Message\ResponseInterface;

class Microservice
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $host;

    /**
     * @var array
     */
    private $headers = [];

    /**
     * @return string
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->host = $host;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @param string $name
     * @param string|array $value
     */
    public function addHeader(string $name, $value): void
    {
        $this->headers[$name] = $value;
    }

    public function request(Request $request): Response
    {
        return $this->doRequest($request, new Response());
    }

    protected function fetchKeyFromContent($content, $key)
    {
        $return = new Undefined();

        if (is_array($content) && isset($content[$key])) {
            $return = $content[$key];
        }

        return $return;
    }

    protected function doRequest(Request $request, Response $response): Response
    {
        $connect_retries = 0;

        while ($connect_retries < 5) {
            $break_while = true;

            try {
                $url = $this->host . $request->_request_url;

                $headers = array_merge($this->headers, $request->getHeaders());

                $options = [
                    'connect_timeout' => 3,
                    'read_timeout' => $request->_timeout,
                    'timeout' => $request->_timeout,
                    'debug' => $request->_debug,
                    'headers' => $headers,
                ];

                $body = $request->getBody();

                if ($body) {
                    $filtered_json = [];

                    foreach ($body as $key => $value) {
                        if (!$value instanceof Undefined) {
                            $filtered_json[$key] = $value;
                        }
                    }

                    $options['json'] = $filtered_json;
                }

                $client = $this->getGuzzleClient();

                $guzzle_response = $client->request($request->_request_method, $url, $options);

                $response = $this->buildResponseFromGuzzleResponse($response, $guzzle_response);

                if ($connect_retries > 0) {
                    error_log('MICROSERVICES ' . $this->host . ' SUCCESS after connect timeout retry ' . $connect_retries . PHP_EOL);
                }
            } catch (ConnectException $e) {
                error_log('MICROSERVICES ' . $this->host . ' connect timeout reached' . PHP_EOL);

                $connect_retries++;

                if ($connect_retries < 5) {
                    $break_while = false;
                } else {
                    $response->_status = false;
                    $response->_message = $e->getMessage();
                }
            } catch (ClientException $e) {
                $response = $this->buildResponseFromRequestException($response, $e);

                $break_while = true;
            } catch (RequestException $e) {
                $response = $this->buildResponseFromRequestException($response, $e);
            } catch (\Exception $e) {
                $response->_status = false;
                $response->_message = $e->getMessage();

                error_log('MICROSERVICES ' . $this->host . ' fallback exception:' . $response->_message . PHP_EOL);
            }

            if ($break_while) {
                break;
            }
        }

        return $response;
    }

    private function getGuzzleClient(): Client
    {
        if (!$this->client instanceof Client) {
            $this->client = new Client();
        }

        return $this->client;
    }

    private function buildResponseFromRequestException(Response $response, RequestException $e)
    {
        $guzzle_response = $e->getResponse();

        $response = $this->buildResponseFromGuzzleResponse($response, $guzzle_response);

        $response->_status = false;

        return $response;
    }

    private function buildResponseFromGuzzleResponse(Response $response, ?ResponseInterface $guzzle_response): Response
    {
        if ($guzzle_response) {
            $response->_http_status_code = $guzzle_response->getStatusCode();
            $response->_raw = $guzzle_response->getBody()->getContents();

            $decoded_response = json_decode($response->_raw, true);

            if (isset($decoded_response['status'])) {
                $response->_status = (bool) $decoded_response['status'];
            }

            if (isset($decoded_response['status_code'])) {
                $response->_status_code = (string) $decoded_response['status_code'];
            }

            if (isset($decoded_response['message'])) {
                $response->_message = (string) $decoded_response['message'];
            }

            if (isset($decoded_response['errors']) && is_array($decoded_response['errors'])) {
                $response->_errors = (array) $decoded_response['errors'];
            }

            if (isset($decoded_response['content']) && is_array($decoded_response['content'])) {
                $response->_content = (array) $decoded_response['content'];
            }
        }

        return $response;
    }
}
