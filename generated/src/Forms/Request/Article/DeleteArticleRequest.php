<?php

namespace Generated\Perfumer\Microservices\Forms\Request\Article;

class DeleteArticleRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $id = null;

    public function __construct()
    {
        $this->_request_url = '/article';
        $this->_request_method = 'delete';
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
