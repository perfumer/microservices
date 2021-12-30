<?php

namespace Perfumer\Microservices\Annotation;

use Laminas\Code\Generator\MethodGenerator;
use Laminas\Code\Generator\ParameterGenerator;

/**
 * @Annotation
 * @Target("CLASS")
 */
class RequestModel extends LayoutAnnotation
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $submodel;

    /**
     * @var string
     */
    public $microservice;

    /**
     * @var array
     */
    public $fields = [];

    /**
     * @var array
     */
    public $response_fields = [];

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $request_method;

    /**
     * @var string
     */
    public $action;

    public function onBuild(): void
    {
        parent::onBuild();

        $ucfirst_model = ucfirst($this->model);
        $lcfirst_model = lcfirst($this->model);
        $microservice = ucfirst($this->microservice);
        $ucfirst_action = ucfirst($this->action);
        $lcfirst_action = lcfirst($this->action);

        $parameter_type_string = '\\Perfumer\\Microservices\\%s\\Request\\%s\\%s%sRequest';
        $return_type_string = '\\Perfumer\\Microservices\\%s\\Response\\%s\\%s%sResponse';
        $parameter_type = sprintf($parameter_type_string, $microservice, $ucfirst_model, $ucfirst_action, $this->submodel);
        $return_type = sprintf($return_type_string, $microservice, $ucfirst_model, $ucfirst_action, $this->submodel);

        $parameter = new ParameterGenerator();
        $parameter->setName('request');
        $parameter->setType($parameter_type);

        $method = new MethodGenerator();
        $method->setName($lcfirst_action . $this->submodel);
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

        $response_fields = [];

        foreach ($this->response_fields as $field) {
            $field = explode('.', $field);

            if (count($field) === 1) {
                $name = $field[0];
                $type = 'string';
            } else {
                $name = $field[0];
                $type = $field[1];
            }

            $response_fields[$name] = $type;
        }

        $url = $this->url ?: $lcfirst_model;
        $url = trim($url, '/');

        $body = <<<EOD
/** @var $return_type \$response */
\$response = \$this->doRequest(\$request, new $return_type());
EOD;

        foreach ($response_fields as $name => $type) {
            $body .= <<<EOD
\$item = \$this->fetchKeyFromContent(\$response->_content, '$name');

if (!\$item instanceof \\Perfumer\\Microservices\\Undefined) {
    \$response->$name = \$item;
}

EOD;
        }

        $body .= <<<EOD

return \$response;
EOD;

        $method->setBody($body);

        $this->generateRequest($url, $this->request_method, $this->action, $this->submodel, $properties);
        $this->generateResponse($this->action, $this->submodel, $response_fields);
    }
}
