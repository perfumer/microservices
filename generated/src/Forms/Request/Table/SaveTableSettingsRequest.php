<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Table;

class SaveTableSettingsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var array
     */
    public $table = [
    ];

    public function __construct()
    {
        $this->_request_url = '/table/settings';
        $this->_request_method = 'post';
        $this->table = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->table instanceof \Perfumer\Microservices\Undefined) {
            $array['table'] = $this->table;
        }

        return $array;
    }
}
