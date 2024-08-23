<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class GetPageActiveRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $page_id;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $site;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/page/revision/active';
        $this->_request_method = 'get';
        $this->page_id = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->site = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->page_id instanceof \Perfumer\Microservices\Undefined) {
            $array['page_id'] = $this->page_id;
        }
        if (!$this->address instanceof \Perfumer\Microservices\Undefined) {
            $array['address'] = $this->address;
        }
        if (!$this->site instanceof \Perfumer\Microservices\Undefined) {
            $array['site'] = $this->site;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
