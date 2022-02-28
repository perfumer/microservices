<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class ImportRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $page = null;

    /**
     * @var array
     */
    public $revision = [
    ];

    public function __construct()
    {
        $this->_request_url = '/revision/import';
        $this->_request_method = 'post';
        $this->page = new \Perfumer\Microservices\Undefined();
        $this->revision = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->page instanceof \Perfumer\Microservices\Undefined) {
            $array['page'] = $this->page;
        }
        if (!$this->revision instanceof \Perfumer\Microservices\Undefined) {
            $array['revision'] = $this->revision;
        }

        return $array;
    }
}
