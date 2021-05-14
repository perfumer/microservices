<?php

namespace Perfumer\Microservices\Contract\Ncanode;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;

/**
 * @GetModel(microservice="ncanode", model="signature", fields={"document", "thread"})
 * @DeleteModel(microservice="ncanode", model="signature", fields={"document", "thread"})
 * @CreateModel(microservice="ncanode", model="signature", fields={"document", "thread", "cms", "tags.array", "version.int", "version_comment", "version_created_by"})
 * @GetModels(microservice="ncanode", model="signatures", fields={"document", "thread", "tag"})
 *
 * @SaveModel(microservice="ncanode", model="origin", action="do", fields={"method", "version", "params.array"})
 *
 * @SaveModel(microservice="ncanode", model="validate", action="do", fields={"cms", "xml", "iin", "bin", "rule", "expiration.bool", "criteria"})
 */
interface Ncanode
{
}