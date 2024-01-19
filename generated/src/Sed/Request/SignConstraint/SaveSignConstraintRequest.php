<?php

namespace Generated\Perfumer\Microservices\Sed\Request\SignConstraint;

class SaveSignConstraintRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $document;

    /**
     * @var string
     */
    public $iin;

    /**
     * @var string
     */
    public $bin;

    public function __construct()
    {
        $this->_request_url = '/sign-constraint';
        $this->_request_method = 'post';
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->iin = new \Perfumer\Microservices\Undefined();
        $this->bin = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->document instanceof \Perfumer\Microservices\Undefined) {
            $array['document'] = $this->document;
        }
        if (!$this->iin instanceof \Perfumer\Microservices\Undefined) {
            $array['iin'] = $this->iin;
        }
        if (!$this->bin instanceof \Perfumer\Microservices\Undefined) {
            $array['bin'] = $this->bin;
        }

        return $array;
    }
}
