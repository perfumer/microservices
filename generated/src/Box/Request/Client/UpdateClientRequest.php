<?php

namespace Generated\Perfumer\Microservices\Box\Request\Client;

class UpdateClientRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $secret;

    /**
     * @var bool
     */
    public $is_admin;

    /**
     * @var bool
     */
    public $is_disabled;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/client';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->secret = new \Perfumer\Microservices\Undefined();
        $this->is_admin = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->secret instanceof \Perfumer\Microservices\Undefined) {
            $array['secret'] = $this->secret;
        }
        if (!$this->is_admin instanceof \Perfumer\Microservices\Undefined) {
            $array['is_admin'] = $this->is_admin;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
