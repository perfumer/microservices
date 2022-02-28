<?php

namespace Generated\Perfumer\Microservices\Cloud;

abstract class Cloud extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Cloud\Cloud
{
    public function getInstance(\Perfumer\Microservices\Cloud\Request\Instance\GetInstanceRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\GetInstanceResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\GetInstanceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\GetInstanceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'instance');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instance = $item;
        }

        return $response;
    }

    public function deleteInstance(\Perfumer\Microservices\Cloud\Request\Instance\DeleteInstanceRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\DeleteInstanceResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\DeleteInstanceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\DeleteInstanceResponse());

        return $response;
    }

    public function createInstance(\Perfumer\Microservices\Cloud\Request\Instance\CreateInstanceRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\CreateInstanceResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\CreateInstanceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\CreateInstanceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'instance');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instance = $item;
        }

        return $response;
    }

    public function updateInstance(\Perfumer\Microservices\Cloud\Request\Instance\UpdateInstanceRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\UpdateInstanceResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\UpdateInstanceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\UpdateInstanceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'instance');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instance = $item;
        }

        return $response;
    }

    public function getInstances(\Perfumer\Microservices\Cloud\Request\Instances\GetInstancesRequest $request): \Perfumer\Microservices\Cloud\Response\Instances\GetInstancesResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instances\GetInstancesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instances\GetInstancesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'instances');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instances = $item;
        }

        return $response;
    }

    public function validateInstance(\Perfumer\Microservices\Cloud\Request\Instance\ValidateInstanceRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\ValidateInstanceResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\ValidateInstanceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\ValidateInstanceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'instance');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instance = $item;
        }

        return $response;
    }

    public function getCustomers(\Perfumer\Microservices\Cloud\Request\Customers\GetCustomersRequest $request): \Perfumer\Microservices\Cloud\Response\Customers\GetCustomersResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Customers\GetCustomersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Customers\GetCustomersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'customers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customers = $item;
        }

        return $response;
    }

    public function getInstanceConnection(\Perfumer\Microservices\Cloud\Request\Instance\GetInstanceConnectionRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\GetInstanceConnectionResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\GetInstanceConnectionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\GetInstanceConnectionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'instance');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instance = $item;
        }

        return $response;
    }

    public function getUnmigratedInstance(\Perfumer\Microservices\Cloud\Request\Instance\GetUnmigratedInstanceRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\GetUnmigratedInstanceResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\GetUnmigratedInstanceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\GetUnmigratedInstanceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'instance');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instance = $item;
        }

        return $response;
    }

    public function migrateInstance(\Perfumer\Microservices\Cloud\Request\Instance\MigrateInstanceRequest $request): \Perfumer\Microservices\Cloud\Response\Instance\MigrateInstanceResponse
    {
        /** @var \Perfumer\Microservices\Cloud\Response\Instance\MigrateInstanceResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Cloud\Response\Instance\MigrateInstanceResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'instance');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->instance = $item;
        }

        return $response;
    }
}
