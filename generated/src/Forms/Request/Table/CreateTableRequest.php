<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Table;

class CreateTableRequest extends \Perfumer\Microservices\Request
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
    public $description = null;

    /**
     * @var string
     */
    public $csv_file = null;

    /**
     * @var array
     */
    public $rows = [
    ];

    /**
     * @var string
     */
    public $google_spread_sheet_url = null;

    public function __construct()
    {
        $this->_request_url = '/table';
        $this->_request_method = 'post';
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->name = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->csv_file = new \Perfumer\Microservices\Undefined();
        $this->rows = new \Perfumer\Microservices\Undefined();
        $this->google_spread_sheet_url = new \Perfumer\Microservices\Undefined();
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
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->csv_file instanceof \Perfumer\Microservices\Undefined) {
            $array['csv_file'] = $this->csv_file;
        }
        if (!$this->rows instanceof \Perfumer\Microservices\Undefined) {
            $array['rows'] = $this->rows;
        }
        if (!$this->google_spread_sheet_url instanceof \Perfumer\Microservices\Undefined) {
            $array['google_spread_sheet_url'] = $this->google_spread_sheet_url;
        }

        return $array;
    }
}
