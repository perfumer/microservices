<?php

namespace Generated\Perfumer\Microservices\Store\Request\Platform;

class CreatePlatformRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $version_title = null;

    /**
     * @var string
     */
    public $version_code = null;

    /**
     * @var string
     */
    public $next_version = null;

    /**
     * @var array
     */
    public $clients = [
    ];

    public function __construct()
    {
        $this->_request_url = '/platform';
        $this->_request_method = 'post';
        $this->version_title = new \Perfumer\Microservices\Undefined();
        $this->version_code = new \Perfumer\Microservices\Undefined();
        $this->next_version = new \Perfumer\Microservices\Undefined();
        $this->clients = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->version_title instanceof \Perfumer\Microservices\Undefined) {
            $array['version_title'] = $this->version_title;
        }
        if (!$this->version_code instanceof \Perfumer\Microservices\Undefined) {
            $array['version_code'] = $this->version_code;
        }
        if (!$this->next_version instanceof \Perfumer\Microservices\Undefined) {
            $array['next_version'] = $this->next_version;
        }
        if (!$this->clients instanceof \Perfumer\Microservices\Undefined) {
            $array['clients'] = $this->clients;
        }

        return $array;
    }
}
