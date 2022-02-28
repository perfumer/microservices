<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Settings;

class SaveSettingsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $bpm = [
    ];

    /**
     * @var array
     */
    public $group = [
    ];

    /**
     * @var array
     */
    public $user = [
    ];

    /**
     * @var array
     */
    public $customer = [
    ];

    public function __construct()
    {
        $this->_request_url = '/settings';
        $this->_request_method = 'post';
        $this->bpm = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->bpm instanceof \Perfumer\Microservices\Undefined) {
            $array['bpm'] = $this->bpm;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }

        return $array;
    }
}
