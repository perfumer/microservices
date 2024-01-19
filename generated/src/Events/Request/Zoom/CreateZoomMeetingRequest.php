<?php

namespace Generated\Perfumer\Microservices\Events\Request\Zoom;

class CreateZoomMeetingRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $ticket;

    /**
     * @var string
     */
    public $start_url_field;

    /**
     * @var string
     */
    public $join_url_field;

    /**
     * @var string
     */
    public $duration_field;

    /**
     * @var string
     */
    public $record_field;

    /**
     * @var string
     */
    public $start_at;

    /**
     * @var string
     */
    public $end_at;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/zoom/meeting';
        $this->_request_method = 'post';
        $this->ticket = new \Perfumer\Microservices\Undefined();
        $this->start_url_field = new \Perfumer\Microservices\Undefined();
        $this->join_url_field = new \Perfumer\Microservices\Undefined();
        $this->duration_field = new \Perfumer\Microservices\Undefined();
        $this->record_field = new \Perfumer\Microservices\Undefined();
        $this->start_at = new \Perfumer\Microservices\Undefined();
        $this->end_at = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->ticket instanceof \Perfumer\Microservices\Undefined) {
            $array['ticket'] = $this->ticket;
        }
        if (!$this->start_url_field instanceof \Perfumer\Microservices\Undefined) {
            $array['start_url_field'] = $this->start_url_field;
        }
        if (!$this->join_url_field instanceof \Perfumer\Microservices\Undefined) {
            $array['join_url_field'] = $this->join_url_field;
        }
        if (!$this->duration_field instanceof \Perfumer\Microservices\Undefined) {
            $array['duration_field'] = $this->duration_field;
        }
        if (!$this->record_field instanceof \Perfumer\Microservices\Undefined) {
            $array['record_field'] = $this->record_field;
        }
        if (!$this->start_at instanceof \Perfumer\Microservices\Undefined) {
            $array['start_at'] = $this->start_at;
        }
        if (!$this->end_at instanceof \Perfumer\Microservices\Undefined) {
            $array['end_at'] = $this->end_at;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
