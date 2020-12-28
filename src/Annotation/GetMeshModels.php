<?php

namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class GetMeshModels extends GetModels
{
    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['parent', 'child']);

        parent::onCreate();
    }
}
