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
    public $request_method = 'get';

    /**
     * @var string
     */
    public $action = 'get';

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
        $parameter_type = sprintf($parameter_type_string, $microservice, $ucfirst_model, $ucfirst_action, $ucfirst_model);
        $return_type = sprintf($return_type_string, $microservice, $ucfirst_model, $ucfirst_action, $ucfirst_model);

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

        $response_fields[$lcfirst_model] = 'array';

        $url = $this->url ?: $lcfirst_model;
        $url = trim($url, '/');

        $body = <<<EOD
\$url = '/$url';

\$response = \$this->doRequest(new $return_type(), '$this->request_method', \$url, [

EOD;

        foreach ($properties as $name => $type) {
            $body .= "'$name' => \$request->$name," . PHP_EOL;
        }

        $body .= <<<EOD
]);

/** @var $return_type \$response */

EOD;

        foreach ($response_fields as $name => $type) {
            $body .= <<<EOD
\$response->$name = \$this->fetchKeyFromContent(\$response->_content, '$name');

EOD;
        }

        $body .= <<<EOD

return \$response;
EOD;

        $method->setBody($body);

        $this->generateRequest($this->action, $properties);
        $this->generateResponse($this->action, $response_fields);
    }
}
