<?php

namespace Perfumer\Microservices\Contract\Events;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\SaveMeshModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;

/**
 * @GetModel(microservice="events", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="events", model="modules", fields={"name", "code", "description", "is_archived.bool"})
 * @SaveMeshModel(microservice="events", model="module", fields={"id", "code", "name", "description", "is_archived.bool"})
 * @DeleteModel(microservice="events", model="module", fields={"id", "code"})
 * @SaveModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 * @GetModels(microservice="events", model="participants", fields={"event_id", "customer_id"})
 * @GetModel(microservice="events", model="participant", fields={"id.int"})
 * @GetModels(microservice="events", model="events", fields={"organizer_id", "locale", "module_id.int", "author_id", "title", "image",
 *     "description", "opened_at_from", "opened_at_to", "closed_at_from", "closed_at_to", "apply_from_from",
 *     "apply_from_to", "apply_till_from", "apply_till_to", "published_at"})
 *
 * @SaveModel(microservice="events", model="participant", fields={"event_id", "customer_id"})
 * @UpdateModel(microservice="events", model="participant", fields={"id.int", "event_id", "customer_id"})
 * @DeleteModel(microservice="events", model="participant", fields={"id.int"})
 *
 * @GetModel(microservice="events", model="event", fields={"id.int", "locale"})
 * @SaveModel(microservice="events", model="event", fields={"id.int", "modules.array", "organizer_id", "locale", "author_id", "is_registration_open.bool", "title", "image",
 *     "description", "html", "json", "format",  "opened_at", "closed_at", "apply_from", "apply_till", "published_at"})
 * @DeleteModel(microservice="events", model="event", fields={"id.int"})
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/reject", action="reject")
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/publish", action="publish")
 *
 * @GetModel(microservice="events", model="events", submodel="ConnectorEvents", fields={"parent", "limit.int", "is_archived.bool", "is_deep.bool", "locale", "id_key", "organizer_id_key", "opened_at_key", "closed_at_key", "apply_from_key", "apply_till_key", "published_at_key", "is_registration_open_key", "status_key", "format_key", "author_id_key", "image_key", "title_key", "description_key", "html_key", "json_key" }, url="/connector/events", action="get")
 */
interface Events
{
}
