<?php


namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class UpsertModel extends SaveModel
{
    /**
     * @var string
     */
    public $action = 'upsert';

    /**
     * @var string
     */
    public $request_method = 'put';

    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['id.int', 'code']);

        parent::onCreate();
    }
}