<?php

namespace Generated\Perfumer\Microservices\Forms\Request\NcaDocument;

class UpdateNcaDocumentRequest extends \Perfumer\Microservices\Request
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
    public $url = null;

    /**
     * @var string
     */
    public $description = null;

    public function __construct()
    {
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->url = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
    }
}
