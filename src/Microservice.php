<?php

namespace Perfumer\Microservices;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class Microservice
{
    protected $host;

    protected function fetchKeyFromContent($content, $key)
    {
        $return = new Undefined();

        if (is_array($content) && isset($content[$key])) {
            $return = $content[$key];
        }

        return $return;
    }

    protected function doRequest(Response $target_response, $method, $url, $json = null): Response
    {
        try {
            $url = $this->host . $url;

            $options = [
                'connect_timeout' => 15,
                'read_timeout' => 15,
                'timeout' => 15,
            ];

            if ($json) {
                $filtered_json = [];

                foreach ($json as $key => $value) {
                    if (!$value instanceof Undefined) {
                        $filtered_json[$key] = $value;
                    }
                }

                $options['json'] = $filtered_json;
            }

            $client = new Client();

            $guzzle_response = $client->request($method, $url, $options);
            $target_response->_raw = $guzzle_response->getBody()->getContents();
            $guzzle_response = json_decode($target_response->_raw, true);

            if (isset($guzzle_response['content']) && is_array($guzzle_response['content'])) {
                $target_response->_content = $guzzle_response['content'];
            }
        } catch (ClientException $e) {
            $guzzle_response = $e->getResponse();
            $guzzle_response = json_decode($guzzle_response->getBody()->getContents(), true);

            if (isset($guzzle_response['status'])) {
                $target_response->_status = (bool) $guzzle_response['status'];
            }

            if (isset($guzzle_response['message'])) {
                $target_response->_message = (string) $guzzle_response['message'];
            }

            if (isset($guzzle_response['errors']) && is_array($guzzle_response['errors'])) {
                $target_response->_errors = $guzzle_response['errors'];
            }
        } catch (RequestException $e) {
            $target_response->_status = false;
            $target_response->_message = $e->getMessage();
        } catch (\Exception $e) {
            $target_response->_status = false;
            $target_response->_message = $e->getMessage();
        }

        return $target_response;
    }
}
