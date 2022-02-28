<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class CopyModel extends RequestModel
{
    /**
     * @var string
     */
    public $request_method = 'copy';

    /**
     * @var string
     */
    public $action = 'copy';

    /**
     * @var array
     */
    public $fields = ['id.int', 'code'];

    public function onCreate(): void
    {
        $ucfirst_model = ucfirst($this->model);

        if (!$this->submodel) {
            $this->submodel = $ucfirst_model;
        }

        parent::onCreate();
    }
}
