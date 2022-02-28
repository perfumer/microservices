<?php

namespace Generated\Perfumer\Microservices\Events\Request\Participant;

class SaveActParticipantRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $act = null;

    public function __construct()
    {
        $this->_request_url = '/participant/act';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->act = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->act instanceof \Perfumer\Microservices\Undefined) {
            $array['act'] = $this->act;
        }

        return $array;
    }
}
