<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class MoveRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $page_id = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->page_id = new \Perfumer\Microservices\Undefined();
    }
}
