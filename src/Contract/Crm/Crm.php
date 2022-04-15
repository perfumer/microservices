<?php

namespace Perfumer\Microservices\Contract\Crm;

use Perfumer\Microservices\Annotation\CopyModel;
use Perfumer\Microservices\Annotation\CreateMeshModel;
use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\DeleteModelByCode;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\MigrateModel;
use Perfumer\Microservices\Annotation\RequestModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateMeshModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\UpsertMeshModel;
use Perfumer\Microservices\Annotation\UpsertModel;

/**
 * @GetModel(microservice="crm", model="permission", fields={"id", "code"})
 * @DeleteModel(microservice="crm", model="permission", fields={"id.int", "code", "force.bool"})
 * @GetMeshModels(microservice="crm", model="permissions", fields={"name", "code.mixed", "description", "id.mixed"})
 * @CreateMeshModel(microservice="crm", model="permission", fields={"id.int", "code", "name", "description", "is_protected.bool"})
 * @UpsertMeshModel(microservice="crm", model="permission", fields={"id.int", "code", "name", "description", "is_protected.bool"} )
 * @UpdateMeshModel(microservice="crm", model="permission", fields={"id", "name", "code", "description", "is_protected.bool"})
 *
 * @GetModel(microservice="crm", model="calendar", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="calendar", fields={"id.int", "code", "force.bool"})
 * @CreateModel(microservice="crm", model="calendar", fields={"name", "code", "entries.array", "is_protected.bool", "silent.bool"})
 * @UpdateModel(microservice="crm", model="calendar", fields={"id.int", "name", "code", "entries.array", "is_protected.bool"})
 * @UpsertModel(microservice="crm", model="calendar", fields={"name", "code", "entries.array", "is_protected.bool"})
 * @GetModels(microservice="crm", model="calendars", fields={"name", "code", "is_protected.bool"})
 *
 * @GetModel(microservice="crm", model="calendarEntry", fields={"id.int", "code"}, url="/calendar-entry", response_fields={"calendar_entry.array"})
 * @DeleteModel(microservice="crm", model="calendarEntry", fields={"id.int", "code", "force.bool"}, url="/calendar-entry", response_fields={"calendar_entry.array"})
 * @CreateModel(microservice="crm", model="calendarEntry", fields={"user", "category", "calendar", "code", "week_day.int", "date", "time_from", "time_to", "is_protected.bool", "silent.bool"}, url="/calendar-entry", response_fields={"calendar_entry.array"})
 * @UpdateModel(microservice="crm", model="calendarEntry", fields={"id.int", "user", "category", "calendar", "code", "week_day.int", "date", "time_from", "time_to", "is_protected.bool"}, url="/calendar-entry", response_fields={"calendar_entry.array"})
 * @UpsertModel(microservice="crm", model="calendarEntry", fields={"user", "category", "calendar", "code", "week_day.int", "date", "time_from", "time_to", "is_protected.bool"}, url="/calendar-entry")
 * @GetModels(microservice="crm", model="calendarEntries", fields={"user", "category", "calendar", "week_day.int", "date", "users_only.bool", "calendars_only.bool"}, response_fields={"calendar_entries.array"}, url="/calendar-entries")
 *
 * @GetModel(microservice="crm", model="role", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="role", fields={"id.int", "code", "force.bool"})
 * @CreateModel(microservice="crm", model="role", fields={"name", "code", "is_protected.bool", "silent.bool"})
 * @UpdateModel(microservice="crm", model="role", fields={"id.int", "name", "code", "is_protected.bool"})
 * @UpsertModel(microservice="crm", model="role", fields={"name", "code", "is_protected.bool"})
 * @GetModels(microservice="crm", model="roles", fields={"name", "code"})
 *
 * @GetModel(microservice="crm", model="group", fields={"id", "code"})
 * @UpsertMeshModel(microservice="crm", model="group", fields={"code", "name", "owner_id.int", "is_archived.bool", "profiles.array", "category", "is_protected.bool", "children.array", "parents.array", "payload.array", "logo", "name_official", "iin_bin", "email", "phone", "fax", "region_id.int", "kato_id.int", "address", "region_official_id.int", "city_official_id.int", "address_official", "transaction_account", "bank_id.int", "correspondent_account"} )
 * @GetMeshModels(microservice="crm", model="groups", fields={"name", "code", "owner_id.int", "is_archived.bool", "category"})
 * @CreateMeshModel(microservice="crm", model="group", fields={"id.int", "code", "name", "owner_id.int", "is_archived.bool", "profiles.array", "category", "is_protected.bool", "payload.array", "logo", "name_official", "iin_bin", "email", "phone", "fax", "region_id.int", "kato_id.int", "address", "region_official_id.int", "city_official_id.int", "address_official", "transaction_account", "bank_id.int", "correspondent_account"})
 * @DeleteModel(microservice="crm", model="group", fields={"id.int", "code", "force.bool"})
 * @GetModels(microservice="crm", model="group", submodel="GroupProfiles", fields={"modules.array", "code", "id.int"}, url="/group/profiles", response_fields={"profiles"})
 * @GetModel(microservice="crm", model="group", submodel="GroupProfile", fields={"module", "code", "id.int"}, url="/group/profile", response_fields={"profile"})
 * @SaveModel(microservice="crm", model="group", fields={"id.int"}, url="/group/archive", action="archive")
 * @SaveModel(microservice="crm", model="group", fields={"id.int"}, url="/group/archive", action="unarchive", request_method="delete")
 *
 * @GetModel(microservice="crm", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="crm", model="modules", fields={"name", "code", "description", "is_archived.bool", "business_case_id.int", "business_case_name"})
 * @CreateMeshModel(microservice="crm", model="module", fields={"code", "name", "customer_name", "description", "is_archived.bool", "business_case.int", "payload.array", "fields.array", "fields_page_id.int", "back_service_page", "is_protected.bool"})
 * @UpdateMeshModel(microservice="crm", model="module", fields={"id.int", "code", "name", "customer_name", "description", "is_archived.bool", "business_case.int", "payload.array", "fields.array", "fields_page_id.int", "back_service_page", "is_protected.bool"})
 * @UpsertMeshModel(microservice="crm", model="module", fields={"id.int", "name", "customer_name", "description", "code",  "is_archived.bool", "is_protected.bool", "parents.array", "children.array", "business_case.int", "payload.array", "fields.array", "fields_page_id.int", "back_service_page"})
 * @DeleteModel(microservice="crm", model="module", fields={"id.int", "code", "force.bool"})
 * @CopyModel(microservice="crm", model="module")
 * @MigrateModel(microservice="crm", model="module")
 * @SaveModel(microservice="crm", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="crm", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 * @CreateModel(microservice="crm", model="module", fields={"module_id", "group_id", "role_id"}, action="add", submodel="ModuleRole", url="/module-role")
 * @DeleteModel(microservice="crm", model="module", fields={"module_id", "group_id", "role_id"}, action="delete", submodel="ModuleRole", url="/module-role")
 * @GetModels(microservice="crm", model="module", fields={"module_id", "group_id", "role_id"}, submodel="ModuleRoles", url="/module-roles", response_fields={"module_roles"})
 * @GetModels(microservice="crm", model="userModules", fields={"user_id.int", "parent_module"}, url="/user-modules", response_fields={"modules"})
 * @GetModel(microservice="crm", model="userModule", fields={"user_id.int", "module"}, url="/user-module", response_fields={"module"})
 *
 * @GetModel(microservice="crm", model="activity", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="activity", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="activity", fields={"name", "customer_name", "code", "priority.int", "is_forced.bool", "is_applicant.bool"})
 * @UpdateModel(microservice="crm", model="activity", fields={"id.int", "name", "customer_name", "code", "priority.int", "is_forced.bool", "is_applicant.bool"})
 * @GetModels(microservice="crm", model="activities", fields={"name", "code", "priority.int", "is_forced.bool", "business_case.int", "is_applicant.bool"})
 *
 * @GetModel(microservice="crm", model="user", submodel="UserCredentials", fields={"iin", "phone", "email", "password", "code", "username"}, response_fields={"user"}, url="/user/credentials")
 * @GetModel(microservice="crm", model="user", fields={"id", "code", "iin", "phone", "email", "username"})
 * @DeleteModel(microservice="crm", model="user", fields={"id", "code"})
 * @SaveModel(microservice="crm", model="user", fields={"telegram_chat_id", "username", "avatar", "id.int", "profiles.array", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "is_admin.bool", "is_disabled.bool", "payload.array", "auto_fields.array", "gender", "locale"})
 * @CreateModel(microservice="crm", model="user", fields={"telegram_chat_id", "silent.bool", "is_protected.bool", "profiles.array", "username", "avatar", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password_hash", "password", "is_admin.bool", "is_disabled.bool", "payload.array", "auto_fields.array", "gender", "locale"})
 * @UpdateModel(microservice="crm", model="user", fields={"telegram_chat_id", "is_protected.bool", "id.int", "profiles.array", "username", "avatar", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password_hash", "password", "is_admin.bool", "is_disabled.bool", "payload.array", "auto_fields.array", "auto_fields_merged.array", "gender", "locale"})
 * @UpdateModel(microservice="crm", model="user", submodel="UserPassword", fields={"user_id.int", "password", "password_confirm", "old_password", "check_old_password.bool", "check_password_confirm.bool"}, url="/user/password")
 * @GetModels(microservice="crm", model="users", fields={"id.array", "role.array", "group.array", "last_name", "first_name", "mid_name", "full_name", "email", "phone", "iin", "code", "is_disabled.bool", "created_at_from", "created_at_to"})
 * @GetModels(microservice="crm", model="user", submodel="UserForms", fields={"user_id.int"}, url="/user/forms", response_fields={"forms"})
 * @GetModels(microservice="crm", model="user", submodel="UserProfiles", fields={"modules.array", "email", "phone", "iin", "code", "username", "id.int", "build.bool"}, url="/user/profiles", response_fields={"profiles.array", "built_profiles.array"})
 * @GetModel(microservice="crm", model="user", submodel="UserProfile", fields={"module", "email", "phone", "iin", "code", "username", "id.int", "build.bool"}, url="/user/profile", response_fields={"profile.array", "built_profile.array"})
 * @SaveModel(microservice="crm", model="user", url="user/work-session", submodel="UserWorkSession", fields={"user"}, response_fields={"is_working.bool"}, action="create")
 * @DeleteModel(microservice="crm", model="user", url="user/work-session", submodel="UserWorkSession", fields={"user"}, response_fields={"is_working.bool"})
 *
 * @CreateModel(microservice="crm", model="user", fields={"user_id.int", "group_id.int", "role_id.int"}, action="add", submodel="UserRole", url="/user-role")
 * @DeleteModel(microservice="crm", model="user", fields={"user_id.int", "group_id.int", "role_id.int"}, action="delete", submodel="UserRole", url="/user-role")
 * @GetModels(microservice="crm", model="user", fields={"user_id.int", "group_id.int", "role_id.int"}, submodel="UserRoles", url="/user-roles", response_fields={"user_roles"})
 *
 * @GetModel(microservice="crm", model="schedule", fields={"role", "group", "activity", "calendar", "module"})
 * @DeleteModel(microservice="crm", model="schedule", fields={"role_id.int", "group_id.int", "activity_id.int", "calendar_id.int", "module_id.int"})
 * @SaveModel(microservice="crm", model="schedule", fields={"role_id.int", "group_id.int", "activity_id.int", "calendar_id.int", "module_id.int"})
 * @GetModels(microservice="crm", model="schedules", fields={"role_id.int", "group_id.int", "activity_id.int", "calendar_id.int", "module_id.int"})
 *
 * @GetModel(microservice="crm", model="access", fields={"role_id", "group_id", "permission_id"})
 * @DeleteModel(microservice="crm", model="access", fields={"role_id", "group_id", "permission_id"})
 * @SaveModel(microservice="crm", model="access", fields={"role_id", "group_id", "permission_id"})
 * @GetModels(microservice="crm", model="accesses", fields={"role.mixed", "group.mixed", "permission.mixed"})
 *
 * @GetModel(microservice="crm", model="ticket", fields={"id", "code", "with_forms.bool"})
 * @DeleteModel(microservice="crm", model="ticket", fields={"id.int", "code"})
 * @CreateModel(microservice="crm", model="ticket", fields={"user", "customer", "module", "code", "forms_module", "forms.array", "deadline_at", "opened_at", "closed_at", "payload.array", "disable_bpm.bool", "disable_box.bool"})
 * @GetModels(microservice="crm", model="tickets", fields={"id.int","operator_user_id.int","user_id.int", "customer_id.int", "module_code", "module_id.int", "created_at_from", "created_at_to", "opened_at_from", "opened_at_to", "deadline_at_from", "deadline_at_to", "code", "business_case_id.int", "business_case_name", "process_state.int", "process_state_name", "closed_at",  "with_forms.bool", "is_closed.bool", "is_closed_successfully.bool"})
 * @UpdateModel(microservice="crm", model="ticket", url="ticket/payload", action="updatePayload", fields={"id.int", "code", "payload.array"})
 * @GetModel(microservice="crm", model="ticket", submodel="LastTicket", url="/last-ticket", fields={"user_id.int", "customer_id.int", "module", "with_forms"})
 *
 * @SaveModel(microservice="crm", model="log", url="ticket/log", action="saveTicket", fields={"ticket", "ticket_id", "type", "text", "html", "user", "customer", "code", "payload.array", "is_customer_visible.bool", "process_scenario"})
 * @DeleteModelByCode(microservice="crm", model="log", url="ticket/log", action="deleteTicket")
 * @GetModels(microservice="crm", model="logs", url="ticket/logs", action="getTicket", fields={"user_id.int", "customer_id.int", "user_name", "customer_name", "ticket", "ticket_id", "type", "text", "user", "customer", "code", "is_customer_visible.bool"})
 *
 * @GetModels(microservice="crm", model="forms", url="ticket/forms", submodel="TicketForms", fields={"ticket_id.int", "requester_applicant_id.int", "requester_user_id.int"})
 *
 * @GetModel(microservice="crm", model="task", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="task", fields={"id.int", "code"})
 * @UpdateModel(microservice="crm", model="task", fields={"id.int", "code", "user", "customer", "activity", "group", "deadline_at", "wake_at", "complexity", "description", "link", "payload.array"})
 * @GetModels(microservice="crm", model="tasks", fields={"id", "ticket", "state", "process_scenario", "pipeline_branch.int", "is_closed.bool", "user_id.int", "customer_id.int", "is_applicant.bool", "applicant_user_id.int", "applicant_customer_id.int", "type", "description", "wake_at_from", "wake_at_to", "deadline_at_from", "deadline_at_to", "closed_at_from", "closed_at_to", "expire_at_from", "expire_at_to", "activity", "ticket", "group", "code", "closed_at", "complexity", "state", "description", "link"})
 * @GetModels(microservice="crm", model="tasks", submodel="ClosedTasksStats",  url="stats/closed-tasks", fields={"business_case", "closed_at_from", "closed_at_to"}, response_fields={"stats.array"})
 * @CreateModel(microservice="crm", model="task", url="task/close", action="close", fields={"task", "process_scenario", "fixes.array", "message"})
 * @CreateModel(microservice="crm", model="task", url="task/postpone", action="postpone", fields={"task", "user", "time_to", "text"})
 * @CreateModel(microservice="crm", model="task", url="task/extend", action="extend", fields={"task", "user", "time_to", "text"})
 * @CreateModel(microservice="crm", model="task", url="task/take", action="take", fields={"task", "user"})
 * @CreateModel(microservice="crm", model="task", url="task/assign", action="assign", fields={"task", "user"})

 * @GetModel(microservice="crm", model="customer", submodel="CustomerCredentials", fields={"id", "iin", "phone", "email", "password", "code", "username"}, response_fields={"customer"}, url="/customer/credentials")
 * @GetModel(microservice="crm", model="customer", fields={"email", "phone", "iin", "bin", "code", "username", "id.int"})
 * @DeleteModel(microservice="crm", model="customer", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="customer", fields={"telegram_chat_id", "username", "avatar", "profiles.array", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "bin", "org_name", "is_nca_customer.bool", "is_disabled.bool", "groups.array", "payload.array", "auto_fields.array", "gender", "locale"})
 * @CreateModel(microservice="crm", model="customer", fields={"telegram_chat_id", "silent.bool", "is_protected.bool", "username", "avatar", "profiles.array", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "bin", "org_name", "is_nca_customer.bool", "is_disabled.bool", "groups.array", "payload.array", "auto_fields.array", "gender", "locale"})
 * @UpdateModel(microservice="crm", model="customer", fields={"telegram_chat_id", "id", "is_protected.bool", "username", "avatar", "profiles.array", "last_name", "first_name", "mid_name", "email", "phone", "iin", "code", "password", "bin", "org_name", "is_disabled.bool", "groups.array", "payload.array", "auto_fields.array", "auto_fields_merged.array", "gender", "locale"})
 * @UpdateModel(microservice="crm", model="customer", submodel="CustomerPassword", fields={"customer_id.int", "password", "password_confirm", "old_password", "check_old_password.bool", "check_password_confirm.bool"}, url="/customer/password")
 * @GetModels(microservice="crm", model="customers", fields={"id.array", "group.array", "last_name", "first_name", "mid_name", "full_name", "email", "phone", "iin", "bin", "iin_bin", "type", "is_disabled.bool", "code", "created_at_from", "created_at_to"})
 * @GetModels(microservice="crm", model="customer", submodel="CustomerForms", fields={"customer_id.int"}, url="/customer/forms", response_fields={"forms"})
 * @GetModels(microservice="crm", model="customer", submodel="CustomerProfiles", fields={"modules.array", "email", "phone", "iin", "bin", "code", "username", "id.int", "build.bool"}, url="/customer/profiles", response_fields={"profiles.array", "built_profiles.array"})
 * @GetModel(microservice="crm", model="customer", submodel="CustomerProfile", fields={"module", "email", "phone", "iin", "bin", "code", "username", "id.int", "build.bool"}, url="/customer/profile", response_fields={"profile.array", "built_profile.array"})
 *
 * @SaveModel(microservice="crm", model="customer", fields={"customer", "group"}, action="add", submodel="CustomerGroup", url="/customer-group")
 * @DeleteModel(microservice="crm", model="customer", fields={"customer", "group"}, action="delete", submodel="CustomerGroup", url="/customer-group")
 *
 * @GetModels(microservice="crm", model="customer", fields={"customer", "group"}, submodel="CustomerGroup", url="/customer-groups", response_fields={"customer_groups"})
 *
 * @GetModel(microservice="crm", model="process", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="process", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="process", fields={"code", "name", "description", "business_case.int"})
 * @UpdateModel(microservice="crm", model="process", fields={"id.int", "code", "name", "description", "business_case.int"})
 * @GetModels(microservice="crm", model="processes", fields={"id.int", "name", "description", "business_case_id.int", "business_case_name"})
 *
 * @GetModel(microservice="crm", model="state", url="process/state", action="getProcess", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="state", url="process/state", action="saveProcess", fields={"process.int", "code", "task_page_id.int", "task_page_code", "name", "customer_name", "description", "is_final.bool", "is_success.bool", "log_text", "priority.int"})
 * @UpdateModel(microservice="crm", model="state", url="process/state", action="updateProcess", fields={"id.int", "process.int", "code", "task_page_id.int", "task_page_code", "name", "customer_name", "description", "is_final.bool", "is_success.bool", "log_text", "priority.int"})
 * @DeleteModel(microservice="crm", model="state", url="process/state", action="deleteProcess", fields={"id.int", "process.int"})
 * @GetModels(microservice="crm", model="states", url="process/states", action="getProcess", fields={"process", "module", "code", "name", "customer_name", "locale", "description"})
 *
 * @GetModel(microservice="crm", model="scenario", url="process/scenario", action="getProcess", fields={"id.int", "code", "process.int"})
 * @SaveModel(microservice="crm", model="scenario", url="process/scenario", action="saveProcess", fields={"code", "name", "task_term.int", "process.int", "from_state.int", "to_state.int", "has_notification.bool", "has_sms_notification.bool", "webhook"})
 * @UpdateModel(microservice="crm", model="scenario", url="process/scenario", action="updateProcess", fields={"id.int", "name", "task_term.int", "code", "process.int", "from_state.int", "to_state.int", "has_notification.bool", "has_sms_notification.bool", "webhook"})
 * @DeleteModel(microservice="crm", model="scenario", url="process/scenario", action="deleteProcess", fields={"id.int"})
 * @GetModels(microservice="crm", model="scenarios", url="process/scenarios", action="getProcess", fields={"process.int", "code", "name", "from_state", "to_state", "is_disabled.bool"})
 *
 * @GetModel(microservice="crm", model="task", url="process/task", action="getProcess", fields={"id.int"})
 * @SaveModel(microservice="crm", model="task", url="process/task", action="saveProcess", fields={"code", "state.int", "activity", "group", "form_field", "is_customer.bool"})
 * @UpdateModel(microservice="crm", model="task", url="process/task", action="updateProcess", fields={"id.int", "code", "state.int", "activity", "group", "form_field", "is_customer.bool"})
 * @DeleteModel(microservice="crm", model="task", url="process/task", action="deleteProcess", fields={"id.int"})
 * @GetModels(microservice="crm", model="tasks", url="process/tasks", action="getProcess", fields={"process.int", "state.int", "activity", "group", "form_field", "is_customer.bool"})
 *
 * @GetModels(microservice="crm", model="user", submodel="UserPermissions", fields={"user.int"}, response_fields={"permissions.array", "is_admin.bool"}, url="/user/permissions")
 *
 * @GetModel(microservice="crm", model="businessCase", response_fields={"business_case"}, url="/business-case", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="businessCase", response_fields={"business_case"}, url="/business-case", fields={"id.int", "code", "force.bool"})
 * @SaveModel(microservice="crm", model="businessCase", response_fields={"business_case"}, url="/business-case", fields={"name", "description", "code", "is_protected.bool"})
 * @UpdateModel(microservice="crm", model="businessCase", response_fields={"business_case"}, url="/business-case", fields={"id.int", "code", "name", "description", "is_protected.bool"})
 * @UpsertModel(microservice="crm", model="businessCase", response_fields={"business_case"}, url="/business-case", fields={"id.int", "code", "name", "description", "is_protected.bool"})
 * @GetModels(microservice="crm", model="businessCases", response_fields={"business_cases"}, url="/business-cases", fields={"name", "description"})
 *
 * @RequestModel(microservice="crm", model="businessCase", action="save", submodel="BusinessCaseSchema", url="/business-case/schema", fields={"id.int", "code", "xml"}, response_fields={"business_case"}, request_method="post")
 * @RequestModel(microservice="crm", model="businessCase", action="copy", submodel="BusinessCaseSchema", url="/business-case/copy", fields={"id.int", "code"}, response_fields={"business_case"}, request_method="post")
 *
 * @GetModels(microservice="crm", model="stats", submodel="OpenedTicketsStats", url="stats/opened-tickets", fields={"business_case_id.int"}, response_fields={"stats.array"})
 * @GetModels(microservice="crm", model="stats", submodel="TicketsStats", url="stats/tickets", fields={"created_at_from", "created_at_to"}, response_fields={"stats.array"})
 * @GetModels(microservice="crm", model="stats", submodel="TasksStats",  url="stats/tasks", fields={"business_case_id.array", "user_id.array", "created_at_from", "created_at_to"}, response_fields={"stats.array"})
 * @GetModels(microservice="crm", model="stats", submodel="UsersStats",  url="stats/users", response_fields={"stats.array"})
 * @GetModels(microservice="crm", model="stats", submodel="CustomersStats",  url="stats/customers", response_fields={"stats.array"})
 * @GetModels(microservice="crm", model="stats", submodel="TasksTimeStats",  url="stats/tasks-time",  fields={"business_case_id.array", "user_id.array", "created_at_from", "created_at_to"}, response_fields={"stats.array"})
 *
 * @RequestModel(microservice="crm", model="settings", submodel="Settings", action="get", url="settings", fields={}, response_fields={"bpm.array", "group.array", "user.array", "customer.array"}, request_method="get")
 * @RequestModel(microservice="crm", model="settings", submodel="Settings", action="save", url="settings", fields={"bpm.array", "group.array", "user.array", "customer.array"}, request_method="post")
 *
 * @GetModel(microservice="crm", model="extension", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="extension", fields={"id.int"})
 * @CreateModel(microservice="crm", model="extension", fields={"name", "description", "code", "composer_version", "composer_name", "image"})
 * @UpdateModel(microservice="crm", model="extension", fields={"id.int", "name", "description", "composer_version", "composer_name", "image"})
 * @GetModels(microservice="crm", model="extensions", fields={"id.int", "composer_version", "composer_name"})
 *
 * @GetModel(microservice="crm", model="trigger", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="trigger", fields={"id.int", "code"})
 * @SaveModel(microservice="crm", model="trigger", fields={"code", "name", "type", "process.int", "criteria"})
 * @UpdateModel(microservice="crm", model="trigger", fields={"id.int", "code", "name", "type", "process.int", "criteria"})
 * @GetModels(microservice="crm", model="triggers", fields={"name", "type", "process"})
 *
 * @GetModel(microservice="crm", model="condition", url="trigger/condition", action="getTrigger", fields={"id.int"})
 * @SaveModel(microservice="crm", model="condition", url="trigger/condition", action="saveTrigger", fields={"code", "trigger.int", "type", "process.int", "state.int", "scenario.int"})
 * @UpdateModel(microservice="crm", model="condition", url="trigger/condition", action="updateTrigger", fields={"id.int", "code", "trigger.int", "type", "process.int", "state.int", "scenario.int"})
 * @DeleteModel(microservice="crm", model="condition", url="trigger/condition", action="deleteTrigger", fields={"id.int"})
 * @GetModels(microservice="crm", model="conditions", url="trigger/conditions", action="getTrigger", fields={"trigger", "type", "process.int", "state.int", "scenario"})
 *
 * @GetModel(microservice="crm", model="repetitiveTask", response_fields={"repetitive_task.array"}, url="/repetitive-task", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="repetitiveTask", url="/repetitive-task", fields={"id.int", "code"})
 * @CreateModel(microservice="crm", model="repetitiveTask", response_fields={"repetitive_task.array"}, url="/repetitive-task", fields={"code", "customer_id.int", "user_id.int", "type", "description", "time", "day", "module"})
 * @UpdateModel(microservice="crm", model="repetitiveTask", url="/repetitive-task", fields={"id.int", "customer_id.int", "user_id.int", "code", "type", "description", "time", "day", "module"})
 * @GetModels(microservice="crm", model="repetitiveTasks", response_fields={"repetitive_tasks.array"}, url="/repetitive-tasks", fields={"type", "description", "time", "day", "module"})
 *
 * @GetModel(microservice="crm", model="commonTrigger", response_fields={"trigger.array"}, url="/common-trigger", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="commonTrigger", url="/common-trigger", fields={"id.int", "code"})
 * @UpsertModel(microservice="crm", model="commonTrigger", response_fields={"trigger.array"}, url="/common-trigger", fields={"code", "name", "url", "description", "arguments.array"})
 * @GetModels(microservice="crm", model="commonTriggers", response_fields={"triggers.array"}, url="/common-triggers", fields={})
 * @GetModels(microservice="crm", model="commonTriggerArguments", response_fields={"arguments.array"}, url="/common-trigger/arguments", fields={"common_trigger_id.int"})
 *
 * @GetModel(microservice="crm", model="commonScenarioTrigger", response_fields={"scenario_trigger.array"}, url="/common-scenario-trigger", fields={"id.int"})
 * @DeleteModel(microservice="crm", model="commonScenarioTrigger", url="/common-scenario-trigger", fields={"id.int"})
 * @UpsertModel(microservice="crm", model="commonScenarioTrigger", response_fields={"scenario_trigger.array"}, url="/common-scenario-trigger", fields={"common_trigger", "process_scenario", "arguments.array"})
 * @GetModels(microservice="crm", model="commonScenarioTriggers", response_fields={"scenario_triggers.array"}, url="/common-scenario-triggers", fields={"common_trigger", "process_scenario", "business_case"})
 * @GetModels(microservice="crm", model="commonScenarioTriggerArguments", response_fields={"arguments.array"}, url="/common-scenario-trigger/arguments", fields={"id.int", "common_trigger_id.int"})
 * @UpsertModel(microservice="crm", model="commonScenarioTriggers", response_fields={"scenario_triggers.array"}, url="/common-scenario-triggers", fields={"process_scenarios.array"})
 *
 * @GetModel(microservice="crm", model="menu", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="menu", fields={"id.int", "code", "force.bool"})
 * @CreateModel(microservice="crm", model="menu", fields={"name", "description", "code", "is_protected.bool", "silent.bool", "divisions.array"})
 * @UpdateModel(microservice="crm", model="menu", fields={"id.int", "name", "description", "code", "is_protected.bool", "divisions.array"})
 * @UpsertModel(microservice="crm", model="menu", fields={"name", "description", "code", "is_protected.bool", "divisions.array"})
 * @GetModels(microservice="crm", model="menus", fields={"name", "code"})
 * @GetModel(microservice="crm", model="menu", fields={"id.int", "code", "locale", "requested_user_id.int"}, submodel="UserMenu", url="/user/menu")
 *
 * @GetModel(microservice="crm", model="menu", fields={"id.int", "code", "locale"}, submodel="MenuDivision", response_fields={"division"}, url="/menu/division")
 * @DeleteModel(microservice="crm", model="menu", fields={"id.int", "code", "force.bool"}, submodel="MenuDivision", response_fields={"division"}, url="/menu/division")
 * @CreateModel(microservice="crm", model="menu", fields={"menu", "code", "text", "icon", "image", "priority.int", "is_protected.bool", "silent.bool", "blocks.array", "links.array"}, submodel="MenuDivision", response_fields={"division"}, url="/menu/division")
 * @UpdateModel(microservice="crm", model="menu", fields={"text", "id.int", "text", "icon", "code", "image", "priority.int", "is_protected.bool", "blocks.array", "links.array"}, submodel="MenuDivision", response_fields={"division"}, url="/menu/division")
 * @UpsertModel(microservice="crm", model="menu", fields={"menu", "code", "text", "icon", "image", "priority.int", "is_protected.bool", "blocks.array", "links.array"}, submodel="MenuDivision", response_fields={"division"}, url="/menu/division")
 * @GetModels(microservice="crm", model="menu", fields={"name", "code", "menu", "locale"}, submodel="MenuDivisions", response_fields={"divisions"}, url="/menu/divisions")
 *
 * @GetModel(microservice="crm", model="menu", fields={"id.int", "code", "locale"}, submodel="MenuBlock", response_fields={"block"}, url="/menu/block")
 * @DeleteModel(microservice="crm", model="menu", fields={"id.int", "code", "force.bool"}, submodel="MenuBlock", response_fields={"block"}, url="/menu/block")
 * @CreateModel(microservice="crm", model="menu", fields={"division", "text", "code", "icon", "image", "priority.int", "is_protected.bool", "silent.bool", "links.array"}, submodel="MenuBlock", response_fields={"block"}, url="/menu/block")
 * @UpdateModel(microservice="crm", model="menu", fields={"id.int", "text", "icon", "code", "image", "priority.int", "is_protected.bool", "links.array"}, submodel="MenuBlock", response_fields={"block"}, url="/menu/block")
 * @UpsertModel(microservice="crm", model="menu", fields={"division", "code", "text", "icon", "image", "priority.int", "is_protected.bool", "links.array"}, submodel="MenuBlock", response_fields={"block"}, url="/menu/block")
 * @GetModels(microservice="crm", model="menu", fields={"name", "code", "menu", "division", "locale"}, submodel="MenuBlocks", response_fields={"blocks"}, url="/menu/blocks")
 *
 * @GetModel(microservice="crm", model="menu", fields={"id.int", "code", "locale"}, submodel="MenuLink", response_fields={"link"}, url="/menu/link")
 * @DeleteModel(microservice="crm", model="menu", fields={"id.int", "code", "force.bool"}, submodel="MenuLink", response_fields={"link"}, url="/menu/link")
 * @CreateModel(microservice="crm", model="menu", fields={"division", "block", "text", "url", "permissions.array", "is_common.bool", "code", "icon", "image", "priority.int", "is_protected.bool", "is_disabled.bool", "silent.bool", "blocks.array", "links.array"}, submodel="MenuLink", response_fields={"link"}, url="/menu/link")
 * @UpdateModel(microservice="crm", model="menu", fields={"id.int", "text", "url", "permissions.array", "is_common.bool", "icon", "code", "image", "priority.int", "is_protected.bool", "is_disabled.bool", "blocks.array", "links.array"}, submodel="MenuLink", response_fields={"link"}, url="/menu/link")
 * @UpsertModel(microservice="crm", model="menu", fields={"division", "block", "code", "url", "permissions.array", "is_common.bool", "text", "icon", "image", "priority.int", "is_protected.bool", "is_disabled.bool", "blocks.array", "links.array"}, submodel="MenuLink", response_fields={"link"}, url="/menu/link")
 * @GetModels(microservice="crm", model="menu", fields={"name", "code", "menu", "division", "block", "locale", "no_block.bool", "is_protected.bool", "is_common.bool"}, submodel="MenuLinks", response_fields={"links"}, url="/menu/links")
 *
 * @CreateModel(microservice="crm", model="menu", fields={"link_id.int", "group_id.int", "role_id.int"}, action="add", submodel="MenuLinkRole", url="/menu/link-role")
 * @DeleteModel(microservice="crm", model="menu", fields={"link_id.int", "group_id.int", "role_id.int"}, action="delete", submodel="MenuLinkRole", url="/menu/link-role")
 * @GetModels(microservice="crm", model="menu", fields={"link_id.int", "group_id.int", "role_id.int", "menu_id.int"}, submodel="MenuLinkRoles", url="/menu/link-roles", response_fields={"link_roles"})
 *
 * @GetModel(microservice="crm", model="calendarEvent", url="/calendar-event", fields={"id.int"}, response_fields={"calendar_event.array"})
 * @DeleteModel(microservice="crm", model="calendarEvent", url="/calendar-event", fields={"id.int"})
 * @CreateModel(microservice="crm", model="calendarEvent", url="/calendar-event", fields={"category", "user", "ticket", "booking_user", "booking_customer", "event_started_at", "event_ended_at"}, response_fields={"calendar_event.array"})
 * @UpdateModel(microservice="crm", model="calendarEvent", url="/calendar-event", fields={"id.int", "category", "user", "ticket", "booking_user", "booking_customer", "event_started_at", "event_ended_at"}, response_fields={"calendar_event.array"})
 * @UpsertModel(microservice="crm", model="calendarEvent", url="/calendar-event", fields={"category", "user", "ticket", "booking_user", "booking_customer", "event_started_at", "event_ended_at"}, response_fields={"calendar_event.array"})
 * @GetModels(microservice="crm", model="calendarEvents", url="/calendar-events", fields={"category", "user", "booking_user", "booking_customer", "min_date", "max_date", "started_at", "started_at_gt", "started_at_ge", "started_at_lt", "started_at_le", "ticket", "ticket_ne"}, response_fields={"calendar_events.array"})
 *
 * @GetModel(microservice="crm", model="report", fields={"id.int", "code"})
 * @DeleteModel(microservice="crm", model="report", fields={"id.int", "code", "force.bool"})
 * @CreateModel(microservice="crm", model="report", fields={"name", "code", "dsl", "module", "type", "silent.bool", "is_protected.bool"})
 * @UpdateModel(microservice="crm", model="report", fields={"id.int", "name", "code", "dsl", "module", "type", "is_protected.bool"})
 * @UpsertModel(microservice="crm", model="report", fields={"name", "code", "dsl", "module", "type", "is_protected.bool"})
 * @GetModels(microservice="crm", model="reports", fields={"name", "code", "module", "type", "is_protected.bool"})
 * @GetModels(microservice="crm", model="report", fields={"id.int", "filters"}, url="/report/customers", submodel="ReportCustomers", response_fields={"customers"})
 * @GetModels(microservice="crm", model="report", fields={"id.int", "filters"}, url="/report/users", submodel="ReportUsers", response_fields={"users"})
 * @GetModels(microservice="crm", model="report", fields={"id.int", "filters"}, url="/report/tickets", submodel="ReportTickets", response_fields={"tickets"})
 * @GetModels(microservice="crm", model="report", fields={"id.int", "filters"}, url="/report/tasks", submodel="ReportTasks", response_fields={"tasks"})
 * @GetModels(microservice="crm", model="report", fields={"id.int"}, url="/report/labels", submodel="ReportLabels", response_fields={"labels"})
 * @CreateModel(microservice="crm", model="report", fields={"report_id.int", "group_id.int", "role_id.int"}, action="add", submodel="ReportRole", url="/report/role")
 * @DeleteModel(microservice="crm", model="report", fields={"report_id.int", "group_id.int", "role_id.int"}, action="delete", submodel="ReportRole", url="/report/role")
 * @GetModels(microservice="crm", model="report", fields={"report_id.int", "group_id.int", "role_id.int"}, submodel="ReportRoles", url="/report/roles", response_fields={"report_roles"})
 * @GetModel(microservice="crm", model="report", fields={"id.int", "code", "requested_user_id.int"}, submodel="ReportAccess", url="/report/access", response_fields={"access"})
 *
 * @GetModel(microservice="crm", model="healthcheck")
 */
interface Crm
{
}
