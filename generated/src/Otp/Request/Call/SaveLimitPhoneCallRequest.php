<?php

namespace Generated\Perfumer\Microservices\Otp\Request\Call;

class SaveLimitPhoneCallRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ips;

    /**
     * @var string
     */
    public $phones;

    public function __construct()
    {
        $this->_request_url = '/limit/call';
        $this->_request_method = 'post';
        $this->ips = new \Perfumer\Microservices\Undefined();
        $this->phones = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->ips instanceof \Perfumer\Microservices\Undefined) {
            $array['ips'] = $this->ips;
        }
        if (!$this->phones instanceof \Perfumer\Microservices\Undefined) {
            $array['phones'] = $this->phones;
        }

        return $array;
    }
}
