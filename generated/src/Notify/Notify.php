<?php

namespace Generated\Perfumer\Microservices\Notify;

abstract class Notify extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Notify\Notify
{
    public function doNotify(\Perfumer\Microservices\Notify\Request\Notify\DoNotifyRequest $request): \Perfumer\Microservices\Notify\Response\Notify\DoNotifyResponse
    {
        /** @var \Perfumer\Microservices\Notify\Response\Notify\DoNotifyResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Notify\Response\Notify\DoNotifyResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'notify');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->notify = $item;
        }

        return $response;
    }

    public function getNotifications(\Perfumer\Microservices\Notify\Request\Notifications\GetNotificationsRequest $request): \Perfumer\Microservices\Notify\Response\Notifications\GetNotificationsResponse
    {
        /** @var \Perfumer\Microservices\Notify\Response\Notifications\GetNotificationsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Notify\Response\Notifications\GetNotificationsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'notifications');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->notifications = $item;
        }

        return $response;
    }
}
