<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Quiz;

class AnswerQuizRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $customer_id;

    /**
     * @var array
     */
    public $answers = [
    ];

    public function __construct()
    {
        $this->_request_url = '/quiz/answer';
        $this->_request_method = 'post';
        $this->customer_id = new \Perfumer\Microservices\Undefined();
        $this->answers = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->customer_id instanceof \Perfumer\Microservices\Undefined) {
            $array['customer_id'] = $this->customer_id;
        }
        if (!$this->answers instanceof \Perfumer\Microservices\Undefined) {
            $array['answers'] = $this->answers;
        }

        return $array;
    }
}
