<?php

namespace Perfumer\Microservices;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Microservice
{
    protected $host;

    protected function fetchKeyFromContent($content, $key)
    {
        $return = null;

        if (!is_array($content)) {
            return null;
        }

        if (isset($content[$key])) {
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
                'read_timeout'    => 15,
                'timeout'         => 15,
            ];

            if ($json) {
                $options['json'] = $json;
            }

            $client = new Client();

            $guzzle_response = $client->request($method, $url, $options);
            $guzzle_response = json_decode($guzzle_response->getBody()->getContents(), true);

            if (isset($guzzle_response['content']) && is_array($guzzle_response['content'])) {
                $target_response->content = $guzzle_response['content'];
            }
        } catch (RequestException $e) {
            $target_response->status = false;
            $target_response->message = $e->getMessage();
        } catch (\Exception $e) {
            $target_response->status = false;
            $target_response->message = $e->getMessage();
        }

        return $target_response;
    }
}
