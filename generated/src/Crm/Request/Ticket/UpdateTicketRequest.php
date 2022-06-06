<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Ticket;

class UpdateTicketRequest extends \Perfumer\Microservices\Request
{
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
     * @var string
     */
    public $pub_url = null;

    /**
     * @var string
     */
    public $back_url = null;

    /**
     * @var bool
     */
    public $is_hidden = null;

    /**
     * @var array
     */
    public $tags = [
    ];

    /**
     * @var bool
     */
    public $disable_box = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/ticket';
        $this->_request_method = 'patch';
        $this->deadline_at = new \Perfumer\Microservices\Undefined();
        $this->opened_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->pub_url = new \Perfumer\Microservices\Undefined();
        $this->back_url = new \Perfumer\Microservices\Undefined();
        $this->is_hidden = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->disable_box = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
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
        if (!$this->disable_box instanceof \Perfumer\Microservices\Undefined) {
            $array['disable_box'] = $this->disable_box;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
