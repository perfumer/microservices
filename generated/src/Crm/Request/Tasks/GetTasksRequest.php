<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tasks;

class GetTasksRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $ticket = null;

    /**
     * @var string
     */
    public $state = null;

    /**
     * @var string
     */
    public $process_scenario = null;

    /**
     * @var int
     */
    public $pipeline_branch = null;

    /**
     * @var bool
     */
    public $is_closed = null;

    /**
     * @var int
     */
    public $user_id = null;

    /**
     * @var int
     */
    public $customer_id = null;

    /**
     * @var bool
     */
    public $is_applicant = null;

    /**
     * @var int
     */
    public $applicant_user_id = null;

    /**
     * @var int
     */
    public $applicant_customer_id = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $description = null;

    /**
     * @var string
     */
    public $wake_at_from = null;

    /**
     * @var string
     */
    public $wake_at_to = null;

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
    public $closed_at_from = null;

    /**
     * @var string
     */
    public $closed_at_to = null;

    /**
     * @var string
     */
    public $expire_at_from = null;

    /**
     * @var string
     */
    public $expire_at_to = null;

    /**
     * @var string
     */
    public $activity = null;

    /**
     * @var string
     */
    public $group = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $closed_at = null;

    /**
     * @var string
     */
    public $complexity = null;

    /**
     * @var string
     */
    public $link = null;

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

    /**
     * @var string
     */
    public $search = null;

    public function __construct()
    {
        $this->_request_url = '/tasks';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->state = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
        $this->pipeline_branch = new \Perfumer\Microservices\Undefined();
        $this->is_closed = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->is_applicant = new \Perfumer\Microservices\Undefined();
        $this->applicant_user_id = new \Perfumer\Microservices\Undefined();
        $this->applicant_customer_id = new \Perfumer\Microservices\Undefined();
        $this->type = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->wake_at_from = new \Perfumer\Microservices\Undefined();
        $this->wake_at_to = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_from = new \Perfumer\Microservices\Undefined();
        $this->deadline_at_to = new \Perfumer\Microservices\Undefined();
        $this->closed_at_from = new \Perfumer\Microservices\Undefined();
        $this->closed_at_to = new \Perfumer\Microservices\Undefined();
        $this->expire_at_from = new \Perfumer\Microservices\Undefined();
        $this->expire_at_to = new \Perfumer\Microservices\Undefined();
        $this->activity = new \Perfumer\Microservices\Undefined();
        $this->group = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->complexity = new \Perfumer\Microservices\Undefined();
        $this->link = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }
        if (!$this->state instanceof \Perfumer\Microservices\Undefined) {
            $array['state'] = $this->state;
        }
        if (!$this->process_scenario instanceof \Perfumer\Microservices\Undefined) {
            $array['process_scenario'] = $this->process_scenario;
        }
        if (!$this->pipeline_branch instanceof \Perfumer\Microservices\Undefined) {
            $array['pipeline_branch'] = $this->pipeline_branch;
        }
        if (!$this->is_closed instanceof \Perfumer\Microservices\Undefined) {
            $array['is_closed'] = $this->is_closed;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->is_applicant instanceof \Perfumer\Microservices\Undefined) {
            $array['is_applicant'] = $this->is_applicant;
        }
        if (!$this->applicant_user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['applicant_user_id'] = $this->applicant_user_id;
        }
        if (!$this->applicant_customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['applicant_customer_id'] = $this->applicant_customer_id;
        }
        if (!$this->type instanceof \Perfumer\Microservices\Undefined) {
            $array['type'] = $this->type;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->wake_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['wake_at_from'] = $this->wake_at_from;
        }
        if (!$this->wake_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['wake_at_to'] = $this->wake_at_to;
        }
        if (!$this->deadline_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['deadline_at_from'] = $this->deadline_at_from;
        }
        if (!$this->deadline_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['deadline_at_to'] = $this->deadline_at_to;
        }
        if (!$this->closed_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_from'] = $this->closed_at_from;
        }
        if (!$this->closed_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at_to'] = $this->closed_at_to;
        }
        if (!$this->expire_at_from instanceof \Perfumer\Microservices\Undefined) {
            $array['expire_at_from'] = $this->expire_at_from;
        }
        if (!$this->expire_at_to instanceof \Perfumer\Microservices\Undefined) {
            $array['expire_at_to'] = $this->expire_at_to;
        }
        if (!$this->activity instanceof \Perfumer\Microservices\Undefined) {
            $array['activity'] = $this->activity;
        }
        if (!$this->group instanceof \Perfumer\Microservices\Undefined) {
            $array['group'] = $this->group;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->closed_at instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at'] = $this->closed_at;
        }
        if (!$this->complexity instanceof \Perfumer\Microservices\Undefined) {
            $array['complexity'] = $this->complexity;
        }
        if (!$this->link instanceof \Perfumer\Microservices\Undefined) {
            $array['link'] = $this->link;
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
        if (!$this->search instanceof \Perfumer\Microservices\Undefined) {
            $array['search'] = $this->search;
        }

        return $array;
    }
}
