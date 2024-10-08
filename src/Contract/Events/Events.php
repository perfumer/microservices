<?php

namespace Perfumer\Microservices\Contract\Events;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\RequestModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\UpsertModel;

/**
 * @GetModel(microservice="events", model="module", fields={"with_tags.bool"})
 * @GetModels(microservice="events", model="modules", fields={"name", "code", "description", "ticket_crm_module", "is_archived.bool", "is_scheduled.bool", "user", "has_tags", "has_not_tags", "has_schedules.bool", "with_tags.bool"})
 * @CreateModel(microservice="events", model="module", fields={"name", "customer_name", "description", "customers_ticket_crm_module", "user_ticket_crm_module", "tickets_mode", "allowed_crm_modules", "allowed_crm_module_mode", "is_archived.bool", "weekly_schedule_limit.int", "is_scheduled.bool", "tags"})
 * @UpdateModel(microservice="events", model="module", fields={"name", "customer_name", "description", "customers_ticket_crm_module", "user_ticket_crm_module", "tickets_mode", "allowed_crm_modules", "allowed_crm_module_mode", "is_archived.bool", "weekly_schedule_limit.int", "is_scheduled.bool", "tags"})
 * @DeleteModel(microservice="events", model="module")
 * @CreateModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @CreateModel(microservice="events", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 * @GetModels(microservice="events", model="participants", fields={"event_id", "is_scheduled.bool", "user", "customer", "nb_invites",
 *     "module_id", "format", "event_opened_at.date", "event_closed_at.date", "created_at.date", "updated_at.date"})
 * @GetModel(microservice="events", model="participant", fields={"id.int", "event_id.int", "customer_id.int"})
 * @GetModels(microservice="events", model="events", fields={"locale", "module_id", "title", "image",
 *     "description", "format", "location", "opened_at.date", "closed_at.date", "apply_from.date", "apply_till.date", "published_at.date",
 *     "nb_invites_per_participant.int", "nb_invites.int", "is_scheduled.bool", "is_disabled.bool"})
 *
 * @CreateModel(microservice="events", model="participant", fields={"event_id", "module_id", "user", "customer", "ticket", "opened_at", "closed_at", "nb_invites", "silent.bool"})
 * @GetModel(microservice="events", model="participant", action="check", url="/participant/check", fields={"module_id", "user", "customer", "ticket", "format", "opened_at", "closed_at"})
 * @DeleteModel(microservice="events", model="participant")
 *
 * @GetModel(microservice="events", model="event", fields={"locale"})
 * @CreateModel(microservice="events", model="event", fields={"id.int", "module_id.int", "locale", "user", "ticket", "is_registration_open.bool", "title", "image",
 *     "description", "html", "json", "format", "location", "opened_at", "closed_at", "apply_from", "apply_till", "published_at", "nb_invites_per_participant", "nb_invites",
 *     "is_confirm_required.bool", "confirmed_at", "is_review_needed.bool", "is_statement_needed.bool", "registration_form", "user_speakers.array", "hidden_files.array"})
 * @DeleteModel(microservice="events", model="event", fields={"id.int", "ticket"})
 * @CreateModel(microservice="events", model="event", fields={"id.int"}, url="/event/reject", action="reject")
 * @CreateModel(microservice="events", model="event", fields={"id.int"}, url="/event/publish", action="publish")
 * @CreateModel(microservice="events", model="event", fields={"id.int"}, url="/event/enable", action="enable")
 * @CreateModel(microservice="events", model="event", fields={"id.int"}, url="/event/disable", action="disable")
 * @CreateModel(microservice="events", model="event", fields={"id.int"}, url="/event/tickets", action="reset", submodel="EventTickets")
 * @CreateModel(microservice="events", model="event", fields={"id.int"}, url="/event/allow-tickets", action="allow", submodel="EventTickets")
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
 * @GetModel(microservice="events", model="schedule", fields={"id.int", "code"}, url="/schedule", response_fields={"schedule.array"})
 * @DeleteModel(microservice="events", model="schedule", fields={"id.int", "code", "force.bool"}, url="/schedule", response_fields={"schedule.array"})
 * @CreateModel(microservice="events", model="schedule", fields={"user", "module_id", "code", "week_day", "date", "time_from", "time_to", "format", "is_protected.bool", "silent.bool"}, url="/schedule", response_fields={"schedule.array"})
 * @UpdateModel(microservice="events", model="schedule", fields={"id.int", "user", "module_id", "code", "week_day", "date", "time_from", "time_to", "format", "is_protected.bool"}, url="/schedule", response_fields={"schedule.array"})
 * @UpsertModel(microservice="events", model="schedule", fields={"user", "module_id", "code", "week_day", "date", "time_from", "time_to", "format", "is_protected.bool"}, url="/schedule")
 * @GetModels(microservice="events", model="schedules", fields={"user", "module_id.int", "week_day.int", "date.date", "format"}, response_fields={"schedules.array"}, url="/schedules")
 * @GetModels(microservice="events", model="schedules", submodel="AvailableSchedules", fields={"user", "customer", "format", "ticket", "module_id.int", "min_date", "max_date", "days_duration.int", "duration.int"}, url="/schedule/available", response_fields={"available.array", "possible_times.array"})
 *
 * @CreateModel(microservice="events", model="user", fields={"user", "module_id.int"}, action="add", submodel="UserModule", url="/user/module")
 * @DeleteModel(microservice="events", model="user", fields={"user", "module_id.int"}, action="delete", submodel="UserModule", url="/user/module")
 * @GetModels(microservice="events", model="user", fields={"user", "module_id", "has_tags", "has_not_tags"}, submodel="UserModules", url="/user/modules", response_fields={"modules"})
 * @GetModels(microservice="events", model="users", fields={"module_id.int", "module_code", "format", "has_schedules.bool", "has_tags", "has_not_tags"}, response_fields={"schedules"})
 *
 * @GetModel(microservice="events", model="oauth", submodel="OauthStatus", fields={"user", "customer", "redirect_uri"}, url="/oauth/status", response_fields={"login_url", "email"})
 * @CreateModel(microservice="events", model="oauth", action="logout", fields={"user", "customer"}, url="/oauth/logout")
 *
 * @GetModels(microservice="events", model="customer", submodel="CustomerScheduledEventsStats", url="/customer/stats/scheduled-events", fields={"customer"}, response_fields={"stats"})
 * @GetModels(microservice="events", model="user", submodel="UserScheduledEventsStats", url="/user/stats/scheduled-events", fields={"user"}, response_fields={"stats"})
 *
 * @CreateModel(microservice="events", model="Zoom", submodel="ZoomMeeting", fields={"ticket", "start_url_field", "join_url_field", "duration_field", "record_field", "start_at", "end_at"}, url="/zoom/meeting")
 *
 */
interface Events
{
}
