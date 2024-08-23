<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Quiz;

class ActivateQuizRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->_request_url = '/quiz/activate';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }

        return $array;
    }
}
