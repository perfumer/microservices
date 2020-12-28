<?php

require_once 'vendor/autoload.php';

$generator = new \Perfumerlabs\Perfumer\Generator(__DIR__, [
    'generated_annotation_path' => 'generated/annotation',
    'generated_src_path' => 'generated/src',
    'generated_tests_path' => 'generated/tests',
    'src_path' => 'src',
    'tests_path' => 'tests',
    'contract_prefix' => 'Perfumer\\Microservices\\Contract',
    'context_prefix' => 'Perfumer\\Microservices',
    'class_prefix' => 'Perfumer\\Microservices',
    'prettify' => true
]);

$generator->addModule(\Perfumer\Microservices\Annotation\Module::class);
$generator->addContractDirectory(__DIR__ . '/src/Contract/');

$generator->generateAll();
