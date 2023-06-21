<?php

namespace Perfumer\Microservices\Annotation;

use Perfumerlabs\Perfumer\ContractClassAnnotation;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\DocBlockGenerator;
use Laminas\Code\Generator\MethodGenerator;
use Laminas\Code\Generator\PropertyGenerator;

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
        $options = $this->getOptions();
        $class_prefix = $options['class_prefix'] ?? 'Perfumer\\Microservices';
        $generated_src_path = $options['generated_src_path'] ?? 'generated/src';
        $src_path = $options['src_path'] ?? 'src';
        $root_dir = rtrim($options['root_dir'], '/').'/' ?? __DIR__ . '/../../';
        $path = $base ? $generated_src_path : $src_path;
        $prefix = $base ? 'Generated\\' : '';

        $output_name = str_replace('\\', '/', trim(str_replace($prefix . $class_prefix, '', $generator->getNamespaceName()), '\\'));

        if ($output_name) {
            $output_name .= '/';
        }

        $output_name = sprintf($root_dir . '%s/%s', $path, $output_name);

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
        $options = $this->getOptions();
        $class_prefix = $options['class_prefix'] ?? 'Perfumer\\Microservices';
        $contract_prefix = $options['contract_prefix'] ?? 'Perfumer\\Microservices\\Contract';
        $namespace = str_replace($contract_prefix, $class_prefix, $this->getReflectionClass()->getName());
        $namespace = str_replace($microservice.'\\'.$microservice, $microservice, $namespace);

        // Base Request
        $base_generator = new ClassGenerator();
        $base_generator->setNamespaceName(sprintf('Generated\\%s\\Request\\%s', $namespace, $ucfirst_model));
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
        $get_body_body = '$array = [];' . PHP_EOL;

        foreach ($properties as $property_name => $property_type) {
            $get_body_body .= <<<EOD
if (!\$this->$property_name instanceof \\Perfumer\\Microservices\\Undefined) {
    \$array['$property_name'] = \$this->$property_name;
}

EOD;
        }

        $get_body_body .= <<<EOD
return \$array;
EOD;

        $get_body->setBody($get_body_body);
        $base_generator->addMethodFromGenerator($get_body);

        $this->generateClass($base_generator, 'Request', true);

        // Request
        $generator = new ClassGenerator();
        $generator->setNamespaceName(sprintf('%s\\Request\\%s', $namespace, $ucfirst_model));
        $generator->setName(sprintf('%s%sRequest', $action, $submodel));
        $generator->setExtendedClass('\\' . $base_generator->getNamespaceName() . '\\' . $base_generator->getName());

        $this->generateClass($generator, 'Request', false);
    }

    protected function generateResponse($action, $submodel, $properties = [])
    {
        $action = ucfirst($action);
        $microservice = ucfirst($this->microservice);
        $ucfirst_model = ucfirst($this->model);
        $options = $this->getOptions();
        $class_prefix = $options['class_prefix'] ?? 'Perfumer\\Microservices';
        $contract_prefix = $options['contract_prefix'] ?? 'Perfumer\\Microservices\\Contract';
        $namespace = str_replace($contract_prefix, $class_prefix, $this->getReflectionClass()->getName());
        $namespace = str_replace($microservice.'\\'.$microservice, $microservice, $namespace);

        // Base response
        $base_generator = new ClassGenerator();
        $base_generator->setNamespaceName(sprintf('Generated\\%s\\Response\\%s', $namespace, $ucfirst_model));
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
        $generator->setNamespaceName(sprintf('%s\\Response\\%s', $namespace, $ucfirst_model));
        $generator->setName(sprintf('%s%sResponse', $action, $submodel));
        $generator->setExtendedClass('\\' . $base_generator->getNamespaceName() . '\\' . $base_generator->getName());

        $this->generateClass($generator, 'Response', false);
    }
}
