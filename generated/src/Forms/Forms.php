<?php

namespace Generated\Perfumer\Microservices\Forms;

abstract class Forms extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Forms\Forms
{
    public function getForm(\Perfumer\Microservices\Forms\Request\Form\GetFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\GetFormResponse
    {
        $url = '/form';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Form\GetFormResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Form\GetFormResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'form');

        $response->form = $array;

        return $response;
    }

    public function deleteForm(\Perfumer\Microservices\Forms\Request\Form\DeleteFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse
    {
        $url = '/form';

        /** @var \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse(), 'delete', $url, [
        'code' => $request->code,
        ]);

        return $response;
    }

    public function saveForm(\Perfumer\Microservices\Forms\Request\Form\SaveFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse
    {
        $url = '/form';

        /** @var \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'schema' => $request->schema,
        'module' => $request->module,
        'fields' => $request->fields,
        'payload' => $request->payload,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'form');

        if (null !== $array) {
            $response->form = $array;
        }

        return $response;
    }

    public function getForms(\Perfumer\Microservices\Forms\Request\Forms\GetFormsRequest $request): \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse
    {
        $url = '/forms';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'schema' => $request->schema,
        'module' => $request->module,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->forms = $this->fetchKeyFromContent($response->_content, 'forms');

        return $response;
    }

    public function getItem(\Perfumer\Microservices\Forms\Request\Item\GetItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\GetItemResponse
    {
        $url = '/item';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Item\GetItemResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'locale' => $request->locale,
        'reference' => $request->reference,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Item\GetItemResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'item');

        $response->item = $array;

        return $response;
    }

    public function deleteItem(\Perfumer\Microservices\Forms\Request\Item\DeleteItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse
    {
        $url = '/item';

        /** @var \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        return $response;
    }

    public function saveItem(\Perfumer\Microservices\Forms\Request\Item\SaveItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\SaveItemResponse
    {
        $url = '/item';

        /** @var \Perfumer\Microservices\Forms\Response\Item\SaveItemResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Item\SaveItemResponse(), 'post', $url, [
        'id' => $request->id,
        'name' => $request->name,
        'code' => $request->code,
        'new_code' => $request->new_code,
        'reference_code' => $request->reference_code,
        'reference_id' => $request->reference_id,
        'parents' => $request->parents,
        'children' => $request->children,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Item\SaveItemResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'item');

        if (null !== $array) {
            $response->item = $array;
        }

        return $response;
    }

    public function getItems(\Perfumer\Microservices\Forms\Request\Items\GetItemsRequest $request): \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse
    {
        $url = '/items';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'locale' => $request->locale,
        'reference' => $request->reference,
        'parent' => $request->parent,
        'child' => $request->child,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->items = $this->fetchKeyFromContent($response->_content, 'items');

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Forms\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse
    {
        $url = '/module';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        $response->module = $array;

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Forms\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parent' => $request->parent,
        'child' => $request->child,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->modules = $this->fetchKeyFromContent($response->_content, 'modules');

        return $response;
    }

    public function saveModule(\Perfumer\Microservices\Forms\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\SaveModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Forms\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\SaveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parents' => $request->parents,
        'children' => $request->children,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Module\SaveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Forms\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\DeleteModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Forms\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\DeleteModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ]);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Forms\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Forms\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'module');

        if (null !== $array) {
            $response->module = $array;
        }

        return $response;
    }

    public function getReference(\Perfumer\Microservices\Forms\Request\Reference\GetReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse
    {
        $url = '/reference';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse(), 'get', $url, [
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'reference');

        $response->reference = $array;

        return $response;
    }

    public function deleteReference(\Perfumer\Microservices\Forms\Request\Reference\DeleteReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse
    {
        $url = '/reference';

        /** @var \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse(), 'delete', $url, [
        'code' => $request->code,
        ]);

        return $response;
    }

    public function saveReference(\Perfumer\Microservices\Forms\Request\Reference\SaveReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\SaveReferenceResponse
    {
        $url = '/reference';

        /** @var \Perfumer\Microservices\Forms\Response\Reference\SaveReferenceResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Reference\SaveReferenceResponse(), 'post', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'is_archived' => $request->is_archived,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Reference\SaveReferenceResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'reference');

        if (null !== $array) {
            $response->reference = $array;
        }

        return $response;
    }

    public function getReferences(\Perfumer\Microservices\Forms\Request\References\GetReferencesRequest $request): \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse
    {
        $url = '/references';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'is_archived' => $request->is_archived,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->references = $this->fetchKeyFromContent($response->_content, 'references');

        return $response;
    }

    public function getArticle(\Perfumer\Microservices\Forms\Request\Article\GetArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse
    {
        $url = '/article';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse(), 'get', $url, [
        'id' => $request->id,
        'locale' => $request->locale,
        'code' => $request->code,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'article');

        $response->article = $array;

        return $response;
    }

    public function deleteArticle(\Perfumer\Microservices\Forms\Request\Article\DeleteArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse
    {
        $url = '/article';

        /** @var \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse(), 'delete', $url, [
        'id' => $request->id,
        ]);

        return $response;
    }

    public function saveArticle(\Perfumer\Microservices\Forms\Request\Article\SaveArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse
    {
        $url = '/article';

        /** @var \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse(), 'post', $url, [
        'id' => $request->id,
        'category_id' => $request->category_id,
        'name' => $request->name,
        'description' => $request->description,
        'code' => $request->code,
        'html' => $request->html,
        'json' => $request->json,
        'locale' => $request->locale,
        'ticket_modules' => $request->ticket_modules,
        ]);

        /** @var \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'article');

        if (null !== $array) {
            $response->article = $array;
        }

        return $response;
    }

    public function getArticles(\Perfumer\Microservices\Forms\Request\Articles\GetArticlesRequest $request): \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse
    {
        $url = '/articles';

        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse(), 'get', $url, [
        'category_id' => $request->category_id,
        'name' => $request->name,
        'description' => $request->description,
        'code' => $request->code,
        'locale' => $request->locale,
        'ticket_module' => $request->ticket_module,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        ]);

        /* @var \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse $response */
        $response->nb_results = $this->fetchKeyFromContent($response->_content, 'nb_results');
        $response->articles = $this->fetchKeyFromContent($response->_content, 'articles');

        return $response;
    }
}
