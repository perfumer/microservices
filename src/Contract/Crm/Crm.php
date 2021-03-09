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
 * @GetModel(microservice="crm", model="permission", fields={"id", "code"})
 * @DeleteModel(microservice="crm", model="permission", fields={"id.int", "code"})
 * @GetMeshModels(microservice="crm", model="permissions", fields={"name", "code.mixed", "description", "id.mixed"})
 * @SaveMeshModel(microservice="crm", model="permission", fields={"id.int", "code", "name", "description"})
 * @UpdateModel(microservice="crm", model="permission", fields={"id", "name", "code", "description"})
 *
 * @GetModelByCode(microservice="crm", model="calendar")
 * @DeleteModelByCode(microservice="crm", model="calendar")
 * @SaveModel(microservice="crm", model="calendar", fields={"name", "code"})
 * @GetModels(microservice="crm", model="calendars", fields={"name", "code"})
 *
 * @GetModel(microservice="crm", model="role", fields={"id", "code"})
 * @DeleteModel(microservice="crm", model="role", fields={"id", "code"})
 * @SaveModel(microservice="crm", model="role", fields={"name", "code"})
 * @UpdateModel(microservice="crm", model="role", fields={"id", "code", "name"})
 * @GetModels(microservice="crm", model="roles", fields={"name", "code"})
 *
 * @GetModel(microservice="crm", model="group", fields={"id", "code"})
 * @GetMeshModels(microservice="crm", model="groups", fields={"name", "code", "is_archived.bool", "category"})
 * @SaveMeshModel(microservice="crm", model="group", fields={"id.int", "code", "name", "is_archived.bool", "category"})
 * @DeleteModel(microservice="crm", model="group", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="group", fields={"id.int"}, url="/group/archive", action="archive")
 * @SaveModel(microservice="crm", model="group", fields={"id.int"}, url="/group/archive", action="unarchive", request_method="delete")
 *
 * @GetModel(microservice="crm", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="crm", model="modules", fields={"name", "code", "description", "is_archived.bool", "process"})
 * @SaveMeshModel(microservice="crm", model="module", fields={"id.int", "code", "name", "description", "is_archived.bool", "process", "payload.array", "fields.array", "fields_page_id.int"})
 * @DeleteModel(microservice="crm", model="module", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="crm", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 *
 * @GetModel(microservice="crm", model="activity", fields={"id", "code"})
 * @DeleteModel(microservice="crm", model="activity", fields={"id", "code"})
 * @SaveModel(microservice="crm", model="activity", fields={"name", "code", "priority", "is_forced.bool"})
 * @UpdateModel(microservice="crm", model="activity", fields={"id", "name", "code", "priority", "is_forced.bool"})
 * @GetModels(microservice="crm", model="activities", fields={"name", "code", "priority", "is_forced.bool"})
 *
 * @GetModel(microservice="crm", model="user", submodel="UserCredentials", fields={"iin", "phone", "email", "password", "code"}, response_fields={"user"}, url="/user/credentials")
 * @GetModel(microservice="crm", model="user", fields={"id", "code", "iin", "phone", "email"})
 * @DeleteModel(microservice="crm", model="user", fields={"id", "code"})
 * @SaveModel(microservice="crm", model="user", fields={"id", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "is_admin"})
 * @UpdateModel(microservice="crm", model="user", fields={"id", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "is_admin", "is_disabled"})
 * @GetModels(microservice="crm", model="users", fields={"last_name", "first_name", "mid_name", "email", "phone", "iin", "code"})
 * @SaveModel(microservice="crm", model="user", url="user/start-work-session", action="startWorkSession", fields={"user"})
 * @SaveModel(microservice="crm", model="user", url="user/end-work-session", action="endWorkSession", fields={"user"})
 *
 * @SaveModel(microservice="crm", model="user", fields={"user_id", "group_id", "role_id"}, action="add", submodel="UserRole", url="/user-role")
 * @DeleteModel(microservice="crm", model="user", fields={"user_id", "group_id", "role_id"}, action="delete", submodel="UserRole", url="/user-role")
 *
 * @GetModels(microservice="crm", model="user", fields={"user_id", "group_id", "role_id"}, submodel="UserRoles", url="/user-roles", response_fields={"user_roles"})
 *
 * @GetModel(microservice="crm", model="schedule", fields={"role_id", "group_id", "activity_id", "calendar_id"})
 * @DeleteModel(microservice="crm", model="schedule", fields={"role_id", "group_id", "activity_id", "calendar_id"})
 * @SaveModel(microservice="crm", model="schedule", fields={"role_id", "group_id", "activity_id", "calendar_id"})
 * @GetModels(microservice="crm", model="schedules", fields={"role_id", "group_id", "activity_id", "calendar_id"})
 *
 * @GetModel(microservice="crm", model="access", fields={"role_id", "group_id", "permission_id"})
 * @DeleteModel(microservice="crm", model="access", fields={"role_id", "group_id", "permission_id"})
 * @SaveModel(microservice="crm", model="access", fields={"role_id", "group_id", "permission_id"})
 * @GetModels(microservice="crm", model="accesses", fields={"role.mixed", "group.mixed", "permission.mixed"})
 *
 * @GetModel(microservice="crm", model="ticket", fields={"id", "code"})
 * @DeleteModelByCode(microservice="crm", model="ticket")
 * @SaveModel(microservice="crm", model="ticket", fields={"customer", "module", "code", "process.int", "deadline_at", "opened_at", "closed_at", "payload.array"})
 * @GetModels(microservice="crm", model="tickets", fields={"customer.int", "customer_fio", "module_name", "opened_at_from", "opened_at_to", "deadline_at_from", "deadline_at_to", "code", "process.int", "process_state.int", "process_state_name", "closed_at"})
 *
 * @SaveModel(microservice="crm", model="log", url="ticket/log", action="saveTicket", fields={"ticket", "ticket_id", "type", "text", "html", "user", "code", "status", "close_status", "payload.array"})
 * @DeleteModelByCode(microservice="crm", model="log", url="ticket/log", action="deleteTicket")
 * @GetModels(microservice="crm", model="logs", url="ticket/logs", action="getTicket", fields={"user_fio", "ticket", "ticket_id", "type", "text", "user", "code", "status", "close_status"})
 *
 * @GetModels(microservice="crm", model="tasks", url="ticket/tasks", action="getTicket", fields={"state", "close_status", "user_name", "user_id.int", "customer_name", "customer_id.int", "type", "description", "wake_at_from", "wake_at_to", "deadline_at_from", "deadline_at_to", "closed_at_from", "closed_at_to", "expire_at_from", "expire_at_to", "activity", "ticket", "group", "code", "closed_at", "complexity", "state", "description", "link", "close_status"})
 *
 * @GetModel(microservice="crm", model="task", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="task", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="task", fields={"user", "customer", "activity", "ticket", "group", "code", "deadline_at", "wake_at", "closed_at", "complexity", "state", "description", "link", "close_status", "payload.array"})
 * @GetModels(microservice="crm", model="tasks", fields={"state", "close_status", "user_name", "user_id.int", "customer_name", "customer_id.int", "type", "description", "wake_at_from", "wake_at_to", "deadline_at_from", "deadline_at_to", "closed_at_from", "closed_at_to", "expire_at_from", "expire_at_to", "activity", "ticket", "group", "code", "closed_at", "complexity", "state", "description", "link", "close_status"})
 * @SaveModel(microservice="crm", model="task", url="task/close", action="close", fields={"task.int", "process_scenario", "fixes.array", "message"})
 * @SaveModel(microservice="crm", model="task", url="task/postpone", action="postpone", fields={"task.int", "user", "time_to", "text"})
 * @SaveModel(microservice="crm", model="task", url="task/take", action="take", fields={"task.int", "user"})

 * @GetModel(microservice="crm", model="customer", submodel="CustomerCredentials", fields={"iin", "phone", "email", "password", "code"}, response_fields={"customer"}, url="/customer/credentials")
 * @GetModel(microservice="crm", model="customer", fields={"id", "code", "iin", "phone", "email"})
 * @DeleteModel(microservice="crm", model="customer", fields={"id", "code"})
 * @SaveModel(microservice="crm", model="customer", fields={"avatar", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "bin", "org_name", "is_nca_customer.bool"})
 * @UpdateModel(microservice="crm", model="customer", fields={"id", "avatar", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "is_disabled"})
 * @GetModels(microservice="crm", model="customers", fields={"last_name", "first_name", "mid_name", "email", "phone", "iin", "code"})
 *
 * @GetModel(microservice="crm", model="process", fields={"id"})
 * @DeleteModel(microservice="crm", model="process", fields={"id"})
 * @SaveModel(microservice="crm", model="process", fields={"name", "description"})
 * @UpdateModel(microservice="crm", model="process", fields={"id", "name", "description"})
 * @GetModels(microservice="crm", model="processes", fields={"id", "name", "description"})
 *
 * @GetModel(microservice="crm", model="state", url="process/state", action="getProcess", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="state", url="process/state", action="saveProcess", fields={"process.int", "code", "task_link", "name", "description", "is_initial.bool", "is_final.bool", "log_text"})
 * @UpdateModel(microservice="crm", model="state", url="process/state", action="updateProcess", fields={"id.int", "process.int", "code", "task_link", "name", "description", "is_initial.bool", "is_final.bool", "log_text"})
 * @DeleteModel(microservice="crm", model="state", url="process/state", action="deleteProcess", fields={"id.int", "process.int"})
 * @GetModels(microservice="crm", model="states", url="process/states", action="getProcess", fields={"process.int", "code", "name", "description"})
 *
 * @GetModel(microservice="crm", model="scenario", url="process/scenario", action="getProcess", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="scenario", url="process/scenario", action="saveProcess", fields={"code", "from_state", "to_state", "webhook"})
 * @UpdateModel(microservice="crm", model="scenario", url="process/scenario", action="updateProcess", fields={"id.int", "code", "from_state", "to_state", "webhook"})
 * @DeleteModel(microservice="crm", model="scenario", url="process/scenario", action="deleteProcess", fields={"id.int"})
 * @GetModels(microservice="crm", model="scenarios", url="process/scenarios", action="getProcess", fields={"process.int", "code", "from_state", "to_state"})
 *
 * @GetModel(microservice="crm", model="task", url="process/task", action="getProcess", fields={"id.int"})
 * @SaveModel(microservice="crm", model="task", url="process/task", action="saveProcess", fields={"state", "activity", "group", "is_customer.bool"})
 * @UpdateModel(microservice="crm", model="task", url="process/task", action="updateProcess", fields={"id.int", "state", "activity", "group", "is_customer.bool"})
 * @DeleteModel(microservice="crm", model="task", url="process/task", action="deleteProcess", fields={"id.int"})
 * @GetModels(microservice="crm", model="tasks", url="process/tasks", action="getProcess", fields={"process.int", "state", "activity", "group", "is_customer.bool"})
 *
 * @GetModels(microservice="crm", model="user", submodel="UserPermissions", fields={"user.int"}, response_fields={"permissions.array", "is_admin.bool"}, url="/user/permissions")
 */
interface Crm
{
}
