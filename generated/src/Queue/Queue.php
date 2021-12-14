<?php

namespace Generated\Perfumer\Microservices\Queue;

abstract class Queue extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Queue\Queue
{
    public function createTask(\Perfumer\Microservices\Queue\Request\Task\CreateTaskRequest $request): \Perfumer\Microservices\Queue\Response\Task\CreateTaskResponse
    {
        /** @var \Perfumer\Microservices\Queue\Response\Task\CreateTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Queue\Response\Task\CreateTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function createFraction(\Perfumer\Microservices\Queue\Request\Fraction\CreateFractionRequest $request): \Perfumer\Microservices\Queue\Response\Fraction\CreateFractionResponse
    {
        /** @var \Perfumer\Microservices\Queue\Response\Fraction\CreateFractionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Queue\Response\Fraction\CreateFractionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'fraction');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->fraction = $item;
        }

        return $response;
    }
}
