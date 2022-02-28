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
    public $passport_number = null;

    /**
     * @var string
     */
    public $id_number = null;

    /**
     * @var string
     */
    public $id_date_issue = null;

    /**
     * @var string
     */
    public $id_date_expiry = null;

    /**
     * @var int
     */
    public $id_issuing_authority_id = null;

    /**
     * @var int
     */
    public $id_nationality_id = null;

    /**
     * @var int
     */
    public $id_place_birth_id = null;

    /**
     * @var string
     */
    public $id_date_birth = null;

    /**
     * @var string
     */
    public $id_gender = null;

    /**
     * @var string
     */
    public $transaction_account = null;

    /**
     * @var int
     */
    public $bank_id = null;

    /**
     * @var int
     */
    public $region_id = null;

    /**
     * @var int
     */
    public $kato_id = null;

    /**
     * @var string
     */
    public $address = null;

    /**
     * @var string
     */
    public $signatory_name_official = null;

    /**
     * @var string
     */
    public $signatory_position = null;

    /**
     * @var string
     */
    public $signatory_authority = null;

    /**
     * @var string
     */
    public $signatory_authority_document = null;

    public function __construct()
    {
        $this->_request_url = '/user';
        $this->_request_method = 'post';
        $this->telegram_chat_id = new \Perfumer\Microservices\Undefined();
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
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->password = new \Perfumer\Microservices\Undefined();
        $this->is_admin = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->auto_fields = new \Perfumer\Microservices\Undefined();
        $this->passport_number = new \Perfumer\Microservices\Undefined();
        $this->id_number = new \Perfumer\Microservices\Undefined();
        $this->id_date_issue = new \Perfumer\Microservices\Undefined();
        $this->id_date_expiry = new \Perfumer\Microservices\Undefined();
        $this->id_issuing_authority_id = new \Perfumer\Microservices\Undefined();
        $this->id_nationality_id = new \Perfumer\Microservices\Undefined();
        $this->id_place_birth_id = new \Perfumer\Microservices\Undefined();
        $this->id_date_birth = new \Perfumer\Microservices\Undefined();
        $this->id_gender = new \Perfumer\Microservices\Undefined();
        $this->transaction_account = new \Perfumer\Microservices\Undefined();
        $this->bank_id = new \Perfumer\Microservices\Undefined();
        $this->region_id = new \Perfumer\Microservices\Undefined();
        $this->kato_id = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->signatory_name_official = new \Perfumer\Microservices\Undefined();
        $this->signatory_position = new \Perfumer\Microservices\Undefined();
        $this->signatory_authority = new \Perfumer\Microservices\Undefined();
        $this->signatory_authority_document = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->telegram_chat_id instanceof \Perfumer\Microservices\Undefined) {
            $array['telegram_chat_id'] = $this->telegram_chat_id;
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
        if (!$this->passport_number instanceof \Perfumer\Microservices\Undefined) {
            $array['passport_number'] = $this->passport_number;
        }
        if (!$this->id_number instanceof \Perfumer\Microservices\Undefined) {
            $array['id_number'] = $this->id_number;
        }
        if (!$this->id_date_issue instanceof \Perfumer\Microservices\Undefined) {
            $array['id_date_issue'] = $this->id_date_issue;
        }
        if (!$this->id_date_expiry instanceof \Perfumer\Microservices\Undefined) {
            $array['id_date_expiry'] = $this->id_date_expiry;
        }
        if (!$this->id_issuing_authority_id instanceof \Perfumer\Microservices\Undefined) {
            $array['id_issuing_authority_id'] = $this->id_issuing_authority_id;
        }
        if (!$this->id_nationality_id instanceof \Perfumer\Microservices\Undefined) {
            $array['id_nationality_id'] = $this->id_nationality_id;
        }
        if (!$this->id_place_birth_id instanceof \Perfumer\Microservices\Undefined) {
            $array['id_place_birth_id'] = $this->id_place_birth_id;
        }
        if (!$this->id_date_birth instanceof \Perfumer\Microservices\Undefined) {
            $array['id_date_birth'] = $this->id_date_birth;
        }
        if (!$this->id_gender instanceof \Perfumer\Microservices\Undefined) {
            $array['id_gender'] = $this->id_gender;
        }
        if (!$this->transaction_account instanceof \Perfumer\Microservices\Undefined) {
            $array['transaction_account'] = $this->transaction_account;
        }
        if (!$this->bank_id instanceof \Perfumer\Microservices\Undefined) {
            $array['bank_id'] = $this->bank_id;
        }
        if (!$this->region_id instanceof \Perfumer\Microservices\Undefined) {
            $array['region_id'] = $this->region_id;
        }
        if (!$this->kato_id instanceof \Perfumer\Microservices\Undefined) {
            $array['kato_id'] = $this->kato_id;
        }
        if (!$this->address instanceof \Perfumer\Microservices\Undefined) {
            $array['address'] = $this->address;
        }
        if (!$this->signatory_name_official instanceof \Perfumer\Microservices\Undefined) {
            $array['signatory_name_official'] = $this->signatory_name_official;
        }
        if (!$this->signatory_position instanceof \Perfumer\Microservices\Undefined) {
            $array['signatory_position'] = $this->signatory_position;
        }
        if (!$this->signatory_authority instanceof \Perfumer\Microservices\Undefined) {
            $array['signatory_authority'] = $this->signatory_authority;
        }
        if (!$this->signatory_authority_document instanceof \Perfumer\Microservices\Undefined) {
            $array['signatory_authority_document'] = $this->signatory_authority_document;
        }

        return $array;
    }
}
