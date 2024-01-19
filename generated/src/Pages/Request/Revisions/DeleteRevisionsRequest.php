<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revisions;

class DeleteRevisionsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $page_id;

    /**
     * @var string
     */
    public $page_code;

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
        $this->_request_url = '/revisions';
        $this->_request_method = 'delete';
        $this->page_id = new \Perfumer\Microservices\Undefined();
        $this->page_code = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
