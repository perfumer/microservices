<?php

namespace Generated\Perfumer\Microservices\Delivery;

abstract class Delivery extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Delivery\Delivery
{
    public function getDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\GetDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\GetDeliveryResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\GetDeliveryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Delivery\GetDeliveryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function deleteDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\DeleteDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\DeleteDeliveryResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\DeleteDeliveryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Delivery\DeleteDeliveryResponse());

        return $response;
    }

    public function saveDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\SaveDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\SaveDeliveryResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\SaveDeliveryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Delivery\SaveDeliveryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function updateDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\UpdateDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\UpdateDeliveryResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\UpdateDeliveryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Delivery\UpdateDeliveryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function getDeliveries(\Perfumer\Microservices\Delivery\Request\Deliveries\GetDeliveriesRequest $request): \Perfumer\Microservices\Delivery\Response\Deliveries\GetDeliveriesResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Deliveries\GetDeliveriesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Deliveries\GetDeliveriesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'deliveries');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->deliveries = $item;
        }

        return $response;
    }

    public function cancelDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\CancelDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\CancelDeliveryResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\CancelDeliveryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Delivery\CancelDeliveryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function copyDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\CopyDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\CopyDeliveryResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\CopyDeliveryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Delivery\CopyDeliveryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function startDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\StartDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\StartDeliveryResponse
    {
        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\StartDeliveryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Delivery\Response\Delivery\StartDeliveryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }
}
