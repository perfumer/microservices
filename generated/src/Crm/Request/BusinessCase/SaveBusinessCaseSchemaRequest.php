<?php

namespace Generated\Perfumer\Microservices\Crm\Request\BusinessCase;

class SaveBusinessCaseSchemaRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $xml;

    public function __construct()
    {
        $this->_request_url = '/business-case/schema';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->xml = new \Perfumer\Microservices\Undefined();
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
        if (!$this->xml instanceof \Perfumer\Microservices\Undefined) {
            $array['xml'] = $this->xml;
        }

        return $array;
    }
}
