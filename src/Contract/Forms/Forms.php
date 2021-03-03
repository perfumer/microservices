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
use Perfumer\Microservices\Annotation\UpdateModel;

/**
 * @GetModel(microservice="forms", model="form", fields={"user_id.int", "customer_id.int", "ticket_id.int", "module", "id.int"})
 * @DeleteModel(microservice="forms", model="form", fields={"id.int", "user_id.int", "customer_id.int", "ticket_id.int", "module"})
 * @SaveModel(microservice="forms", model="form", fields={"name", "ticket_id.int", "user_id.int", "customer_id.int", "schema", "module", "fields.array", "payload.array"})
 * @SaveModel(microservice="forms", model="forms", submodel="FormsTicket", url="/forms/ticket", fields={"user_id.int", "customer_id.int", "ticket_id.int", "module"})
 * @GetModels(microservice="forms", model="forms", fields={"module_name", "customer_fio", "user_fio", "name", "schema", "module", "ticket_id.int", "user_id.int", "customer_id.int"})
 *
 * @GetModel(microservice="forms", model="item", fields={"id", "code", "locale", "reference"})
 * @DeleteModel(microservice="forms", model="item", fields={"id"})
 * @SaveMeshModel(microservice="forms", model="item", fields={"id", "value", "name", "code", "new_code", "reference_code", "reference_id"})
 * @GetMeshModels(microservice="forms", model="items", fields={"name", "code", "locale", "reference"})
 *
 * @GetModel(microservice="forms", model="field", fields={"id.int", "locale"})
 * @DeleteModel(microservice="forms", model="field", fields={"id.int"})
 * @SaveModel(microservice="forms", model="field", fields={"label.array", "type", "model", "module", "is_required.bool"})
 * @UpdateModel(microservice="forms", model="field", fields={"id.int", "type", "label.array", "model", "module", "is_required.bool"})
 * @GetModels(microservice="forms", model="fields", fields={"label", "type", "model", "locale", "module"})
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
 * @GetModel(microservice="forms", model="article", fields={"id", "locale", "code"})
 * @DeleteModel(microservice="forms", model="article", fields={"id"})
 * @SaveModel(microservice="forms", model="article", fields={"id", "image", "category_id.int", "title", "description", "code", "html", "json", "locale", "ticket_modules.array"})
 * @GetModels(microservice="forms", model="articles", fields={"category", "title", "description", "code", "locale", "ticket_module"})
 *
 * @SaveModel(microservice="forms", model="signature", fields={"signature", "data", "user_id.int", "customer_id.int", "ticket_id.int", "module"})
 *
 * @GetModel(microservice="forms", model="ncaDocument", response_fields={"nca_document"}, url="/nca-document", fields={"id.int", "code"})
 * @DeleteModel(microservice="forms", model="ncaDocument", response_fields={"nca_document"}, url="/nca-document", fields={"id.int", "code"})
 * @SaveModel(microservice="forms", model="ncaDocument", response_fields={"nca_document"}, url="/nca-document", fields={"code", "url", "description"})
 * @UpdateModel(microservice="forms", model="ncaDocument", response_fields={"nca_document"}, url="/nca-document", fields={"id.int", "code", "url", "description"})
 * @GetModels(microservice="forms", model="ncaDocuments", response_fields={"nca_documents"}, url="/nca-documents", fields={"code", "description"})
 */
interface Forms
{
}
