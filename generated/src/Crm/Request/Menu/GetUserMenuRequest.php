<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Menu;

class GetUserMenuRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id = null;

    /**
     * @var string
     */
    public $code = null;

    /**
     * @var string
     */
    public $locale = null;

    /**
     * @var int
     */
    public $requested_user_id = null;

    public function __construct()
    {
        $this->_request_url = '/user/menu';
        $this->_request_method = 'get';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->requested_user_id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->requested_user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['requested_user_id'] = $this->requested_user_id;
        }

        return $array;
    }
}
