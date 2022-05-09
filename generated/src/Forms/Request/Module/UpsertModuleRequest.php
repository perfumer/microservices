<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Module;

class UpsertModuleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $customer_name = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $applicant = null;

    /**
     * @var string
     */
    public $target = null;

    /**
     * @var bool
     */
    public $is_archived = null;

    /**
     * @var bool
     */
    public $is_invisible_for_applicant = null;

    /**
     * @var bool
     */
    public $is_visible_for_roles = null;

    /**
     * @var bool
     */
    public $is_dedicated_table = null;

    /**
     * @var string
     */
    public $form_page = null;

    /**
     * @var string
     */
    public $form_page_bulk = null;

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
     * @var int
     */
    public $data_module_id = null;

    /**
     * @var array
     */
    public $tags = [
    ];

    /**
     * @var string
     */
    public $pre_create_webhook = null;

    /**
     * @var string
     */
    public $post_create_message = null;

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
        $this->_request_url = '/module';
        $this->_request_method = 'put';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->customer_name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->applicant = new \Perfumer\Microservices\Undefined();
        $this->target = new \Perfumer\Microservices\Undefined();
        $this->is_archived = new \Perfumer\Microservices\Undefined();
        $this->is_invisible_for_applicant = new \Perfumer\Microservices\Undefined();
        $this->is_visible_for_roles = new \Perfumer\Microservices\Undefined();
        $this->is_dedicated_table = new \Perfumer\Microservices\Undefined();
        $this->form_page = new \Perfumer\Microservices\Undefined();
        $this->form_page_bulk = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
        $this->data_module_id = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->pre_create_webhook = new \Perfumer\Microservices\Undefined();
        $this->post_create_message = new \Perfumer\Microservices\Undefined();
        $this->parents = new \Perfumer\Microservices\Undefined();
        $this->children = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->name instanceof \Perfumer\Microservices\Undefined) {
            $array['name'] = $this->name;
        }
        if (!$this->customer_name instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_name'] = $this->customer_name;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->applicant instanceof \Perfumer\Microservices\Undefined) {
            $array['applicant'] = $this->applicant;
        }
        if (!$this->target instanceof \Perfumer\Microservices\Undefined) {
            $array['target'] = $this->target;
        }
        if (!$this->is_archived instanceof \Perfumer\Microservices\Undefined) {
            $array['is_archived'] = $this->is_archived;
        }
        if (!$this->is_invisible_for_applicant instanceof \Perfumer\Microservices\Undefined) {
            $array['is_invisible_for_applicant'] = $this->is_invisible_for_applicant;
        }
        if (!$this->is_visible_for_roles instanceof \Perfumer\Microservices\Undefined) {
            $array['is_visible_for_roles'] = $this->is_visible_for_roles;
        }
        if (!$this->is_dedicated_table instanceof \Perfumer\Microservices\Undefined) {
            $array['is_dedicated_table'] = $this->is_dedicated_table;
        }
        if (!$this->form_page instanceof \Perfumer\Microservices\Undefined) {
            $array['form_page'] = $this->form_page;
        }
        if (!$this->form_page_bulk instanceof \Perfumer\Microservices\Undefined) {
            $array['form_page_bulk'] = $this->form_page_bulk;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->payload instanceof \Perfumer\Microservices\Undefined) {
            $array['payload'] = $this->payload;
        }
        if (!$this->data_module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['data_module_id'] = $this->data_module_id;
        }
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
        }
        if (!$this->pre_create_webhook instanceof \Perfumer\Microservices\Undefined) {
            $array['pre_create_webhook'] = $this->pre_create_webhook;
        }
        if (!$this->post_create_message instanceof \Perfumer\Microservices\Undefined) {
            $array['post_create_message'] = $this->post_create_message;
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
