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
 * @GetModels(microservice="events", model="events", fields={"organizer_id", "locale", "author_id", "title", "image",
 *     "description", "opened_at_from", "opened_at_to", "closed_at_from", "closed_at_to", "apply_from_from",
 *     "apply_from_to", "apply_till_from", "apply_till_to", "published_at"})
 *
 * @SaveModel(microservice="events", model="participant", fields={"event_id", "customer_id"})
 * @UpdateModel(microservice="events", model="participant", fields={"id.int", "event_id", "customer_id"})
 * @DeleteModel(microservice="events", model="participant", fields={"id.int"})
 *
 * @GetModel(microservice="events", model="event", fields={"id.int", "locale"})
 * @SaveModel(microservice="events", model="event", fields={"id.int", "modules.array", "organizer_id", "locale", "author_id", "is_registration_open.bool", "title", "image",
 *     "description", "html", "json", "opened_at", "closed_at", "apply_from", "apply_till", "published_at"})
 * @DeleteModel(microservice="events", model="event", fields={"id.int"})
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/reject", action="reject")
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/publish", action="publish")
 *
 */
interface Events
{
}
