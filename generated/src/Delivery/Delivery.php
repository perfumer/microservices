<?php

namespace Generated\Perfumer\Microservices\Delivery;

abstract class Delivery extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Delivery\Delivery
{
    public function getDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\GetDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\GetDeliveryResponse
    {
        $url = '/delivery';

        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\GetDeliveryResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Delivery\Response\Delivery\GetDeliveryResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function deleteDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\DeleteDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\DeleteDeliveryResponse
    {
        $url = '/delivery';

        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\DeleteDeliveryResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Delivery\Response\Delivery\DeleteDeliveryResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\SaveDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\SaveDeliveryResponse
    {
        $url = '/delivery';

        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\SaveDeliveryResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Delivery\Response\Delivery\SaveDeliveryResponse(), 'post', $url, [
        'min' => $request->min,
        'max' => $request->max,
        'gap' => $request->gap,
        'has_email' => $request->has_email,
        'has_sms' => $request->has_sms,
        'has_feed' => $request->has_feed,
        'email_subject' => $request->email_subject,
        'email_html' => $request->email_html,
        'sms_message' => $request->sms_message,
        'feed_title' => $request->feed_title,
        'feed_text' => $request->feed_text,
        'feed_image' => $request->feed_image,
        'feed_payload' => $request->feed_payload,
        'data_url' => $request->data_url,
        'filters' => $request->filters,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function updateDelivery(\Perfumer\Microservices\Delivery\Request\Delivery\UpdateDeliveryRequest $request): \Perfumer\Microservices\Delivery\Response\Delivery\UpdateDeliveryResponse
    {
        $url = '/delivery';

        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\UpdateDeliveryResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Delivery\Response\Delivery\UpdateDeliveryResponse(), 'patch', $url, [
        'id' => $request->id,
        'min' => $request->min,
        'max' => $request->max,
        'gap' => $request->gap,
        'has_email' => $request->has_email,
        'has_sms' => $request->has_sms,
        'has_feed' => $request->has_feed,
        'email_subject' => $request->email_subject,
        'email_html' => $request->email_html,
        'sms_message' => $request->sms_message,
        'feed_title' => $request->feed_title,
        'feed_text' => $request->feed_text,
        'feed_image' => $request->feed_image,
        'feed_payload' => $request->feed_payload,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }

    public function getDeliveries(\Perfumer\Microservices\Delivery\Request\Deliveries\GetDeliveriesRequest $request): \Perfumer\Microservices\Delivery\Response\Deliveries\GetDeliveriesResponse
    {
        $url = '/deliveries';

        /** @var \Perfumer\Microservices\Delivery\Response\Deliveries\GetDeliveriesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Delivery\Response\Deliveries\GetDeliveriesResponse(), 'get', $url, [
        'name' => $request->name,
        'has_email' => $request->has_email,
        'has_sms' => $request->has_sms,
        'has_feed' => $request->has_feed,
        'status' => $request->status,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        'id_lt' => $request->id_lt,
        'id_le' => $request->id_le,
        'id_gt' => $request->id_gt,
        'id_ge' => $request->id_ge,
        ], $request->_debug, $request->_timeout);
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
        $url = '/delivery/cancel';

        /** @var \Perfumer\Microservices\Delivery\Response\Delivery\CancelDeliveryResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Delivery\Response\Delivery\CancelDeliveryResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'delivery');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->delivery = $item;
        }

        return $response;
    }
}
