<?php

namespace Generated\Perfumer\Microservices\Events\Request\Schedule;

class CreateScheduleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $user = null;

    /**
     * @var int
     */
    public $module_id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var int
     */
    public $week_day = null;

    /**
     * @var string
     */
    public $date = null;

    /**
     * @var string
     */
    public $time_from = null;

    /**
     * @var string
     */
    public $time_to = null;

    /**
     * @var bool
     */
    public $is_protected = null;

    /**
     * @var bool
     */
    public $silent = null;

    public function __construct()
    {
        $this->_request_url = '/schedule';
        $this->_request_method = 'post';
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->week_day = new \Perfumer\Microservices\Undefined();
        $this->date = new \Perfumer\Microservices\Undefined();
        $this->time_from = new \Perfumer\Microservices\Undefined();
        $this->time_to = new \Perfumer\Microservices\Undefined();
        $this->is_protected = new \Perfumer\Microservices\Undefined();
        $this->silent = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->week_day instanceof \Perfumer\Microservices\Undefined) {
            $array['week_day'] = $this->week_day;
        }
        if (!$this->date instanceof \Perfumer\Microservices\Undefined) {
            $array['date'] = $this->date;
        }
        if (!$this->time_from instanceof \Perfumer\Microservices\Undefined) {
            $array['time_from'] = $this->time_from;
        }
        if (!$this->time_to instanceof \Perfumer\Microservices\Undefined) {
            $array['time_to'] = $this->time_to;
        }
        if (!$this->is_protected instanceof \Perfumer\Microservices\Undefined) {
            $array['is_protected'] = $this->is_protected;
        }
        if (!$this->silent instanceof \Perfumer\Microservices\Undefined) {
            $array['silent'] = $this->silent;
        }

        return $array;
    }
}
