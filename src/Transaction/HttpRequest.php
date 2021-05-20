<?php

namespace Perfumer\Microservices\Transaction;

class HttpRequest
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var integer
     */
    public $timeout = 15;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $method;

    /**
     * @var array
     */
    public $headers = [];

    /**
     * @var array
     */
    public $json = [];
}
