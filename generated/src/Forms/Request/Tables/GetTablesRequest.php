<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Tables;

class GetTablesRequest extends \Perfumer\Microservices\Request
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
     * @var string
     */
    public $csv_file = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $google_spread_sheet_url = null;

    /**
     * @var int
     */
    public $limit = null;

    /**
     * @var int
     */
    public $offset = null;

    /**
     * @var int
     */
    public $count = null;

    /**
     * @var string
     */
    public $order_field = null;

    /**
     * @var string
     */
    public $order_direction = null;

    /**
     * @var int
     */
    public $id_lt = null;

    /**
     * @var int
     */
    public $id_le = null;

    /**
     * @var int
     */
    public $id_gt = null;

    /**
     * @var int
     */
    public $id_ge = null;

    public function __construct()
    {
        $this->_request_url = '/tables';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->csv_file = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->google_spread_sheet_url = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
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
        if (!$this->csv_file instanceof \Perfumer\Microservices\Undefined) {
            $array['csv_file'] = $this->csv_file;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->google_spread_sheet_url instanceof \Perfumer\Microservices\Undefined) {
            $array['google_spread_sheet_url'] = $this->google_spread_sheet_url;
        }
        if (!$this->limit instanceof \Perfumer\Microservices\Undefined) {
            $array['limit'] = $this->limit;
        }
        if (!$this->offset instanceof \Perfumer\Microservices\Undefined) {
            $array['offset'] = $this->offset;
        }
        if (!$this->count instanceof \Perfumer\Microservices\Undefined) {
            $array['count'] = $this->count;
        }
        if (!$this->order_field instanceof \Perfumer\Microservices\Undefined) {
            $array['order_field'] = $this->order_field;
        }
        if (!$this->order_direction instanceof \Perfumer\Microservices\Undefined) {
            $array['order_direction'] = $this->order_direction;
        }
        if (!$this->id_lt instanceof \Perfumer\Microservices\Undefined) {
            $array['id_lt'] = $this->id_lt;
        }
        if (!$this->id_le instanceof \Perfumer\Microservices\Undefined) {
            $array['id_le'] = $this->id_le;
        }
        if (!$this->id_gt instanceof \Perfumer\Microservices\Undefined) {
            $array['id_gt'] = $this->id_gt;
        }
        if (!$this->id_ge instanceof \Perfumer\Microservices\Undefined) {
            $array['id_ge'] = $this->id_ge;
        }

        return $array;
    }
}
