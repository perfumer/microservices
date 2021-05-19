<?php

namespace Perfumer\Microservices\Annotation;

use Perfumerlabs\Perfumer\ContractClassAnnotation;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * @Annotation
 * @Target("CLASS")
 */
class LayoutAnnotation extends ContractClassAnnotation
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $microservice;

    protected function generateClass(ClassGenerator $generator, string $type, bool $base): void
    {
        $ucfirst_model = ucfirst($this->model);
        $microservice = ucfirst($this->microservice);

        $path = $base ? 'generated/src' : 'src';

        $output_name = sprintf(__DIR__ . '/../../%s/%s/%s/%s/', $path, $microservice, $type, $ucfirst_model);

        @mkdir($output_name, 0777, true);

        $output_name = $output_name . $generator->getName() . '.php';

        if ($base === false && is_file($output_name)) {
            return;
        }

        $code = '<?php' . PHP_EOL . PHP_EOL . $generator->generate();

        file_put_contents($output_name, $code);
    }

    protected function generateRequest($url, $request_method, $action, $submodel, $properties = [])
    {
        $action = ucfirst($action);
        $ucfirst_model = ucfirst($this->model);
        $microservice = ucfirst($this->microservice);

        // Base Request
        $base_generator = new ClassGenerator();
        $base_generator->setNamespaceName(sprintf('Generated\\Perfumer\\Microservices\\%s\\Request\\%s', $microservice, $ucfirst_model));
        $base_generator->setName(sprintf('%s%sRequest', $action, $submodel));
        $base_generator->setExtendedClass('\\Perfumer\\Microservices\\Request');

        // Constructor generator
        $constructor = new MethodGenerator();
        $constructor->setName('__construct');
        $constructor_body = sprintf('$this->_request_url = \'/%s\';', $url) . PHP_EOL;
        $constructor_body .= sprintf('$this->_request_method = \'%s\';', $request_method) . PHP_EOL;

        foreach ($properties as $property_name => $property_type) {
            $doc_block = DocBlockGenerator::fromArray([
                'tags' => [
                    [
                        'name'        => 'var',
                        'description' => $property_type,
                    ]
                ],
            ]);

            $property = new PropertyGenerator();
            $property->setName($property_name);
            $property->setDocBlock($doc_block);

            if ($property_type === 'array') {
                $property->setDefaultValue([]);
            }

            $base_generator->addPropertyFromGenerator($property);

            $constructor_body .= '$this->' . $property_name . ' = new \\Perfumer\\Microservices\\Undefined();' . PHP_EOL;
        }

        if ($constructor_body) {
            $constructor->setBody($constructor_body);
            $base_generator->addMethodFromGenerator($constructor);
        }

        // getBody generator
        $get_body = new MethodGenerator();
        $get_body->setName('getBody');
        $get_body->setReturnType('array');
        $get_body_body = 'return [' . PHP_EOL;

        foreach ($properties as $property_name => $property_type) {
            $get_body_body .= sprintf('\'%s\' => $this->%s,', $property_name, $property_name) . PHP_EOL;
        }

        $get_body_body .= '];';

        $get_body->setBody($get_body_body);
        $base_generator->addMethodFromGenerator($get_body);

        $this->generateClass($base_generator, 'Request', true);

        // Request
        $generator = new ClassGenerator();
        $generator->setNamespaceName(sprintf('Perfumer\\Microservices\\%s\\Request\\%s', $microservice, $ucfirst_model));
        $generator->setName(sprintf('%s%sRequest', $action, $submodel));
        $generator->setExtendedClass('\\' . $base_generator->getNamespaceName() . '\\' . $base_generator->getName());

        $this->generateClass($generator, 'Request', false);
    }

    protected function generateResponse($action, $submodel, $properties = [])
    {
        $action = ucfirst($action);
        $ucfirst_model = ucfirst($this->model);
        $microservice = ucfirst($this->microservice);

        // Base response
        $base_generator = new ClassGenerator();
        $base_generator->setNamespaceName(sprintf('Generated\\Perfumer\\Microservices\\%s\\Response\\%s', $microservice, $ucfirst_model));
        $base_generator->setName(sprintf('%s%sResponse', $action, $submodel));
        $base_generator->setExtendedClass('\\Perfumer\\Microservices\\Response');

        foreach ($properties as $property_name => $property_type) {
            if (is_numeric($property_name)) {
                $property_name = $property_type;
                $property_type = 'string';
            }

            $doc_block = DocBlockGenerator::fromArray([
                'tags' => [
                    [
                        'name'        => 'var',
                        'description' => $property_type,
                    ]
                ],
            ]);

            $property = new PropertyGenerator();
            $property->setName($property_name);
            $property->setDocBlock($doc_block);

            if ($property_type === 'array') {
                $property->setDefaultValue([]);
            }

            $base_generator->addPropertyFromGenerator($property);
        }


        $this->generateClass($base_generator, 'Response', true);

        // Response
        $generator = new ClassGenerator();
        $generator->setNamespaceName(sprintf('Perfumer\\Microservices\\%s\\Response\\%s', $microservice, $ucfirst_model));
        $generator->setName(sprintf('%s%sResponse', $action, $submodel));
        $generator->setExtendedClass('\\' . $base_generator->getNamespaceName() . '\\' . $base_generator->getName());

        $this->generateClass($generator, 'Response', false);
    }
}
