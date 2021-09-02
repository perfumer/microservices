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
    public $_timeout = 30;

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
    protected $_body = [];

    /**
     * @var array
     */
    protected $_headers = [];

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->_body;
    }

    /**
     * @param array $body
     */
    public function setBody(array $body): void
    {
        $this->_body = $body;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->_headers;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers): void
    {
        $this->_headers = $headers;
    }

    /**
     * @param string $name
     * @param string|array $value
     */
    public function addHeader(string $name, $value): void
    {
        $this->_headers[$name] = $value;
    }
}
