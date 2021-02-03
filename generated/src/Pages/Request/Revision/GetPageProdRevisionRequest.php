<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class GetPageProdRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $page_id = null;

    /**
     * @var string
     */
    public $address = null;

    /**
     * @var string
     */
    public $site = null;

    public function __construct()
    {
        $this->page_id = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->site = new \Perfumer\Microservices\Undefined();
    }
}
