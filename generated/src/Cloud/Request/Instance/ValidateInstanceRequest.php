<?php

namespace Generated\Perfumer\Microservices\Cloud\Request\Instance;

class ValidateInstanceRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $first_name = null;

    /**
     * @var string
     */
    public $last_name = null;

    /**
     * @var string
     */
    public $mid_name = null;

    /**
     * @var string
     */
    public $username = null;

    /**
     * @var string
     */
    public $email = null;

    /**
     * @var string
     */
    public $phone = null;

    /**
     * @var string
     */
    public $subdomain = null;

    /**
     * @var string
     */
    public $password = null;

    /**
     * @var string
     */
    public $iin = null;

    /**
     * @var string
     */
    public $bin = null;

    /**
     * @var string
     */
    public $org_name = null;

    /**
     * @var string
     */
    public $code = null;

    public function __construct()
    {
        $this->_request_url = '/instance/validate';
        $this->_request_method = 'post';
        $this->first_name = new \Perfumer\Microservices\Undefined();
        $this->last_name = new \Perfumer\Microservices\Undefined();
        $this->mid_name = new \Perfumer\Microservices\Undefined();
        $this->username = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->subdomain = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
        $this->org_name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->first_name instanceof \Perfumer\Microservices\Undefined) {
            $array['first_name'] = $this->first_name;
        }
        if (!$this->last_name instanceof \Perfumer\Microservices\Undefined) {
            $array['last_name'] = $this->last_name;
        }
        if (!$this->mid_name instanceof \Perfumer\Microservices\Undefined) {
            $array['mid_name'] = $this->mid_name;
        }
        if (!$this->username instanceof \Perfumer\Microservices\Undefined) {
            $array['username'] = $this->username;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->subdomain instanceof \Perfumer\Microservices\Undefined) {
            $array['subdomain'] = $this->subdomain;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$this->iin instanceof \Perfumer\Microservices\Undefined) {
            $array['iin'] = $this->iin;
        }
        if (!$this->bin instanceof \Perfumer\Microservices\Undefined) {
            $array['bin'] = $this->bin;
        }
        if (!$this->org_name instanceof \Perfumer\Microservices\Undefined) {
            $array['org_name'] = $this->org_name;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
