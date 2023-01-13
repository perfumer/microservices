<?php

namespace Generated\Perfumer\Microservices\Events;

abstract class Events extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Events\Events
{
    public function getModule(\Perfumer\Microservices\Events\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\GetModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Module\GetModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Events\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Events\Response\Modules\GetModulesResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Modules\GetModulesResponse());
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

    public function createModule(\Perfumer\Microservices\Events\Request\Module\CreateModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\CreateModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Module\CreateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Module\CreateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function updateModule(\Perfumer\Microservices\Events\Request\Module\UpdateModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\UpdateModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Module\UpdateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Module\UpdateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Events\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\DeleteModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Module\DeleteModuleResponse());

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Events\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Events\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\UnarchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Module\UnarchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getParticipants(\Perfumer\Microservices\Events\Request\Participants\GetParticipantsRequest $request): \Perfumer\Microservices\Events\Response\Participants\GetParticipantsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participants\GetParticipantsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participants\GetParticipantsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'participants');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participants = $item;
        }

        return $response;
    }

    public function getParticipant(\Perfumer\Microservices\Events\Request\Participant\GetParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\GetParticipantResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participant\GetParticipantResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participant\GetParticipantResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function getEvents(\Perfumer\Microservices\Events\Request\Events\GetEventsRequest $request): \Perfumer\Microservices\Events\Response\Events\GetEventsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Events\GetEventsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Events\GetEventsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'events');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->events = $item;
        }

        return $response;
    }

    public function createParticipant(\Perfumer\Microservices\Events\Request\Participant\CreateParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\CreateParticipantResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participant\CreateParticipantResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participant\CreateParticipantResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function checkParticipant(\Perfumer\Microservices\Events\Request\Participant\CheckParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\CheckParticipantResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participant\CheckParticipantResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participant\CheckParticipantResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function deleteParticipant(\Perfumer\Microservices\Events\Request\Participant\DeleteParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\DeleteParticipantResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participant\DeleteParticipantResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participant\DeleteParticipantResponse());

        return $response;
    }

    public function getEvent(\Perfumer\Microservices\Events\Request\Event\GetEventRequest $request): \Perfumer\Microservices\Events\Response\Event\GetEventResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\GetEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\GetEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function createEvent(\Perfumer\Microservices\Events\Request\Event\CreateEventRequest $request): \Perfumer\Microservices\Events\Response\Event\CreateEventResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\CreateEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\CreateEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function deleteEvent(\Perfumer\Microservices\Events\Request\Event\DeleteEventRequest $request): \Perfumer\Microservices\Events\Response\Event\DeleteEventResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\DeleteEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\DeleteEventResponse());

        return $response;
    }

    public function rejectEvent(\Perfumer\Microservices\Events\Request\Event\RejectEventRequest $request): \Perfumer\Microservices\Events\Response\Event\RejectEventResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\RejectEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\RejectEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function publishEvent(\Perfumer\Microservices\Events\Request\Event\PublishEventRequest $request): \Perfumer\Microservices\Events\Response\Event\PublishEventResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\PublishEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\PublishEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function enableEvent(\Perfumer\Microservices\Events\Request\Event\EnableEventRequest $request): \Perfumer\Microservices\Events\Response\Event\EnableEventResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\EnableEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\EnableEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function disableEvent(\Perfumer\Microservices\Events\Request\Event\DisableEventRequest $request): \Perfumer\Microservices\Events\Response\Event\DisableEventResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\DisableEventResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\DisableEventResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function resetEventTickets(\Perfumer\Microservices\Events\Request\Event\ResetEventTicketsRequest $request): \Perfumer\Microservices\Events\Response\Event\ResetEventTicketsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\ResetEventTicketsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\ResetEventTicketsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function allowEventTickets(\Perfumer\Microservices\Events\Request\Event\AllowEventTicketsRequest $request): \Perfumer\Microservices\Events\Response\Event\AllowEventTicketsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Event\AllowEventTicketsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Event\AllowEventTicketsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function getConnectorEvents(\Perfumer\Microservices\Events\Request\Events\GetConnectorEventsRequest $request): \Perfumer\Microservices\Events\Response\Events\GetConnectorEventsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Events\GetConnectorEventsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Events\GetConnectorEventsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'events');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->events = $item;
        }

        return $response;
    }

    public function getSettings(\Perfumer\Microservices\Events\Request\Settings\GetSettingsRequest $request): \Perfumer\Microservices\Events\Response\Settings\GetSettingsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Settings\GetSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Settings\GetSettingsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'crm');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->crm = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'pub');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->pub = $item;
        }

        return $response;
    }

    public function saveSettings(\Perfumer\Microservices\Events\Request\Settings\SaveSettingsRequest $request): \Perfumer\Microservices\Events\Response\Settings\SaveSettingsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Settings\SaveSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Settings\SaveSettingsResponse());

        return $response;
    }

    public function confirmParticipant(\Perfumer\Microservices\Events\Request\Participant\ConfirmParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\ConfirmParticipantResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participant\ConfirmParticipantResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participant\ConfirmParticipantResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function saveActParticipant(\Perfumer\Microservices\Events\Request\Participant\SaveActParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\SaveActParticipantResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participant\SaveActParticipantResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participant\SaveActParticipantResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function signActParticipant(\Perfumer\Microservices\Events\Request\Participant\SignActParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\SignActParticipantResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Participant\SignActParticipantResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Participant\SignActParticipantResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function getReviews(\Perfumer\Microservices\Events\Request\Reviews\GetReviewsRequest $request): \Perfumer\Microservices\Events\Response\Reviews\GetReviewsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Reviews\GetReviewsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Reviews\GetReviewsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'reviews');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reviews = $item;
        }

        return $response;
    }

    public function getReview(\Perfumer\Microservices\Events\Request\Review\GetReviewRequest $request): \Perfumer\Microservices\Events\Response\Review\GetReviewResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Review\GetReviewResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Review\GetReviewResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'review');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->review = $item;
        }

        return $response;
    }

    public function createReview(\Perfumer\Microservices\Events\Request\Review\CreateReviewRequest $request): \Perfumer\Microservices\Events\Response\Review\CreateReviewResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Review\CreateReviewResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Review\CreateReviewResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'review');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->review = $item;
        }

        return $response;
    }

    public function updateReview(\Perfumer\Microservices\Events\Request\Review\UpdateReviewRequest $request): \Perfumer\Microservices\Events\Response\Review\UpdateReviewResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Review\UpdateReviewResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Review\UpdateReviewResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'review');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->review = $item;
        }

        return $response;
    }

    public function deleteReview(\Perfumer\Microservices\Events\Request\Review\DeleteReviewRequest $request): \Perfumer\Microservices\Events\Response\Review\DeleteReviewResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Review\DeleteReviewResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Review\DeleteReviewResponse());

        return $response;
    }

    public function getSchedule(\Perfumer\Microservices\Events\Request\Schedule\GetScheduleRequest $request): \Perfumer\Microservices\Events\Response\Schedule\GetScheduleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Schedule\GetScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Schedule\GetScheduleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function deleteSchedule(\Perfumer\Microservices\Events\Request\Schedule\DeleteScheduleRequest $request): \Perfumer\Microservices\Events\Response\Schedule\DeleteScheduleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Schedule\DeleteScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Schedule\DeleteScheduleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function createSchedule(\Perfumer\Microservices\Events\Request\Schedule\CreateScheduleRequest $request): \Perfumer\Microservices\Events\Response\Schedule\CreateScheduleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Schedule\CreateScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Schedule\CreateScheduleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function updateSchedule(\Perfumer\Microservices\Events\Request\Schedule\UpdateScheduleRequest $request): \Perfumer\Microservices\Events\Response\Schedule\UpdateScheduleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Schedule\UpdateScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Schedule\UpdateScheduleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function upsertSchedule(\Perfumer\Microservices\Events\Request\Schedule\UpsertScheduleRequest $request): \Perfumer\Microservices\Events\Response\Schedule\UpsertScheduleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Schedule\UpsertScheduleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Schedule\UpsertScheduleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedule');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedule = $item;
        }

        return $response;
    }

    public function getSchedules(\Perfumer\Microservices\Events\Request\Schedules\GetSchedulesRequest $request): \Perfumer\Microservices\Events\Response\Schedules\GetSchedulesResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Schedules\GetSchedulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Schedules\GetSchedulesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedules = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }

        return $response;
    }

    public function getAvailableSchedules(\Perfumer\Microservices\Events\Request\Schedules\GetAvailableSchedulesRequest $request): \Perfumer\Microservices\Events\Response\Schedules\GetAvailableSchedulesResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Schedules\GetAvailableSchedulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Schedules\GetAvailableSchedulesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'available');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->available = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'possible_times');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->possible_times = $item;
        }
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

    public function addUserModule(\Perfumer\Microservices\Events\Request\User\AddUserModuleRequest $request): \Perfumer\Microservices\Events\Response\User\AddUserModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\User\AddUserModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\User\AddUserModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'user');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->user = $item;
        }

        return $response;
    }

    public function deleteUserModule(\Perfumer\Microservices\Events\Request\User\DeleteUserModuleRequest $request): \Perfumer\Microservices\Events\Response\User\DeleteUserModuleResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\User\DeleteUserModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\User\DeleteUserModuleResponse());

        return $response;
    }

    public function getUserModules(\Perfumer\Microservices\Events\Request\User\GetUserModulesRequest $request): \Perfumer\Microservices\Events\Response\User\GetUserModulesResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\User\GetUserModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\User\GetUserModulesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'modules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->modules = $item;
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

    public function getUsers(\Perfumer\Microservices\Events\Request\Users\GetUsersRequest $request): \Perfumer\Microservices\Events\Response\Users\GetUsersResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Users\GetUsersResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Users\GetUsersResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'schedules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->schedules = $item;
        }
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

    public function getOauthStatus(\Perfumer\Microservices\Events\Request\Oauth\GetOauthStatusRequest $request): \Perfumer\Microservices\Events\Response\Oauth\GetOauthStatusResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Oauth\GetOauthStatusResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Oauth\GetOauthStatusResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'login_url');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->login_url = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'email');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->email = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'oauth');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->oauth = $item;
        }

        return $response;
    }

    public function logoutOauth(\Perfumer\Microservices\Events\Request\Oauth\LogoutOauthRequest $request): \Perfumer\Microservices\Events\Response\Oauth\LogoutOauthResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Oauth\LogoutOauthResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Oauth\LogoutOauthResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'oauth');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->oauth = $item;
        }

        return $response;
    }

    public function getCustomerScheduledEventsStats(\Perfumer\Microservices\Events\Request\Customer\GetCustomerScheduledEventsStatsRequest $request): \Perfumer\Microservices\Events\Response\Customer\GetCustomerScheduledEventsStatsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\Customer\GetCustomerScheduledEventsStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\Customer\GetCustomerScheduledEventsStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
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

    public function getUserScheduledEventsStats(\Perfumer\Microservices\Events\Request\User\GetUserScheduledEventsStatsRequest $request): \Perfumer\Microservices\Events\Response\User\GetUserScheduledEventsStatsResponse
    {
        /** @var \Perfumer\Microservices\Events\Response\User\GetUserScheduledEventsStatsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Events\Response\User\GetUserScheduledEventsStatsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'stats');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->stats = $item;
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
}
