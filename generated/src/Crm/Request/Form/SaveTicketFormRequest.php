<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Form;

class SaveTicketFormRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $form = null;

    /**
     * @var string
     */
    public $category = null;

    /**
     * @var array
     */
    public $payload = [
    ];

    public function __construct()
    {
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->form = new \Perfumer\Microservices\Undefined();
        $this->category = new \Perfumer\Microservices\Undefined();
        $this->payload = new \Perfumer\Microservices\Undefined();
    }
}
