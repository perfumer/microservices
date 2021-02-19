<?php

namespace Perfumer\Microservices\Contract\Ncanode;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;

/**
 * @GetModel(microservice="ncanode", model="signature", fields={"id.int", "document", "chain", "stage"})
 * @DeleteModel(microservice="ncanode", model="signature", fields={"id.int"})
 * @SaveModel(microservice="ncanode", model="signature", fields={"document", "chain", "stage", "parent.int", "signature", "tags.array"})
 * @GetModels(microservice="ncanode", model="signatures", fields={"document", "chain", "stage", "tags.array"})
 *
 * @SaveModel(microservice="ncanode", model="origin", action="do", fields={"method", "version", "params.array"})
 *
 * @SaveModel(microservice="ncanode", model="validate", action="do", fields={"cms", "xml", "iin", "bin", "rule", "expiration.bool"})
 */
interface Ncanode
{
}