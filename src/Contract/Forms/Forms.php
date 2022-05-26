<?php

namespace Perfumer\Microservices\Contract\Forms;

use Perfumer\Microservices\Annotation\CopyModel;
use Perfumer\Microservices\Annotation\CreateMeshModel;
use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\MigrateModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateMeshModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\UpsertMeshModel;
use Perfumer\Microservices\Annotation\UpsertModel;

/**
 * @GetModel(microservice="forms", model="form", fields={"user_id.int", "customer_id.int", "ticket_id.int", "module", "id.int"})
 * @DeleteModel(microservice="forms", model="form", fields={"id.int", "code"})
 * @CreateModel(microservice="forms", model="form", fields={"code", "silent.bool", "ticket_id.int", "user_id.int", "customer_id.int", "module", "mix", "fields.array", "payload.array", "tags.array"})
 * @UpdateModel(microservice="forms", model="form", fields={"id.int","code", "fields.array", "payload.array", "tags.array"})
 * @UpsertModel(microservice="forms", model="form", fields={"code","ticket_id.int", "user_id.int", "customer_id.int", "module", "mix", "fields.array", "payload.array", "tags.array"})
 * @SaveModel(microservice="forms", model="form", fields={"ticket_id.int", "user_id.int", "customer_id.int", "module", "mix", "fields.array", "payload.array", "tags.array"})
 * @CreateModel(microservice="forms", model="forms", fields={"forms.array"})
 * @SaveModel(microservice="forms", model="forms", submodel="FormsTicket", url="/forms/ticket", fields={"user_id.int", "customer_id.int", "ticket_id.int", "module"})
 * @GetModels(microservice="forms", model="forms", fields={"customer_id.int", "created_at.date", "module", "ticket_id.int", "user_id.int", "fields.array", "tag", "formatting"})
 *
 * @UpsertModel(microservice="forms", model="forms", submodel="UserForms", url="/forms/user", fields={"module", "user_id.int", "ticket_id.int", "forms.array"})
 *
 * @GetModel(microservice="forms", model="item", fields={"id.int", "code", "locale", "reference"})
 * @DeleteModel(microservice="forms", model="item", fields={"id.int", "code", "reference"})
 * @CreateMeshModel(microservice="forms", model="item", fields={"value", "description", "name", "code", "reference", "priority.int"})
 * @UpdateMeshModel(microservice="forms", model="item", fields={"id.int", "value", "description", "name", "code", "reference", "priority.int"})
 * @GetMeshModels(microservice="forms", model="items", fields={"name", "code", "locale", "reference"})
 * @SaveModel(microservice="forms", model="items", fields={"data.array", "reference"})
 *
 * @GetModel(microservice="forms", model="field", fields={"id.int", "locale"})
 * @DeleteModel(microservice="forms", model="field", fields={"id.int"})
 * @SaveModel(microservice="forms", model="field", fields={"label.array", "hint.array", "type", "model", "module", "reference", "is_required.bool", "is_dedicated.bool", "is_invisible_for_applicant.bool", "dedicated_column_index", "priority.int", "bind_field", "bind_field_mode", "aggregation_tag", "aggregation_mode", "alias", "before_text", "after_text"})
 * @UpdateModel(microservice="forms", model="field", fields={"id.int", "type", "label.array", "hint.array", "model", "module", "reference", "is_required.bool", "is_dedicated.bool", "is_invisible_for_applicant.bool", "dedicated_column_index", "priority.int", "bind_field", "bind_field_mode", "aggregation_tag", "aggregation_mode", "alias", "before_text", "after_text"})
 * @GetModels(microservice="forms", model="fields", fields={"label", "hint", "type", "model", "alias", "locale", "module", "reference", "module_target"})
 * @CreateModel(microservice="forms", model="field", fields={"id.int"}, url="/field/process-values", action="process", submodel="FieldValues")
 * @CreateModel(microservice="forms", model="fields", fields={"module", "models.array"}, url="/fields/order", action="change", submodel="FieldsOrder")
 *
 * @GetModel(microservice="forms", model="module", fields={"id.int", "code"})
 * @DeleteModel(microservice="forms", model="module", fields={"id.int", "code", "force.bool"})
 * @CreateMeshModel(microservice="forms", model="module", fields={"code","name", "customer_name","description", "applicant", "target", "is_archived.bool", "is_invisible_for_applicant.bool", "is_visible_for_roles.bool", "is_dedicated_table.bool","form_page","form_page_bulk","silent.bool","is_protected.bool","payload.array","data_module_id.int", "tags.array", "pre_create_webhook", "post_create_message"})
 * @UpdateMeshModel(microservice="forms", model="module", fields={"id.int","code","name", "customer_name","description", "applicant", "target", "is_archived.bool", "is_invisible_for_applicant.bool", "is_visible_for_roles.bool", "is_dedicated_table.bool","form_page","form_page_bulk","is_protected.bool","payload.array","data_module_id.int", "tags.array", "pre_create_webhook", "post_create_message"})
 * @UpsertMeshModel(microservice="forms", model="module", fields={"code","name", "customer_name","description", "applicant", "target", "is_archived.bool", "is_invisible_for_applicant.bool", "is_visible_for_roles.bool", "is_dedicated_table.bool","form_page","form_page_bulk","is_protected.bool","payload.array","data_module_id.int", "tags.array", "pre_create_webhook", "post_create_message"})
 * @GetMeshModels(microservice="forms", model="modules", fields={"id.int", "name", "code", "target", "description", "applicant", "is_archived.bool", "is_invisible_for_applicant.bool", "is_visible_for_roles.bool", "tag"})
 * @CopyModel(microservice="forms", model="module")
 * @MigrateModel(microservice="forms", model="module")
 * @SaveModel(microservice="forms", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="forms", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 * @CreateModel(microservice="forms", model="module", fields={"module_id", "group_id", "role_id"}, action="add", submodel="ModuleRole", url="/module-role")
 * @DeleteModel(microservice="forms", model="module", fields={"module_id", "group_id", "role_id"}, action="delete", submodel="ModuleRole", url="/module-role")
 * @GetModels(microservice="forms", model="module", fields={"module_id", "group_id", "role_id"}, submodel="ModuleRoles", url="/module-roles", response_fields={"module_roles"})
 * @UpsertModel(microservice="forms", model="module", url="/module/fields", action="upsert", submodel="ModuleFields", fields={"module", "fields.array"})
 * @CreateModel(microservice="forms", model="module", url="/module/fields", action="add", submodel="ModuleFields", fields={"module", "fields.array"})
 *
 * @GetModel(microservice="forms", model="reference", fields={"id.int", "code"})
 * @DeleteModel(microservice="forms", model="reference", fields={"id.int", "code", "force.bool"})
 * @CreateModel(microservice="forms", model="reference", fields={"name", "code", "ordering", "is_protected.bool", "is_archived.bool", "silent.bool"})
 * @UpdateModel(microservice="forms", model="reference", fields={"id.int", "name", "code", "ordering", "is_protected.bool", "is_archived.bool"})
 * @UpsertModel(microservice="forms", model="reference", fields={"name", "code", "is_protected.bool", "is_archived.bool"})
 * @CopyModel(microservice="forms", model="reference")
 * @MigrateModel(microservice="forms", model="reference")
 * @GetModels(microservice="forms", model="references", fields={"name", "code", "is_archived.bool"})
 *
 * @GetModel(microservice="forms", model="value", fields={"id.int", "code"})
 * @DeleteModel(microservice="forms", model="value", fields={"id.int", "code"})
 * @CreateModel(microservice="forms", model="value", fields={"tag", "code", "user_id.int", "customer_id.int", "ticket_id.int", "text_value", "numeric_value", "is_processed.bool", "silent.bool"})
 * @UpdateModel(microservice="forms", model="value", fields={"id.int", "tag", "code", "user_id.int", "customer_id.int", "ticket_id.int", "text_value", "numeric_value", "is_processed.bool"})
 * @UpsertModel(microservice="forms", model="value", fields={"tag", "code", "user_id.int", "customer_id.int", "ticket_id.int", "text_value", "numeric_value", "is_processed.bool"})
 *
 * @GetModel(microservice="forms", model="article", fields={"id", "locale", "code"})
 * @DeleteModel(microservice="forms", model="article", fields={"id"})
 * @SaveModel(microservice="forms", model="article", fields={"id", "image", "category_id.int", "title", "description", "code", "html", "json", "locale", "ticket_modules.array"})
 * @GetModels(microservice="forms", model="articles", fields={"category", "title", "description", "code", "locale", "ticket_module"})
 *
 * @GetModels(microservice="forms", model="fixes", fields={"form.int", "field", "reason", "message", "locale"})
 *
 * @GetModel(microservice="forms", model="table", response_fields={"table"}, fields={"id.int", "code"})
 * @DeleteModel(microservice="forms", model="table", response_fields={"table"}, fields={"id.int", "code"})
 * @CreateModel(microservice="forms", model="table", response_fields={"table"}, fields={"code","name", "description", "csv_file", "rows.array", "google_spread_sheet_url"})
 * @UpdateModel(microservice="forms", model="table", response_fields={"table"}, fields={"id.int", "code","name", "description", "csv_file", "rows.array", "google_spread_sheet_url"})
 * @GetModels(microservice="forms", model="tables", response_fields={"tables"}, fields={"id.int", "code","name", "csv_file", "description", "google_spread_sheet_url"})
 *
 * @GetModel(microservice="forms", model="tableRow", response_fields={"table_row"}, url="/table/row", fields={"id.int"})
 * @DeleteModel(microservice="forms", model="tableRow", response_fields={"table_row"}, url="/table/row", fields={"id.int"})
 * @CreateModel(microservice="forms", model="tableRow", response_fields={"table_row"}, url="/table/row", fields={"is_header.bool", "index.int", "data.array", "table_id.int"})
 * @UpdateModel(microservice="forms", model="tableRow", response_fields={"table_row"}, url="/table/row", fields={"id.int", "is_header.bool", "index.int", "data.array", "table_id.int"})
 * @GetModels(microservice="forms", model="tableRows", response_fields={"table_rows"}, url="/table/rows", fields={"id.int", "is_header.bool", "index.int", "data.array", "table_id.int"})
 *
 * @GetModel(microservice="forms", model="table", submodel="TableSettings", url="/table/settings", fields={}, response_fields={"table.array"})
 * @SaveModel(microservice="forms", model="table", submodel="TableSettings", url="/table/settings", fields={"table.array"})
 */
interface Forms
{
}
