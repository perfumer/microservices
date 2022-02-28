<?php

namespace Generated\Perfumer\Microservices\Forms\Request\TableRow;

class UpdateTableRowRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var bool
     */
    public $is_header = null;

    /**
     * @var int
     */
    public $index = null;

    /**
     * @var array
     */
    public $data = [
    ];

    /**
     * @var int
     */
    public $table_id = null;

    public function __construct()
    {
        $this->_request_url = '/table/row';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->is_header = new \Perfumer\Microservices\Undefined();
        $this->index = new \Perfumer\Microservices\Undefined();
        $this->data = new \Perfumer\Microservices\Undefined();
        $this->table_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->is_header instanceof \Perfumer\Microservices\Undefined) {
            $array['is_header'] = $this->is_header;
        }
        if (!$this->index instanceof \Perfumer\Microservices\Undefined) {
            $array['index'] = $this->index;
        }
        if (!$this->data instanceof \Perfumer\Microservices\Undefined) {
            $array['data'] = $this->data;
        }
        if (!$this->table_id instanceof \Perfumer\Microservices\Undefined) {
            $array['table_id'] = $this->table_id;
        }

        return $array;
    }
}
