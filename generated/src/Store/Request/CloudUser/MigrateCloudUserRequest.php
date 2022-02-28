<?php

namespace Generated\Perfumer\Microservices\Store\Request\CloudUser;

class MigrateCloudUserRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $version_code = null;

    /**
     * @var string
     */
    public $image = null;

    /**
     * @var int
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/cloud/user/migrate';
        $this->_request_method = 'post';
        $this->version_code = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
