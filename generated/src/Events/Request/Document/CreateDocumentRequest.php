<?php

namespace Generated\Perfumer\Microservices\Events\Request\Document;

class CreateDocumentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var string
     */
    public $event = null;

    /**
     * @var int
     */
    public $document_id = null;

    public function __construct()
    {
        $this->_request_url = '/document';
        $this->_request_method = 'post';
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->event = new \Perfumer\Microservices\Undefined();
        $this->document_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->event instanceof \Perfumer\Microservices\Undefined) {
            $array['event'] = $this->event;
        }
        if (!$this->document_id instanceof \Perfumer\Microservices\Undefined) {
            $array['document_id'] = $this->document_id;
        }

        return $array;
    }
}
