<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class UpdateUserPasswordRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $user_id;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $password_confirm;

    /**
     * @var string
     */
    public $old_password;

    /**
     * @var bool
     */
    public $check_old_password;

    /**
     * @var bool
     */
    public $check_password_confirm;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/user/password';
        $this->_request_method = 'patch';
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->password_confirm = new \Perfumer\Microservices\Undefined();
        $this->old_password = new \Perfumer\Microservices\Undefined();
        $this->check_old_password = new \Perfumer\Microservices\Undefined();
        $this->check_password_confirm = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$this->password_confirm instanceof \Perfumer\Microservices\Undefined) {
            $array['password_confirm'] = $this->password_confirm;
        }
        if (!$this->old_password instanceof \Perfumer\Microservices\Undefined) {
            $array['old_password'] = $this->old_password;
        }
        if (!$this->check_old_password instanceof \Perfumer\Microservices\Undefined) {
            $array['check_old_password'] = $this->check_old_password;
        }
        if (!$this->check_password_confirm instanceof \Perfumer\Microservices\Undefined) {
            $array['check_password_confirm'] = $this->check_password_confirm;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
