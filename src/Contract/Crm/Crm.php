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
 * @GetModelByCode(microservice="crm", model="user")
 * @DeleteModelByCode(microservice="crm", model="user")
 * @SaveModel(microservice="crm", model="user", fields={"last_name", "first_name", "mid_name", "code"})
 * @GetModels(microservice="crm", model="users", fields={"last_name", "first_name", "mid_name", "code"})
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
 */
interface Crm
{
}
