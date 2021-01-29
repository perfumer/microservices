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
}
