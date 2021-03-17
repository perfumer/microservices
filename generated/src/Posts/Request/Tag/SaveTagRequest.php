<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Tag;

class SaveTagRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $text = null;

    public function __construct()
    {
        $this->text = new \Perfumer\Microservices\Undefined();
    }
}
