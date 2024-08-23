<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Cms;

class ExtractCmsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $cms;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/cms/extract';
        $this->_request_method = 'post';
        $this->cms = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->cms instanceof \Perfumer\Microservices\Undefined) {
            $array['cms'] = $this->cms;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
