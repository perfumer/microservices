<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class GetPageStageRevisionRequest extends \Perfumer\Microservices\Request
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
        $this->_request_url = '/page/revision/stage';
        $this->_request_method = 'get';
        $this->page_id = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->site = new \Perfumer\Microservices\Undefined();
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

        return $array;
    }
}
