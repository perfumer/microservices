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
    private $_guzzle_client;

    /**
     * @var string
     */
    private $_request_catcher_host;

    /**
     * @var string
     */
    protected $_host;

    /**
     * @var string
     */
    protected $_locale;

    /**
     * @var array
     */
    protected $_headers = [];

    /**
     * @var string
     */
    protected $_http_auth_username;

    /**
     * @var string
     */
    protected $_http_auth_password;

    public function __construct(array $options = [])
    {
        $this->_host = $options['host'] ?? null;
        $this->_locale = $options['locale'] ?? null;
        $this->_request_catcher_host = $options['request_catcher_host'] ?? null;
        $this->_http_auth_username = $options['http_auth_username'] ?? null;
        $this->_http_auth_password = $options['http_auth_password'] ?? null;
    }

    /**
     * @return string
     */
    public function getHost(): ?string
    {
        return $this->_host;
    }

    /**
     * @param string $host
     */
    public function setHost(string $host): void
    {
        $this->_host = $host;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->_locale;
    }

    /**
     * @param string $locale
     */
    public function setLocale(string $locale): void
    {
        $this->_locale = $locale;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->_headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->_headers = $headers;
    }

    /**
     * @param string $name
     * @param string|array $value
     */
    public function addHeader(string $name, $value): void
    {
        $this->_headers[$name] = $value;
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

        $url = $this->_host . $request->_request_url;

        $headers = [];

        if ($this->_locale) {
            $headers['Api-Locale'] = $this->_locale;
        }

        $headers = array_merge($headers, $this->_headers, $request->getHeaders());

        $options = [
            'connect_timeout' => 3,
            'read_timeout' => $request->_timeout,
            'timeout' => $request->_timeout,
            'debug' => $request->_debug,
            'headers' => $headers,
        ];

        // Set HTTP Auth credentials from Request or Microservice parameters
        $http_auth_username = $this->_http_auth_username;
        $http_auth_password = $this->_http_auth_password;

        if ($request->_http_auth_username) {
            $http_auth_username = $request->_http_auth_username;
        }

        if ($request->_http_auth_password) {
            $http_auth_password = $request->_http_auth_password;
        }

        if ($http_auth_username && $http_auth_password) {
            $options['auth'] = [$http_auth_username, $http_auth_password];
        }

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

        while ($connect_retries < 5) {
            $break_while = true;

            try {
                $client = $this->getGuzzleClient();

                $guzzle_response = $client->request($request->_request_method, $url, $options);

                $response = $this->buildResponseFromGuzzleResponse($response, $guzzle_response);

                $this->catchRequest($url, $options, $request, $response, $guzzle_response->getHeaders());

                if ($connect_retries > 0) {
//                    error_log('MICROSERVICES ' . $this->_host . ' SUCCESS after connect timeout retry ' . $connect_retries . PHP_EOL);
                }
            } catch (ConnectException $e) {
//                error_log('MICROSERVICES ' . $this->_host . ' connect timeout reached' . PHP_EOL);

                $connect_retries++;

                if ($connect_retries < 5) {
                    $break_while = false;
                } else {
                    $response->_status = false;
                    $response->_message = $e->getMessage();

                    $this->catchRequest($url, $options, $request, $response, [], $e->getMessage());
                }
            } catch (ClientException $e) {
                $response = $this->buildResponseFromRequestException($response, $e);

                $headers = $e->getResponse() ? $e->getResponse()->getHeaders() : [];

                $this->catchRequest($url, $options, $request, $response, $headers);

                $break_while = true;
            } catch (RequestException $e) {
                $response = $this->buildResponseFromRequestException($response, $e);

                $headers = $e->getResponse() ? $e->getResponse()->getHeaders() : [];

                $this->catchRequest($url, $options, $request, $response, $headers);
            } catch (\Exception $e) {
                $response->_status = false;
                $response->_message = $e->getMessage();

                error_log('MICROSERVICES ' . $this->_host . ' fallback exception:' . $response->_message . PHP_EOL);

                $this->catchRequest($url, $options, $request, $response, [], $e->getMessage());
            }

            if ($break_while) {
                break;
            }
        }
        
        if ($request->_throw_exception === true && $response->_status === false) {
            throw new UnsuccessfulRequestException();
        }

        return $response;
    }

    private function getGuzzleClient(): Client
    {
        if (!$this->_guzzle_client instanceof Client) {
            $this->_guzzle_client = new Client();
        }

        return $this->_guzzle_client;
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

    private function catchRequest($url, $options, Request $request, Response $response, $response_headers = [], $error = null)
    {
        // if request catcher is defined, send exactly same request
        if ($this->_request_catcher_host && $request->_catch) {
            $request_catcher_url = $this->_request_catcher_host . $request->_request_url;
            $request_catcher_request = $options;
            $request_catcher_request['url'] = $url;
            $request_catcher_request['method'] = $request->_request_method;

            $request_catcher_options = [
                'connect_timeout' => $request->_timeout,
                'read_timeout' => $request->_timeout,
                'timeout' => $request->_timeout,
                'json' => [
                    'request' => $request_catcher_request,
                    'response' => [
                    ]
                ]
            ];

            if ($response) {
                $request_catcher_options['json']['response']['http_status_code'] = $response->_http_status_code;

                if ($error) {
                    $request_catcher_options['json']['response']['error'] = $error;
                }

                if ($response->_raw) {
                    $request_catcher_options['json']['response']['json'] = json_decode($response->_raw, true);
                    $request_catcher_options['json']['response']['body'] = $response->_raw;
                }

                if ($response_headers) {
                    $request_catcher_options['json']['response']['headers'] = $response_headers;
                }
            }

            $request_catcher_client = new Client();
            $request_catcher_client->request($request->_request_method, $request_catcher_url, $request_catcher_options);
        }
    }
}
