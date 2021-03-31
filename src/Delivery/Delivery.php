<?php

namespace Perfumer\Microservices\Delivery;

class Delivery extends \Generated\Perfumer\Microservices\Delivery\Delivery
{
    public function __construct($host)
    {
        $this->host = $host;
    }
}
