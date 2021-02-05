<?php

namespace Generated\Perfumer\Microservices\Events\Request\Comment;

class RejectCommentRequest extends \Perfumer\Microservices\Request
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
