<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Email;

class SaveEmailRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $lifetime;

    public function __construct()
    {
        $this->_request_url = '/email';
        $this->_request_method = 'post';
        $this->ip = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->subject = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->lifetime = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->ip instanceof \Perfumer\Microservices\Undefined) {
            $array['ip'] = $this->ip;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$this->subject instanceof \Perfumer\Microservices\Undefined) {
            $array['subject'] = $this->subject;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->lifetime instanceof \Perfumer\Microservices\Undefined) {
            $array['lifetime'] = $this->lifetime;
        }

        return $array;
    }
}
