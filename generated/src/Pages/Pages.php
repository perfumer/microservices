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
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parent' => $request->parent,
        'child' => $request->child,
        'root' => $request->root,
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
        'description' => $request->description,
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

    public function getRevision(\Perfumer\Microservices\Pages\Request\Revision\GetRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse
    {
        $url = '/revision';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse(), 'get', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Revision\GetRevisionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        $response->revision = $array;

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

    public function getRevisions(\Perfumer\Microservices\Pages\Request\Revisions\GetRevisionsRequest $request): \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse
    {
        $url = '/page/revisions';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse(), 'get', $url, [
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'page_id' => $request->page_id,
        'limit' => $request->limit,
        'offset' => $request->offset,
        ]);

        /* @var \Perfumer\Microservices\Pages\Response\Revisions\GetRevisionsResponse $response */
        $response->revisions = $this->fetchKeyFromContent($response->_content, 'revisions');

        return $response;
    }

    public function saveRevision(\Perfumer\Microservices\Pages\Request\Revision\SaveRevisionRequest $request): \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse
    {
        $url = '/revision';

        /** @var \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse(), 'post', $url, [
        'id' => $request->id,
        'page_id' => $request->page_id,
        'name' => $request->name,
        'description' => $request->description,
        'blocks' => $request->blocks,
        'parameters' => $request->parameters,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Revision\SaveRevisionResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'revision');

        if (null !== $array) {
            $response->revision = $array;
        }

        return $response;
    }

    public function getPage(\Perfumer\Microservices\Pages\Request\Page\GetPageRequest $request): \Perfumer\Microservices\Pages\Response\Page\GetPageResponse
    {
        $url = '/page';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\GetPageResponse(), 'get', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\GetPageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        $response->page = $array;

        return $response;
    }

    public function createPage(\Perfumer\Microservices\Pages\Request\Page\CreatePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse(), 'post', $url, [
        'name' => $request->name,
        'address' => $request->address,
        'description' => $request->description,
        'module_id' => $request->module_id,
        'module_code' => $request->module_code,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\CreatePageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        if (null !== $array) {
            $response->page = $array;
        }

        return $response;
    }

    public function updatePage(\Perfumer\Microservices\Pages\Request\Page\UpdatePageRequest $request): \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse
    {
        $url = '/page';

        /** @var \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse(), 'patch', $url, [
        'id' => $request->id,
        'name' => $request->name,
        'address' => $request->address,
        'description' => $request->description,
        'module_id' => $request->module_id,
        'module_code' => $request->module_code,
        ]);

        /** @var \Perfumer\Microservices\Pages\Response\Page\UpdatePageResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'page');

        if (null !== $array) {
            $response->page = $array;
        }

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

    public function getPages(\Perfumer\Microservices\Pages\Request\Pages\GetPagesRequest $request): \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse
    {
        $url = '/pages';

        $response = $this->doRequest(new \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse(), 'get', $url, [
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'address' => $request->address,
        'module_id' => $request->module_id,
        'module_code' => $request->module_code,
        'limit' => $request->limit,
        'offset' => $request->offset,
        ]);

        /* @var \Perfumer\Microservices\Pages\Response\Pages\GetPagesResponse $response */
        $response->pages = $this->fetchKeyFromContent($response->_content, 'pages');

        return $response;
    }
}
