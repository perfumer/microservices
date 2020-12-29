<?php

namespace Generated\Perfumer\Microservices\Pages;

abstract class Pages extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Pages\Pages
{
    public function getModule(\Perfumer\Microservices\Pages\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse
    {
        $url = '/module';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Module\GetModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        $response->module = $array;

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Pages\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'parent' => $request->parent,
        'child' => $request->child,
        'limit' => $request->limit,
        'offset' => $request->offset,
        ]);

        /* @var \Perfumer\Microservices\Pages\Response\Modules\GetModulesResponse $response */
        $response->modules = $this->fetchKeyFromContent($response->_content, 'modules');

        return $response;
    }

    public function saveModule(\Perfumer\Microservices\Pages\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'parents' => $request->parents,
        'children' => $request->children,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Module\SaveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Pages\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Module\DeleteModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);

        return $response;
    }

    public function deleteRevision(\Perfumer\Microservices\Pages\Request\Revision\DeleteRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse
    {
        $url = '/revision';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\DeleteRevisionResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        return $response;
    }

    public function deletePage(\Perfumer\Microservices\Pages\Request\Page\DeletePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\DeletePageResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        return $response;
    }
}
