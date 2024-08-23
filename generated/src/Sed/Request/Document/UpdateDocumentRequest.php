<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Document;

class UpdateDocumentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $signed_at;

    /**
     * @var string
     */
    public $author_id;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $file;

    /**
     * @var array
     */
    public $substitutions = [
    ];

    /**
     * @var bool
     */
    public $rebuild;

    public function __construct()
    {
        $this->_request_url = '/document';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->signed_at = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->signature = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->file = new \Perfumer\Microservices\Undefined();
        $this->substitutions = new \Perfumer\Microservices\Undefined();
        $this->rebuild = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->signed_at instanceof \Perfumer\Microservices\Undefined) {
            $array['signed_at'] = $this->signed_at;
        }
        if (!$this->author_id instanceof \Perfumer\Microservices\Undefined) {
            $array['author_id'] = $this->author_id;
        }
        if (!$this->signature instanceof \Perfumer\Microservices\Undefined) {
            $array['signature'] = $this->signature;
        }
        if (!$this->status instanceof \Perfumer\Microservices\Undefined) {
            $array['status'] = $this->status;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->file instanceof \Perfumer\Microservices\Undefined) {
            $array['file'] = $this->file;
        }
        if (!$this->substitutions instanceof \Perfumer\Microservices\Undefined) {
            $array['substitutions'] = $this->substitutions;
        }
        if (!$this->rebuild instanceof \Perfumer\Microservices\Undefined) {
            $array['rebuild'] = $this->rebuild;
        }

        return $array;
    }
}
