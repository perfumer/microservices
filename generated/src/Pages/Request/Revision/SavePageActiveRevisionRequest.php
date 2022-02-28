<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class SavePageActiveRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $page_id = null;

    /**
     * @var int
     */
    public $revision_id = null;

    public function __construct()
    {
        $this->_request_url = '/page/revision/active';
        $this->_request_method = 'post';
        $this->page_id = new \Perfumer\Microservices\Undefined();
        $this->revision_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->page_id instanceof \Perfumer\Microservices\Undefined) {
            $array['page_id'] = $this->page_id;
        }
        if (!$this->revision_id instanceof \Perfumer\Microservices\Undefined) {
            $array['revision_id'] = $this->revision_id;
        }

        return $array;
    }
}
