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
        $this->_request_url = '/revision/move';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->page_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->page_id instanceof \Perfumer\Microservices\Undefined) {
            $array['page_id'] = $this->page_id;
        }

        return $array;
    }
}
