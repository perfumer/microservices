<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class GetModels extends RequestModel
{
    /**
     * @var string
     */
    public $request_method = 'get';

    /**
     * @var string
     */
    public $action = 'get';

    /**
     * @var bool
     */
    public $paginate = true;

    public function onCreate(): void
    {
        $ucfirst_model = ucfirst($this->model);
        $lcfirst_model = lcfirst($this->model);

        if (!$this->submodel) {
            $this->submodel = $ucfirst_model;
        }

        if ($this->paginate) {
            $this->fields = array_merge($this->fields, ['limit.int', 'offset.int', 'count.int']);
            $this->response_fields = array_merge($this->response_fields, ['nb_results.int']);
        }

        $this->response_fields[] = $lcfirst_model . '.array';

        parent::onCreate();
    }
}
