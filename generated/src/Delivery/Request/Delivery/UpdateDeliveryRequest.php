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

    public function __construct()
    {
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
    }
}
