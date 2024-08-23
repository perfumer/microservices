<?php

namespace Perfumer\Microservices\Contract\Sed;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\RequestModel;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\SaveMeshModel;
use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\UpsertModel;

/**
 * @CreateModel(microservice="sed", model="document", fields={"silent.true", "module", "serial_number_text", "template", "name", "html",
 *     "signed_at", "author_id", "signature", "status", "code", "description", "file", "tickets.array", "substitutions.array", "type"})
 * @SaveModel(microservice="sed", model="document", fields={"silent.true", "module", "serial_number_text", "template", "name", "html",
 *     "signed_at", "author_id", "signature", "status", "code", "description", "file", "tickets.array", "substitutions.array", "type"})
 * @UpdateModel(microservice="sed", model="document", fields={"id.int", "name", "html",
 *     "signed_at", "author_id", "signature", "status",
 *     "code", "description", "file", "substitutions.array", "rebuild.bool"})
 * @DeleteModel(microservice="sed", model="document", fields={"id.int"})
 * @GetModel(microservice="sed", model="document", fields={"id.int", "serial_number_text", "code", "pdf_id"})
 * @GetModels(microservice="sed", model="documents", fields={"module", "template", "status", "name", "author_id",
 *     "ticket_id", "signed_at_from", "signed_at_to", "signers.array",
 *     "created_at_from", "created_at_to", "updated_at_from", "updated_at_to", "type", "serial_number"})
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/publish", action="publish")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/sign", action="sign")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/wait", action="wait")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/reject", action="reject")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/open-sign", action="openSign")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/close-sign", action="closeSign")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/open-link", action="openLink")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/close-link", action="closeLink")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/form", action="form")
 * @CreateModel(microservice="sed", model="document", fields={"id.int", "code"}, url="/document/copy", action="copy")
 *
 * @GetModels(microservice="sed", model="templates", fields={"name", "module", "type"})
 * @GetModel(microservice="sed", model="template", fields={"id.int", "code"})
 * @SaveModel(microservice="sed", model="template", fields={"name", "module", "html", "code", "title", "description", "type", "file", "payload"})
 * @CreateModel(microservice="sed", model="template", fields={"name", "module", "html", "code", "title", "description", "type", "file", "payload"})
 * @UpdateModel(microservice="sed", model="template", fields={"id.int", "code", "name", "module", "html", "code", "title", "description", "type", "file", "payload"})
 * @DeleteModel(microservice="sed", model="template", fields={"id.int", "code"})
 * @CreateModel(microservice="sed", model="template", fields={"id.int", "code"}, url="/template/copy", action="copy")
 *
 * @GetModels(microservice="sed", model="signers", fields={"signer_id", "signer_type", "document", "type", "pdf_id"})
 * @GetModel(microservice="sed", model="signer", fields={"id.int"})
 * @UpsertModel(microservice="sed", model="signer", fields={"signer_id", "signer_type", "document", "type"})
 * @DeleteModel(microservice="sed", model="signer", fields={"id.int"})
 *
 * @GetMeshModels(microservice="sed", model="modules", fields={"name", "code"})
 * @GetModel(microservice="sed", model="module", fields={"id.int", "code"})
 * @SaveMeshModel(microservice="sed", model="module", fields={"name", "code", "serial_number_prefix"})
 * @UpdateModel(microservice="sed", model="module", fields={"id.int", "name", "code", "serial_number_prefix"})
 * @DeleteModel(microservice="sed", model="module", fields={"id.int"})
 *
 * @RequestModel(microservice="sed", model="settings", submodel="Settings", action="get", url="settings", fields={}, response_fields={"sed.array"}, request_method="get")
 * @RequestModel(microservice="sed", model="settings", submodel="Settings", action="save", url="settings", fields={"sed.array"}, request_method="post")
 * @RequestModel(microservice="sed", model="fields", submodel="Fields", action="get", url="fields", fields={}, response_fields={"fields.array"}, request_method="get")
 *
 * @GetModels(microservice="sed", model="signConstraints", fields={"document", "iin", "bin"}, url="/sign-constraints", response_fields={"sign_constraints.array"})
 * @GetModel(microservice="sed", model="signConstraint", fields={"id.int"}, url="/sign-constraint")
 * @SaveModel(microservice="sed", model="signConstraint", fields={"document", "iin", "bin"}, url="/sign-constraint")
 * @UpdateModel(microservice="sed", model="signConstraint", fields={"id.int", "document", "iin", "bin"}, url="/sign-constraint")
 * @DeleteModel(microservice="sed", model="signConstraint", fields={"id.int"}, url="/sign-constraint")
 *
 * @GetModels(microservice="sed", model="documentTickets", fields={"document", "ticket", "module", "template"}, url="/document-tickets", response_fields={"document_tickets.array"})
 * @GetModel(microservice="sed", model="documentTicket", fields={"id.int", "document_id.int"}, url="/document-ticket", response_fields={"document_ticket.array"})
 * @SaveModel(microservice="sed", model="documentTicket", fields={"document", "ticket"}, url="/document-ticket")
 * @DeleteModel(microservice="sed", model="documentTicket", fields={"id.int"}, url="/document-ticket")
 *
 * @GetModel(microservice="sed", model="healthcheck")
 * @GetModel(microservice="sed", model="signature", submodel="LastSignature", url="/signature/last", fields={"document_id.int", "code"}, response_fields={"cms"})
 */
interface Sed
{
}