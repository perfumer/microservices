<?php

namespace Perfumer\Microservices\Contract\Queue;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\SaveModel;

/**
 * @CreateModel(microservice="queue", model="task", fields={"worker", "url", "method", "delay", "json", "datetime", "headers", "query_string", "body", "sleep", "timeout"})
 * @CreateModel(microservice="queue", model="fraction", fields={"min", "max", "gap", "worker", "url", "method", "delay", "json", "datetime", "headers", "query_string", "body", "sleep", "timeout"})
 */
interface Queue
{

}