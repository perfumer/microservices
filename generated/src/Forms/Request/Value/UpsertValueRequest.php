<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Value;

class UpsertValueRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $user_id;

    /**
     * @var int
     */
    public $customer_id;

    /**
     * @var int
     */
    public $ticket_id;

    /**
     * @var int
     */
    public $form_id;

    /**
     * @var int
     */
    public $field_id;

    /**
     * @var string
     */
    public $text_value;

    /**
     * @var string
     */
    public $numeric_value;

    /**
     * @var bool
     */
    public $is_processed;

    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->_request_url = '/value';
        $this->_request_method = 'put';
        $this->tag = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->ticket_id = new \Perfumer\Microservices\Undefined();
        $this->form_id = new \Perfumer\Microservices\Undefined();
        $this->field_id = new \Perfumer\Microservices\Undefined();
        $this->text_value = new \Perfumer\Microservices\Undefined();
        $this->numeric_value = new \Perfumer\Microservices\Undefined();
        $this->is_processed = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->tag instanceof \Perfumer\Microservices\Undefined) {
            $array['tag'] = $this->tag;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->ticket_id instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket_id'] = $this->ticket_id;
        }
        if (!$this->form_id instanceof \Perfumer\Microservices\Undefined) {
            $array['form_id'] = $this->form_id;
        }
        if (!$this->field_id instanceof \Perfumer\Microservices\Undefined) {
            $array['field_id'] = $this->field_id;
        }
        if (!$this->text_value instanceof \Perfumer\Microservices\Undefined) {
            $array['text_value'] = $this->text_value;
        }
        if (!$this->numeric_value instanceof \Perfumer\Microservices\Undefined) {
            $array['numeric_value'] = $this->numeric_value;
        }
        if (!$this->is_processed instanceof \Perfumer\Microservices\Undefined) {
            $array['is_processed'] = $this->is_processed;
        }
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
