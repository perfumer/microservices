<?php

namespace Generated\Perfumer\Microservices\Forms\Request\TableRow;

class CreateTableRowRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var bool
     */
    public $is_header;

    /**
     * @var int
     */
    public $index;

    /**
     * @var array
     */
    public $data = [
    ];

    /**
     * @var int
     */
    public $table_id;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/table/row';
        $this->_request_method = 'post';
        $this->is_header = new \Perfumer\Microservices\Undefined();
        $this->index = new \Perfumer\Microservices\Undefined();
        $this->data = new \Perfumer\Microservices\Undefined();
        $this->table_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
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
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
