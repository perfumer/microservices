<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 * @deprecated
 */
class SaveModel extends RequestModel
{
    /**
     * @var string
     */
    public $request_method = 'post';

    /**
     * @var string
     */
    public $action = 'save';

    public function onCreate(): void
    {
        $ucfirst_model = ucfirst($this->model);
        $lcfirst_model = lcfirst($this->model);

        if (!$this->submodel) {
            $this->submodel = $ucfirst_model;
        }

        $this->response_fields[] = $lcfirst_model . '.array';

        parent::onCreate();
    }
}
