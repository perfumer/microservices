<?php

namespace Perfumer\Microservices\Contract\Crm;

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
 * @GetModelByCode(microservice="crm", model="permission")
 * @DeleteModelByCode(microservice="crm", model="permission")
 * @SaveMeshModel(microservice="crm", model="permission", fields={"name", "code", "description"})
 * @GetMeshModels(microservice="crm", model="permissions", fields={"name", "code", "description"})
 *
 * @GetModelByCode(microservice="crm", model="calendar")
 * @DeleteModelByCode(microservice="crm", model="calendar")
 * @SaveModel(microservice="crm", model="calendar", fields={"name", "code"})
 * @GetModels(microservice="crm", model="calendars", fields={"name", "code"})
 *
 * @GetModelByCode(microservice="crm", model="role")
 * @DeleteModelByCode(microservice="crm", model="role")
 * @SaveModel(microservice="crm", model="role", fields={"name", "code"})
 * @GetModels(microservice="crm", model="roles", fields={"name", "code"})
 *
 * @GetModelByCode(microservice="crm", model="group")
 * @DeleteModelByCode(microservice="crm", model="group")
 * @SaveMeshModel(microservice="crm", model="group", fields={"name", "code", "category"})
 * @GetMeshModels(microservice="crm", model="groups", fields={"name", "code", "category"})
 *
 * @GetModel(microservice="crm", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="crm", model="modules", fields={"name", "code", "description", "is_archived.bool", "process"})
 * @SaveMeshModel(microservice="crm", model="module", fields={"id.int", "code", "name", "description", "is_archived.bool", "process", "payload.array", "fields.array", "fields_page_id.int"})
 * @DeleteModel(microservice="crm", model="module", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="crm", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 * @GetModelByCode(microservice="crm", model="activity")
 * @DeleteModelByCode(microservice="crm", model="activity")
 * @SaveModel(microservice="crm", model="activity", fields={"name", "code", "priority"})
 * @GetModels(microservice="crm", model="activities", fields={"name", "code", "priority"})
 *
 * @GetModel(microservice="crm", model="user", submodel="UserCredentials", fields={"iin", "phone", "email", "password", "code"}, response_fields={"user"}, url="/user/credentials")
 * @GetModel(microservice="crm", model="user", fields={"id", "code"})
 * @DeleteModel(microservice="crm", model="user", fields={"id", "code"})
 * @SaveModel(microservice="crm", model="user", fields={"id", "last_name", "first_name", "mid_name", "code"})
 * @GetModels(microservice="crm", model="users", fields={"last_name", "first_name", "mid_name", "code"})
 *
 * @SaveModel(microservice="crm", model="user", fields={"user_id", "group_id", "role_id"}, action="add", submodel="UserRole", url="/user-role")
 * @DeleteModel(microservice="crm", model="user", fields={"user_id", "group_id", "role_id"}, action="delete", submodel="UserRole", url="/user-role")
 *
 * @GetModel(microservice="crm", model="schedule", fields={"role", "group", "activity", "calendar"})
 * @DeleteModel(microservice="crm", model="schedule", fields={"role", "group", "activity", "calendar"})
 * @SaveModel(microservice="crm", model="schedule", fields={"role", "group", "activity", "calendar"})
 * @GetModels(microservice="crm", model="schedules", fields={"role", "group", "activity", "calendar"})
 *
 * @GetModel(microservice="crm", model="access", fields={"role", "group"})
 * @DeleteModel(microservice="crm", model="access", fields={"role", "group"})
 * @SaveModel(microservice="crm", model="access", fields={"role", "group", "permissions.array"})
 * @GetModels(microservice="crm", model="accesses", fields={"role", "group"})
 *
 * @GetModel(microservice="crm", model="ticket", fields={"id", "code"})
 * @DeleteModelByCode(microservice="crm", model="ticket")
 * @SaveModel(microservice="crm", model="ticket", fields={"name", "customer", "module", "code", "process.int", "deadline_at", "opened_at", "closed_at", "payload.array"})
 * @GetModels(microservice="crm", model="tickets", fields={"name", "customer", "module", "code", "process.int", "process_state.int", "deadline_at", "opened_at", "closed_at"})
 *
 * @SaveModel(microservice="crm", model="log", url="ticket/log", action="saveTicket", fields={"ticket", "ticket_id", "type", "text", "user", "code", "status", "close_status", "form", "payload.array"})
 * @DeleteModelByCode(microservice="crm", model="log", url="ticket/log", action="deleteTicket")
 * @GetModels(microservice="crm", model="logs", url="ticket/logs", action="getTicket", fields={"ticket", "ticket_id", "type", "text", "user", "code", "status", "close_status", "form"})
 *
 * @UpdateModel(microservice="crm", model="processState", url="ticket/process-state", action="updateTicket", fields={"id.int", "code", "process_state.int"})
 *
 * @GetModels(microservice="crm", model="tasks", url="ticket/tasks", action="getTicket", fields={"user", "activity", "ticket", "ticket_id", "group", "code", "deadline_at", "wake_at", "closed_at", "complexity", "state", "description", "link", "close_status"})
 *
 * @GetModelByCode(microservice="crm", model="task")
 * @DeleteModelByCode(microservice="crm", model="task")
 * @SaveModel(microservice="crm", model="task", fields={"user", "activity", "ticket", "group", "code", "deadline_at", "wake_at", "closed_at", "complexity", "state", "description", "link", "close_status", "payload.array"})
 * @GetModels(microservice="crm", model="tasks", fields={"user", "activity", "ticket", "group", "code", "deadline_at", "wake_at", "closed_at", "complexity", "state", "description", "link", "close_status"})

 * @GetModel(microservice="crm", model="customer", submodel="CustomerCredentials", fields={"iin", "phone", "email", "password", "code"}, response_fields={"customer"}, url="/customer/credentials")
 * @GetModel(microservice="crm", model="customer", fields={"id", "code", "iin", "phone", "email"})
 * @DeleteModel(microservice="crm", model="customer", fields={"id", "code"})
 * @SaveModel(microservice="crm", model="customer", fields={"avatar", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password"})
 * @UpdateModel(microservice="crm", model="customer", fields={"id", "avatar", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password"})
 * @GetModels(microservice="crm", model="customers", fields={"last_name", "first_name", "mid_name", "email", "phone", "iin", "code"})
 *
 * @GetModel(microservice="crm", model="process", fields={"id"})
 * @DeleteModel(microservice="crm", model="process", fields={"id"})
 * @SaveModel(microservice="crm", model="process", fields={"name", "description"})
 * @UpdateModel(microservice="crm", model="process", fields={"id", "name", "description"})
 * @GetModels(microservice="crm", model="processes", fields={"id", "name", "description"})
 *
 * @SaveModel(microservice="crm", model="state", url="process/state", action="saveProcess", fields={"process.int", "code", "activity", "group", "code", "task_link", "name", "description", "is_initial.bool", "is_final.bool", "log_text"})
 * @UpdateModel(microservice="crm", model="state", url="process/state", action="updateProcess", fields={"id.int", "process.int", "code", "activity", "group", "code", "task_link", "name", "description", "is_initial.bool", "is_final.bool", "log_text"})
 * @DeleteModel(microservice="crm", model="state", url="process/state", action="deleteProcess", fields={"id.int", "process.int"})
 * @GetModels(microservice="crm", model="states", url="process/states", action="getProcess", fields={"process.int"})
 */
interface Crm
{
}
