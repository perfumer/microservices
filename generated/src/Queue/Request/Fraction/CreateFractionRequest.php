<?php

namespace Generated\Perfumer\Microservices\Queue\Request\Fraction;

class CreateFractionRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $min;

    /**
     * @var string
     */
    public $max;

    /**
     * @var string
     */
    public $gap;

    /**
     * @var string
     */
    public $worker;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $delay;

    /**
     * @var string
     */
    public $json;

    /**
     * @var string
     */
    public $datetime;

    /**
     * @var string
     */
    public $headers;

    /**
     * @var string
     */
    public $query_string;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $sleep;

    /**
     * @var string
     */
    public $timeout;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/fraction';
        $this->_request_method = 'post';
        $this->min = new \Perfumer\Microservices\Undefined();
        $this->max = new \Perfumer\Microservices\Undefined();
        $this->gap = new \Perfumer\Microservices\Undefined();
        $this->worker = new \Perfumer\Microservices\Undefined();
        $this->url = new \Perfumer\Microservices\Undefined();
        $this->method = new \Perfumer\Microservices\Undefined();
        $this->delay = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->datetime = new \Perfumer\Microservices\Undefined();
        $this->headers = new \Perfumer\Microservices\Undefined();
        $this->query_string = new \Perfumer\Microservices\Undefined();
        $this->body = new \Perfumer\Microservices\Undefined();
        $this->sleep = new \Perfumer\Microservices\Undefined();
        $this->timeout = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->min instanceof \Perfumer\Microservices\Undefined) {
            $array['min'] = $this->min;
        }
        if (!$this->max instanceof \Perfumer\Microservices\Undefined) {
            $array['max'] = $this->max;
        }
        if (!$this->gap instanceof \Perfumer\Microservices\Undefined) {
            $array['gap'] = $this->gap;
        }
        if (!$this->worker instanceof \Perfumer\Microservices\Undefined) {
            $array['worker'] = $this->worker;
        }
        if (!$this->url instanceof \Perfumer\Microservices\Undefined) {
            $array['url'] = $this->url;
        }
        if (!$this->method instanceof \Perfumer\Microservices\Undefined) {
            $array['method'] = $this->method;
        }
        if (!$this->delay instanceof \Perfumer\Microservices\Undefined) {
            $array['delay'] = $this->delay;
        }
        if (!$this->json instanceof \Perfumer\Microservices\Undefined) {
            $array['json'] = $this->json;
        }
        if (!$this->datetime instanceof \Perfumer\Microservices\Undefined) {
            $array['datetime'] = $this->datetime;
        }
        if (!$this->headers instanceof \Perfumer\Microservices\Undefined) {
            $array['headers'] = $this->headers;
        }
        if (!$this->query_string instanceof \Perfumer\Microservices\Undefined) {
            $array['query_string'] = $this->query_string;
        }
        if (!$this->body instanceof \Perfumer\Microservices\Undefined) {
            $array['body'] = $this->body;
        }
        if (!$this->sleep instanceof \Perfumer\Microservices\Undefined) {
            $array['sleep'] = $this->sleep;
        }
        if (!$this->timeout instanceof \Perfumer\Microservices\Undefined) {
            $array['timeout'] = $this->timeout;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
