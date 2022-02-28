<?php

namespace Generated\Perfumer\Microservices\Sed\Request\DocumentTicket;

class SaveDocumentTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $document = null;

    /**
     * @var string
     */
    public $ticket = null;

    public function __construct()
    {
        $this->_request_url = '/document-ticket';
        $this->_request_method = 'post';
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->document instanceof \Perfumer\Microservices\Undefined) {
            $array['document'] = $this->document;
        }
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }

        return $array;
    }
}
