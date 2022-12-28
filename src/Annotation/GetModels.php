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
            $this->fields = array_merge($this->fields, ['limit.int', 'offset.int', 'count.int', 'order_field', 'order_direction', 'id.int', 'id_lt.int', 'id_le.int', 'id_gt.int', 'id_ge.int']);
            $this->response_fields = array_merge($this->response_fields, ['nb_results.int']);
        }

        // Set date fields to fields if there are date-typed (like "created_at.date") fields
        // Convert it to created_at_le, created_at_lt, created_at_ge, created_at_gt
        $date_fields = [];

        foreach ($this->fields as $index => $field) {
            $parts = explode('.', $field);

            if (count($parts) === 2 && $parts[1] === 'date') {
                $date_fields[$index] = $parts[0];
            }
        }

        foreach ($date_fields as $index => $date_field) {
            unset($this->fields[$index]);
        }

        foreach ($date_fields as $index => $date_field) {
            $this->fields[] = $date_field . '_le';
            $this->fields[] = $date_field . '_lt';
            $this->fields[] = $date_field . '_ge';
            $this->fields[] = $date_field . '_gt';
        }

        $this->fields[] = 'locale';
        $this->response_fields[] = $lcfirst_model . '.array';

        parent::onCreate();
    }
}
