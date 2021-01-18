<?php

namespace Perfumer\Microservices\Annotation;

use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;

/**
 * @Annotation
 * @Target("CLASS")
 */
class DeleteModel extends LayoutAnnotation
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

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $action = 'delete';

    public function onBuild(): void
    {
        parent::onBuild();

        $ucfirst_model = ucfirst($this->model);
        $lcfirst_model = lcfirst($this->model);
        $microservice = ucfirst($this->microservice);
        $ucfirst_action = ucfirst($this->action);
        $lcfirst_action = lcfirst($this->action);

        $parameter_type = sprintf('\\Perfumer\\Microservices\\%s\\Request\\%s\\%s%sRequest', $microservice, $ucfirst_model, $ucfirst_action, $ucfirst_model);
        $return_type = sprintf('\\Perfumer\\Microservices\\%s\\Response\\%s\\%s%sResponse', $microservice, $ucfirst_model, $ucfirst_action, $ucfirst_model);

        $parameter = new ParameterGenerator();
        $parameter->setName('request');
        $parameter->setType($parameter_type);

        $method = new MethodGenerator();
        $method->setName($lcfirst_action . $ucfirst_model);
        $method->setParameter($parameter);
        $method->setReturnType($return_type);

        $generator = $this->getBaseClassData()->getGenerator();
        $generator->addMethodFromGenerator($method);

        $properties = [];

        foreach ($this->fields as $field) {
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

        $url = $this->url ?: $lcfirst_model;
        $url = trim($url, '/');

        $body = <<<EOD
\$url = '/$url';

/** @var $return_type \$response */
\$response = \$this->doRequest(new $return_type(), 'delete', \$url, [

EOD;

        foreach ($properties as $name => $type) {
            $body .= "'$name' => \$request->$name," . PHP_EOL;
        }

        $body .= <<<EOD
]);

return \$response;
EOD;

        $method->setBody($body);

        $this->generateRequest($lcfirst_action, $properties);
        $this->generateResponse($lcfirst_action);
    }
}
