<?php

namespace Generated\Perfumer\Microservices\Notify\Request\Notify;

class DoNotifyRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $notification = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var string
     */
    public $phone = null;

    /**
     * @var string
     */
    public $email = null;

    /**
     * @var string
     */
    public $feed_collection = null;

    /**
     * @var string
     */
    public $feed_recipient = null;

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
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/notify';
        $this->_request_method = 'post';
        $this->notification = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->feed_collection = new \Perfumer\Microservices\Undefined();
        $this->feed_recipient = new \Perfumer\Microservices\Undefined();
        $this->feed_payload = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->notification instanceof \Perfumer\Microservices\Undefined) {
            $array['notification'] = $this->notification;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->feed_collection instanceof \Perfumer\Microservices\Undefined) {
            $array['feed_collection'] = $this->feed_collection;
        }
        if (!$this->feed_recipient instanceof \Perfumer\Microservices\Undefined) {
            $array['feed_recipient'] = $this->feed_recipient;
        }
        if (!$this->feed_payload instanceof \Perfumer\Microservices\Undefined) {
            $array['feed_payload'] = $this->feed_payload;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
