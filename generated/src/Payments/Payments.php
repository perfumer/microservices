<?php

namespace Generated\Perfumer\Microservices\Payments;

abstract class Payments extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Payments\Payments
{
    public function cartPurchase(\Perfumer\Microservices\Payments\Request\Purchase\CartPurchaseRequest $request): \Perfumer\Microservices\Payments\Response\Purchase\CartPurchaseResponse
    {
        /** @var \Perfumer\Microservices\Payments\Response\Purchase\CartPurchaseResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Payments\Response\Purchase\CartPurchaseResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'frame_url');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->frame_url = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'purchase');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->purchase = $item;
        }

        return $response;
    }

    public function initPurchase(\Perfumer\Microservices\Payments\Request\Purchase\InitPurchaseRequest $request): \Perfumer\Microservices\Payments\Response\Purchase\InitPurchaseResponse
    {
        /** @var \Perfumer\Microservices\Payments\Response\Purchase\InitPurchaseResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Payments\Response\Purchase\InitPurchaseResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'frame_url');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->frame_url = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'purchase');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->purchase = $item;
        }

        return $response;
    }
}
