<?php

namespace Perfumer\Microservices\Contract\Forms;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\DeleteModelByCode;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModelByCode;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveMeshModel;
use Perfumer\Microservices\Annotation\SaveModel;

/**
 * @GetModelByCode(microservice="forms", model="form")
 * @DeleteModelByCode(microservice="forms", model="form")
 * @SaveModel(microservice="forms", model="form", fields={"name", "code", "schema", "module", "fields.array", "payload.array"})
 * @GetModels(microservice="forms", model="forms", fields={"name", "code", "schema", "module"})
 *
 * @GetModel(microservice="forms", model="item", fields={"id", "code", "locale", "reference"})
 * @DeleteModel(microservice="forms", model="item", fields={"id"})
 * @SaveMeshModel(microservice="forms", model="item", fields={"id", "name", "code", "new_code", "reference_code", "reference_id"})
 * @GetMeshModels(microservice="forms", model="items", fields={"name", "code", "locale", "reference"})
 *
 * @GetModel(microservice="forms", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="forms", model="modules", fields={"name", "code", "description", "is_archived.bool"})
 * @SaveMeshModel(microservice="forms", model="module", fields={"id", "code", "name", "description", "is_archived.bool"})
 * @DeleteModel(microservice="forms", model="module", fields={"id", "code"})
 * @SaveModel(microservice="forms", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="forms", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 * @GetModelByCode(microservice="forms", model="reference")
 * @DeleteModelByCode(microservice="forms", model="reference")
 * @SaveModel(microservice="forms", model="reference", fields={"name", "code", "is_archived.bool"})
 * @GetModels(microservice="forms", model="references", fields={"name", "code", "is_archived.bool"})
 *
 * @GetModel(microservice="forms", model="article", fields={"id", "locale"})
 * @DeleteModel(microservice="forms", model="article", fields={"id", "locale"})
 * @SaveModel(microservice="forms", model="article", fields={"description", "code", "html", "json", "locale", "ticket_modules"})
 * @GetModels(microservice="forms", model="articles", fields={"description", "code", "locale", "ticket_module"})
 */
interface Forms
{
}
