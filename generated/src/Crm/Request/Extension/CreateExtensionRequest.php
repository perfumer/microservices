<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Extension;

class CreateExtensionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $composer_version;

    /**
     * @var string
     */
    public $composer_name;

    /**
     * @var string
     */
    public $image;

    public function __construct()
    {
        $this->_request_url = '/extension';
        $this->_request_method = 'post';
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->composer_version = new \Perfumer\Microservices\Undefined();
        $this->composer_name = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
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
