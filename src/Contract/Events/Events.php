<?php

namespace Perfumer\Microservices\Contract\Events;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\RequestModel;
use Perfumer\Microservices\Annotation\SaveMeshModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\CreateModel;

/**
 * @GetModel(microservice="events", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="events", model="modules", fields={"name", "code", "description", "is_archived.bool"})
 * @SaveMeshModel(microservice="events", model="module", fields={"code", "name", "customer_name", "description", "allowed_crm_module", "allowed_crm_module_mode", "is_archived.bool"})
 * @SaveMeshModel(microservice="events", model="module", fields={"id", "code", "name", "customer_name", "description", "allowed_crm_module", "allowed_crm_module_mode", "is_archived.bool"}, action="update", request_method="patch")
 * @DeleteModel(microservice="events", model="module", fields={"id", "code"})
 * @SaveModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 * @GetModels(microservice="events", model="participants", fields={"event_id", "customer_id", "nb_invites", "has_act.bool",
 *     "event_title", "event_modules", "event_format", "event_created_at_to", "event_created_at_from", "event_opened_at_from", "event_opened_at_to",
 *     "event_closed_at_from", "event_closed_at_to", "event_apply_from_from", "event_apply_from_to", "event_apply_till_from", "event_apply_till_to",
 *     "act_signed_at_from", "act_signed_at_to", "is_act_signed.bool"})
 * @GetModel(microservice="events", model="participant", fields={"id.int", "event_id.int", "customer_id.int"})
 * @GetModels(microservice="events", model="events", fields={"organizer_id", "locale", "module_id.int", "author_id", "title", "image",
 *     "description", "format", "location", "opened_at_from", "opened_at_to", "closed_at_from", "closed_at_to", "apply_from_from",
 *     "apply_from_to", "apply_till_from", "apply_till_to", "published_at", "nb_invites_per_participant", "nb_invites", "is_disabled.bool"})
 *
 * @SaveModel(microservice="events", model="participant", fields={"event_id", "customer_id", "nb_invites"})
 * @UpdateModel(microservice="events", model="participant", fields={"id.int", "event_id", "customer_id", "nb_invites"})
 * @DeleteModel(microservice="events", model="participant", fields={"id.int"})
 *
 * @GetModel(microservice="events", model="event", fields={"id.int", "locale"})
 * @SaveModel(microservice="events", model="event", fields={"id.int", "modules.array", "organizer_id", "locale", "author_id", "user_id", "is_registration_open.bool", "title", "image",
 *     "description", "html", "json", "format", "location", "opened_at", "closed_at", "apply_from", "apply_till", "published_at", "nb_invites_per_participant", "nb_invites",
 *     "is_confirm_required.bool", "confirmed_at", "is_review_needed.bool", "is_statement_needed.bool", "registration_form", "user_speakers.array"})
 * @DeleteModel(microservice="events", model="event", fields={"id.int"})
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/reject", action="reject")
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/publish", action="publish")
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/enable", action="enable")
 * @SaveModel(microservice="events", model="event", fields={"id.int"}, url="/event/disable", action="disable")
 *
 * @GetModel(microservice="events", model="events", submodel="ConnectorEvents", fields={"parent", "except_id", "limit.int", "is_archived.bool", "is_disabled.bool", "is_deep.bool", "locale", "id_key", "organizer_id_key", "modules_key", "opened_at_key", "closed_at_key", "apply_from_key", "apply_till_key", "published_at_key", "is_registration_open_key", "status_key", "format_key", "location_key", "author_id_key", "image_key", "title_key", "description_key", "html_key", "json_key" }, url="/connector/events", action="get")
 *
 * @RequestModel(microservice="events", model="settings", submodel="Settings", action="get", url="settings", fields={}, response_fields={"crm.array", "pub.array"}, request_method="get")
 * @RequestModel(microservice="events", model="settings", submodel="Settings", action="save", url="settings", fields={"crm.array", "pub.array"}, request_method="post")
 *
 * @CreateModel(microservice="events", model="participant", fields={"id.int"}, url="/participant/confirm", action="confirm")
 * @CreateModel(microservice="events", model="participant", fields={"id.int", "act"}, url="/participant/act", action="saveAct")
 * @CreateModel(microservice="events", model="participant", fields={"id.int"}, url="/participant/sign-act", action="signAct")
 *
 * @GetModels(microservice="events", model="reviews", fields={"author_id", "event_id", "rating", "text", "event_title",
 *     "event_modules", "event_format", "event_created_at_to", "event_created_at_from", "event_opened_at_from", "event_opened_at_to",
 *     "event_closed_at_from", "event_closed_at_to", "event_apply_from_from", "event_apply_from_to", "event_apply_till_from",
 *     "event_apply_till_to", "created_at_from", "created_at_to"})
 * @GetModel(microservice="events", model="review", fields={"id.int", "participant_id.int"})
 * @CreateModel(microservice="events", model="review", fields={"author_id", "event", "rating", "text"}, response_fields={"review.array"})
 * @UpdateModel(microservice="events", model="review", fields={"id.int", "author_id", "event", "rating", "text"})
 * @DeleteModel(microservice="events", model="review", fields={"id.int"})
 *
 */
interface Events
{
}
