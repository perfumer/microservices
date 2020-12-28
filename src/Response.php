<?php

namespace Perfumer\Microservices;

class Response
{
    /**
     * @var boolean
     */
    public $_status = true;

    /**
     * @var array
     */
    public $_errors;

    /**
     * @var string
     */
    public $_message;

    /**
     * @var mixed
     */
    public $_content;

    /**
     * @var string
     */
    public $_raw;
}
