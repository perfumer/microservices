<?php

namespace Generated\Perfumer\Microservices\Crm;

abstract class Crm extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Crm\Crm
{
    public function getPermission(\Perfumer\Microservices\Crm\Request\Permission\GetPermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse
    {
        $url = '/permission';

        /** @var \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

        return $response;
    }

    public function deletePermission(\Perfumer\Microservices\Crm\Request\Permission\DeletePermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\DeletePermissionResponse
    {
        $url = '/permission';

        /** @var \Perfumer\Microservices\Crm\Response\Permission\DeletePermissionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permission\DeletePermissionResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getPermissions(\Perfumer\Microservices\Crm\Request\Permissions\GetPermissionsRequest $request): \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse
    {
        $url = '/permissions';

        /** @var \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'parent' => $request->parent,
        'parents' => $request->parents,
        'child' => $request->child,
        'children' => $request->children,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'permissions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permissions = $item;
        }

        return $response;
    }

    public function savePermission(\Perfumer\Microservices\Crm\Request\Permission\SavePermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\SavePermissionResponse
    {
        $url = '/permission';

        /** @var \Perfumer\Microservices\Crm\Response\Permission\SavePermissionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permission\SavePermissionResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'parents' => $request->parents,
        'children' => $request->children,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

        return $response;
    }

    public function updatePermission(\Perfumer\Microservices\Crm\Request\Permission\UpdatePermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\UpdatePermissionResponse
    {
        $url = '/permission';

        /** @var \Perfumer\Microservices\Crm\Response\Permission\UpdatePermissionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permission\UpdatePermissionResponse(), 'patch', $url, [
        'id' => $request->id,
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

        return $response;
    }

    public function getCalendar(\Perfumer\Microservices\Crm\Request\Calendar\GetCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse
    {
        $url = '/calendar';

        /** @var \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse(), 'get', $url, [
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'calendar');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar = $item;
        }

        return $response;
    }

    public function deleteCalendar(\Perfumer\Microservices\Crm\Request\Calendar\DeleteCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\DeleteCalendarResponse
    {
        $url = '/calendar';

        /** @var \Perfumer\Microservices\Crm\Response\Calendar\DeleteCalendarResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendar\DeleteCalendarResponse(), 'delete', $url, [
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveCalendar(\Perfumer\Microservices\Crm\Request\Calendar\SaveCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\SaveCalendarResponse
    {
        $url = '/calendar';

        /** @var \Perfumer\Microservices\Crm\Response\Calendar\SaveCalendarResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendar\SaveCalendarResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'calendar');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar = $item;
        }

        return $response;
    }

    public function getCalendars(\Perfumer\Microservices\Crm\Request\Calendars\GetCalendarsRequest $request): \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse
    {
        $url = '/calendars';

        /** @var \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendars');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendars = $item;
        }

        return $response;
    }

    public function getRole(\Perfumer\Microservices\Crm\Request\Role\GetRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse
    {
        $url = '/role';

        /** @var \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'role');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->role = $item;
        }

        return $response;
    }

    public function deleteRole(\Perfumer\Microservices\Crm\Request\Role\DeleteRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\DeleteRoleResponse
    {
        $url = '/role';

        /** @var \Perfumer\Microservices\Crm\Response\Role\DeleteRoleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Role\DeleteRoleResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveRole(\Perfumer\Microservices\Crm\Request\Role\SaveRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\SaveRoleResponse
    {
        $url = '/role';

        /** @var \Perfumer\Microservices\Crm\Response\Role\SaveRoleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Role\SaveRoleResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'role');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->role = $item;
        }

        return $response;
    }

    public function updateRole(\Perfumer\Microservices\Crm\Request\Role\UpdateRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\UpdateRoleResponse
    {
        $url = '/role';

        /** @var \Perfumer\Microservices\Crm\Response\Role\UpdateRoleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Role\UpdateRoleResponse(), 'patch', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'role');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->role = $item;
        }

        return $response;
    }

    public function getRoles(\Perfumer\Microservices\Crm\Request\Roles\GetRolesRequest $request): \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse
    {
        $url = '/roles';

        /** @var \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'roles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->roles = $item;
        }

        return $response;
    }

    public function getGroup(\Perfumer\Microservices\Crm\Request\Group\GetGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse
    {
        $url = '/group';

        /** @var \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function getGroups(\Perfumer\Microservices\Crm\Request\Groups\GetGroupsRequest $request): \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse
    {
        $url = '/groups';

        /** @var \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'is_archived' => $request->is_archived,
        'category' => $request->category,
        'parent' => $request->parent,
        'parents' => $request->parents,
        'child' => $request->child,
        'children' => $request->children,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'groups');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->groups = $item;
        }

        return $response;
    }

    public function saveGroup(\Perfumer\Microservices\Crm\Request\Group\SaveGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\SaveGroupResponse
    {
        $url = '/group';

        /** @var \Perfumer\Microservices\Crm\Response\Group\SaveGroupResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Group\SaveGroupResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'is_archived' => $request->is_archived,
        'category' => $request->category,
        'parents' => $request->parents,
        'children' => $request->children,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function deleteGroup(\Perfumer\Microservices\Crm\Request\Group\DeleteGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\DeleteGroupResponse
    {
        $url = '/group';

        /** @var \Perfumer\Microservices\Crm\Response\Group\DeleteGroupResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Group\DeleteGroupResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function archiveGroup(\Perfumer\Microservices\Crm\Request\Group\ArchiveGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\ArchiveGroupResponse
    {
        $url = '/group/archive';

        /** @var \Perfumer\Microservices\Crm\Response\Group\ArchiveGroupResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Group\ArchiveGroupResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function unarchiveGroup(\Perfumer\Microservices\Crm\Request\Group\UnarchiveGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\UnarchiveGroupResponse
    {
        $url = '/group/archive';

        /** @var \Perfumer\Microservices\Crm\Response\Group\UnarchiveGroupResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Group\UnarchiveGroupResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Crm\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Crm\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        /** @var \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'process' => $request->process,
        'parent' => $request->parent,
        'parents' => $request->parents,
        'child' => $request->child,
        'children' => $request->children,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'modules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->modules = $item;
        }

        return $response;
    }

    public function saveModule(\Perfumer\Microservices\Crm\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\SaveModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Crm\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\SaveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'process' => $request->process,
        'payload' => $request->payload,
        'fields' => $request->fields,
        'fields_page_id' => $request->fields_page_id,
        'parents' => $request->parents,
        'children' => $request->children,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Crm\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\DeleteModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Crm\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\DeleteModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Crm\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Crm\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\UnarchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Crm\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\UnarchiveModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getActivity(\Perfumer\Microservices\Crm\Request\Activity\GetActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse
    {
        $url = '/activity';

        /** @var \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'activity');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->activity = $item;
        }

        return $response;
    }

    public function deleteActivity(\Perfumer\Microservices\Crm\Request\Activity\DeleteActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\DeleteActivityResponse
    {
        $url = '/activity';

        /** @var \Perfumer\Microservices\Crm\Response\Activity\DeleteActivityResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Activity\DeleteActivityResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveActivity(\Perfumer\Microservices\Crm\Request\Activity\SaveActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\SaveActivityResponse
    {
        $url = '/activity';

        /** @var \Perfumer\Microservices\Crm\Response\Activity\SaveActivityResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Activity\SaveActivityResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'priority' => $request->priority,
        'is_forced' => $request->is_forced,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'activity');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->activity = $item;
        }

        return $response;
    }

    public function updateActivity(\Perfumer\Microservices\Crm\Request\Activity\UpdateActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\UpdateActivityResponse
    {
        $url = '/activity';

        /** @var \Perfumer\Microservices\Crm\Response\Activity\UpdateActivityResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Activity\UpdateActivityResponse(), 'patch', $url, [
        'id' => $request->id,
        'name' => $request->name,
        'code' => $request->code,
        'priority' => $request->priority,
        'is_forced' => $request->is_forced,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'activity');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->activity = $item;
        }

        return $response;
    }

    public function getActivities(\Perfumer\Microservices\Crm\Request\Activities\GetActivitiesRequest $request): \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse
    {
        $url = '/activities';

        /** @var \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'priority' => $request->priority,
        'is_forced' => $request->is_forced,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'activities');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->activities = $item;
        }

        return $response;
    }

    public function getUserCredentials(\Perfumer\Microservices\Crm\Request\User\GetUserCredentialsRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserCredentialsResponse
    {
        $url = '/user/credentials';

        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserCredentialsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\GetUserCredentialsResponse(), 'get', $url, [
        'iin' => $request->iin,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => $request->password,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function getUser(\Perfumer\Microservices\Crm\Request\User\GetUserRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserResponse
    {
        $url = '/user';

        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\GetUserResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'iin' => $request->iin,
        'phone' => $request->phone,
        'email' => $request->email,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function deleteUser(\Perfumer\Microservices\Crm\Request\User\DeleteUserRequest $request): \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse
    {
        $url = '/user';

        /** @var \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveUser(\Perfumer\Microservices\Crm\Request\User\SaveUserRequest $request): \Perfumer\Microservices\Crm\Response\User\SaveUserResponse
    {
        $url = '/user';

        /** @var \Perfumer\Microservices\Crm\Response\User\SaveUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\SaveUserResponse(), 'post', $url, [
        'id' => $request->id,
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'iin' => $request->iin,
        'code' => $request->code,
        'password' => $request->password,
        'is_admin' => $request->is_admin,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function updateUser(\Perfumer\Microservices\Crm\Request\User\UpdateUserRequest $request): \Perfumer\Microservices\Crm\Response\User\UpdateUserResponse
    {
        $url = '/user';

        /** @var \Perfumer\Microservices\Crm\Response\User\UpdateUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\UpdateUserResponse(), 'patch', $url, [
        'id' => $request->id,
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'iin' => $request->iin,
        'code' => $request->code,
        'password' => $request->password,
        'is_admin' => $request->is_admin,
        'is_disabled' => $request->is_disabled,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function getUsers(\Perfumer\Microservices\Crm\Request\Users\GetUsersRequest $request): \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse
    {
        $url = '/users';

        /** @var \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse(), 'get', $url, [
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'iin' => $request->iin,
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'users');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->users = $item;
        }

        return $response;
    }

    public function startWorkSessionUser(\Perfumer\Microservices\Crm\Request\User\StartWorkSessionUserRequest $request): \Perfumer\Microservices\Crm\Response\User\StartWorkSessionUserResponse
    {
        $url = '/user/start-work-session';

        /** @var \Perfumer\Microservices\Crm\Response\User\StartWorkSessionUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\StartWorkSessionUserResponse(), 'post', $url, [
        'user' => $request->user,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function endWorkSessionUser(\Perfumer\Microservices\Crm\Request\User\EndWorkSessionUserRequest $request): \Perfumer\Microservices\Crm\Response\User\EndWorkSessionUserResponse
    {
        $url = '/user/end-work-session';

        /** @var \Perfumer\Microservices\Crm\Response\User\EndWorkSessionUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\EndWorkSessionUserResponse(), 'post', $url, [
        'user' => $request->user,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function addUserRole(\Perfumer\Microservices\Crm\Request\User\AddUserRoleRequest $request): \Perfumer\Microservices\Crm\Response\User\AddUserRoleResponse
    {
        $url = '/user-role';

        /** @var \Perfumer\Microservices\Crm\Response\User\AddUserRoleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\AddUserRoleResponse(), 'post', $url, [
        'user_id' => $request->user_id,
        'group_id' => $request->group_id,
        'role_id' => $request->role_id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function deleteUserRole(\Perfumer\Microservices\Crm\Request\User\DeleteUserRoleRequest $request): \Perfumer\Microservices\Crm\Response\User\DeleteUserRoleResponse
    {
        $url = '/user-role';

        /** @var \Perfumer\Microservices\Crm\Response\User\DeleteUserRoleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\DeleteUserRoleResponse(), 'delete', $url, [
        'user_id' => $request->user_id,
        'group_id' => $request->group_id,
        'role_id' => $request->role_id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getUserRoles(\Perfumer\Microservices\Crm\Request\User\GetUserRolesRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserRolesResponse
    {
        $url = '/user-roles';

        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserRolesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\GetUserRolesResponse(), 'get', $url, [
        'user_id' => $request->user_id,
        'group_id' => $request->group_id,
        'role_id' => $request->role_id,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'user_roles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user_roles = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function getSchedule(\Perfumer\Microservices\Crm\Request\Schedule\GetScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse
    {
        $url = '/schedule';

        /** @var \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse(), 'get', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'activity_id' => $request->activity_id,
        'calendar_id' => $request->calendar_id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function deleteSchedule(\Perfumer\Microservices\Crm\Request\Schedule\DeleteScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\DeleteScheduleResponse
    {
        $url = '/schedule';

        /** @var \Perfumer\Microservices\Crm\Response\Schedule\DeleteScheduleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedule\DeleteScheduleResponse(), 'delete', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'activity_id' => $request->activity_id,
        'calendar_id' => $request->calendar_id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveSchedule(\Perfumer\Microservices\Crm\Request\Schedule\SaveScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse
    {
        $url = '/schedule';

        /** @var \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse(), 'post', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'activity_id' => $request->activity_id,
        'calendar_id' => $request->calendar_id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function getSchedules(\Perfumer\Microservices\Crm\Request\Schedules\GetSchedulesRequest $request): \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse
    {
        $url = '/schedules';

        /** @var \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse(), 'get', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'activity_id' => $request->activity_id,
        'calendar_id' => $request->calendar_id,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'schedules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedules = $item;
        }

        return $response;
    }

    public function getAccess(\Perfumer\Microservices\Crm\Request\Access\GetAccessRequest $request): \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse
    {
        $url = '/access';

        /** @var \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse(), 'get', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'permission_id' => $request->permission_id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'access');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->access = $item;
        }

        return $response;
    }

    public function deleteAccess(\Perfumer\Microservices\Crm\Request\Access\DeleteAccessRequest $request): \Perfumer\Microservices\Crm\Response\Access\DeleteAccessResponse
    {
        $url = '/access';

        /** @var \Perfumer\Microservices\Crm\Response\Access\DeleteAccessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Access\DeleteAccessResponse(), 'delete', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'permission_id' => $request->permission_id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveAccess(\Perfumer\Microservices\Crm\Request\Access\SaveAccessRequest $request): \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse
    {
        $url = '/access';

        /** @var \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse(), 'post', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'permission_id' => $request->permission_id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'access');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->access = $item;
        }

        return $response;
    }

    public function getAccesses(\Perfumer\Microservices\Crm\Request\Accesses\GetAccessesRequest $request): \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse
    {
        $url = '/accesses';

        /** @var \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse(), 'get', $url, [
        'role_id' => $request->role_id,
        'group_id' => $request->group_id,
        'permission_id' => $request->permission_id,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'accesses');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->accesses = $item;
        }

        return $response;
    }

    public function getTicket(\Perfumer\Microservices\Crm\Request\Ticket\GetTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\GetTicketResponse
    {
        $url = '/ticket';

        /** @var \Perfumer\Microservices\Crm\Response\Ticket\GetTicketResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Ticket\GetTicketResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ticket = $item;
        }

        return $response;
    }

    public function deleteTicket(\Perfumer\Microservices\Crm\Request\Ticket\DeleteTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\DeleteTicketResponse
    {
        $url = '/ticket';

        /** @var \Perfumer\Microservices\Crm\Response\Ticket\DeleteTicketResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Ticket\DeleteTicketResponse(), 'delete', $url, [
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveTicket(\Perfumer\Microservices\Crm\Request\Ticket\SaveTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse
    {
        $url = '/ticket';

        /** @var \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse(), 'post', $url, [
        'customer' => $request->customer,
        'module' => $request->module,
        'code' => $request->code,
        'process' => $request->process,
        'deadline_at' => $request->deadline_at,
        'opened_at' => $request->opened_at,
        'closed_at' => $request->closed_at,
        'payload' => $request->payload,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ticket = $item;
        }

        return $response;
    }

    public function getTickets(\Perfumer\Microservices\Crm\Request\Tickets\GetTicketsRequest $request): \Perfumer\Microservices\Crm\Response\Tickets\GetTicketsResponse
    {
        $url = '/tickets';

        /** @var \Perfumer\Microservices\Crm\Response\Tickets\GetTicketsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Tickets\GetTicketsResponse(), 'get', $url, [
        'customer' => $request->customer,
        'customer_fio' => $request->customer_fio,
        'module_name' => $request->module_name,
        'opened_at_from' => $request->opened_at_from,
        'opened_at_to' => $request->opened_at_to,
        'deadline_at_from' => $request->deadline_at_from,
        'deadline_at_to' => $request->deadline_at_to,
        'code' => $request->code,
        'process' => $request->process,
        'process_state' => $request->process_state,
        'process_state_name' => $request->process_state_name,
        'closed_at' => $request->closed_at,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tickets');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tickets = $item;
        }

        return $response;
    }

    public function saveTicketLog(\Perfumer\Microservices\Crm\Request\Log\SaveTicketLogRequest $request): \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse
    {
        $url = '/ticket/log';

        /** @var \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse(), 'post', $url, [
        'ticket' => $request->ticket,
        'ticket_id' => $request->ticket_id,
        'type' => $request->type,
        'text' => $request->text,
        'html' => $request->html,
        'user' => $request->user,
        'code' => $request->code,
        'status' => $request->status,
        'close_status' => $request->close_status,
        'payload' => $request->payload,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'log');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->log = $item;
        }

        return $response;
    }

    public function deleteTicketLog(\Perfumer\Microservices\Crm\Request\Log\DeleteTicketLogRequest $request): \Perfumer\Microservices\Crm\Response\Log\DeleteTicketLogResponse
    {
        $url = '/ticket/log';

        /** @var \Perfumer\Microservices\Crm\Response\Log\DeleteTicketLogResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Log\DeleteTicketLogResponse(), 'delete', $url, [
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getTicketLogs(\Perfumer\Microservices\Crm\Request\Logs\GetTicketLogsRequest $request): \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse
    {
        $url = '/ticket/logs';

        /** @var \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse(), 'get', $url, [
        'user_fio' => $request->user_fio,
        'ticket' => $request->ticket,
        'ticket_id' => $request->ticket_id,
        'type' => $request->type,
        'text' => $request->text,
        'user' => $request->user,
        'code' => $request->code,
        'status' => $request->status,
        'close_status' => $request->close_status,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'logs');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->logs = $item;
        }

        return $response;
    }

    public function getTicketTasks(\Perfumer\Microservices\Crm\Request\Tasks\GetTicketTasksRequest $request): \Perfumer\Microservices\Crm\Response\Tasks\GetTicketTasksResponse
    {
        $url = '/ticket/tasks';

        /** @var \Perfumer\Microservices\Crm\Response\Tasks\GetTicketTasksResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Tasks\GetTicketTasksResponse(), 'get', $url, [
        'state' => $request->state,
        'close_status' => $request->close_status,
        'user_name' => $request->user_name,
        'user_id' => $request->user_id,
        'customer_name' => $request->customer_name,
        'customer_id' => $request->customer_id,
        'type' => $request->type,
        'description' => $request->description,
        'wake_at_from' => $request->wake_at_from,
        'wake_at_to' => $request->wake_at_to,
        'deadline_at_from' => $request->deadline_at_from,
        'deadline_at_to' => $request->deadline_at_to,
        'closed_at_from' => $request->closed_at_from,
        'closed_at_to' => $request->closed_at_to,
        'expire_at_from' => $request->expire_at_from,
        'expire_at_to' => $request->expire_at_to,
        'activity' => $request->activity,
        'ticket' => $request->ticket,
        'group' => $request->group,
        'code' => $request->code,
        'closed_at' => $request->closed_at,
        'complexity' => $request->complexity,
        'link' => $request->link,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tasks');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tasks = $item;
        }

        return $response;
    }

    public function getTask(\Perfumer\Microservices\Crm\Request\Task\GetTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\GetTaskResponse
    {
        $url = '/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\GetTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\GetTaskResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function deleteTask(\Perfumer\Microservices\Crm\Request\Task\DeleteTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\DeleteTaskResponse
    {
        $url = '/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\DeleteTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\DeleteTaskResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveTask(\Perfumer\Microservices\Crm\Request\Task\SaveTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse
    {
        $url = '/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse(), 'post', $url, [
        'user' => $request->user,
        'customer' => $request->customer,
        'activity' => $request->activity,
        'ticket' => $request->ticket,
        'group' => $request->group,
        'code' => $request->code,
        'deadline_at' => $request->deadline_at,
        'wake_at' => $request->wake_at,
        'closed_at' => $request->closed_at,
        'complexity' => $request->complexity,
        'state' => $request->state,
        'description' => $request->description,
        'link' => $request->link,
        'close_status' => $request->close_status,
        'payload' => $request->payload,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function getTasks(\Perfumer\Microservices\Crm\Request\Tasks\GetTasksRequest $request): \Perfumer\Microservices\Crm\Response\Tasks\GetTasksResponse
    {
        $url = '/tasks';

        /** @var \Perfumer\Microservices\Crm\Response\Tasks\GetTasksResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Tasks\GetTasksResponse(), 'get', $url, [
        'state' => $request->state,
        'close_status' => $request->close_status,
        'user_name' => $request->user_name,
        'user_id' => $request->user_id,
        'customer_name' => $request->customer_name,
        'customer_id' => $request->customer_id,
        'type' => $request->type,
        'description' => $request->description,
        'wake_at_from' => $request->wake_at_from,
        'wake_at_to' => $request->wake_at_to,
        'deadline_at_from' => $request->deadline_at_from,
        'deadline_at_to' => $request->deadline_at_to,
        'closed_at_from' => $request->closed_at_from,
        'closed_at_to' => $request->closed_at_to,
        'expire_at_from' => $request->expire_at_from,
        'expire_at_to' => $request->expire_at_to,
        'activity' => $request->activity,
        'ticket' => $request->ticket,
        'group' => $request->group,
        'code' => $request->code,
        'closed_at' => $request->closed_at,
        'complexity' => $request->complexity,
        'link' => $request->link,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tasks');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tasks = $item;
        }

        return $response;
    }

    public function closeTask(\Perfumer\Microservices\Crm\Request\Task\CloseTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\CloseTaskResponse
    {
        $url = '/task/close';

        /** @var \Perfumer\Microservices\Crm\Response\Task\CloseTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\CloseTaskResponse(), 'post', $url, [
        'task' => $request->task,
        'process_scenario' => $request->process_scenario,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function postponeTask(\Perfumer\Microservices\Crm\Request\Task\PostponeTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\PostponeTaskResponse
    {
        $url = '/task/postpone';

        /** @var \Perfumer\Microservices\Crm\Response\Task\PostponeTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\PostponeTaskResponse(), 'post', $url, [
        'task' => $request->task,
        'user' => $request->user,
        'time_to' => $request->time_to,
        'text' => $request->text,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function takeTask(\Perfumer\Microservices\Crm\Request\Task\TakeTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\TakeTaskResponse
    {
        $url = '/task/take';

        /** @var \Perfumer\Microservices\Crm\Response\Task\TakeTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\TakeTaskResponse(), 'post', $url, [
        'task' => $request->task,
        'user' => $request->user,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function getCustomerCredentials(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerCredentialsRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerCredentialsResponse
    {
        $url = '/customer/credentials';

        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerCredentialsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerCredentialsResponse(), 'get', $url, [
        'iin' => $request->iin,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => $request->password,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function getCustomer(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerResponse
    {
        $url = '/customer';

        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'iin' => $request->iin,
        'phone' => $request->phone,
        'email' => $request->email,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function deleteCustomer(\Perfumer\Microservices\Crm\Request\Customer\DeleteCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerResponse
    {
        $url = '/customer';

        /** @var \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveCustomer(\Perfumer\Microservices\Crm\Request\Customer\SaveCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse
    {
        $url = '/customer';

        /** @var \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse(), 'post', $url, [
        'avatar' => $request->avatar,
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'iin' => $request->iin,
        'code' => $request->code,
        'password' => $request->password,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function updateCustomer(\Perfumer\Microservices\Crm\Request\Customer\UpdateCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerResponse
    {
        $url = '/customer';

        /** @var \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerResponse(), 'patch', $url, [
        'id' => $request->id,
        'avatar' => $request->avatar,
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'iin' => $request->iin,
        'code' => $request->code,
        'password' => $request->password,
        'is_disabled' => $request->is_disabled,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function getCustomers(\Perfumer\Microservices\Crm\Request\Customers\GetCustomersRequest $request): \Perfumer\Microservices\Crm\Response\Customers\GetCustomersResponse
    {
        $url = '/customers';

        /** @var \Perfumer\Microservices\Crm\Response\Customers\GetCustomersResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customers\GetCustomersResponse(), 'get', $url, [
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'iin' => $request->iin,
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'customers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customers = $item;
        }

        return $response;
    }

    public function getProcess(\Perfumer\Microservices\Crm\Request\Process\GetProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\GetProcessResponse
    {
        $url = '/process';

        /** @var \Perfumer\Microservices\Crm\Response\Process\GetProcessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Process\GetProcessResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'process');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->process = $item;
        }

        return $response;
    }

    public function deleteProcess(\Perfumer\Microservices\Crm\Request\Process\DeleteProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\DeleteProcessResponse
    {
        $url = '/process';

        /** @var \Perfumer\Microservices\Crm\Response\Process\DeleteProcessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Process\DeleteProcessResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveProcess(\Perfumer\Microservices\Crm\Request\Process\SaveProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\SaveProcessResponse
    {
        $url = '/process';

        /** @var \Perfumer\Microservices\Crm\Response\Process\SaveProcessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Process\SaveProcessResponse(), 'post', $url, [
        'name' => $request->name,
        'description' => $request->description,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'process');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->process = $item;
        }

        return $response;
    }

    public function updateProcess(\Perfumer\Microservices\Crm\Request\Process\UpdateProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\UpdateProcessResponse
    {
        $url = '/process';

        /** @var \Perfumer\Microservices\Crm\Response\Process\UpdateProcessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Process\UpdateProcessResponse(), 'patch', $url, [
        'id' => $request->id,
        'name' => $request->name,
        'description' => $request->description,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'process');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->process = $item;
        }

        return $response;
    }

    public function getProcesses(\Perfumer\Microservices\Crm\Request\Processes\GetProcessesRequest $request): \Perfumer\Microservices\Crm\Response\Processes\GetProcessesResponse
    {
        $url = '/processes';

        /** @var \Perfumer\Microservices\Crm\Response\Processes\GetProcessesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Processes\GetProcessesResponse(), 'get', $url, [
        'id' => $request->id,
        'name' => $request->name,
        'description' => $request->description,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'processes');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->processes = $item;
        }

        return $response;
    }

    public function getProcessState(\Perfumer\Microservices\Crm\Request\State\GetProcessStateRequest $request): \Perfumer\Microservices\Crm\Response\State\GetProcessStateResponse
    {
        $url = '/process/state';

        /** @var \Perfumer\Microservices\Crm\Response\State\GetProcessStateResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\State\GetProcessStateResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'state');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->state = $item;
        }

        return $response;
    }

    public function saveProcessState(\Perfumer\Microservices\Crm\Request\State\SaveProcessStateRequest $request): \Perfumer\Microservices\Crm\Response\State\SaveProcessStateResponse
    {
        $url = '/process/state';

        /** @var \Perfumer\Microservices\Crm\Response\State\SaveProcessStateResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\State\SaveProcessStateResponse(), 'post', $url, [
        'process' => $request->process,
        'code' => $request->code,
        'task_link' => $request->task_link,
        'name' => $request->name,
        'description' => $request->description,
        'is_initial' => $request->is_initial,
        'is_final' => $request->is_final,
        'log_text' => $request->log_text,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'state');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->state = $item;
        }

        return $response;
    }

    public function updateProcessState(\Perfumer\Microservices\Crm\Request\State\UpdateProcessStateRequest $request): \Perfumer\Microservices\Crm\Response\State\UpdateProcessStateResponse
    {
        $url = '/process/state';

        /** @var \Perfumer\Microservices\Crm\Response\State\UpdateProcessStateResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\State\UpdateProcessStateResponse(), 'patch', $url, [
        'id' => $request->id,
        'process' => $request->process,
        'code' => $request->code,
        'task_link' => $request->task_link,
        'name' => $request->name,
        'description' => $request->description,
        'is_initial' => $request->is_initial,
        'is_final' => $request->is_final,
        'log_text' => $request->log_text,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'state');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->state = $item;
        }

        return $response;
    }

    public function deleteProcessState(\Perfumer\Microservices\Crm\Request\State\DeleteProcessStateRequest $request): \Perfumer\Microservices\Crm\Response\State\DeleteProcessStateResponse
    {
        $url = '/process/state';

        /** @var \Perfumer\Microservices\Crm\Response\State\DeleteProcessStateResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\State\DeleteProcessStateResponse(), 'delete', $url, [
        'id' => $request->id,
        'process' => $request->process,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getProcessStates(\Perfumer\Microservices\Crm\Request\States\GetProcessStatesRequest $request): \Perfumer\Microservices\Crm\Response\States\GetProcessStatesResponse
    {
        $url = '/process/states';

        /** @var \Perfumer\Microservices\Crm\Response\States\GetProcessStatesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\States\GetProcessStatesResponse(), 'get', $url, [
        'process' => $request->process,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'states');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->states = $item;
        }

        return $response;
    }

    public function getProcessScenario(\Perfumer\Microservices\Crm\Request\Scenario\GetProcessScenarioRequest $request): \Perfumer\Microservices\Crm\Response\Scenario\GetProcessScenarioResponse
    {
        $url = '/process/scenario';

        /** @var \Perfumer\Microservices\Crm\Response\Scenario\GetProcessScenarioResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Scenario\GetProcessScenarioResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'scenario');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario = $item;
        }

        return $response;
    }

    public function saveProcessScenario(\Perfumer\Microservices\Crm\Request\Scenario\SaveProcessScenarioRequest $request): \Perfumer\Microservices\Crm\Response\Scenario\SaveProcessScenarioResponse
    {
        $url = '/process/scenario';

        /** @var \Perfumer\Microservices\Crm\Response\Scenario\SaveProcessScenarioResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Scenario\SaveProcessScenarioResponse(), 'post', $url, [
        'code' => $request->code,
        'from_state' => $request->from_state,
        'to_state' => $request->to_state,
        'webhook' => $request->webhook,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'scenario');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario = $item;
        }

        return $response;
    }

    public function updateProcessScenario(\Perfumer\Microservices\Crm\Request\Scenario\UpdateProcessScenarioRequest $request): \Perfumer\Microservices\Crm\Response\Scenario\UpdateProcessScenarioResponse
    {
        $url = '/process/scenario';

        /** @var \Perfumer\Microservices\Crm\Response\Scenario\UpdateProcessScenarioResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Scenario\UpdateProcessScenarioResponse(), 'patch', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'from_state' => $request->from_state,
        'to_state' => $request->to_state,
        'webhook' => $request->webhook,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'scenario');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario = $item;
        }

        return $response;
    }

    public function deleteProcessScenario(\Perfumer\Microservices\Crm\Request\Scenario\DeleteProcessScenarioRequest $request): \Perfumer\Microservices\Crm\Response\Scenario\DeleteProcessScenarioResponse
    {
        $url = '/process/scenario';

        /** @var \Perfumer\Microservices\Crm\Response\Scenario\DeleteProcessScenarioResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Scenario\DeleteProcessScenarioResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getProcessScenarios(\Perfumer\Microservices\Crm\Request\Scenarios\GetProcessScenariosRequest $request): \Perfumer\Microservices\Crm\Response\Scenarios\GetProcessScenariosResponse
    {
        $url = '/process/scenarios';

        /** @var \Perfumer\Microservices\Crm\Response\Scenarios\GetProcessScenariosResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Scenarios\GetProcessScenariosResponse(), 'get', $url, [
        'process' => $request->process,
        'code' => $request->code,
        'from_state' => $request->from_state,
        'to_state' => $request->to_state,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'scenarios');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenarios = $item;
        }

        return $response;
    }

    public function getProcessTask(\Perfumer\Microservices\Crm\Request\Task\GetProcessTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\GetProcessTaskResponse
    {
        $url = '/process/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\GetProcessTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\GetProcessTaskResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function saveProcessTask(\Perfumer\Microservices\Crm\Request\Task\SaveProcessTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\SaveProcessTaskResponse
    {
        $url = '/process/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\SaveProcessTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\SaveProcessTaskResponse(), 'post', $url, [
        'state' => $request->state,
        'activity' => $request->activity,
        'group' => $request->group,
        'is_customer' => $request->is_customer,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function updateProcessTask(\Perfumer\Microservices\Crm\Request\Task\UpdateProcessTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\UpdateProcessTaskResponse
    {
        $url = '/process/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\UpdateProcessTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\UpdateProcessTaskResponse(), 'patch', $url, [
        'id' => $request->id,
        'state' => $request->state,
        'activity' => $request->activity,
        'group' => $request->group,
        'is_customer' => $request->is_customer,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function deleteProcessTask(\Perfumer\Microservices\Crm\Request\Task\DeleteProcessTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\DeleteProcessTaskResponse
    {
        $url = '/process/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\DeleteProcessTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\DeleteProcessTaskResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getProcessTasks(\Perfumer\Microservices\Crm\Request\Tasks\GetProcessTasksRequest $request): \Perfumer\Microservices\Crm\Response\Tasks\GetProcessTasksResponse
    {
        $url = '/process/tasks';

        /** @var \Perfumer\Microservices\Crm\Response\Tasks\GetProcessTasksResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Tasks\GetProcessTasksResponse(), 'get', $url, [
        'process' => $request->process,
        'state' => $request->state,
        'activity' => $request->activity,
        'group' => $request->group,
        'is_customer' => $request->is_customer,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tasks');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tasks = $item;
        }

        return $response;
    }
}
