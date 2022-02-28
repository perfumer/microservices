<?php

namespace Generated\Perfumer\Microservices\Events\Request\Settings;

class SaveSettingsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $crm = [
    ];

    /**
     * @var array
     */
    public $pub = [
    ];

    public function __construct()
    {
        $this->_request_url = '/settings';
        $this->_request_method = 'post';
        $this->crm = new \Perfumer\Microservices\Undefined();
        $this->pub = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->crm instanceof \Perfumer\Microservices\Undefined) {
            $array['crm'] = $this->crm;
        }
        if (!$this->pub instanceof \Perfumer\Microservices\Undefined) {
            $array['pub'] = $this->pub;
        }

        return $array;
    }
}
