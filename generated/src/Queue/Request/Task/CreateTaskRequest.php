<?php

namespace Generated\Perfumer\Microservices\Queue\Request\Task;

class CreateTaskRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $worker = null;

    /**
     * @var string
     */
    public $url = null;

    /**
     * @var string
     */
    public $method = null;

    /**
     * @var string
     */
    public $delay = null;

    /**
     * @var string
     */
    public $json = null;

    /**
     * @var string
     */
    public $datetime = null;

    /**
     * @var string
     */
    public $headers = null;

    /**
     * @var string
     */
    public $query_string = null;

    /**
     * @var string
     */
    public $body = null;

    /**
     * @var string
     */
    public $sleep = null;

    /**
     * @var string
     */
    public $timeout = null;

    public function __construct()
    {
        $this->_request_url = '/task';
        $this->_request_method = 'post';
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
    }

    public function getBody(): array
    {
        $array = [];
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

        return $array;
    }
}
