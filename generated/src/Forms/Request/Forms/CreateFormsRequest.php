<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Forms;

class CreateFormsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $forms = [
    ];

    public function __construct()
    {
        $this->_request_url = '/forms';
        $this->_request_method = 'post';
        $this->forms = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->forms instanceof \Perfumer\Microservices\Undefined) {
            $array['forms'] = $this->forms;
        }

        return $array;
    }
}
