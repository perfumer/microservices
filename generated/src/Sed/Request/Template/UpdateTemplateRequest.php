<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Template;

class UpdateTemplateRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $html = null;

    /**
     * @var string
     */
    public $title = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $file = null;

    /**
     * @var string
     */
    public $payload = null;

    public function __construct()
    {
        $this->_request_url = '/template';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->file = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->file instanceof \Perfumer\Microservices\Undefined) {
            $array['file'] = $this->file;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }

        return $array;
    }
}
