<?php

namespace Perfumer\Microservices\Contract\Box;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\GetModel;

/**
 * @GetModel(microservice="box", model="documents", action="count", url="/documents/count", fields={"id.int", "collection"})
 * @GetModel(microservice="box", model="document", fields={"id.int", "collection"})
 * @CreateModel(microservice="box", model="document", fields={"collection", "event", "uuid", "data.array", "webhook"})
 */
interface Box
{
}