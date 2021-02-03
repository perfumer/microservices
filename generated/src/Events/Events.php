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
        ]);
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

    public function saveModule(\Perfumer\Microservices\Events\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\SaveModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Events\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\SaveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parents' => $request->parents,
        'children' => $request->children,
        ]);
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
        ]);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Events\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ]);
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
        ]);
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
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ]);
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

    public function getEvents(\Perfumer\Microservices\Events\Request\Events\GetEventsRequest $request): \Perfumer\Microservices\Events\Response\Events\GetEventsResponse
    {
        $url = '/events';

        /** @var \Perfumer\Microservices\Events\Response\Events\GetEventsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Events\GetEventsResponse(), 'get', $url, [
        'organizer_id' => $request->organizer_id,
        'locale' => $request->locale,
        'author_id' => $request->author_id,
        'title' => $request->title,
        'image' => $request->image,
        'description' => $request->description,
        'opened_at_from' => $request->opened_at_from,
        'opened_at_to' => $request->opened_at_to,
        'closed_at_from' => $request->closed_at_from,
        'closed_at_to' => $request->closed_at_to,
        'apply_from_from' => $request->apply_from_from,
        'apply_from_to' => $request->apply_from_to,
        'apply_till_from' => $request->apply_till_from,
        'apply_till_to' => $request->apply_till_to,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ]);
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
        ]);
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
        ]);
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
        ]);

        return $response;
    }

    public function getEvent(\Perfumer\Microservices\Events\Request\Event\GetEventRequest $request): \Perfumer\Microservices\Events\Response\Event\GetEventResponse
    {
        $url = '/event';

        /** @var \Perfumer\Microservices\Events\Response\Event\GetEventResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Event\GetEventResponse(), 'get', $url, [
        'id' => $request->id,
        'locale' => $request->locale,
        ]);
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
        'organizer_id' => $request->organizer_id,
        'locale' => $request->locale,
        'author_id' => $request->author_id,
        'title' => $request->title,
        'image' => $request->image,
        'description' => $request->description,
        'html' => $request->html,
        'json' => $request->json,
        'opened_at' => $request->opened_at,
        'closed_at' => $request->closed_at,
        'apply_from' => $request->apply_from,
        'apply_till' => $request->apply_till,
        ]);
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
        ]);

        return $response;
    }

    public function onmoderationEvent(\Perfumer\Microservices\Events\Request\Event\OnmoderationEventRequest $request): \Perfumer\Microservices\Events\Response\Event\OnmoderationEventResponse
    {
        $url = '/event/on-moderation';

        /** @var \Perfumer\Microservices\Events\Response\Event\OnmoderationEventResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Events\Response\Event\OnmoderationEventResponse(), 'post', $url, [
        'id' => $request->id,
        ]);
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
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'event');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->event = $item;
        }

        return $response;
    }
}
