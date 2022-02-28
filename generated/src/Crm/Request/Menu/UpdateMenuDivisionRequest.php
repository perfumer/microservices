<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Menu;

class UpdateMenuDivisionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $text = null;

    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $icon = null;

    /**
     * @var string
     */
    public $code = null;

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
        $this->_request_url = '/menu/division';
        $this->_request_method = 'patch';
        $this->text = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->icon = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->priority = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->blocks = new \Perfumer\Microservices\Undefined();
        $this->links = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->icon instanceof \Perfumer\Microservices\Undefined) {
            $array['icon'] = $this->icon;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
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
        if (!$this->blocks instanceof \Perfumer\Microservices\Undefined) {
            $array['blocks'] = $this->blocks;
        }
        if (!$this->links instanceof \Perfumer\Microservices\Undefined) {
            $array['links'] = $this->links;
        }

        return $array;
    }
}
