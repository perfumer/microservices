<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Table;

class UpdateTableRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $csv_file;

    /**
     * @var array
     */
    public $rows = [
    ];

    /**
     * @var string
     */
    public $google_spread_sheet_url;

    public function __construct()
    {
        $this->_request_url = '/table';
        $this->_request_method = 'patch';
        $this->id = new \Perfumer\Microservices\Undefined();
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
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
