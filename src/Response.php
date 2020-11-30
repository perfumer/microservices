<?php

namespace Perfumer\Microservices;

class Response
{
    /**
     * @var boolean
     */
    public $status = true;

    /**
     * @var array
     */
    public $errors;

    /**
     * @var string
     */
    public $message;

    /**
     * @var mixed
     */
    public $content;
}
