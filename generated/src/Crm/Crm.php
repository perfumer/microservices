<?php

namespace Generated\Perfumer\Microservices\Crm;

abstract class Crm extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Crm\Crm
{
    public function getPermission(\Perfumer\Microservices\Crm\Request\Permission\GetPermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse
    {
        $url = '/permission';

        /** @var \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse(), 'get', $url, [
        'code' => $request->code,
        ]);
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
        'code' => $request->code,
        ]);

        return $response;
    }

    public function savePermission(\Perfumer\Microservices\Crm\Request\Permission\SavePermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\SavePermissionResponse
    {
        $url = '/permission';

        /** @var \Perfumer\Microservices\Crm\Response\Permission\SavePermissionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permission\SavePermissionResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'parents' => $request->parents,
        'children' => $request->children,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

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
        'child' => $request->child,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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

    public function getCalendar(\Perfumer\Microservices\Crm\Request\Calendar\GetCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse
    {
        $url = '/calendar';

        /** @var \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse(), 'get', $url, [
        'code' => $request->code,
        ]);
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
        ]);

        return $response;
    }

    public function saveCalendar(\Perfumer\Microservices\Crm\Request\Calendar\SaveCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\SaveCalendarResponse
    {
        $url = '/calendar';

        /** @var \Perfumer\Microservices\Crm\Response\Calendar\SaveCalendarResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendar\SaveCalendarResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        ]);
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
        ]);
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
        'code' => $request->code,
        ]);
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
        'code' => $request->code,
        ]);

        return $response;
    }

    public function saveRole(\Perfumer\Microservices\Crm\Request\Role\SaveRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\SaveRoleResponse
    {
        $url = '/role';

        /** @var \Perfumer\Microservices\Crm\Response\Role\SaveRoleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Role\SaveRoleResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        ]);
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
        ]);
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
        'code' => $request->code,
        ]);
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
        'code' => $request->code,
        ]);

        return $response;
    }

    public function saveGroup(\Perfumer\Microservices\Crm\Request\Group\SaveGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\SaveGroupResponse
    {
        $url = '/group';

        /** @var \Perfumer\Microservices\Crm\Response\Group\SaveGroupResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Group\SaveGroupResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'category' => $request->category,
        'parents' => $request->parents,
        'children' => $request->children,
        ]);
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
        'category' => $request->category,
        'parent' => $request->parent,
        'child' => $request->child,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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

    public function getModule(\Perfumer\Microservices\Crm\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);
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
        'child' => $request->child,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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
        ]);
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
        ]);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Crm\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ]);
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
        ]);
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
        'code' => $request->code,
        ]);
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
        'code' => $request->code,
        ]);

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
        ]);
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
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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

    public function UserCredentials(\Perfumer\Microservices\Crm\Request\User\UserCredentialsRequest $request): \Perfumer\Microservices\Crm\Response\User\UserCredentialsResponse
    {
        $url = '/user/credentials';

        /** @var \Perfumer\Microservices\Crm\Response\User\UserCredentialsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\UserCredentialsResponse(), '', $url, [
        'iin' => $request->iin,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => $request->password,
        'code' => $request->code,
        ]);
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
        ]);
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
        ]);

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
        'code' => $request->code,
        ]);
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
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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

    public function getSchedule(\Perfumer\Microservices\Crm\Request\Schedule\GetScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse
    {
        $url = '/schedule';

        /** @var \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse(), 'get', $url, [
        'role' => $request->role,
        'group' => $request->group,
        'activity' => $request->activity,
        'calendar' => $request->calendar,
        ]);
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
        'role' => $request->role,
        'group' => $request->group,
        'activity' => $request->activity,
        'calendar' => $request->calendar,
        ]);

        return $response;
    }

    public function saveSchedule(\Perfumer\Microservices\Crm\Request\Schedule\SaveScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse
    {
        $url = '/schedule';

        /** @var \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse(), 'post', $url, [
        'role' => $request->role,
        'group' => $request->group,
        'activity' => $request->activity,
        'calendar' => $request->calendar,
        ]);
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
        'role' => $request->role,
        'group' => $request->group,
        'activity' => $request->activity,
        'calendar' => $request->calendar,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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
        'role' => $request->role,
        'group' => $request->group,
        ]);
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
        'role' => $request->role,
        'group' => $request->group,
        ]);

        return $response;
    }

    public function saveAccess(\Perfumer\Microservices\Crm\Request\Access\SaveAccessRequest $request): \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse
    {
        $url = '/access';

        /** @var \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse(), 'post', $url, [
        'role' => $request->role,
        'group' => $request->group,
        'permissions' => $request->permissions,
        ]);
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
        'role' => $request->role,
        'group' => $request->group,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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
        'code' => $request->code,
        ]);
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
        ]);

        return $response;
    }

    public function saveTicket(\Perfumer\Microservices\Crm\Request\Ticket\SaveTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse
    {
        $url = '/ticket';

        /** @var \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse(), 'post', $url, [
        'name' => $request->name,
        'customer' => $request->customer,
        'module' => $request->module,
        'status' => $request->status,
        'code' => $request->code,
        'deadline_at' => $request->deadline_at,
        'opened_at' => $request->opened_at,
        'closed_at' => $request->closed_at,
        'payload' => $request->payload,
        ]);
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
        'name' => $request->name,
        'customer' => $request->customer,
        'module' => $request->module,
        'status' => $request->status,
        'code' => $request->code,
        'deadline_at' => $request->deadline_at,
        'opened_at' => $request->opened_at,
        'closed_at' => $request->closed_at,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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

    public function saveTicketForm(\Perfumer\Microservices\Crm\Request\Form\SaveTicketFormRequest $request): \Perfumer\Microservices\Crm\Response\Form\SaveTicketFormResponse
    {
        $url = '/ticket/form';

        /** @var \Perfumer\Microservices\Crm\Response\Form\SaveTicketFormResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Form\SaveTicketFormResponse(), 'post', $url, [
        'ticket' => $request->ticket,
        'form' => $request->form,
        'category' => $request->category,
        'payload' => $request->payload,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function deleteTicketForm(\Perfumer\Microservices\Crm\Request\Form\DeleteTicketFormRequest $request): \Perfumer\Microservices\Crm\Response\Form\DeleteTicketFormResponse
    {
        $url = '/ticket/form';

        /** @var \Perfumer\Microservices\Crm\Response\Form\DeleteTicketFormResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Form\DeleteTicketFormResponse(), 'delete', $url, [
        'code' => $request->code,
        ]);

        return $response;
    }

    public function getTicketForms(\Perfumer\Microservices\Crm\Request\Forms\GetTicketFormsRequest $request): \Perfumer\Microservices\Crm\Response\Forms\GetTicketFormsResponse
    {
        $url = '/ticket/forms';

        /** @var \Perfumer\Microservices\Crm\Response\Forms\GetTicketFormsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Forms\GetTicketFormsResponse(), 'get', $url, [
        'ticket' => $request->ticket,
        'form' => $request->form,
        'category' => $request->category,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }

        return $response;
    }

    public function saveTicketLog(\Perfumer\Microservices\Crm\Request\Log\SaveTicketLogRequest $request): \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse
    {
        $url = '/ticket/log';

        /** @var \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse(), 'post', $url, [
        'ticket' => $request->ticket,
        'text' => $request->text,
        'user' => $request->user,
        'code' => $request->code,
        'status' => $request->status,
        'form' => $request->form,
        'payload' => $request->payload,
        ]);
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
        ]);

        return $response;
    }

    public function getTicketLogs(\Perfumer\Microservices\Crm\Request\Logs\GetTicketLogsRequest $request): \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse
    {
        $url = '/ticket/logs';

        /** @var \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse(), 'get', $url, [
        'ticket' => $request->ticket,
        'text' => $request->text,
        'user' => $request->user,
        'code' => $request->code,
        'status' => $request->status,
        'form' => $request->form,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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
        'user' => $request->user,
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
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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
        'code' => $request->code,
        ]);
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
        'code' => $request->code,
        ]);

        return $response;
    }

    public function saveTask(\Perfumer\Microservices\Crm\Request\Task\SaveTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse
    {
        $url = '/task';

        /** @var \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse(), 'post', $url, [
        'user' => $request->user,
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
        ]);
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
        'user' => $request->user,
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
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);
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

    public function CustomerCredentials(\Perfumer\Microservices\Crm\Request\Customer\CustomerCredentialsRequest $request): \Perfumer\Microservices\Crm\Response\Customer\CustomerCredentialsResponse
    {
        $url = '/customer/credentials';

        /** @var \Perfumer\Microservices\Crm\Response\Customer\CustomerCredentialsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customer\CustomerCredentialsResponse(), '', $url, [
        'iin' => $request->iin,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => $request->password,
        'code' => $request->code,
        ]);
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
        ]);
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
        ]);

        return $response;
    }

    public function saveCustomer(\Perfumer\Microservices\Crm\Request\Customer\SaveCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse
    {
        $url = '/customer';

        /** @var \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse(), 'post', $url, [
        'id' => $request->id,
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'iin' => $request->iin,
        'code' => $request->code,
        'password' => $request->password,
        ]);
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
        ]);
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
}
