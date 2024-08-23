<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Email;

class SaveLimitEmailsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ips;

    /**
     * @var string
     */
    public $emails;

    public function __construct()
    {
        $this->_request_url = '/limit/emails';
        $this->_request_method = 'post';
        $this->ips = new \Perfumer\Microservices\Undefined();
        $this->emails = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->ips instanceof \Perfumer\Microservices\Undefined) {
            $array['ips'] = $this->ips;
        }
        if (!$this->emails instanceof \Perfumer\Microservices\Undefined) {
            $array['emails'] = $this->emails;
        }

        return $array;
    }
}
