<?php

namespace Perfumer\Microservices\Contract\Box;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;

/**
 * @GetModels(microservice="box", model="clients", fields={"name", "secret", "is_admin.bool", "is_disabled.bool"})
 * @GetModel(microservice="box", model="client", fields={"id.int", "name"})
 * @CreateModel(microservice="box", model="client", fields={"name", "secret", "is_admin.bool", "is_disabled.bool", "description"})
 * @UpdateModel(microservice="box", model="client", fields={"id.int", "secret", "is_admin.bool", "is_disabled.bool", "description"})
 * @DeleteModel(microservice="box", model="client", fields={"id.int", "name"})
 *
 * @GetModels(microservice="box", model="collections", fields={"name", "type", "is_disabled.bool"})
 * @GetModel(microservice="box", model="collection", fields={"id.int", "name"})
 * @CreateModel(microservice="box", model="collection", fields={"name", "type", "handler", "is_disabled.bool", "description"})
 * @UpdateModel(microservice="box", model="collection", fields={"id.int", "type", "handler", "is_disabled.bool", "description"})
 * @DeleteModel(microservice="box", model="collection", fields={"id.int", "name"})
 *
 * @GetModels(microservice="box", model="accesses", fields={"client.int", "collection.int", "level", "search"})
 * @GetModel(microservice="box", model="access", fields={"id.int", "client.int", "collection.int"})
 * @CreateModel(microservice="box", model="access", fields={"client.int", "collection.int", "level"})
 * @DeleteModel(microservice="box", model="access", fields={"id.int", "client.int", "collection.int", "level"})
 *
 * @GetModels(microservice="box", model="documents", fields={"id.int", "collection"})
 * @GetModels(microservice="box", model="documents", fields={"id.int", "collection"}, action="count", url="/documents/count")
 * @GetModel(microservice="box", model="document", fields={"id.int", "collection"})
 * @CreateModel(microservice="box", model="document", fields={"uuid", "event", "data", "webhook", "collection"})
 *
 * @GetModels(microservice="box", model="document", fields={"client.int", "collection.int", "uuid", "event", "document_id.int", "status"}, url="/document/logs", submodel="DocumentLogs", response_fields={"logs.array"})
 * @GetModel(microservice="box", model="document", fields={"id.int"}, url="/document/log", submodel="DocumentLog", response_fields={"log.array"})
 */
interface Box
{
}