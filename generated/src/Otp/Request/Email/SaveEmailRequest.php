<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Email;

class SaveEmailRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ip = null;

    /**
     * @var string
     */
    public $email = null;

    /**
     * @var string
     */
    public $password = null;

    /**
     * @var string
     */
    public $subject = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $html = null;

    /**
     * @var string
     */
    public $lifetime = null;

    public function __construct()
    {
        $this->ip = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->subject = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->lifetime = new \Perfumer\Microservices\Undefined();
    }
}
