<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Extension;

class UpdateExtensionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $composer_version = null;

    /**
     * @var string
     */
    public $composer_name = null;

    /**
     * @var string
     */
    public $image = null;

    public function __construct()
    {
        $this->_request_url = '/extension';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->composer_version = new \Perfumer\Microservices\Undefined();
        $this->composer_name = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->composer_version instanceof \Perfumer\Microservices\Undefined) {
            $array['composer_version'] = $this->composer_version;
        }
        if (!$this->composer_name instanceof \Perfumer\Microservices\Undefined) {
            $array['composer_name'] = $this->composer_name;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }

        return $array;
    }
}
