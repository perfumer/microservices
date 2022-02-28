<?php

namespace Generated\Perfumer\Microservices\Store\Request\ExtensionVersion;

class SaveExtensionVersionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $extension = null;

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
     * @var string
     */
    public $min_platform_version = null;

    public function __construct()
    {
        $this->_request_url = '/extensionVersion';
        $this->_request_method = 'post';
        $this->extension = new \Perfumer\Microservices\Undefined();
        $this->version_title = new \Perfumer\Microservices\Undefined();
        $this->version_code = new \Perfumer\Microservices\Undefined();
        $this->next_version = new \Perfumer\Microservices\Undefined();
        $this->min_platform_version = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->extension instanceof \Perfumer\Microservices\Undefined) {
            $array['extension'] = $this->extension;
        }
        if (!$this->version_title instanceof \Perfumer\Microservices\Undefined) {
            $array['version_title'] = $this->version_title;
        }
        if (!$this->version_code instanceof \Perfumer\Microservices\Undefined) {
            $array['version_code'] = $this->version_code;
        }
        if (!$this->next_version instanceof \Perfumer\Microservices\Undefined) {
            $array['next_version'] = $this->next_version;
        }
        if (!$this->min_platform_version instanceof \Perfumer\Microservices\Undefined) {
            $array['min_platform_version'] = $this->min_platform_version;
        }

        return $array;
    }
}
