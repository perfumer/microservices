<?php

namespace Perfumer\Microservices;

class Request
{
    /**
     * @var bool
     */
    public $_debug = false;

    /**
     * @var int
     */
    public $_timeout = 15;

    /**
     * @var string
     */
    public $_request_method;

    /**
     * @var string
     */
    public $_request_url;

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    /**
     * @param string $name
     * @param string|array $value
     */
    public function addHeader(string $name, $value): void
    {
        $this->headers[$name] = $value;
    }
}
