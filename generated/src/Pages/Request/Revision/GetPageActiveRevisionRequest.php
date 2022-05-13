<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class GetPageActiveRevisionRequest extends \Perfumer\Microservices\Request
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

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

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
