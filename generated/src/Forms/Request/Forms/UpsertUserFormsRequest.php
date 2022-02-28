<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Forms;

class UpsertUserFormsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $module = null;

    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var int
     */
    public $ticket_id = null;

    /**
     * @var array
     */
    public $forms = [
    ];

    public function __construct()
    {
        $this->_request_url = '/forms/user';
        $this->_request_method = 'put';
        $this->module = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->forms = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->module instanceof \Perfumer\Microservices\Undefined) {
            $array['module'] = $this->module;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->ticket_id instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_id'] = $this->ticket_id;
        }
        if (!$this->forms instanceof \Perfumer\Microservices\Undefined) {
            $array['forms'] = $this->forms;
        }

        return $array;
    }
}
