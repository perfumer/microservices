<?php

namespace Perfumer\Microservices\Transaction;

use Perfumer\Microservices\Microservice;
use Perfumer\Microservices\Request;

class TransactionRequest
{
    /**
     * @var Microservice
     */
    public $microservice;

    /**
     * @var Request
     */
    public $request;

    /**
     * @var callable
     */
    public $executable;

    /**
     * @var HttpRequest
     */
    public $http_request;
}
