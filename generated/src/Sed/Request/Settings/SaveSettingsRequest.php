<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Settings;

class SaveSettingsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $sed = [
    ];

    public function __construct()
    {
        $this->_request_url = '/settings';
        $this->_request_method = 'post';
        $this->sed = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->sed instanceof \Perfumer\Microservices\Undefined) {
            $array['sed'] = $this->sed;
        }

        return $array;
    }
}
