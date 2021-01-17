<?php

namespace Generated\Perfumer\Microservices\Crm;

abstract class Crm extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Crm\Crm
{
    public function getPermission(\Perfumer\Microservices\Crm\Request\Permission\GetPermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse
    {
        $url = '/permission';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'permission');

        $response->permission = $array;

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

        /** @var \Perfumer\Microservices\Crm\Response\Permission\SavePermissionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'permission');

        if (null !== $array) {
            $response->permission = $array;
        }

        return $response;
    }

    public function getPermissions(\Perfumer\Microservices\Crm\Request\Permissions\GetPermissionsRequest $request): \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse
    {
        $url = '/permissions';

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

        /* @var \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->permissions = $this->fetchKeyFromContent($response->_content, 'permissions');

        return $response;
    }

    public function getCalendar(\Perfumer\Microservices\Crm\Request\Calendar\GetCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse
    {
        $url = '/calendar';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'calendar');

        $response->calendar = $array;

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

        /** @var \Perfumer\Microservices\Crm\Response\Calendar\SaveCalendarResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'calendar');

        if (null !== $array) {
            $response->calendar = $array;
        }

        return $response;
    }

    public function getCalendars(\Perfumer\Microservices\Crm\Request\Calendars\GetCalendarsRequest $request): \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse
    {
        $url = '/calendars';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->calendars = $this->fetchKeyFromContent($response->_content, 'calendars');

        return $response;
    }

    public function getRole(\Perfumer\Microservices\Crm\Request\Role\GetRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse
    {
        $url = '/role';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'role');

        $response->role = $array;

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

        /** @var \Perfumer\Microservices\Crm\Response\Role\SaveRoleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'role');

        if (null !== $array) {
            $response->role = $array;
        }

        return $response;
    }

    public function getRoles(\Perfumer\Microservices\Crm\Request\Roles\GetRolesRequest $request): \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse
    {
        $url = '/roles';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->roles = $this->fetchKeyFromContent($response->_content, 'roles');

        return $response;
    }

    public function getGroup(\Perfumer\Microservices\Crm\Request\Group\GetGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse
    {
        $url = '/group';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'group');

        $response->group = $array;

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

        /** @var \Perfumer\Microservices\Crm\Response\Group\SaveGroupResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'group');

        if (null !== $array) {
            $response->group = $array;
        }

        return $response;
    }

    public function getGroups(\Perfumer\Microservices\Crm\Request\Groups\GetGroupsRequest $request): \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse
    {
        $url = '/groups';

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

        /* @var \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->groups = $this->fetchKeyFromContent($response->_content, 'groups');

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Crm\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse
    {
        $url = '/module';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        $response->module = $array;

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Crm\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

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

        /* @var \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->modules = $this->fetchKeyFromContent($response->_content, 'modules');

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
        'parents' => $request->parents,
        'children' => $request->children,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Module\SaveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
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

        /** @var \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
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

        /** @var \Perfumer\Microservices\Crm\Response\Module\UnarchiveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
        }

        return $response;
    }

    public function getActivity(\Perfumer\Microservices\Crm\Request\Activity\GetActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse
    {
        $url = '/activity';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'activity');

        $response->activity = $array;

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

        /** @var \Perfumer\Microservices\Crm\Response\Activity\SaveActivityResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'activity');

        if (null !== $array) {
            $response->activity = $array;
        }

        return $response;
    }

    public function getActivities(\Perfumer\Microservices\Crm\Request\Activities\GetActivitiesRequest $request): \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse
    {
        $url = '/activities';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'priority' => $request->priority,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->activities = $this->fetchKeyFromContent($response->_content, 'activities');

        return $response;
    }

    public function getUser(\Perfumer\Microservices\Crm\Request\User\GetUserRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserResponse
    {
        $url = '/user';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\GetUserResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'user');

        $response->user = $array;

        return $response;
    }

    public function deleteUser(\Perfumer\Microservices\Crm\Request\User\DeleteUserRequest $request): \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse
    {
        $url = '/user';

        /** @var \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse(), 'delete', $url, [
        'code' => $request->code,
        ]);

        return $response;
    }

    public function saveUser(\Perfumer\Microservices\Crm\Request\User\SaveUserRequest $request): \Perfumer\Microservices\Crm\Response\User\SaveUserResponse
    {
        $url = '/user';

        /** @var \Perfumer\Microservices\Crm\Response\User\SaveUserResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\User\SaveUserResponse(), 'post', $url, [
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\User\SaveUserResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'user');

        if (null !== $array) {
            $response->user = $array;
        }

        return $response;
    }

    public function getUsers(\Perfumer\Microservices\Crm\Request\Users\GetUsersRequest $request): \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse
    {
        $url = '/users';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse(), 'get', $url, [
        'last_name' => $request->last_name,
        'first_name' => $request->first_name,
        'mid_name' => $request->mid_name,
        'code' => $request->code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->users = $this->fetchKeyFromContent($response->_content, 'users');

        return $response;
    }

    public function getSchedule(\Perfumer\Microservices\Crm\Request\Schedule\GetScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse
    {
        $url = '/schedule';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse(), 'get', $url, [
        'role' => $request->role,
        'group' => $request->group,
        'activity' => $request->activity,
        'calendar' => $request->calendar,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'schedule');

        $response->schedule = $array;

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

        /** @var \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (null !== $array) {
            $response->schedule = $array;
        }

        return $response;
    }

    public function getSchedules(\Perfumer\Microservices\Crm\Request\Schedules\GetSchedulesRequest $request): \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse
    {
        $url = '/schedules';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse(), 'get', $url, [
        'role' => $request->role,
        'group' => $request->group,
        'activity' => $request->activity,
        'calendar' => $request->calendar,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->schedules = $this->fetchKeyFromContent($response->_content, 'schedules');

        return $response;
    }

    public function getAccess(\Perfumer\Microservices\Crm\Request\Access\GetAccessRequest $request): \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse
    {
        $url = '/access';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse(), 'get', $url, [
        'role' => $request->role,
        'group' => $request->group,
        ]);

        /** @var \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'access');

        $response->access = $array;

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

        /** @var \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'access');

        if (null !== $array) {
            $response->access = $array;
        }

        return $response;
    }

    public function getAccesses(\Perfumer\Microservices\Crm\Request\Accesses\GetAccessesRequest $request): \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse
    {
        $url = '/accesses';

        $response = $this->doRequest(new \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse(), 'get', $url, [
        'role' => $request->role,
        'group' => $request->group,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->accesses = $this->fetchKeyFromContent($response->_content, 'accesses');

        return $response;
    }
}
