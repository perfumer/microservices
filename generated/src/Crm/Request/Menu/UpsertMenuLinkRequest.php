<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Menu;

class UpsertMenuLinkRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $division = null;

    /**
     * @var string
     */
    public $block = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $url = null;

    /**
     * @var array
     */
    public $permissions = [
    ];

    /**
     * @var bool
     */
    public $is_common = null;

    /**
     * @var string
     */
    public $text = null;

    /**
     * @var string
     */
    public $icon = null;

    /**
     * @var string
     */
    public $image = null;

    /**
     * @var int
     */
    public $priority = null;

    /**
     * @var bool
     */
    public $is_protected = null;

    /**
     * @var bool
     */
    public $is_disabled = null;

    /**
     * @var array
     */
    public $blocks = [
    ];

    /**
     * @var array
     */
    public $links = [
    ];

    public function __construct()
    {
        $this->_request_url = '/menu/link';
        $this->_request_method = 'put';
        $this->division = new \Perfumer\Microservices\Undefined();
        $this->block = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->url = new \Perfumer\Microservices\Undefined();
        $this->permissions = new \Perfumer\Microservices\Undefined();
        $this->is_common = new \Perfumer\Microservices\Undefined();
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->icon = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->is_disabled = new \Perfumer\Microservices\Undefined();
        $this->blocks = new \Perfumer\Microservices\Undefined();
        $this->links = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->division instanceof \Perfumer\Microservices\Undefined) {
            $array['division'] = $this->division;
        }
        if (!$this->block instanceof \Perfumer\Microservices\Undefined) {
            $array['block'] = $this->block;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->url instanceof \Perfumer\Microservices\Undefined) {
            $array['url'] = $this->url;
        }
        if (!$this->permissions instanceof \Perfumer\Microservices\Undefined) {
            $array['permissions'] = $this->permissions;
        }
        if (!$this->is_common instanceof \Perfumer\Microservices\Undefined) {
            $array['is_common'] = $this->is_common;
        }
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->icon instanceof \Perfumer\Microservices\Undefined) {
            $array['icon'] = $this->icon;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }
        if (!$this->priority instanceof \Perfumer\Microservices\Undefined) {
            $array['priority'] = $this->priority;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->is_disabled instanceof \Perfumer\Microservices\Undefined) {
            $array['is_disabled'] = $this->is_disabled;
        }
        if (!$this->blocks instanceof \Perfumer\Microservices\Undefined) {
            $array['blocks'] = $this->blocks;
        }
        if (!$this->links instanceof \Perfumer\Microservices\Undefined) {
            $array['links'] = $this->links;
        }

        return $array;
    }
}
