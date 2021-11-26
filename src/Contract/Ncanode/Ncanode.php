<?php

namespace Perfumer\Microservices\Contract\Ncanode;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;

/**
 * deprecated
 * @SaveModel(microservice="ncanode", model="validate", action="do", fields={"cms", "xml", "iin", "bin", "rule", "expiration.bool", "criteria"})
 *
 * actual
 * @GetModel(microservice="ncanode", model="signature", fields={"document", "thread"})
 * @DeleteModel(microservice="ncanode", model="signature", fields={"document", "thread"})
 * @CreateModel(microservice="ncanode", model="signature", fields={"document", "thread", "cms", "tags.array", "version.int", "version_comment", "version_created_by", "silent.bool"})
 * @GetModels(microservice="ncanode", model="signatures", fields={"document", "thread", "tag"})
 *
 * @CreateModel(microservice="ncanode", model="origin", action="do", fields={"method", "version", "params.array"})
 *
 * @CreateModel(microservice="ncanode", model="cms", action="validate", url="/cms/validate", fields={"cms", "data", "document", "thread", "iin", "bin", "rule", "constraints.array", "verify_ocsp.bool", "verify_crl.bool"})
 * @CreateModel(microservice="ncanode", model="cms", action="extract", url="/cms/extract", fields={"cms"}, response_fields={"data"})
 */
interface Ncanode
{
}