<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class DeleteModel extends RequestModel
{
    /**
     * @var string
     */
    public $request_method = 'delete';

    /**
     * @var string
     */
    public $action = 'delete';

    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['id.int', 'code']);

        $ucfirst_model = ucfirst($this->model);

        if (!$this->submodel) {
            $this->submodel = $ucfirst_model;
        }

        parent::onCreate();
    }
}
