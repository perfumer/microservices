<?php

namespace Generated\Perfumer\Microservices\Ncanode\Request\Signature;

class CreateSignatureRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var string
     */
    public $document = null;

    /**
     * @var string
     */
    public $thread = null;

    /**
     * @var string
     */
    public $cms = null;

    /**
     * @var array
     */
    public $tags = [
    ];

    /**
     * @var int
     */
    public $version = null;

    /**
     * @var string
     */
    public $version_comment = null;

    /**
     * @var string
     */
    public $version_created_by = null;

    public function __construct()
    {
        $this->_request_url = '/signature';
        $this->_request_method = 'post';
        $this->document = new \Perfumer\Microservices\Undefined();
        $this->thread = new \Perfumer\Microservices\Undefined();
        $this->cms = new \Perfumer\Microservices\Undefined();
        $this->tags = new \Perfumer\Microservices\Undefined();
        $this->version = new \Perfumer\Microservices\Undefined();
        $this->version_comment = new \Perfumer\Microservices\Undefined();
        $this->version_created_by = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->document instanceof \Perfumer\Microservices\Undefined) {
            $array['document'] = $this->document;
        }
        if (!$this->thread instanceof \Perfumer\Microservices\Undefined) {
            $array['thread'] = $this->thread;
        }
        if (!$this->cms instanceof \Perfumer\Microservices\Undefined) {
            $array['cms'] = $this->cms;
        }
        if (!$this->tags instanceof \Perfumer\Microservices\Undefined) {
            $array['tags'] = $this->tags;
        }
        if (!$this->version instanceof \Perfumer\Microservices\Undefined) {
            $array['version'] = $this->version;
        }
        if (!$this->version_comment instanceof \Perfumer\Microservices\Undefined) {
            $array['version_comment'] = $this->version_comment;
        }
        if (!$this->version_created_by instanceof \Perfumer\Microservices\Undefined) {
            $array['version_created_by'] = $this->version_created_by;
        }
        if (!$array) {
            $array = new \stdClass();
        }

        return $array;
    }
}
