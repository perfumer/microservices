<?php

namespace Generated\Perfumer\Microservices\Delivery\Request\Delivery;

class UpdateDeliveryRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $min = null;

    /**
     * @var int
     */
    public $max = null;

    /**
     * @var int
     */
    public $gap = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var bool
     */
    public $has_email = null;

    /**
     * @var bool
     */
    public $has_sms = null;

    /**
     * @var bool
     */
    public $has_feed = null;

    /**
     * @var array
     */
    public $email_subject = [
    ];

    /**
     * @var array
     */
    public $email_html = [
    ];

    /**
     * @var array
     */
    public $sms_message = [
    ];

    /**
     * @var array
     */
    public $feed_title = [
    ];

    /**
     * @var array
     */
    public $feed_text = [
    ];

    /**
     * @var array
     */
    public $feed_image = [
    ];

    /**
     * @var array
     */
    public $feed_payload = [
    ];

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var string
     */
    public $data_url = null;

    /**
     * @var array
     */
    public $filters = [
    ];

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/delivery';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->min = new \Perfumer\Microservices\Undefined();
        $this->max = new \Perfumer\Microservices\Undefined();
        $this->gap = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->has_email = new \Perfumer\Microservices\Undefined();
        $this->has_sms = new \Perfumer\Microservices\Undefined();
        $this->has_feed = new \Perfumer\Microservices\Undefined();
        $this->email_subject = new \Perfumer\Microservices\Undefined();
        $this->email_html = new \Perfumer\Microservices\Undefined();
        $this->sms_message = new \Perfumer\Microservices\Undefined();
        $this->feed_title = new \Perfumer\Microservices\Undefined();
        $this->feed_text = new \Perfumer\Microservices\Undefined();
        $this->feed_image = new \Perfumer\Microservices\Undefined();
        $this->feed_payload = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->data_url = new \Perfumer\Microservices\Undefined();
        $this->filters = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->min instanceof \Perfumer\Microservices\Undefined) {
            $array['min'] = $this->min;
        }
        if (!$this->max instanceof \Perfumer\Microservices\Undefined) {
            $array['max'] = $this->max;
        }
        if (!$this->gap instanceof \Perfumer\Microservices\Undefined) {
            $array['gap'] = $this->gap;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->has_email instanceof \Perfumer\Microservices\Undefined) {
            $array['has_email'] = $this->has_email;
        }
        if (!$this->has_sms instanceof \Perfumer\Microservices\Undefined) {
            $array['has_sms'] = $this->has_sms;
        }
        if (!$this->has_feed instanceof \Perfumer\Microservices\Undefined) {
            $array['has_feed'] = $this->has_feed;
        }
        if (!$this->email_subject instanceof \Perfumer\Microservices\Undefined) {
            $array['email_subject'] = $this->email_subject;
        }
        if (!$this->email_html instanceof \Perfumer\Microservices\Undefined) {
            $array['email_html'] = $this->email_html;
        }
        if (!$this->sms_message instanceof \Perfumer\Microservices\Undefined) {
            $array['sms_message'] = $this->sms_message;
        }
        if (!$this->feed_title instanceof \Perfumer\Microservices\Undefined) {
            $array['feed_title'] = $this->feed_title;
        }
        if (!$this->feed_text instanceof \Perfumer\Microservices\Undefined) {
            $array['feed_text'] = $this->feed_text;
        }
        if (!$this->feed_image instanceof \Perfumer\Microservices\Undefined) {
            $array['feed_image'] = $this->feed_image;
        }
        if (!$this->feed_payload instanceof \Perfumer\Microservices\Undefined) {
            $array['feed_payload'] = $this->feed_payload;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->data_url instanceof \Perfumer\Microservices\Undefined) {
            $array['data_url'] = $this->data_url;
        }
        if (!$this->filters instanceof \Perfumer\Microservices\Undefined) {
            $array['filters'] = $this->filters;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
