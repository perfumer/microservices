<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tickets;

class GetTicketsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var int
     */
    public $operator_user_id = null;

    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var string
     */
    public $module_code = null;

    /**
     * @var int
     */
    public $module_id = null;

    /**
     * @var string
     */
    public $created_at_from = null;

    /**
     * @var string
     */
    public $created_at_to = null;

    /**
     * @var string
     */
    public $opened_at_from = null;

    /**
     * @var string
     */
    public $opened_at_to = null;

    /**
     * @var string
     */
    public $deadline_at_from = null;

    /**
     * @var string
     */
    public $deadline_at_to = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $business_case_id = null;

    /**
     * @var string
     */
    public $business_case_name = null;

    /**
     * @var int
     */
    public $process_state = null;

    /**
     * @var string
     */
    public $process_state_name = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var bool
     */
    public $with_forms = null;

    /**
     * @var bool
     */
    public $is_closed = null;

    /**
     * @var bool
     */
    public $is_closed_successfully = null;

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
        $this->_request_url = '/tickets';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->operator_user_id = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->module_code = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->created_at_from = new \Perfumer\Microservices\Undefined();
        $this->created_at_to = new \Perfumer\Microservices\Undefined();
        $this->opened_at_from = new \Perfumer\Microservices\Undefined();
        $this->opened_at_to = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_from = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_to = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->business_case_id = new \Perfumer\Microservices\Undefined();
        $this->business_case_name = new \Perfumer\Microservices\Undefined();
        $this->process_state = new \Perfumer\Microservices\Undefined();
        $this->process_state_name = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->with_forms = new \Perfumer\Microservices\Undefined();
        $this->is_closed = new \Perfumer\Microservices\Undefined();
        $this->is_closed_successfully = new \Perfumer\Microservices\Undefined();
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
        if (!$this->operator_user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['operator_user_id'] = $this->operator_user_id;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->module_code instanceof \Perfumer\Microservices\Undefined) {
            $array['module_code'] = $this->module_code;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->created_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_from'] = $this->created_at_from;
        }
        if (!$this->created_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['created_at_to'] = $this->created_at_to;
        }
        if (!$this->opened_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_from'] = $this->opened_at_from;
        }
        if (!$this->opened_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at_to'] = $this->opened_at_to;
        }
        if (!$this->deadline_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['deadline_at_from'] = $this->deadline_at_from;
        }
        if (!$this->deadline_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['deadline_at_to'] = $this->deadline_at_to;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->business_case_id instanceof \Perfumer\Microservices\Undefined) {
            $array['business_case_id'] = $this->business_case_id;
        }
        if (!$this->business_case_name instanceof \Perfumer\Microservices\Undefined) {
            $array['business_case_name'] = $this->business_case_name;
        }
        if (!$this->process_state instanceof \Perfumer\Microservices\Undefined) {
            $array['process_state'] = $this->process_state;
        }
        if (!$this->process_state_name instanceof \Perfumer\Microservices\Undefined) {
            $array['process_state_name'] = $this->process_state_name;
        }
        if (!$this->closed_at instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at'] = $this->closed_at;
        }
        if (!$this->with_forms instanceof \Perfumer\Microservices\Undefined) {
            $array['with_forms'] = $this->with_forms;
        }
        if (!$this->is_closed instanceof \Perfumer\Microservices\Undefined) {
            $array['is_closed'] = $this->is_closed;
        }
        if (!$this->is_closed_successfully instanceof \Perfumer\Microservices\Undefined) {
            $array['is_closed_successfully'] = $this->is_closed_successfully;
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
