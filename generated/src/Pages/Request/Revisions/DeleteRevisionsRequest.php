<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revisions;

class DeleteRevisionsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $page_id = null;

    /**
     * @var string
     */
    public $page_code = null;

    public function __construct()
    {
        $this->_request_url = '/revisions';
        $this->_request_method = 'delete';
        $this->page_id = new \Perfumer\Microservices\Undefined();
        $this->page_code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->page_id instanceof \Perfumer\Microservices\Undefined) {
            $array['page_id'] = $this->page_id;
        }
        if (!$this->page_code instanceof \Perfumer\Microservices\Undefined) {
            $array['page_code'] = $this->page_code;
        }

        return $array;
    }
}
