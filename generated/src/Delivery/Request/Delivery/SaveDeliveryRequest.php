<?php

namespace Generated\Perfumer\Microservices\Delivery\Request\Delivery;

class SaveDeliveryRequest extends \Perfumer\Microservices\Request
{
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

    public function __construct()
    {
        $this->_request_url = '/delivery';
        $this->_request_method = 'post';
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
    }

    public function getBody(): array
    {
        return [
        'min' => $this->min,
        'max' => $this->max,
        'gap' => $this->gap,
        'name' => $this->name,
        'has_email' => $this->has_email,
        'has_sms' => $this->has_sms,
        'has_feed' => $this->has_feed,
        'email_subject' => $this->email_subject,
        'email_html' => $this->email_html,
        'sms_message' => $this->sms_message,
        'feed_title' => $this->feed_title,
        'feed_text' => $this->feed_text,
        'feed_image' => $this->feed_image,
        'feed_payload' => $this->feed_payload,
        'payload' => $this->payload,
        'data_url' => $this->data_url,
        'filters' => $this->filters,
        ];
    }
}
