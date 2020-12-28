<?php

namespace Perfumer\Microservices\Annotation;

use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;

/**
 * @Annotation
 * @Target("CLASS")
 */
class GetModel extends LayoutAnnotation
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $microservice;

    /**
     * @var array
     */
    public $fields;

    public function onBuild(): void
    {
        parent::onBuild();

        $ucfirst_model = ucfirst($this->model);
        $lcfirst_model = lcfirst($this->model);
        $microservice = ucfirst($this->microservice);

        $parameter_type = sprintf('\\Perfumer\\Microservices\\%s\\Request\\%s\\Get%sRequest', $microservice, $ucfirst_model, $ucfirst_model);
        $return_type = sprintf('\\Perfumer\\Microservices\\%s\\Response\\%s\\Get%sResponse', $microservice, $ucfirst_model, $ucfirst_model);

        $parameter = new ParameterGenerator();
        $parameter->setName('request');
        $parameter->setType($parameter_type);

        $method = new MethodGenerator();
        $method->setName('get' . $ucfirst_model);
        $method->setParameter($parameter);
        $method->setReturnType($return_type);

        $generator = $this->getBaseClassData()->getGenerator();
        $generator->addMethodFromGenerator($method);

        $properties = [];

        foreach ($this->fields as $field) {
            if (isset($properties[$field])) {
                continue;
            }

            $field = explode('.', $field);

            if (count($field) === 1) {
                $name = $field[0];
                $type = 'string';
            } else {
                $name = $field[0];
                $type = $field[1];
            }

            $properties[$name] = $type;
        }

        $body = <<<EOD
\$url = '/$lcfirst_model';

\$response = \$this->doRequest(new $return_type(), 'get', \$url, [

EOD;

        foreach ($properties as $name => $type) {
            $body .= "'$name' => \$request->$name," . PHP_EOL;
        }

        $body .= <<<EOD
]);

/** @var $return_type \$response */
\$array = \$this->fetchKeyFromContent(\$response->_content, '$lcfirst_model');

\$response->$lcfirst_model = \$array;

return \$response;
EOD;

        $method->setBody($body);

        $this->generateRequest('get', $properties);
        $this->generateResponse('get', [$lcfirst_model => 'array']);
    }
}
