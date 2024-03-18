<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Signature;

class GetLastSignatureRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $document_id;

    /**
     * @var int
     */
    public $task_id;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->_request_url = '/signature/last';
        $this->_request_method = 'get';
        $this->document_id = new \Perfumer\Microservices\Undefined();
        $this->task_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->document_id instanceof \Perfumer\Microservices\Undefined) {
            $array['document_id'] = $this->document_id;
        }
        if (!$this->task_id instanceof \Perfumer\Microservices\Undefined) {
            $array['task_id'] = $this->task_id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
