<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Ticket;

class CreateTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $users = [
    ];

    /**
     * @var string
     */
    public $customer;

    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $forms_module;

    /**
     * @var array
     */
    public $forms = [
    ];

    /**
     * @var string
     */
    public $deadline_at;

    /**
     * @var string
     */
    public $opened_at;

    /**
     * @var string
     */
    public $closed_at;

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var string
     */
    public $pub_url;

    /**
     * @var string
     */
    public $back_url;

    /**
     * @var bool
     */
    public $is_hidden;

    /**
     * @var array
     */
    public $tags = [
    ];

    /**
     * @var bool
     */
    public $disable_bpm;

    /**
     * @var bool
     */
    public $disable_box;

    /**
     * @var int
     */
    public $creator_id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/ticket';
        $this->_request_method = 'post';
        $this->users = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->forms_module = new \Perfumer\Microservices\Undefined();
        $this->forms = new \Perfumer\Microservices\Undefined();
        $this->deadline_at = new \Perfumer\Microservices\Undefined();
        $this->opened_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->pub_url = new \Perfumer\Microservices\Undefined();
        $this->back_url = new \Perfumer\Microservices\Undefined();
        $this->is_hidden = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->disable_bpm = new \Perfumer\Microservices\Undefined();
        $this->disable_box = new \Perfumer\Microservices\Undefined();
        $this->creator_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->users instanceof \Perfumer\Microservices\Undefined) {
            $array['users'] = $this->users;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->forms_module instanceof \Perfumer\Microservices\Undefined) {
            $array['forms_module'] = $this->forms_module;
        }
        if (!$this->forms instanceof \Perfumer\Microservices\Undefined) {
            $array['forms'] = $this->forms;
        }
        if (!$this->deadline_at instanceof \Perfumer\Microservices\Undefined) {
            $array['deadline_at'] = $this->deadline_at;
        }
        if (!$this->opened_at instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at'] = $this->opened_at;
        }
        if (!$this->closed_at instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at'] = $this->closed_at;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->pub_url instanceof \Perfumer\Microservices\Undefined) {
            $array['pub_url'] = $this->pub_url;
        }
        if (!$this->back_url instanceof \Perfumer\Microservices\Undefined) {
            $array['back_url'] = $this->back_url;
        }
        if (!$this->is_hidden instanceof \Perfumer\Microservices\Undefined) {
            $array['is_hidden'] = $this->is_hidden;
        }
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
        }
        if (!$this->disable_bpm instanceof \Perfumer\Microservices\Undefined) {
            $array['disable_bpm'] = $this->disable_bpm;
        }
        if (!$this->disable_box instanceof \Perfumer\Microservices\Undefined) {
            $array['disable_box'] = $this->disable_box;
        }
        if (!$this->creator_id instanceof \Perfumer\Microservices\Undefined) {
            $array['creator_id'] = $this->creator_id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
