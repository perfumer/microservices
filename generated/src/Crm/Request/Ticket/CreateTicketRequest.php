<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Ticket;

class CreateTicketRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user = null;

    /**
     * @var string
     */
    public $customer = null;

    /**
     * @var string
     */
    public $module = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $forms_module = null;

    /**
     * @var array
     */
    public $forms = [
    ];

    /**
     * @var string
     */
    public $deadline_at = null;

    /**
     * @var string
     */
    public $opened_at = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var bool
     */
    public $disable_bpm = null;

    /**
     * @var bool
     */
    public $disable_box = null;

    public function __construct()
    {
        $this->_request_url = '/ticket';
        $this->_request_method = 'post';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->customer = new \Perfumer\Microservices\Undefined();
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->forms_module = new \Perfumer\Microservices\Undefined();
        $this->forms = new \Perfumer\Microservices\Undefined();
        $this->deadline_at = new \Perfumer\Microservices\Undefined();
        $this->opened_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->disable_bpm = new \Perfumer\Microservices\Undefined();
        $this->disable_box = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->customer instanceof \Perfumer\Microservices\Undefined) {
            $array['customer'] = $this->customer;
        }
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
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
        if (!$this->disable_bpm instanceof \Perfumer\Microservices\Undefined) {
            $array['disable_bpm'] = $this->disable_bpm;
        }
        if (!$this->disable_box instanceof \Perfumer\Microservices\Undefined) {
            $array['disable_box'] = $this->disable_box;
        }

        return $array;
    }
}
