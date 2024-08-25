<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tags;

class CreateTagsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $filters;

    /**
     * @var string
     */
    public $names;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/tags';
        $this->_request_method = 'post';
        $this->filters = new \Perfumer\Microservices\Undefined();
        $this->names = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->filters instanceof \Perfumer\Microservices\Undefined) {
            $array['filters'] = $this->filters;
        }
        if (!$this->names instanceof \Perfumer\Microservices\Undefined) {
            $array['names'] = $this->names;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
