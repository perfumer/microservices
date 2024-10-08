<?php

namespace Generated\Perfumer\Microservices\Store\Request\Extension;

class UpdateExtensionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $composer_name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $repository_url;

    /**
     * @var string
     */
    public $repository_type;

    /**
     * @var string
     */
    public $package_name;

    /**
     * @var string
     */
    public $depend;

    public function __construct()
    {
        $this->_request_url = '/extension';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->composer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->repository_url = new \Perfumer\Microservices\Undefined();
        $this->repository_type = new \Perfumer\Microservices\Undefined();
        $this->package_name = new \Perfumer\Microservices\Undefined();
        $this->depend = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->composer_name instanceof \Perfumer\Microservices\Undefined) {
            $array['composer_name'] = $this->composer_name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->repository_url instanceof \Perfumer\Microservices\Undefined) {
            $array['repository_url'] = $this->repository_url;
        }
        if (!$this->repository_type instanceof \Perfumer\Microservices\Undefined) {
            $array['repository_type'] = $this->repository_type;
        }
        if (!$this->package_name instanceof \Perfumer\Microservices\Undefined) {
            $array['package_name'] = $this->package_name;
        }
        if (!$this->depend instanceof \Perfumer\Microservices\Undefined) {
            $array['depend'] = $this->depend;
        }

        return $array;
    }
}
