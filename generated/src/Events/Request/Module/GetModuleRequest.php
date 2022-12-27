<?php

namespace Generated\Perfumer\Microservices\Events\Request\Module;

class GetModuleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var bool
     */
    public $with_tags = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/module';
        $this->_request_method = 'get';
        $this->with_tags = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->with_tags instanceof \Perfumer\Microservices\Undefined) {
            $array['with_tags'] = $this->with_tags;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
