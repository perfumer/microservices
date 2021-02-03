<?php

namespace Perfumer\Microservices;

class Response
{
    /**
     * @var boolean
     */
    public $_status = true;

    /**
     * @var string
     */
    public $_status_code;

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

    /**
     * @var string
     */
    public $_http_status_code;
}
