<?php

namespace Generated\Perfumer\Microservices\Sed\Request\DocumentTicket;

class GetDocumentTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $document_id = null;

    public function __construct()
    {
        $this->_request_url = '/document-ticket';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->document_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->document_id instanceof \Perfumer\Microservices\Undefined) {
            $array['document_id'] = $this->document_id;
        }

        return $array;
    }
}
