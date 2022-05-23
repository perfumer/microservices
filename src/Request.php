<?php

namespace Perfumer\Microservices;

class Request
{
    /**
     * Tenant for Cloud setups
     *
     * @var string
     */
    public $_tenant;

    /**
     * Locale for header
     *
     * @var string
     */
    public $_locale;

    /**
     * @var bool
     */
    public $_debug = false;

    /**
     * If enabled this request will be catched and sent to Request Catcher
     *
     * @var bool
     */
    public $_catch = false;

    /**
     * If enabled, raise Exception if request ends with error code or status=false
     *
     * @var bool
     */
    public $_unsuccessful_exception = false;

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
     * @var string
     */
    public $_http_auth_username;

    /**
     * @var string
     */
    public $_http_auth_password;

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
