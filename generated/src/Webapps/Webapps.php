<?php

namespace Generated\Perfumer\Microservices\Webapps;

abstract class Webapps extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Webapps\Webapps
{
    public function getMessage(\Perfumer\Microservices\Webapps\Request\Message\GetMessageRequest $request): \Perfumer\Microservices\Webapps\Response\Message\GetMessageResponse
    {
        /** @var \Perfumer\Microservices\Webapps\Response\Message\GetMessageResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Webapps\Response\Message\GetMessageResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'message');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->message = $item;
        }

        return $response;
    }

    public function getClientStates(\Perfumer\Microservices\Webapps\Request\ClientStates\GetClientStatesRequest $request): \Perfumer\Microservices\Webapps\Response\ClientStates\GetClientStatesResponse
    {
        /** @var \Perfumer\Microservices\Webapps\Response\ClientStates\GetClientStatesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Webapps\Response\ClientStates\GetClientStatesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'states');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->states = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'clientStates');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->clientStates = $item;
        }

        return $response;
    }
}
