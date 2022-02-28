<?php

namespace Generated\Perfumer\Microservices\Sed\Request\Document;

class CreateDocumentRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var true
     */
    public $silent = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $serial_number_text = null;

    /**
     * @var string
     */
    public $template = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $html = null;

    /**
     * @var string
     */
    public $signed_at = null;

    /**
     * @var string
     */
    public $author_id = null;

    /**
     * @var string
     */
    public $signature = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $file = null;

    /**
     * @var array
     */
    public $tickets = [
    ];

    /**
     * @var array
     */
    public $substitutions = [
    ];

    /**
     * @var string
     */
    public $type = null;

    public function __construct()
    {
        $this->_request_url = '/document';
        $this->_request_method = 'post';
        $this->silent = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->serial_number_text = new \Perfumer\Microservices\Undefined();
        $this->template = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->signed_at = new \Perfumer\Microservices\Undefined();
        $this->author_id = new \Perfumer\Microservices\Undefined();
        $this->signature = new \Perfumer\Microservices\Undefined();
        $this->status = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->file = new \Perfumer\Microservices\Undefined();
        $this->tickets = new \Perfumer\Microservices\Undefined();
        $this->substitutions = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->silent instanceof \Perfumer\Microservices\Undefined) {
            $array['silent'] = $this->silent;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->serial_number_text instanceof \Perfumer\Microservices\Undefined) {
            $array['serial_number_text'] = $this->serial_number_text;
        }
        if (!$this->template instanceof \Perfumer\Microservices\Undefined) {
            $array['template'] = $this->template;
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
        if (!$this->tickets instanceof \Perfumer\Microservices\Undefined) {
            $array['tickets'] = $this->tickets;
        }
        if (!$this->substitutions instanceof \Perfumer\Microservices\Undefined) {
            $array['substitutions'] = $this->substitutions;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }

        return $array;
    }
}
