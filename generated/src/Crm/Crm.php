<?php

namespace Generated\Perfumer\Microservices\Crm;

abstract class Crm extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Crm\Crm
{
    public function getPermission(\Perfumer\Microservices\Crm\Request\Permission\GetPermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Permission\GetPermissionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

        return $response;
    }

    public function deletePermission(\Perfumer\Microservices\Crm\Request\Permission\DeletePermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\DeletePermissionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Permission\DeletePermissionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Permission\DeletePermissionResponse());

        return $response;
    }

    public function getPermissions(\Perfumer\Microservices\Crm\Request\Permissions\GetPermissionsRequest $request): \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Permissions\GetPermissionsResponse());
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

    public function createPermission(\Perfumer\Microservices\Crm\Request\Permission\CreatePermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\CreatePermissionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Permission\CreatePermissionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Permission\CreatePermissionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

        return $response;
    }

    public function upsertPermission(\Perfumer\Microservices\Crm\Request\Permission\UpsertPermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\UpsertPermissionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Permission\UpsertPermissionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Permission\UpsertPermissionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

        return $response;
    }

    public function updatePermission(\Perfumer\Microservices\Crm\Request\Permission\UpdatePermissionRequest $request): \Perfumer\Microservices\Crm\Response\Permission\UpdatePermissionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Permission\UpdatePermissionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Permission\UpdatePermissionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'permission');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permission = $item;
        }

        return $response;
    }

    public function getCalendar(\Perfumer\Microservices\Crm\Request\Calendar\GetCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Calendar\GetCalendarResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar = $item;
        }

        return $response;
    }

    public function deleteCalendar(\Perfumer\Microservices\Crm\Request\Calendar\DeleteCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\DeleteCalendarResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Calendar\DeleteCalendarResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Calendar\DeleteCalendarResponse());

        return $response;
    }

    public function createCalendar(\Perfumer\Microservices\Crm\Request\Calendar\CreateCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\CreateCalendarResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Calendar\CreateCalendarResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Calendar\CreateCalendarResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar = $item;
        }

        return $response;
    }

    public function updateCalendar(\Perfumer\Microservices\Crm\Request\Calendar\UpdateCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\UpdateCalendarResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Calendar\UpdateCalendarResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Calendar\UpdateCalendarResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar = $item;
        }

        return $response;
    }

    public function upsertCalendar(\Perfumer\Microservices\Crm\Request\Calendar\UpsertCalendarRequest $request): \Perfumer\Microservices\Crm\Response\Calendar\UpsertCalendarResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Calendar\UpsertCalendarResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Calendar\UpsertCalendarResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar = $item;
        }

        return $response;
    }

    public function getCalendars(\Perfumer\Microservices\Crm\Request\Calendars\GetCalendarsRequest $request): \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Calendars\GetCalendarsResponse());
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

    public function getCalendarEntry(\Perfumer\Microservices\Crm\Request\CalendarEntry\GetCalendarEntryRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEntry\GetCalendarEntryResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEntry\GetCalendarEntryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEntry\GetCalendarEntryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_entry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_entry = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEntry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEntry = $item;
        }

        return $response;
    }

    public function deleteCalendarEntry(\Perfumer\Microservices\Crm\Request\CalendarEntry\DeleteCalendarEntryRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEntry\DeleteCalendarEntryResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEntry\DeleteCalendarEntryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEntry\DeleteCalendarEntryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_entry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_entry = $item;
        }

        return $response;
    }

    public function createCalendarEntry(\Perfumer\Microservices\Crm\Request\CalendarEntry\CreateCalendarEntryRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEntry\CreateCalendarEntryResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEntry\CreateCalendarEntryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEntry\CreateCalendarEntryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_entry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_entry = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEntry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEntry = $item;
        }

        return $response;
    }

    public function updateCalendarEntry(\Perfumer\Microservices\Crm\Request\CalendarEntry\UpdateCalendarEntryRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEntry\UpdateCalendarEntryResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEntry\UpdateCalendarEntryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEntry\UpdateCalendarEntryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_entry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_entry = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEntry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEntry = $item;
        }

        return $response;
    }

    public function upsertCalendarEntry(\Perfumer\Microservices\Crm\Request\CalendarEntry\UpsertCalendarEntryRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEntry\UpsertCalendarEntryResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEntry\UpsertCalendarEntryResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEntry\UpsertCalendarEntryResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEntry');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEntry = $item;
        }

        return $response;
    }

    public function getCalendarEntries(\Perfumer\Microservices\Crm\Request\CalendarEntries\GetCalendarEntriesRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEntries\GetCalendarEntriesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEntries\GetCalendarEntriesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEntries\GetCalendarEntriesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_entries');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_entries = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEntries');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEntries = $item;
        }

        return $response;
    }

    public function getRole(\Perfumer\Microservices\Crm\Request\Role\GetRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Role\GetRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'role');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->role = $item;
        }

        return $response;
    }

    public function deleteRole(\Perfumer\Microservices\Crm\Request\Role\DeleteRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\DeleteRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Role\DeleteRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Role\DeleteRoleResponse());

        return $response;
    }

    public function createRole(\Perfumer\Microservices\Crm\Request\Role\CreateRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\CreateRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Role\CreateRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Role\CreateRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'role');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->role = $item;
        }

        return $response;
    }

    public function updateRole(\Perfumer\Microservices\Crm\Request\Role\UpdateRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\UpdateRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Role\UpdateRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Role\UpdateRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'role');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->role = $item;
        }

        return $response;
    }

    public function upsertRole(\Perfumer\Microservices\Crm\Request\Role\UpsertRoleRequest $request): \Perfumer\Microservices\Crm\Response\Role\UpsertRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Role\UpsertRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Role\UpsertRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'role');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->role = $item;
        }

        return $response;
    }

    public function getRoles(\Perfumer\Microservices\Crm\Request\Roles\GetRolesRequest $request): \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Roles\GetRolesResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\GetGroupResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function upsertGroup(\Perfumer\Microservices\Crm\Request\Group\UpsertGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\UpsertGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Group\UpsertGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\UpsertGroupResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function getGroups(\Perfumer\Microservices\Crm\Request\Groups\GetGroupsRequest $request): \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Groups\GetGroupsResponse());
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

    public function createGroup(\Perfumer\Microservices\Crm\Request\Group\CreateGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\CreateGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Group\CreateGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\CreateGroupResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function deleteGroup(\Perfumer\Microservices\Crm\Request\Group\DeleteGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\DeleteGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Group\DeleteGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\DeleteGroupResponse());

        return $response;
    }

    public function getGroupProfiles(\Perfumer\Microservices\Crm\Request\Group\GetGroupProfilesRequest $request): \Perfumer\Microservices\Crm\Response\Group\GetGroupProfilesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Group\GetGroupProfilesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\GetGroupProfilesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'profiles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->profiles = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function getGroupProfile(\Perfumer\Microservices\Crm\Request\Group\GetGroupProfileRequest $request): \Perfumer\Microservices\Crm\Response\Group\GetGroupProfileResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Group\GetGroupProfileResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\GetGroupProfileResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'profile');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->profile = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function archiveGroup(\Perfumer\Microservices\Crm\Request\Group\ArchiveGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\ArchiveGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Group\ArchiveGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\ArchiveGroupResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function unarchiveGroup(\Perfumer\Microservices\Crm\Request\Group\UnarchiveGroupRequest $request): \Perfumer\Microservices\Crm\Response\Group\UnarchiveGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Group\UnarchiveGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Group\UnarchiveGroupResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Crm\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\GetModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Crm\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Modules\GetModulesResponse());
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

    public function createModule(\Perfumer\Microservices\Crm\Request\Module\CreateModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\CreateModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\CreateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\CreateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function updateModule(\Perfumer\Microservices\Crm\Request\Module\UpdateModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\UpdateModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\UpdateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\UpdateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function upsertModule(\Perfumer\Microservices\Crm\Request\Module\UpsertModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\UpsertModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\UpsertModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\UpsertModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Crm\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\DeleteModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\DeleteModuleResponse());

        return $response;
    }

    public function copyModule(\Perfumer\Microservices\Crm\Request\Module\CopyModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\CopyModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\CopyModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\CopyModuleResponse());

        return $response;
    }

    public function migrateModule(\Perfumer\Microservices\Crm\Request\Module\MigrateModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\MigrateModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\MigrateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\MigrateModuleResponse());

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Crm\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\ArchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Crm\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Crm\Response\Module\UnarchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\UnarchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function addModuleRole(\Perfumer\Microservices\Crm\Request\Module\AddModuleRoleRequest $request): \Perfumer\Microservices\Crm\Response\Module\AddModuleRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\AddModuleRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\AddModuleRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModuleRole(\Perfumer\Microservices\Crm\Request\Module\DeleteModuleRoleRequest $request): \Perfumer\Microservices\Crm\Response\Module\DeleteModuleRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\DeleteModuleRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\DeleteModuleRoleResponse());

        return $response;
    }

    public function getModuleRoles(\Perfumer\Microservices\Crm\Request\Module\GetModuleRolesRequest $request): \Perfumer\Microservices\Crm\Response\Module\GetModuleRolesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Module\GetModuleRolesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Module\GetModuleRolesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module_roles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module_roles = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getUserModules(\Perfumer\Microservices\Crm\Request\UserModules\GetUserModulesRequest $request): \Perfumer\Microservices\Crm\Response\UserModules\GetUserModulesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\UserModules\GetUserModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\UserModules\GetUserModulesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'modules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->modules = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'userModules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->userModules = $item;
        }

        return $response;
    }

    public function getUserModule(\Perfumer\Microservices\Crm\Request\UserModule\GetUserModuleRequest $request): \Perfumer\Microservices\Crm\Response\UserModule\GetUserModuleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\UserModule\GetUserModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\UserModule\GetUserModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'userModule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->userModule = $item;
        }

        return $response;
    }

    public function getActivity(\Perfumer\Microservices\Crm\Request\Activity\GetActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Activity\GetActivityResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'activity');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->activity = $item;
        }

        return $response;
    }

    public function deleteActivity(\Perfumer\Microservices\Crm\Request\Activity\DeleteActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\DeleteActivityResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Activity\DeleteActivityResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Activity\DeleteActivityResponse());

        return $response;
    }

    public function saveActivity(\Perfumer\Microservices\Crm\Request\Activity\SaveActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\SaveActivityResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Activity\SaveActivityResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Activity\SaveActivityResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'activity');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->activity = $item;
        }

        return $response;
    }

    public function updateActivity(\Perfumer\Microservices\Crm\Request\Activity\UpdateActivityRequest $request): \Perfumer\Microservices\Crm\Response\Activity\UpdateActivityResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Activity\UpdateActivityResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Activity\UpdateActivityResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'activity');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->activity = $item;
        }

        return $response;
    }

    public function getActivities(\Perfumer\Microservices\Crm\Request\Activities\GetActivitiesRequest $request): \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Activities\GetActivitiesResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserCredentialsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\GetUserCredentialsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function getUser(\Perfumer\Microservices\Crm\Request\User\GetUserRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\GetUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function deleteUser(\Perfumer\Microservices\Crm\Request\User\DeleteUserRequest $request): \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\DeleteUserResponse());

        return $response;
    }

    public function saveUser(\Perfumer\Microservices\Crm\Request\User\SaveUserRequest $request): \Perfumer\Microservices\Crm\Response\User\SaveUserResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\SaveUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\SaveUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function createUser(\Perfumer\Microservices\Crm\Request\User\CreateUserRequest $request): \Perfumer\Microservices\Crm\Response\User\CreateUserResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\CreateUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\CreateUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function updateUser(\Perfumer\Microservices\Crm\Request\User\UpdateUserRequest $request): \Perfumer\Microservices\Crm\Response\User\UpdateUserResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\UpdateUserResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\UpdateUserResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function updateUserPassword(\Perfumer\Microservices\Crm\Request\User\UpdateUserPasswordRequest $request): \Perfumer\Microservices\Crm\Response\User\UpdateUserPasswordResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\UpdateUserPasswordResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\UpdateUserPasswordResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function getUsers(\Perfumer\Microservices\Crm\Request\Users\GetUsersRequest $request): \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Users\GetUsersResponse());
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

    public function getUserForms(\Perfumer\Microservices\Crm\Request\User\GetUserFormsRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserFormsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserFormsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\GetUserFormsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
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

    public function getUserProfiles(\Perfumer\Microservices\Crm\Request\User\GetUserProfilesRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserProfilesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserProfilesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\GetUserProfilesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'profiles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->profiles = $item;
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

    public function getUserProfile(\Perfumer\Microservices\Crm\Request\User\GetUserProfileRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserProfileResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserProfileResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\GetUserProfileResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'profile');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->profile = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function createUserWorkSession(\Perfumer\Microservices\Crm\Request\User\CreateUserWorkSessionRequest $request): \Perfumer\Microservices\Crm\Response\User\CreateUserWorkSessionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\CreateUserWorkSessionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\CreateUserWorkSessionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'is_working');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->is_working = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function deleteUserWorkSession(\Perfumer\Microservices\Crm\Request\User\DeleteUserWorkSessionRequest $request): \Perfumer\Microservices\Crm\Response\User\DeleteUserWorkSessionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\DeleteUserWorkSessionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\DeleteUserWorkSessionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'is_working');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->is_working = $item;
        }

        return $response;
    }

    public function addUserRole(\Perfumer\Microservices\Crm\Request\User\AddUserRoleRequest $request): \Perfumer\Microservices\Crm\Response\User\AddUserRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\AddUserRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\AddUserRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function deleteUserRole(\Perfumer\Microservices\Crm\Request\User\DeleteUserRoleRequest $request): \Perfumer\Microservices\Crm\Response\User\DeleteUserRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\DeleteUserRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\DeleteUserRoleResponse());

        return $response;
    }

    public function getUserRoles(\Perfumer\Microservices\Crm\Request\User\GetUserRolesRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserRolesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserRolesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\GetUserRolesResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Schedule\GetScheduleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function deleteSchedule(\Perfumer\Microservices\Crm\Request\Schedule\DeleteScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\DeleteScheduleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Schedule\DeleteScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Schedule\DeleteScheduleResponse());

        return $response;
    }

    public function saveSchedule(\Perfumer\Microservices\Crm\Request\Schedule\SaveScheduleRequest $request): \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Schedule\SaveScheduleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function getSchedules(\Perfumer\Microservices\Crm\Request\Schedules\GetSchedulesRequest $request): \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Schedules\GetSchedulesResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Access\GetAccessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'access');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->access = $item;
        }

        return $response;
    }

    public function deleteAccess(\Perfumer\Microservices\Crm\Request\Access\DeleteAccessRequest $request): \Perfumer\Microservices\Crm\Response\Access\DeleteAccessResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Access\DeleteAccessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Access\DeleteAccessResponse());

        return $response;
    }

    public function saveAccess(\Perfumer\Microservices\Crm\Request\Access\SaveAccessRequest $request): \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Access\SaveAccessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'access');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->access = $item;
        }

        return $response;
    }

    public function getAccesses(\Perfumer\Microservices\Crm\Request\Accesses\GetAccessesRequest $request): \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Accesses\GetAccessesResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\Ticket\GetTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Ticket\GetTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ticket = $item;
        }

        return $response;
    }

    public function deleteTicket(\Perfumer\Microservices\Crm\Request\Ticket\DeleteTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\DeleteTicketResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Ticket\DeleteTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Ticket\DeleteTicketResponse());

        return $response;
    }

    public function saveTicket(\Perfumer\Microservices\Crm\Request\Ticket\SaveTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Ticket\SaveTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ticket = $item;
        }

        return $response;
    }

    public function getTickets(\Perfumer\Microservices\Crm\Request\Tickets\GetTicketsRequest $request): \Perfumer\Microservices\Crm\Response\Tickets\GetTicketsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Tickets\GetTicketsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Tickets\GetTicketsResponse());
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

    public function updatePayloadTicket(\Perfumer\Microservices\Crm\Request\Ticket\UpdatePayloadTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\UpdatePayloadTicketResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Ticket\UpdatePayloadTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Ticket\UpdatePayloadTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ticket = $item;
        }

        return $response;
    }

    public function getLastTicket(\Perfumer\Microservices\Crm\Request\Ticket\GetLastTicketRequest $request): \Perfumer\Microservices\Crm\Response\Ticket\GetLastTicketResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Ticket\GetLastTicketResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Ticket\GetLastTicketResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'ticket');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ticket = $item;
        }

        return $response;
    }

    public function saveTicketLog(\Perfumer\Microservices\Crm\Request\Log\SaveTicketLogRequest $request): \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Log\SaveTicketLogResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'log');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->log = $item;
        }

        return $response;
    }

    public function deleteTicketLog(\Perfumer\Microservices\Crm\Request\Log\DeleteTicketLogRequest $request): \Perfumer\Microservices\Crm\Response\Log\DeleteTicketLogResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Log\DeleteTicketLogResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Log\DeleteTicketLogResponse());

        return $response;
    }

    public function getTicketLogs(\Perfumer\Microservices\Crm\Request\Logs\GetTicketLogsRequest $request): \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Logs\GetTicketLogsResponse());
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

    public function getTicketForms(\Perfumer\Microservices\Crm\Request\Forms\GetTicketFormsRequest $request): \Perfumer\Microservices\Crm\Response\Forms\GetTicketFormsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Forms\GetTicketFormsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Forms\GetTicketFormsResponse());
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

    public function getTask(\Perfumer\Microservices\Crm\Request\Task\GetTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\GetTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\GetTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\GetTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function deleteTask(\Perfumer\Microservices\Crm\Request\Task\DeleteTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\DeleteTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\DeleteTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\DeleteTaskResponse());

        return $response;
    }

    public function saveTask(\Perfumer\Microservices\Crm\Request\Task\SaveTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\SaveTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function updateTask(\Perfumer\Microservices\Crm\Request\Task\UpdateTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\UpdateTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\UpdateTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\UpdateTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function getTasks(\Perfumer\Microservices\Crm\Request\Tasks\GetTasksRequest $request): \Perfumer\Microservices\Crm\Response\Tasks\GetTasksResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Tasks\GetTasksResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Tasks\GetTasksResponse());
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

    public function getClosedTasksStats(\Perfumer\Microservices\Crm\Request\Tasks\GetClosedTasksStatsRequest $request): \Perfumer\Microservices\Crm\Response\Tasks\GetClosedTasksStatsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Tasks\GetClosedTasksStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Tasks\GetClosedTasksStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
        }
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
        /** @var \Perfumer\Microservices\Crm\Response\Task\CloseTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\CloseTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function postponeTask(\Perfumer\Microservices\Crm\Request\Task\PostponeTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\PostponeTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\PostponeTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\PostponeTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function extendTask(\Perfumer\Microservices\Crm\Request\Task\ExtendTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\ExtendTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\ExtendTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\ExtendTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function takeTask(\Perfumer\Microservices\Crm\Request\Task\TakeTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\TakeTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\TakeTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\TakeTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function assignTask(\Perfumer\Microservices\Crm\Request\Task\AssignTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\AssignTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\AssignTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\AssignTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function getCustomerCredentials(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerCredentialsRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerCredentialsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerCredentialsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerCredentialsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function getCustomer(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function deleteCustomer(\Perfumer\Microservices\Crm\Request\Customer\DeleteCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerResponse());

        return $response;
    }

    public function saveCustomer(\Perfumer\Microservices\Crm\Request\Customer\SaveCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\SaveCustomerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function createCustomer(\Perfumer\Microservices\Crm\Request\Customer\CreateCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\CreateCustomerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\CreateCustomerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\CreateCustomerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function updateCustomer(\Perfumer\Microservices\Crm\Request\Customer\UpdateCustomerRequest $request): \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function updateCustomerPassword(\Perfumer\Microservices\Crm\Request\Customer\UpdateCustomerPasswordRequest $request): \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerPasswordResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerPasswordResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\UpdateCustomerPasswordResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function getCustomers(\Perfumer\Microservices\Crm\Request\Customers\GetCustomersRequest $request): \Perfumer\Microservices\Crm\Response\Customers\GetCustomersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customers\GetCustomersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customers\GetCustomersResponse());
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

    public function getCustomerForms(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerFormsRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerFormsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerFormsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerFormsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function getCustomerProfiles(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerProfilesRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerProfilesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerProfilesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerProfilesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'profiles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->profiles = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function getCustomerProfile(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerProfileRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerProfileResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerProfileResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerProfileResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'profile');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->profile = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function addCustomerGroup(\Perfumer\Microservices\Crm\Request\Customer\AddCustomerGroupRequest $request): \Perfumer\Microservices\Crm\Response\Customer\AddCustomerGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\AddCustomerGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\AddCustomerGroupResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function deleteCustomerGroup(\Perfumer\Microservices\Crm\Request\Customer\DeleteCustomerGroupRequest $request): \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\DeleteCustomerGroupResponse());

        return $response;
    }

    public function getCustomerGroup(\Perfumer\Microservices\Crm\Request\Customer\GetCustomerGroupRequest $request): \Perfumer\Microservices\Crm\Response\Customer\GetCustomerGroupResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Customer\GetCustomerGroupResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Customer\GetCustomerGroupResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customer_groups');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer_groups = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function getProcess(\Perfumer\Microservices\Crm\Request\Process\GetProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\GetProcessResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Process\GetProcessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Process\GetProcessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'process');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->process = $item;
        }

        return $response;
    }

    public function deleteProcess(\Perfumer\Microservices\Crm\Request\Process\DeleteProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\DeleteProcessResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Process\DeleteProcessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Process\DeleteProcessResponse());

        return $response;
    }

    public function saveProcess(\Perfumer\Microservices\Crm\Request\Process\SaveProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\SaveProcessResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Process\SaveProcessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Process\SaveProcessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'process');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->process = $item;
        }

        return $response;
    }

    public function updateProcess(\Perfumer\Microservices\Crm\Request\Process\UpdateProcessRequest $request): \Perfumer\Microservices\Crm\Response\Process\UpdateProcessResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Process\UpdateProcessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Process\UpdateProcessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'process');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->process = $item;
        }

        return $response;
    }

    public function getProcesses(\Perfumer\Microservices\Crm\Request\Processes\GetProcessesRequest $request): \Perfumer\Microservices\Crm\Response\Processes\GetProcessesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Processes\GetProcessesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Processes\GetProcessesResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\State\GetProcessStateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\State\GetProcessStateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'state');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->state = $item;
        }

        return $response;
    }

    public function saveProcessState(\Perfumer\Microservices\Crm\Request\State\SaveProcessStateRequest $request): \Perfumer\Microservices\Crm\Response\State\SaveProcessStateResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\State\SaveProcessStateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\State\SaveProcessStateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'state');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->state = $item;
        }

        return $response;
    }

    public function updateProcessState(\Perfumer\Microservices\Crm\Request\State\UpdateProcessStateRequest $request): \Perfumer\Microservices\Crm\Response\State\UpdateProcessStateResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\State\UpdateProcessStateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\State\UpdateProcessStateResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'state');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->state = $item;
        }

        return $response;
    }

    public function deleteProcessState(\Perfumer\Microservices\Crm\Request\State\DeleteProcessStateRequest $request): \Perfumer\Microservices\Crm\Response\State\DeleteProcessStateResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\State\DeleteProcessStateResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\State\DeleteProcessStateResponse());

        return $response;
    }

    public function getProcessStates(\Perfumer\Microservices\Crm\Request\States\GetProcessStatesRequest $request): \Perfumer\Microservices\Crm\Response\States\GetProcessStatesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\States\GetProcessStatesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\States\GetProcessStatesResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\Scenario\GetProcessScenarioResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Scenario\GetProcessScenarioResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'scenario');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario = $item;
        }

        return $response;
    }

    public function saveProcessScenario(\Perfumer\Microservices\Crm\Request\Scenario\SaveProcessScenarioRequest $request): \Perfumer\Microservices\Crm\Response\Scenario\SaveProcessScenarioResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Scenario\SaveProcessScenarioResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Scenario\SaveProcessScenarioResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'scenario');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario = $item;
        }

        return $response;
    }

    public function updateProcessScenario(\Perfumer\Microservices\Crm\Request\Scenario\UpdateProcessScenarioRequest $request): \Perfumer\Microservices\Crm\Response\Scenario\UpdateProcessScenarioResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Scenario\UpdateProcessScenarioResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Scenario\UpdateProcessScenarioResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'scenario');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario = $item;
        }

        return $response;
    }

    public function deleteProcessScenario(\Perfumer\Microservices\Crm\Request\Scenario\DeleteProcessScenarioRequest $request): \Perfumer\Microservices\Crm\Response\Scenario\DeleteProcessScenarioResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Scenario\DeleteProcessScenarioResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Scenario\DeleteProcessScenarioResponse());

        return $response;
    }

    public function getProcessScenarios(\Perfumer\Microservices\Crm\Request\Scenarios\GetProcessScenariosRequest $request): \Perfumer\Microservices\Crm\Response\Scenarios\GetProcessScenariosResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Scenarios\GetProcessScenariosResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Scenarios\GetProcessScenariosResponse());
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
        /** @var \Perfumer\Microservices\Crm\Response\Task\GetProcessTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\GetProcessTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function saveProcessTask(\Perfumer\Microservices\Crm\Request\Task\SaveProcessTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\SaveProcessTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\SaveProcessTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\SaveProcessTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function updateProcessTask(\Perfumer\Microservices\Crm\Request\Task\UpdateProcessTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\UpdateProcessTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\UpdateProcessTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\UpdateProcessTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->task = $item;
        }

        return $response;
    }

    public function deleteProcessTask(\Perfumer\Microservices\Crm\Request\Task\DeleteProcessTaskRequest $request): \Perfumer\Microservices\Crm\Response\Task\DeleteProcessTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Task\DeleteProcessTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Task\DeleteProcessTaskResponse());

        return $response;
    }

    public function getProcessTasks(\Perfumer\Microservices\Crm\Request\Tasks\GetProcessTasksRequest $request): \Perfumer\Microservices\Crm\Response\Tasks\GetProcessTasksResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Tasks\GetProcessTasksResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Tasks\GetProcessTasksResponse());
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

    public function getUserPermissions(\Perfumer\Microservices\Crm\Request\User\GetUserPermissionsRequest $request): \Perfumer\Microservices\Crm\Response\User\GetUserPermissionsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\User\GetUserPermissionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\User\GetUserPermissionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'permissions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->permissions = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'is_admin');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->is_admin = $item;
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

    public function getBusinessCase(\Perfumer\Microservices\Crm\Request\BusinessCase\GetBusinessCaseRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCase\GetBusinessCaseResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCase\GetBusinessCaseResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCase\GetBusinessCaseResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_case');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_case = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'businessCase');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->businessCase = $item;
        }

        return $response;
    }

    public function deleteBusinessCase(\Perfumer\Microservices\Crm\Request\BusinessCase\DeleteBusinessCaseRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCase\DeleteBusinessCaseResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCase\DeleteBusinessCaseResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCase\DeleteBusinessCaseResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_case');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_case = $item;
        }

        return $response;
    }

    public function saveBusinessCase(\Perfumer\Microservices\Crm\Request\BusinessCase\SaveBusinessCaseRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCase\SaveBusinessCaseResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCase\SaveBusinessCaseResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCase\SaveBusinessCaseResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_case');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_case = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'businessCase');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->businessCase = $item;
        }

        return $response;
    }

    public function updateBusinessCase(\Perfumer\Microservices\Crm\Request\BusinessCase\UpdateBusinessCaseRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCase\UpdateBusinessCaseResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCase\UpdateBusinessCaseResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCase\UpdateBusinessCaseResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_case');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_case = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'businessCase');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->businessCase = $item;
        }

        return $response;
    }

    public function upsertBusinessCase(\Perfumer\Microservices\Crm\Request\BusinessCase\UpsertBusinessCaseRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCase\UpsertBusinessCaseResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCase\UpsertBusinessCaseResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCase\UpsertBusinessCaseResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_case');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_case = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'businessCase');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->businessCase = $item;
        }

        return $response;
    }

    public function getBusinessCases(\Perfumer\Microservices\Crm\Request\BusinessCases\GetBusinessCasesRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCases\GetBusinessCasesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCases\GetBusinessCasesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCases\GetBusinessCasesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_cases');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_cases = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'businessCases');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->businessCases = $item;
        }

        return $response;
    }

    public function saveBusinessCaseSchema(\Perfumer\Microservices\Crm\Request\BusinessCase\SaveBusinessCaseSchemaRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCase\SaveBusinessCaseSchemaResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCase\SaveBusinessCaseSchemaResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCase\SaveBusinessCaseSchemaResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_case');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_case = $item;
        }

        return $response;
    }

    public function copyBusinessCaseSchema(\Perfumer\Microservices\Crm\Request\BusinessCase\CopyBusinessCaseSchemaRequest $request): \Perfumer\Microservices\Crm\Response\BusinessCase\CopyBusinessCaseSchemaResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\BusinessCase\CopyBusinessCaseSchemaResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\BusinessCase\CopyBusinessCaseSchemaResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'business_case');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->business_case = $item;
        }

        return $response;
    }

    public function getOpenedTicketsStats(\Perfumer\Microservices\Crm\Request\Stats\GetOpenedTicketsStatsRequest $request): \Perfumer\Microservices\Crm\Response\Stats\GetOpenedTicketsStatsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Stats\GetOpenedTicketsStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Stats\GetOpenedTicketsStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getTicketsStats(\Perfumer\Microservices\Crm\Request\Stats\GetTicketsStatsRequest $request): \Perfumer\Microservices\Crm\Response\Stats\GetTicketsStatsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Stats\GetTicketsStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Stats\GetTicketsStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getTasksStats(\Perfumer\Microservices\Crm\Request\Stats\GetTasksStatsRequest $request): \Perfumer\Microservices\Crm\Response\Stats\GetTasksStatsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Stats\GetTasksStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Stats\GetTasksStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getUsersStats(\Perfumer\Microservices\Crm\Request\Stats\GetUsersStatsRequest $request): \Perfumer\Microservices\Crm\Response\Stats\GetUsersStatsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Stats\GetUsersStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Stats\GetUsersStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getCustomersStats(\Perfumer\Microservices\Crm\Request\Stats\GetCustomersStatsRequest $request): \Perfumer\Microservices\Crm\Response\Stats\GetCustomersStatsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Stats\GetCustomersStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Stats\GetCustomersStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getTasksTimeStats(\Perfumer\Microservices\Crm\Request\Stats\GetTasksTimeStatsRequest $request): \Perfumer\Microservices\Crm\Response\Stats\GetTasksTimeStatsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Stats\GetTasksTimeStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Stats\GetTasksTimeStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getSettings(\Perfumer\Microservices\Crm\Request\Settings\GetSettingsRequest $request): \Perfumer\Microservices\Crm\Response\Settings\GetSettingsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Settings\GetSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Settings\GetSettingsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'bpm');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->bpm = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'group');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->group = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'customer');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customer = $item;
        }

        return $response;
    }

    public function saveSettings(\Perfumer\Microservices\Crm\Request\Settings\SaveSettingsRequest $request): \Perfumer\Microservices\Crm\Response\Settings\SaveSettingsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Settings\SaveSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Settings\SaveSettingsResponse());

        return $response;
    }

    public function getExtension(\Perfumer\Microservices\Crm\Request\Extension\GetExtensionRequest $request): \Perfumer\Microservices\Crm\Response\Extension\GetExtensionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Extension\GetExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Extension\GetExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extension');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension = $item;
        }

        return $response;
    }

    public function deleteExtension(\Perfumer\Microservices\Crm\Request\Extension\DeleteExtensionRequest $request): \Perfumer\Microservices\Crm\Response\Extension\DeleteExtensionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Extension\DeleteExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Extension\DeleteExtensionResponse());

        return $response;
    }

    public function createExtension(\Perfumer\Microservices\Crm\Request\Extension\CreateExtensionRequest $request): \Perfumer\Microservices\Crm\Response\Extension\CreateExtensionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Extension\CreateExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Extension\CreateExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extension');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension = $item;
        }

        return $response;
    }

    public function updateExtension(\Perfumer\Microservices\Crm\Request\Extension\UpdateExtensionRequest $request): \Perfumer\Microservices\Crm\Response\Extension\UpdateExtensionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Extension\UpdateExtensionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Extension\UpdateExtensionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'extension');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extension = $item;
        }

        return $response;
    }

    public function getExtensions(\Perfumer\Microservices\Crm\Request\Extensions\GetExtensionsRequest $request): \Perfumer\Microservices\Crm\Response\Extensions\GetExtensionsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Extensions\GetExtensionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Extensions\GetExtensionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'extensions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->extensions = $item;
        }

        return $response;
    }

    public function getTrigger(\Perfumer\Microservices\Crm\Request\Trigger\GetTriggerRequest $request): \Perfumer\Microservices\Crm\Response\Trigger\GetTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Trigger\GetTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Trigger\GetTriggerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'trigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->trigger = $item;
        }

        return $response;
    }

    public function deleteTrigger(\Perfumer\Microservices\Crm\Request\Trigger\DeleteTriggerRequest $request): \Perfumer\Microservices\Crm\Response\Trigger\DeleteTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Trigger\DeleteTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Trigger\DeleteTriggerResponse());

        return $response;
    }

    public function saveTrigger(\Perfumer\Microservices\Crm\Request\Trigger\SaveTriggerRequest $request): \Perfumer\Microservices\Crm\Response\Trigger\SaveTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Trigger\SaveTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Trigger\SaveTriggerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'trigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->trigger = $item;
        }

        return $response;
    }

    public function updateTrigger(\Perfumer\Microservices\Crm\Request\Trigger\UpdateTriggerRequest $request): \Perfumer\Microservices\Crm\Response\Trigger\UpdateTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Trigger\UpdateTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Trigger\UpdateTriggerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'trigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->trigger = $item;
        }

        return $response;
    }

    public function getTriggers(\Perfumer\Microservices\Crm\Request\Triggers\GetTriggersRequest $request): \Perfumer\Microservices\Crm\Response\Triggers\GetTriggersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Triggers\GetTriggersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Triggers\GetTriggersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'triggers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->triggers = $item;
        }

        return $response;
    }

    public function getTriggerCondition(\Perfumer\Microservices\Crm\Request\Condition\GetTriggerConditionRequest $request): \Perfumer\Microservices\Crm\Response\Condition\GetTriggerConditionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Condition\GetTriggerConditionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Condition\GetTriggerConditionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'condition');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->condition = $item;
        }

        return $response;
    }

    public function saveTriggerCondition(\Perfumer\Microservices\Crm\Request\Condition\SaveTriggerConditionRequest $request): \Perfumer\Microservices\Crm\Response\Condition\SaveTriggerConditionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Condition\SaveTriggerConditionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Condition\SaveTriggerConditionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'condition');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->condition = $item;
        }

        return $response;
    }

    public function updateTriggerCondition(\Perfumer\Microservices\Crm\Request\Condition\UpdateTriggerConditionRequest $request): \Perfumer\Microservices\Crm\Response\Condition\UpdateTriggerConditionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Condition\UpdateTriggerConditionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Condition\UpdateTriggerConditionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'condition');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->condition = $item;
        }

        return $response;
    }

    public function deleteTriggerCondition(\Perfumer\Microservices\Crm\Request\Condition\DeleteTriggerConditionRequest $request): \Perfumer\Microservices\Crm\Response\Condition\DeleteTriggerConditionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Condition\DeleteTriggerConditionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Condition\DeleteTriggerConditionResponse());

        return $response;
    }

    public function getTriggerConditions(\Perfumer\Microservices\Crm\Request\Conditions\GetTriggerConditionsRequest $request): \Perfumer\Microservices\Crm\Response\Conditions\GetTriggerConditionsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Conditions\GetTriggerConditionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Conditions\GetTriggerConditionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'conditions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->conditions = $item;
        }

        return $response;
    }

    public function getRepetitiveTask(\Perfumer\Microservices\Crm\Request\RepetitiveTask\GetRepetitiveTaskRequest $request): \Perfumer\Microservices\Crm\Response\RepetitiveTask\GetRepetitiveTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\RepetitiveTask\GetRepetitiveTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\RepetitiveTask\GetRepetitiveTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'repetitive_task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->repetitive_task = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'repetitiveTask');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->repetitiveTask = $item;
        }

        return $response;
    }

    public function deleteRepetitiveTask(\Perfumer\Microservices\Crm\Request\RepetitiveTask\DeleteRepetitiveTaskRequest $request): \Perfumer\Microservices\Crm\Response\RepetitiveTask\DeleteRepetitiveTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\RepetitiveTask\DeleteRepetitiveTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\RepetitiveTask\DeleteRepetitiveTaskResponse());

        return $response;
    }

    public function createRepetitiveTask(\Perfumer\Microservices\Crm\Request\RepetitiveTask\CreateRepetitiveTaskRequest $request): \Perfumer\Microservices\Crm\Response\RepetitiveTask\CreateRepetitiveTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\RepetitiveTask\CreateRepetitiveTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\RepetitiveTask\CreateRepetitiveTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'repetitive_task');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->repetitive_task = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'repetitiveTask');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->repetitiveTask = $item;
        }

        return $response;
    }

    public function updateRepetitiveTask(\Perfumer\Microservices\Crm\Request\RepetitiveTask\UpdateRepetitiveTaskRequest $request): \Perfumer\Microservices\Crm\Response\RepetitiveTask\UpdateRepetitiveTaskResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\RepetitiveTask\UpdateRepetitiveTaskResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\RepetitiveTask\UpdateRepetitiveTaskResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'repetitiveTask');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->repetitiveTask = $item;
        }

        return $response;
    }

    public function getRepetitiveTasks(\Perfumer\Microservices\Crm\Request\RepetitiveTasks\GetRepetitiveTasksRequest $request): \Perfumer\Microservices\Crm\Response\RepetitiveTasks\GetRepetitiveTasksResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\RepetitiveTasks\GetRepetitiveTasksResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\RepetitiveTasks\GetRepetitiveTasksResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'repetitive_tasks');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->repetitive_tasks = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'repetitiveTasks');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->repetitiveTasks = $item;
        }

        return $response;
    }

    public function getCommonTrigger(\Perfumer\Microservices\Crm\Request\CommonTrigger\GetCommonTriggerRequest $request): \Perfumer\Microservices\Crm\Response\CommonTrigger\GetCommonTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonTrigger\GetCommonTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonTrigger\GetCommonTriggerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'trigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->trigger = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonTrigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonTrigger = $item;
        }

        return $response;
    }

    public function deleteCommonTrigger(\Perfumer\Microservices\Crm\Request\CommonTrigger\DeleteCommonTriggerRequest $request): \Perfumer\Microservices\Crm\Response\CommonTrigger\DeleteCommonTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonTrigger\DeleteCommonTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonTrigger\DeleteCommonTriggerResponse());

        return $response;
    }

    public function upsertCommonTrigger(\Perfumer\Microservices\Crm\Request\CommonTrigger\UpsertCommonTriggerRequest $request): \Perfumer\Microservices\Crm\Response\CommonTrigger\UpsertCommonTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonTrigger\UpsertCommonTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonTrigger\UpsertCommonTriggerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'trigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->trigger = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonTrigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonTrigger = $item;
        }

        return $response;
    }

    public function getCommonTriggers(\Perfumer\Microservices\Crm\Request\CommonTriggers\GetCommonTriggersRequest $request): \Perfumer\Microservices\Crm\Response\CommonTriggers\GetCommonTriggersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonTriggers\GetCommonTriggersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonTriggers\GetCommonTriggersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'triggers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->triggers = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonTriggers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonTriggers = $item;
        }

        return $response;
    }

    public function getCommonTriggerArguments(\Perfumer\Microservices\Crm\Request\CommonTriggerArguments\GetCommonTriggerArgumentsRequest $request): \Perfumer\Microservices\Crm\Response\CommonTriggerArguments\GetCommonTriggerArgumentsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonTriggerArguments\GetCommonTriggerArgumentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonTriggerArguments\GetCommonTriggerArgumentsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'arguments');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->arguments = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonTriggerArguments');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonTriggerArguments = $item;
        }

        return $response;
    }

    public function getCommonScenarioTrigger(\Perfumer\Microservices\Crm\Request\CommonScenarioTrigger\GetCommonScenarioTriggerRequest $request): \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\GetCommonScenarioTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\GetCommonScenarioTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\GetCommonScenarioTriggerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'scenario_trigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario_trigger = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonScenarioTrigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonScenarioTrigger = $item;
        }

        return $response;
    }

    public function deleteCommonScenarioTrigger(\Perfumer\Microservices\Crm\Request\CommonScenarioTrigger\DeleteCommonScenarioTriggerRequest $request): \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\DeleteCommonScenarioTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\DeleteCommonScenarioTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\DeleteCommonScenarioTriggerResponse());

        return $response;
    }

    public function upsertCommonScenarioTrigger(\Perfumer\Microservices\Crm\Request\CommonScenarioTrigger\UpsertCommonScenarioTriggerRequest $request): \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\UpsertCommonScenarioTriggerResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\UpsertCommonScenarioTriggerResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonScenarioTrigger\UpsertCommonScenarioTriggerResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'scenario_trigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario_trigger = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonScenarioTrigger');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonScenarioTrigger = $item;
        }

        return $response;
    }

    public function getCommonScenarioTriggers(\Perfumer\Microservices\Crm\Request\CommonScenarioTriggers\GetCommonScenarioTriggersRequest $request): \Perfumer\Microservices\Crm\Response\CommonScenarioTriggers\GetCommonScenarioTriggersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonScenarioTriggers\GetCommonScenarioTriggersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonScenarioTriggers\GetCommonScenarioTriggersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'scenario_triggers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario_triggers = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonScenarioTriggers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonScenarioTriggers = $item;
        }

        return $response;
    }

    public function getCommonScenarioTriggerArguments(\Perfumer\Microservices\Crm\Request\CommonScenarioTriggerArguments\GetCommonScenarioTriggerArgumentsRequest $request): \Perfumer\Microservices\Crm\Response\CommonScenarioTriggerArguments\GetCommonScenarioTriggerArgumentsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonScenarioTriggerArguments\GetCommonScenarioTriggerArgumentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonScenarioTriggerArguments\GetCommonScenarioTriggerArgumentsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'arguments');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->arguments = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonScenarioTriggerArguments');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonScenarioTriggerArguments = $item;
        }

        return $response;
    }

    public function upsertCommonScenarioTriggers(\Perfumer\Microservices\Crm\Request\CommonScenarioTriggers\UpsertCommonScenarioTriggersRequest $request): \Perfumer\Microservices\Crm\Response\CommonScenarioTriggers\UpsertCommonScenarioTriggersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CommonScenarioTriggers\UpsertCommonScenarioTriggersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CommonScenarioTriggers\UpsertCommonScenarioTriggersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'scenario_triggers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->scenario_triggers = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'commonScenarioTriggers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->commonScenarioTriggers = $item;
        }

        return $response;
    }

    public function getMenu(\Perfumer\Microservices\Crm\Request\Menu\GetMenuRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function deleteMenu(\Perfumer\Microservices\Crm\Request\Menu\DeleteMenuRequest $request): \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuResponse());

        return $response;
    }

    public function createMenu(\Perfumer\Microservices\Crm\Request\Menu\CreateMenuRequest $request): \Perfumer\Microservices\Crm\Response\Menu\CreateMenuResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\CreateMenuResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\CreateMenuResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function updateMenu(\Perfumer\Microservices\Crm\Request\Menu\UpdateMenuRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function upsertMenu(\Perfumer\Microservices\Crm\Request\Menu\UpsertMenuRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getMenus(\Perfumer\Microservices\Crm\Request\Menus\GetMenusRequest $request): \Perfumer\Microservices\Crm\Response\Menus\GetMenusResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menus\GetMenusResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menus\GetMenusResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menus');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menus = $item;
        }

        return $response;
    }

    public function getUserMenu(\Perfumer\Microservices\Crm\Request\Menu\GetUserMenuRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetUserMenuResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetUserMenuResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetUserMenuResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getMenuDivision(\Perfumer\Microservices\Crm\Request\Menu\GetMenuDivisionRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuDivisionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuDivisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuDivisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'division');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->division = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function deleteMenuDivision(\Perfumer\Microservices\Crm\Request\Menu\DeleteMenuDivisionRequest $request): \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuDivisionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuDivisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuDivisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'division');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->division = $item;
        }

        return $response;
    }

    public function createMenuDivision(\Perfumer\Microservices\Crm\Request\Menu\CreateMenuDivisionRequest $request): \Perfumer\Microservices\Crm\Response\Menu\CreateMenuDivisionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\CreateMenuDivisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\CreateMenuDivisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'division');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->division = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function updateMenuDivision(\Perfumer\Microservices\Crm\Request\Menu\UpdateMenuDivisionRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuDivisionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuDivisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuDivisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'division');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->division = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function upsertMenuDivision(\Perfumer\Microservices\Crm\Request\Menu\UpsertMenuDivisionRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuDivisionResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuDivisionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuDivisionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'division');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->division = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getMenuDivisions(\Perfumer\Microservices\Crm\Request\Menu\GetMenuDivisionsRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuDivisionsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuDivisionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuDivisionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'divisions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->divisions = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getMenuBlock(\Perfumer\Microservices\Crm\Request\Menu\GetMenuBlockRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuBlockResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuBlockResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuBlockResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'block');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->block = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function deleteMenuBlock(\Perfumer\Microservices\Crm\Request\Menu\DeleteMenuBlockRequest $request): \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuBlockResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuBlockResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuBlockResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'block');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->block = $item;
        }

        return $response;
    }

    public function createMenuBlock(\Perfumer\Microservices\Crm\Request\Menu\CreateMenuBlockRequest $request): \Perfumer\Microservices\Crm\Response\Menu\CreateMenuBlockResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\CreateMenuBlockResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\CreateMenuBlockResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'block');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->block = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function updateMenuBlock(\Perfumer\Microservices\Crm\Request\Menu\UpdateMenuBlockRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuBlockResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuBlockResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuBlockResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'block');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->block = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function upsertMenuBlock(\Perfumer\Microservices\Crm\Request\Menu\UpsertMenuBlockRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuBlockResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuBlockResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuBlockResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'block');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->block = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getMenuBlocks(\Perfumer\Microservices\Crm\Request\Menu\GetMenuBlocksRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuBlocksResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuBlocksResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuBlocksResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'blocks');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->blocks = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getMenuLink(\Perfumer\Microservices\Crm\Request\Menu\GetMenuLinkRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinkResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinkResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinkResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'link');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->link = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function deleteMenuLink(\Perfumer\Microservices\Crm\Request\Menu\DeleteMenuLinkRequest $request): \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuLinkResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuLinkResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuLinkResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'link');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->link = $item;
        }

        return $response;
    }

    public function createMenuLink(\Perfumer\Microservices\Crm\Request\Menu\CreateMenuLinkRequest $request): \Perfumer\Microservices\Crm\Response\Menu\CreateMenuLinkResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\CreateMenuLinkResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\CreateMenuLinkResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'link');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->link = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function updateMenuLink(\Perfumer\Microservices\Crm\Request\Menu\UpdateMenuLinkRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuLinkResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuLinkResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpdateMenuLinkResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'link');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->link = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function upsertMenuLink(\Perfumer\Microservices\Crm\Request\Menu\UpsertMenuLinkRequest $request): \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuLinkResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuLinkResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\UpsertMenuLinkResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'link');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->link = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getMenuLinks(\Perfumer\Microservices\Crm\Request\Menu\GetMenuLinksRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinksResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinksResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinksResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'links');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->links = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function addMenuLinkRole(\Perfumer\Microservices\Crm\Request\Menu\AddMenuLinkRoleRequest $request): \Perfumer\Microservices\Crm\Response\Menu\AddMenuLinkRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\AddMenuLinkRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\AddMenuLinkRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function deleteMenuLinkRole(\Perfumer\Microservices\Crm\Request\Menu\DeleteMenuLinkRoleRequest $request): \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuLinkRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuLinkRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\DeleteMenuLinkRoleResponse());

        return $response;
    }

    public function getMenuLinkRoles(\Perfumer\Microservices\Crm\Request\Menu\GetMenuLinkRolesRequest $request): \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinkRolesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinkRolesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Menu\GetMenuLinkRolesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'link_roles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->link_roles = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'menu');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->menu = $item;
        }

        return $response;
    }

    public function getCalendarEvent(\Perfumer\Microservices\Crm\Request\CalendarEvent\GetCalendarEventRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEvent\GetCalendarEventResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEvent\GetCalendarEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEvent\GetCalendarEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_event = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEvent');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEvent = $item;
        }

        return $response;
    }

    public function deleteCalendarEvent(\Perfumer\Microservices\Crm\Request\CalendarEvent\DeleteCalendarEventRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEvent\DeleteCalendarEventResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEvent\DeleteCalendarEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEvent\DeleteCalendarEventResponse());

        return $response;
    }

    public function createCalendarEvent(\Perfumer\Microservices\Crm\Request\CalendarEvent\CreateCalendarEventRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEvent\CreateCalendarEventResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEvent\CreateCalendarEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEvent\CreateCalendarEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_event = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEvent');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEvent = $item;
        }

        return $response;
    }

    public function updateCalendarEvent(\Perfumer\Microservices\Crm\Request\CalendarEvent\UpdateCalendarEventRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEvent\UpdateCalendarEventResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEvent\UpdateCalendarEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEvent\UpdateCalendarEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_event = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEvent');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEvent = $item;
        }

        return $response;
    }

    public function upsertCalendarEvent(\Perfumer\Microservices\Crm\Request\CalendarEvent\UpsertCalendarEventRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEvent\UpsertCalendarEventResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEvent\UpsertCalendarEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEvent\UpsertCalendarEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_event = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEvent');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEvent = $item;
        }

        return $response;
    }

    public function getCalendarEvents(\Perfumer\Microservices\Crm\Request\CalendarEvents\GetCalendarEventsRequest $request): \Perfumer\Microservices\Crm\Response\CalendarEvents\GetCalendarEventsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\CalendarEvents\GetCalendarEventsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\CalendarEvents\GetCalendarEventsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'calendar_events');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendar_events = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'calendarEvents');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->calendarEvents = $item;
        }

        return $response;
    }

    public function getReport(\Perfumer\Microservices\Crm\Request\Report\GetReportRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function deleteReport(\Perfumer\Microservices\Crm\Request\Report\DeleteReportRequest $request): \Perfumer\Microservices\Crm\Response\Report\DeleteReportResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\DeleteReportResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\DeleteReportResponse());

        return $response;
    }

    public function createReport(\Perfumer\Microservices\Crm\Request\Report\CreateReportRequest $request): \Perfumer\Microservices\Crm\Response\Report\CreateReportResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\CreateReportResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\CreateReportResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function updateReport(\Perfumer\Microservices\Crm\Request\Report\UpdateReportRequest $request): \Perfumer\Microservices\Crm\Response\Report\UpdateReportResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\UpdateReportResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\UpdateReportResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function upsertReport(\Perfumer\Microservices\Crm\Request\Report\UpsertReportRequest $request): \Perfumer\Microservices\Crm\Response\Report\UpsertReportResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\UpsertReportResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\UpsertReportResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function getReports(\Perfumer\Microservices\Crm\Request\Reports\GetReportsRequest $request): \Perfumer\Microservices\Crm\Response\Reports\GetReportsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Reports\GetReportsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Reports\GetReportsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'reports');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reports = $item;
        }

        return $response;
    }

    public function getReportCustomers(\Perfumer\Microservices\Crm\Request\Report\GetReportCustomersRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportCustomersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportCustomersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportCustomersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'customers');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->customers = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function getReportUsers(\Perfumer\Microservices\Crm\Request\Report\GetReportUsersRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportUsersResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportUsersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportUsersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'users');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->users = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function getReportTickets(\Perfumer\Microservices\Crm\Request\Report\GetReportTicketsRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportTicketsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportTicketsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportTicketsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'tickets');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tickets = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function getReportTasks(\Perfumer\Microservices\Crm\Request\Report\GetReportTasksRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportTasksResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportTasksResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportTasksResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'tasks');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tasks = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function getReportLabels(\Perfumer\Microservices\Crm\Request\Report\GetReportLabelsRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportLabelsResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportLabelsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportLabelsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'labels');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->labels = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function addReportRole(\Perfumer\Microservices\Crm\Request\Report\AddReportRoleRequest $request): \Perfumer\Microservices\Crm\Response\Report\AddReportRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\AddReportRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\AddReportRoleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function deleteReportRole(\Perfumer\Microservices\Crm\Request\Report\DeleteReportRoleRequest $request): \Perfumer\Microservices\Crm\Response\Report\DeleteReportRoleResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\DeleteReportRoleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\DeleteReportRoleResponse());

        return $response;
    }

    public function getReportRoles(\Perfumer\Microservices\Crm\Request\Report\GetReportRolesRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportRolesResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportRolesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportRolesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'report_roles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report_roles = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function getReportAccess(\Perfumer\Microservices\Crm\Request\Report\GetReportAccessRequest $request): \Perfumer\Microservices\Crm\Response\Report\GetReportAccessResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Report\GetReportAccessResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Report\GetReportAccessResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'access');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->access = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'report');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->report = $item;
        }

        return $response;
    }

    public function getHealthcheck(\Perfumer\Microservices\Crm\Request\Healthcheck\GetHealthcheckRequest $request): \Perfumer\Microservices\Crm\Response\Healthcheck\GetHealthcheckResponse
    {
        /** @var \Perfumer\Microservices\Crm\Response\Healthcheck\GetHealthcheckResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Crm\Response\Healthcheck\GetHealthcheckResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'healthcheck');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->healthcheck = $item;
        }

        return $response;
    }
}
