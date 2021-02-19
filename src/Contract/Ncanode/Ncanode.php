<?php

namespace Perfumer\Microservices\Contract\Ncanode;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;

/**
 * @GetModel(microservice="ncanode", model="signature", fields={"id.int", "code", "tags.array"})
 * @DeleteModel(microservice="ncanode", model="signature", fields={"id.int"})
 * @SaveModel(microservice="ncanode", model="signature", fields={"code", "parent", "signature", "tags.array"})
 * @UpdateModel(microservice="ncanode", model="signature", fields={"id.int", "code", "parent", "signature", "tags.array"})
 * @GetModels(microservice="ncanode", model="signatures", fields={"parent", "tags"})
 *
 * @SaveModel(microservice="ncanode", model="origin", action="do", fields={"method", "version", "params.array"})
 *
 * @SaveModel(microservice="ncanode", model="validate", action="do", fields={"cms", "xml", "iin", "bin", "rule", "expiration.bool"})
 */
interface Ncanode
{
}