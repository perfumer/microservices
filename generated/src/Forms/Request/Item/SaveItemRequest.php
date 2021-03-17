<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Item;

class SaveItemRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $value = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $new_code = null;

    /**
     * @var string
     */
    public $reference_code = null;

    /**
     * @var string
     */
    public $reference_id = null;

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
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->value = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->new_code = new \Perfumer\Microservices\Undefined();
        $this->reference_code = new \Perfumer\Microservices\Undefined();
        $this->reference_id = new \Perfumer\Microservices\Undefined();
        $this->parents = new \Perfumer\Microservices\Undefined();
        $this->children = new \Perfumer\Microservices\Undefined();
    }
}
