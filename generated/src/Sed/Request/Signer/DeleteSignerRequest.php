<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Signer;

class DeleteSignerRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/signer';
        $this->_request_method = 'delete';
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