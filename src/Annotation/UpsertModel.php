<?php


namespace Perfumer\Microservices\Annotation;

/**
 * @Annotation
 * @Target("CLASS")
 */
class UpsertModel extends RequestModel
{
    /**
     * @var string
     */
    public $action = 'upsert';

    /**
     * @var string
     */
    public $request_method = 'patch';
}