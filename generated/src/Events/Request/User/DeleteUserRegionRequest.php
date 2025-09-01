<?php

namespace Generated\Perfumer\Microservices\Events\Request\User;

class DeleteUserRegionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $region;

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
        $this->_request_url = '/user/region';
        $this->_request_method = 'delete';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->region = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->region instanceof \Perfumer\Microservices\Undefined) {
            $array['region'] = $this->region;
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
