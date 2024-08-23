<?php

namespace Generated\Perfumer\Microservices\Pages\Request\Revision;

class ArchiveRevisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->_request_url = '/revision/archive';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
