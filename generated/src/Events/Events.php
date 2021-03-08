<?php

namespace Generated\Perfumer\Microservices\Events;

abstract class Events extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Events\Events
{
    public function getModule(\Perfumer\Microservices\Events\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\GetModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Events\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Events\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Events\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        /** @var \Perfumer\Microservices\Events\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Modules\GetModulesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
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

    public function saveModule(\Perfumer\Microservices\Events\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\SaveModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Events\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\SaveModuleResponse(), 'post', $url, [
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parents' => $request->parents,
        'children' => $request->children,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function updateModule(\Perfumer\Microservices\Events\Request\Module\UpdateModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\UpdateModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Events\Response\Module\UpdateModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\UpdateModuleResponse(), 'patch', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Events\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\DeleteModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Events\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\DeleteModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Events\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Events\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\UnarchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Events\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\UnarchiveModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getParticipants(\Perfumer\Microservices\Events\Request\Participants\GetParticipantsRequest $request): \Perfumer\Microservices\Events\Response\Participants\GetParticipantsResponse
    {
        $url = '/participants';

        /** @var \Perfumer\Microservices\Events\Response\Participants\GetParticipantsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Participants\GetParticipantsResponse(), 'get', $url, [
        'event_id' => $request->event_id,
        'customer_id' => $request->customer_id,
        'nb_invites' => $request->nb_invites,
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
        $item = $this->fetchKeyFromContent($response->_content, 'participants');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participants = $item;
        }

        return $response;
    }

    public function getParticipant(\Perfumer\Microservices\Events\Request\Participant\GetParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\GetParticipantResponse
    {
        $url = '/participant';

        /** @var \Perfumer\Microservices\Events\Response\Participant\GetParticipantResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Participant\GetParticipantResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function getEvents(\Perfumer\Microservices\Events\Request\Events\GetEventsRequest $request): \Perfumer\Microservices\Events\Response\Events\GetEventsResponse
    {
        $url = '/events';

        /** @var \Perfumer\Microservices\Events\Response\Events\GetEventsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Events\GetEventsResponse(), 'get', $url, [
        'organizer_id' => $request->organizer_id,
        'locale' => $request->locale,
        'module_id' => $request->module_id,
        'author_id' => $request->author_id,
        'title' => $request->title,
        'image' => $request->image,
        'description' => $request->description,
        'format' => $request->format,
        'location' => $request->location,
        'opened_at_from' => $request->opened_at_from,
        'opened_at_to' => $request->opened_at_to,
        'closed_at_from' => $request->closed_at_from,
        'closed_at_to' => $request->closed_at_to,
        'apply_from_from' => $request->apply_from_from,
        'apply_from_to' => $request->apply_from_to,
        'apply_till_from' => $request->apply_till_from,
        'apply_till_to' => $request->apply_till_to,
        'published_at' => $request->published_at,
        'nb_invites_per_participant' => $request->nb_invites_per_participant,
        'nb_invites' => $request->nb_invites,
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
        $item = $this->fetchKeyFromContent($response->_content, 'events');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->events = $item;
        }

        return $response;
    }

    public function saveParticipant(\Perfumer\Microservices\Events\Request\Participant\SaveParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\SaveParticipantResponse
    {
        $url = '/participant';

        /** @var \Perfumer\Microservices\Events\Response\Participant\SaveParticipantResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Participant\SaveParticipantResponse(), 'post', $url, [
        'event_id' => $request->event_id,
        'customer_id' => $request->customer_id,
        'nb_invites' => $request->nb_invites,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function updateParticipant(\Perfumer\Microservices\Events\Request\Participant\UpdateParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\UpdateParticipantResponse
    {
        $url = '/participant';

        /** @var \Perfumer\Microservices\Events\Response\Participant\UpdateParticipantResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Participant\UpdateParticipantResponse(), 'patch', $url, [
        'id' => $request->id,
        'event_id' => $request->event_id,
        'customer_id' => $request->customer_id,
        'nb_invites' => $request->nb_invites,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'participant');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->participant = $item;
        }

        return $response;
    }

    public function deleteParticipant(\Perfumer\Microservices\Events\Request\Participant\DeleteParticipantRequest $request): \Perfumer\Microservices\Events\Response\Participant\DeleteParticipantResponse
    {
        $url = '/participant';

        /** @var \Perfumer\Microservices\Events\Response\Participant\DeleteParticipantResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Participant\DeleteParticipantResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function getEvent(\Perfumer\Microservices\Events\Request\Event\GetEventRequest $request): \Perfumer\Microservices\Events\Response\Event\GetEventResponse
    {
        $url = '/event';

        /** @var \Perfumer\Microservices\Events\Response\Event\GetEventResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Event\GetEventResponse(), 'get', $url, [
        'id' => $request->id,
        'locale' => $request->locale,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function saveEvent(\Perfumer\Microservices\Events\Request\Event\SaveEventRequest $request): \Perfumer\Microservices\Events\Response\Event\SaveEventResponse
    {
        $url = '/event';

        /** @var \Perfumer\Microservices\Events\Response\Event\SaveEventResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Event\SaveEventResponse(), 'post', $url, [
        'id' => $request->id,
        'modules' => $request->modules,
        'organizer_id' => $request->organizer_id,
        'locale' => $request->locale,
        'author_id' => $request->author_id,
        'is_registration_open' => $request->is_registration_open,
        'title' => $request->title,
        'image' => $request->image,
        'description' => $request->description,
        'html' => $request->html,
        'json' => $request->json,
        'format' => $request->format,
        'location' => $request->location,
        'opened_at' => $request->opened_at,
        'closed_at' => $request->closed_at,
        'apply_from' => $request->apply_from,
        'apply_till' => $request->apply_till,
        'published_at' => $request->published_at,
        'nb_invites_per_participant' => $request->nb_invites_per_participant,
        'nb_invites' => $request->nb_invites,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function deleteEvent(\Perfumer\Microservices\Events\Request\Event\DeleteEventRequest $request): \Perfumer\Microservices\Events\Response\Event\DeleteEventResponse
    {
        $url = '/event';

        /** @var \Perfumer\Microservices\Events\Response\Event\DeleteEventResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Event\DeleteEventResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function rejectEvent(\Perfumer\Microservices\Events\Request\Event\RejectEventRequest $request): \Perfumer\Microservices\Events\Response\Event\RejectEventResponse
    {
        $url = '/event/reject';

        /** @var \Perfumer\Microservices\Events\Response\Event\RejectEventResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Event\RejectEventResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function publishEvent(\Perfumer\Microservices\Events\Request\Event\PublishEventRequest $request): \Perfumer\Microservices\Events\Response\Event\PublishEventResponse
    {
        $url = '/event/publish';

        /** @var \Perfumer\Microservices\Events\Response\Event\PublishEventResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Event\PublishEventResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }

    public function getConnectorEvents(\Perfumer\Microservices\Events\Request\Events\GetConnectorEventsRequest $request): \Perfumer\Microservices\Events\Response\Events\GetConnectorEventsResponse
    {
        $url = '/connector/events';

        /** @var \Perfumer\Microservices\Events\Response\Events\GetConnectorEventsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Events\GetConnectorEventsResponse(), 'get', $url, [
        'parent' => $request->parent,
        'limit' => $request->limit,
        'is_archived' => $request->is_archived,
        'is_deep' => $request->is_deep,
        'locale' => $request->locale,
        'id_key' => $request->id_key,
        'organizer_id_key' => $request->organizer_id_key,
        'modules_key' => $request->modules_key,
        'opened_at_key' => $request->opened_at_key,
        'closed_at_key' => $request->closed_at_key,
        'apply_from_key' => $request->apply_from_key,
        'apply_till_key' => $request->apply_till_key,
        'published_at_key' => $request->published_at_key,
        'is_registration_open_key' => $request->is_registration_open_key,
        'status_key' => $request->status_key,
        'format_key' => $request->format_key,
        'location_key' => $request->location_key,
        'author_id_key' => $request->author_id_key,
        'image_key' => $request->image_key,
        'title_key' => $request->title_key,
        'description_key' => $request->description_key,
        'html_key' => $request->html_key,
        'json_key' => $request->json_key,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'events');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->events = $item;
        }

        return $response;
    }
}
