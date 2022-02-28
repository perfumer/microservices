<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CommonTrigger;

class UpsertCommonTriggerRequest extends \Perfumer\Microservices\Request
{
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
    public $url = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var array
     */
    public $arguments = [
    ];

    public function __construct()
    {
        $this->_request_url = '/common-trigger';
        $this->_request_method = 'put';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->url = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->arguments = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->url instanceof \Perfumer\Microservices\Undefined) {
            $array['url'] = $this->url;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->arguments instanceof \Perfumer\Microservices\Undefined) {
            $array['arguments'] = $this->arguments;
        }

        return $array;
    }
}
