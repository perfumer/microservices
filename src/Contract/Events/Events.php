<?php

namespace Perfumer\Microservices\Contract\Events;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\SaveMeshModel;
use Perfumer\Microservices\Annotation\SaveModel;

/**
 * @GetModel(microservice="events", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="events", model="modules", fields={"name", "code", "description", "is_archived.bool"})
 * @SaveMeshModel(microservice="events", model="module", fields={"id", "code", "name", "description", "is_archived.bool"})
 * @DeleteModel(microservice="events", model="module", fields={"id", "code"})
 * @SaveModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 */
interface Events
{
}
