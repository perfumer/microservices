<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Document;

class GetDocumentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $serial_number_text;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $pdf_id;

    public function __construct()
    {
        $this->_request_url = '/document';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->serial_number_text = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->pdf_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->serial_number_text instanceof \Perfumer\Microservices\Undefined) {
            $array['serial_number_text'] = $this->serial_number_text;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->pdf_id instanceof \Perfumer\Microservices\Undefined) {
            $array['pdf_id'] = $this->pdf_id;
        }

        return $array;
    }
}
