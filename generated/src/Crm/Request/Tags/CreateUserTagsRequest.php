<?php

namespace Generated\Perfumer\Microservices\Crm\Request\Tags;

class CreateUserTagsRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $tags;

    /**
     * @var int
     */
    public $user_id;

    /**
     * @var string
     */
    public $user_code;

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/user/tags';
        $this->_request_method = 'post';
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->user_id = new \Perfumer\Microservices\Undefined();
        $this->user_code = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
        }
        if (!$this->user_id instanceof \Perfumer\Microservices\Undefined) {
            $array['user_id'] = $this->user_id;
        }
        if (!$this->user_code instanceof \Perfumer\Microservices\Undefined) {
            $array['user_code'] = $this->user_code;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
