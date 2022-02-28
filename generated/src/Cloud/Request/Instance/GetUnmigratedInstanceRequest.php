<?php

namespace Generated\Perfumer\Microservices\Cloud\Request\Instance;

class GetUnmigratedInstanceRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $version_code = null;

    /**
     * @var string
     */
    public $image = null;

    public function __construct()
    {
        $this->_request_url = '/instance/unmigrated';
        $this->_request_method = 'get';
        $this->version_code = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->version_code instanceof \Perfumer\Microservices\Undefined) {
            $array['version_code'] = $this->version_code;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }

        return $array;
    }
}
