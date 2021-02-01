<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class UpdateUserRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $last_name = null;

    /**
     * @var string
     */
    public $first_name = null;

    /**
     * @var string
     */
    public $mid_name = null;

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
    public $iin = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $password = null;

    /**
     * @var string
     */
    public $is_admin = null;

    /**
     * @var string
     */
    public $is_disabled = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->last_name = new \Perfumer\Microservices\Undefined();
        $this->first_name = new \Perfumer\Microservices\Undefined();
        $this->mid_name = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->is_admin = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
    }
}
