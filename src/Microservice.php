<?php

namespace Perfumer\Microservices;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class Microservice
{
    /**
     * @var string
     */
    protected $host;

    /**
     * @var array
     */
    protected $headers = [];

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
        try {
            $url = $this->host . $request->_request_url;

            $headers = array_merge($this->headers, $request->getHeaders());

            $options = [
                'connect_timeout' => $request->_timeout,
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

            $client = new Client();

            $guzzle_response = $client->request($request->_request_method, $url, $options);
            $response->_http_status_code = $guzzle_response->getStatusCode();
            $response->_raw = $guzzle_response->getBody()->getContents();
            $guzzle_response = json_decode($response->_raw, true);

            if (isset($guzzle_response['content']) && is_array($guzzle_response['content'])) {
                $response->_content = $guzzle_response['content'];
            }

            if (isset($guzzle_response['status'])) {
                $response->_status = (bool) $guzzle_response['status'];
            }

            if (isset($guzzle_response['status_code'])) {
                $response->_status_code = (string) $guzzle_response['status_code'];
            }

            if (isset($guzzle_response['message'])) {
                $response->_message = (string) $guzzle_response['message'];
            }

            if (isset($guzzle_response['errors']) && is_array($guzzle_response['errors'])) {
                $response->_errors = $guzzle_response['errors'];
            }
        } catch (ClientException $e) {
            $guzzle_response = $e->getResponse();

            $response->_status = false;

            if ($guzzle_response) {
                $response->_http_status_code = $guzzle_response->getStatusCode();
                $response->_raw = $guzzle_response->getBody()->getContents();

                $guzzle_response = json_decode($response->_raw, true);

                if (isset($guzzle_response['status_code'])) {
                    $response->_status_code = (string) $guzzle_response['status_code'];
                }

                if (isset($guzzle_response['message'])) {
                    $response->_message = (string) $guzzle_response['message'];
                }

                if (isset($guzzle_response['errors']) && is_array($guzzle_response['errors'])) {
                    $response->_errors = $guzzle_response['errors'];
                }
            }
        } catch (RequestException $e) {
            $guzzle_response = $e->getResponse();

            $response->_status = false;

            if ($guzzle_response) {
                $response->_http_status_code = $guzzle_response->getStatusCode();
                $response->_raw = $guzzle_response->getBody()->getContents();

                $guzzle_response = json_decode($response->_raw, true);

                if (isset($guzzle_response['status_code'])) {
                    $response->_status_code = (string) $guzzle_response['status_code'];
                }

                if (isset($guzzle_response['message'])) {
                    $response->_message = (string) $guzzle_response['message'];
                }

                if (isset($guzzle_response['errors']) && is_array($guzzle_response['errors'])) {
                    $response->_errors = $guzzle_response['errors'];
                }
            }
        } catch (\Exception $e) {
            $response->_status = false;
            $response->_message = $e->getMessage();
        }

        return $response;
    }
}
