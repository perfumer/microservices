<?php

namespace Perfumer\Microservices\Annotation;

use Laminas\Code\Generator\MethodGenerator;
use Laminas\Code\Generator\ParameterGenerator;

/**
 * @Annotation
 * @Target("CLASS")
 * @deprecated
 */
class SaveMeshModel extends SaveModel
{
    public function onCreate(): void
    {
        $this->fields = array_merge($this->fields, ['parents.array', 'children.array']);

        parent::onCreate();
    }
}
