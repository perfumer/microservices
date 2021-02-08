<?php

namespace Generated\Perfumer\Microservices\Events\Request\Comment;

class PublishCommentRequest extends \Perfumer\Microservices\Request
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
