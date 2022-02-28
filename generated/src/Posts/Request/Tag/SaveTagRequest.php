<?php

namespace Generated\Perfumer\Microservices\Posts\Request\Tag;

class SaveTagRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $text = null;

    public function __construct()
    {
        $this->_request_url = '/tag';
        $this->_request_method = 'post';
        $this->text = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->text instanceof \Perfumer\Microservices\Undefined) {
            $array['text'] = $this->text;
        }

        return $array;
    }
}
