<?php

namespace Generated\Perfumer\Microservices\Email\Request\Smtp;

class SendSmtpRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $to;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $html;

    /**
     * @var bool
     */
    public $signature_enabled;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/smtp';
        $this->_request_method = 'post';
        $this->subject = new \Perfumer\Microservices\Undefined();
        $this->to = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->signature_enabled = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->subject instanceof \Perfumer\Microservices\Undefined) {
            $array['subject'] = $this->subject;
        }
        if (!$this->to instanceof \Perfumer\Microservices\Undefined) {
            $array['to'] = $this->to;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->signature_enabled instanceof \Perfumer\Microservices\Undefined) {
            $array['signature_enabled'] = $this->signature_enabled;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
