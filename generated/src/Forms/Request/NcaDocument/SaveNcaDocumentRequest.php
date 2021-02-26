<?php

namespace Generated\Perfumer\Microservices\Forms\Request\NcaDocument;

class SaveNcaDocumentRequest extends \Perfumer\Microservices\Request
{
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
        $this->code = new \Perfumer\Microservices\Undefined();
        $this->url = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
    }
}
