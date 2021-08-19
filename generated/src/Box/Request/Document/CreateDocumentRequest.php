<?php

namespace Generated\Perfumer\Microservices\Box\Request\Document;

class CreateDocumentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $collection = null;

    /**
     * @var string
     */
    public $event = null;

    /**
     * @var string
     */
    public $uuid = null;

    /**
     * @var array
     */
    public $data = [
    ];

    /**
     * @var string
     */
    public $webhook = null;

    public function __construct()
    {
        $this->_request_url = '/document';
        $this->_request_method = 'post';
        $this->collection = new \Perfumer\Microservices\Undefined();
        $this->event = new \Perfumer\Microservices\Undefined();
        $this->uuid = new \Perfumer\Microservices\Undefined();
        $this->data = new \Perfumer\Microservices\Undefined();
        $this->webhook = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->collection instanceof \Perfumer\Microservices\Undefined) {
            $array['collection'] = $this->collection;
        }
        if (!$this->event instanceof \Perfumer\Microservices\Undefined) {
            $array['event'] = $this->event;
        }
        if (!$this->uuid instanceof \Perfumer\Microservices\Undefined) {
            $array['uuid'] = $this->uuid;
        }
        if (!$this->data instanceof \Perfumer\Microservices\Undefined) {
            $array['data'] = $this->data;
        }
        if (!$this->webhook instanceof \Perfumer\Microservices\Undefined) {
            $array['webhook'] = $this->webhook;
        }

        return $array;
    }
}
