<?php

namespace Generated\Perfumer\Microservices\Events\Request\Post;

class DislikePostRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
    }
}
