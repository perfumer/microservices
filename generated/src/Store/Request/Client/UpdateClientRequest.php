<?php

namespace Generated\Perfumer\Microservices\Store\Request\Client;

class UpdateClientRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $email = null;

    /**
     * @var string
     */
    public $phone = null;

    /**
     * @var string
     */
    public $domain = null;

    /**
     * @var string
     */
    public $full_name = null;

    /**
     * @var string
     */
    public $server_ip = null;

    /**
     * @var bool
     */
    public $is_manual_mode = null;

    public function __construct()
    {
        $this->_request_url = '/client';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->domain = new \Perfumer\Microservices\Undefined();
        $this->full_name = new \Perfumer\Microservices\Undefined();
        $this->server_ip = new \Perfumer\Microservices\Undefined();
        $this->is_manual_mode = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->domain instanceof \Perfumer\Microservices\Undefined) {
            $array['domain'] = $this->domain;
        }
        if (!$this->full_name instanceof \Perfumer\Microservices\Undefined) {
            $array['full_name'] = $this->full_name;
        }
        if (!$this->server_ip instanceof \Perfumer\Microservices\Undefined) {
            $array['server_ip'] = $this->server_ip;
        }
        if (!$this->is_manual_mode instanceof \Perfumer\Microservices\Undefined) {
            $array['is_manual_mode'] = $this->is_manual_mode;
        }

        return $array;
    }
}
