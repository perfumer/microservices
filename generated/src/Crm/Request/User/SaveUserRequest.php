<?php

namespace Generated\Perfumer\Microservices\Crm\Request\User;

class SaveUserRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $telegram_chat_id = null;

    /**
     * @var string
     */
    public $telegram_username = null;

    /**
     * @var string
     */
    public $username = null;

    /**
     * @var string
     */
    public $avatar = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var array
     */
    public $profiles = [
    ];

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
    public $bin = null;

    /**
     * @var string
     */
    public $org_name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $password = null;

    /**
     * @var bool
     */
    public $is_admin = null;

    /**
     * @var bool
     */
    public $is_disabled = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var array
     */
    public $auto_fields = [
    ];

    /**
     * @var string
     */
    public $gender = null;

    /**
     * @var string
     */
    public $locale = null;

    public function __construct()
    {
        $this->_request_url = '/user';
        $this->_request_method = 'post';
        $this->telegram_chat_id = new \Perfumer\Microservices\Undefined();
        $this->telegram_username = new \Perfumer\Microservices\Undefined();
        $this->username = new \Perfumer\Microservices\Undefined();
        $this->avatar = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->profiles = new \Perfumer\Microservices\Undefined();
        $this->last_name = new \Perfumer\Microservices\Undefined();
        $this->first_name = new \Perfumer\Microservices\Undefined();
        $this->mid_name = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
        $this->org_name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->is_admin = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->auto_fields = new \Perfumer\Microservices\Undefined();
        $this->gender = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->telegram_chat_id instanceof \Perfumer\Microservices\Undefined) {
            $array['telegram_chat_id'] = $this->telegram_chat_id;
        }
        if (!$this->telegram_username instanceof \Perfumer\Microservices\Undefined) {
            $array['telegram_username'] = $this->telegram_username;
        }
        if (!$this->username instanceof \Perfumer\Microservices\Undefined) {
            $array['username'] = $this->username;
        }
        if (!$this->avatar instanceof \Perfumer\Microservices\Undefined) {
            $array['avatar'] = $this->avatar;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->profiles instanceof \Perfumer\Microservices\Undefined) {
            $array['profiles'] = $this->profiles;
        }
        if (!$this->last_name instanceof \Perfumer\Microservices\Undefined) {
            $array['last_name'] = $this->last_name;
        }
        if (!$this->first_name instanceof \Perfumer\Microservices\Undefined) {
            $array['first_name'] = $this->first_name;
        }
        if (!$this->mid_name instanceof \Perfumer\Microservices\Undefined) {
            $array['mid_name'] = $this->mid_name;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
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
        if (!$this->password instanceof \Perfumer\Microservices\Undefined) {
            $array['password'] = $this->password;
        }
        if (!$this->is_admin instanceof \Perfumer\Microservices\Undefined) {
            $array['is_admin'] = $this->is_admin;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->auto_fields instanceof \Perfumer\Microservices\Undefined) {
            $array['auto_fields'] = $this->auto_fields;
        }
        if (!$this->gender instanceof \Perfumer\Microservices\Undefined) {
            $array['gender'] = $this->gender;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }

        return $array;
    }
}
