<?php

namespace Perfumer\Microservices;

abstract class Request
{
    /**
     * @var bool
     */
    public $_debug = false;

    /**
     * @var int
     */
    public $_timeout = 15;

    /**
     * @var string
     */
    public $_request_method;

    /**
     * @var string
     */
    public $_request_url;

    /**
     * @return array
     */
    abstract public function getBody(): array;
}
