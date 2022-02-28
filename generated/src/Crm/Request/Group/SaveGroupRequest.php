<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Group;

class SaveGroupRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var int
     */
    public $owner_id = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    /**
     * @var string
     */
    public $category = null;

    /**
     * @var bool
     */
    public $is_protected = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    /**
     * @var array
     */
    public $fields = [
    ];

    /**
     * @var string
     */
    public $fields_page = null;

    /**
     * @var int
     */
    public $fields_form_module_id = null;

    /**
     * @var string
     */
    public $logo = null;

    /**
     * @var string
     */
    public $name_official = null;

    /**
     * @var string
     */
    public $iin_bin = null;

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
    public $fax = null;

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
     * @var int
     */
    public $region_official_id = null;

    /**
     * @var int
     */
    public $city_official_id = null;

    /**
     * @var string
     */
    public $address_official = null;

    /**
     * @var string
     */
    public $transaction_account = null;

    /**
     * @var int
     */
    public $bank_id = null;

    /**
     * @var string
     */
    public $correspondent_account = null;

    /**
     * @var array
     */
    public $parents = [
    ];

    /**
     * @var array
     */
    public $children = [
    ];

    public function __construct()
    {
        $this->_request_url = '/group';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->owner_id = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->fields = new \Perfumer\Microservices\Undefined();
        $this->fields_page = new \Perfumer\Microservices\Undefined();
        $this->fields_form_module_id = new \Perfumer\Microservices\Undefined();
        $this->logo = new \Perfumer\Microservices\Undefined();
        $this->name_official = new \Perfumer\Microservices\Undefined();
        $this->iin_bin = new \Perfumer\Microservices\Undefined();
        $this->email = new \Perfumer\Microservices\Undefined();
        $this->phone = new \Perfumer\Microservices\Undefined();
        $this->fax = new \Perfumer\Microservices\Undefined();
        $this->region_id = new \Perfumer\Microservices\Undefined();
        $this->kato_id = new \Perfumer\Microservices\Undefined();
        $this->address = new \Perfumer\Microservices\Undefined();
        $this->region_official_id = new \Perfumer\Microservices\Undefined();
        $this->city_official_id = new \Perfumer\Microservices\Undefined();
        $this->address_official = new \Perfumer\Microservices\Undefined();
        $this->transaction_account = new \Perfumer\Microservices\Undefined();
        $this->bank_id = new \Perfumer\Microservices\Undefined();
        $this->correspondent_account = new \Perfumer\Microservices\Undefined();
        $this->parents = new \Perfumer\Microservices\Undefined();
        $this->children = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->owner_id instanceof \Perfumer\Microservices\Undefined) {
            $array['owner_id'] = $this->owner_id;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->category instanceof \Perfumer\Microservices\Undefined) {
            $array['category'] = $this->category;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->fields instanceof \Perfumer\Microservices\Undefined) {
            $array['fields'] = $this->fields;
        }
        if (!$this->fields_page instanceof \Perfumer\Microservices\Undefined) {
            $array['fields_page'] = $this->fields_page;
        }
        if (!$this->fields_form_module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['fields_form_module_id'] = $this->fields_form_module_id;
        }
        if (!$this->logo instanceof \Perfumer\Microservices\Undefined) {
            $array['logo'] = $this->logo;
        }
        if (!$this->name_official instanceof \Perfumer\Microservices\Undefined) {
            $array['name_official'] = $this->name_official;
        }
        if (!$this->iin_bin instanceof \Perfumer\Microservices\Undefined) {
            $array['iin_bin'] = $this->iin_bin;
        }
        if (!$this->email instanceof \Perfumer\Microservices\Undefined) {
            $array['email'] = $this->email;
        }
        if (!$this->phone instanceof \Perfumer\Microservices\Undefined) {
            $array['phone'] = $this->phone;
        }
        if (!$this->fax instanceof \Perfumer\Microservices\Undefined) {
            $array['fax'] = $this->fax;
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
        if (!$this->region_official_id instanceof \Perfumer\Microservices\Undefined) {
            $array['region_official_id'] = $this->region_official_id;
        }
        if (!$this->city_official_id instanceof \Perfumer\Microservices\Undefined) {
            $array['city_official_id'] = $this->city_official_id;
        }
        if (!$this->address_official instanceof \Perfumer\Microservices\Undefined) {
            $array['address_official'] = $this->address_official;
        }
        if (!$this->transaction_account instanceof \Perfumer\Microservices\Undefined) {
            $array['transaction_account'] = $this->transaction_account;
        }
        if (!$this->bank_id instanceof \Perfumer\Microservices\Undefined) {
            $array['bank_id'] = $this->bank_id;
        }
        if (!$this->correspondent_account instanceof \Perfumer\Microservices\Undefined) {
            $array['correspondent_account'] = $this->correspondent_account;
        }
        if (!$this->parents instanceof \Perfumer\Microservices\Undefined) {
            $array['parents'] = $this->parents;
        }
        if (!$this->children instanceof \Perfumer\Microservices\Undefined) {
            $array['children'] = $this->children;
        }

        return $array;
    }
}
