<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Tag;

class UpdateTagRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $text = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
    }
}
