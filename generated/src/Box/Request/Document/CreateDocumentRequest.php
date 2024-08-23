<?php

namespace Generated\Perfumer\Microservices\Box\Request\Document;

class CreateDocumentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $webhook;

    /**
     * @var string
     */
    public $collection;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/document';
        $this->_request_method = 'post';
        $this->uuid = new \Perfumer\Microservices\Undefined();
        $this->event = new \Perfumer\Microservices\Undefined();
        $this->data = new \Perfumer\Microservices\Undefined();
        $this->webhook = new \Perfumer\Microservices\Undefined();
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->uuid instanceof \Perfumer\Microservices\Undefined) {
            $array['uuid'] = $this->uuid;
        }
        if (!$this->event instanceof \Perfumer\Microservices\Undefined) {
            $array['event'] = $this->event;
        }
        if (!$this->data instanceof \Perfumer\Microservices\Undefined) {
            $array['data'] = $this->data;
        }
        if (!$this->webhook instanceof \Perfumer\Microservices\Undefined) {
            $array['webhook'] = $this->webhook;
        }
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
