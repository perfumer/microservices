<?php

namespace Generated\Perfumer\Microservices\Crm\Request\CommonScenarioTriggers;

class GetCommonScenarioTriggersRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $common_trigger = null;

    /**
     * @var string
     */
    public $process_scenario = null;

    /**
     * @var string
     */
    public $business_case = null;

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
    public $id = null;

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
        $this->_request_url = '/common-scenario-triggers';
        $this->_request_method = 'get';
        $this->common_trigger = new \Perfumer\Microservices\Undefined();
        $this->process_scenario = new \Perfumer\Microservices\Undefined();
        $this->business_case = new \Perfumer\Microservices\Undefined();
        $this->limit = new \Perfumer\Microservices\Undefined();
        $this->offset = new \Perfumer\Microservices\Undefined();
        $this->count = new \Perfumer\Microservices\Undefined();
        $this->order_field = new \Perfumer\Microservices\Undefined();
        $this->order_direction = new \Perfumer\Microservices\Undefined();
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->id_lt = new \Perfumer\Microservices\Undefined();
        $this->id_le = new \Perfumer\Microservices\Undefined();
        $this->id_gt = new \Perfumer\Microservices\Undefined();
        $this->id_ge = new \Perfumer\Microservices\Undefined();
        $this->search = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->common_trigger instanceof \Perfumer\Microservices\Undefined) {
            $array['common_trigger'] = $this->common_trigger;
        }
        if (!$this->process_scenario instanceof \Perfumer\Microservices\Undefined) {
            $array['process_scenario'] = $this->process_scenario;
        }
        if (!$this->business_case instanceof \Perfumer\Microservices\Undefined) {
            $array['business_case'] = $this->business_case;
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
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
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
