<?php

namespace Generated\Perfumer\Microservices\Forms;

abstract class Forms extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Forms\Forms
{
    public function getForm(\Perfumer\Microservices\Forms\Request\Form\GetFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\GetFormResponse
    {
        $url = '/form';

        /** @var \Perfumer\Microservices\Forms\Response\Form\GetFormResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Form\GetFormResponse(), 'get', $url, [
        'user_id' => $request->user_id,
        'customer_id' => $request->customer_id,
        'ticket_id' => $request->ticket_id,
        'module' => $request->module,
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function deleteForm(\Perfumer\Microservices\Forms\Request\Form\DeleteFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse
    {
        $url = '/form';

        /** @var \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Form\DeleteFormResponse(), 'delete', $url, [
        'id' => $request->id,
        'user_id' => $request->user_id,
        'customer_id' => $request->customer_id,
        'ticket_id' => $request->ticket_id,
        'module' => $request->module,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveForm(\Perfumer\Microservices\Forms\Request\Form\SaveFormRequest $request): \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse
    {
        $url = '/form';

        /** @var \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Form\SaveFormResponse(), 'post', $url, [
        'name' => $request->name,
        'ticket_id' => $request->ticket_id,
        'user_id' => $request->user_id,
        'customer_id' => $request->customer_id,
        'schema' => $request->schema,
        'module' => $request->module,
        'fields' => $request->fields,
        'payload' => $request->payload,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'form');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->form = $item;
        }

        return $response;
    }

    public function saveFormsTicket(\Perfumer\Microservices\Forms\Request\Forms\SaveFormsTicketRequest $request): \Perfumer\Microservices\Forms\Response\Forms\SaveFormsTicketResponse
    {
        $url = '/forms/ticket';

        /** @var \Perfumer\Microservices\Forms\Response\Forms\SaveFormsTicketResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Forms\SaveFormsTicketResponse(), 'post', $url, [
        'user_id' => $request->user_id,
        'customer_id' => $request->customer_id,
        'ticket_id' => $request->ticket_id,
        'module' => $request->module,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }

        return $response;
    }

    public function getForms(\Perfumer\Microservices\Forms\Request\Forms\GetFormsRequest $request): \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse
    {
        $url = '/forms';

        /** @var \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Forms\GetFormsResponse(), 'get', $url, [
        'module_name' => $request->module_name,
        'customer_fio' => $request->customer_fio,
        'user_fio' => $request->user_fio,
        'name' => $request->name,
        'schema' => $request->schema,
        'module' => $request->module,
        'ticket_id' => $request->ticket_id,
        'user_id' => $request->user_id,
        'customer_id' => $request->customer_id,
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
        $item = $this->fetchKeyFromContent($response->_content, 'forms');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->forms = $item;
        }

        return $response;
    }

    public function getItem(\Perfumer\Microservices\Forms\Request\Item\GetItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\GetItemResponse
    {
        $url = '/item';

        /** @var \Perfumer\Microservices\Forms\Response\Item\GetItemResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Item\GetItemResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'locale' => $request->locale,
        'reference' => $request->reference,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'item');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->item = $item;
        }

        return $response;
    }

    public function deleteItem(\Perfumer\Microservices\Forms\Request\Item\DeleteItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse
    {
        $url = '/item';

        /** @var \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Item\DeleteItemResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveItem(\Perfumer\Microservices\Forms\Request\Item\SaveItemRequest $request): \Perfumer\Microservices\Forms\Response\Item\SaveItemResponse
    {
        $url = '/item';

        /** @var \Perfumer\Microservices\Forms\Response\Item\SaveItemResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Item\SaveItemResponse(), 'post', $url, [
        'id' => $request->id,
        'value' => $request->value,
        'description' => $request->description,
        'name' => $request->name,
        'code' => $request->code,
        'new_code' => $request->new_code,
        'reference_code' => $request->reference_code,
        'reference_id' => $request->reference_id,
        'parents' => $request->parents,
        'children' => $request->children,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'item');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->item = $item;
        }

        return $response;
    }

    public function getItems(\Perfumer\Microservices\Forms\Request\Items\GetItemsRequest $request): \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse
    {
        $url = '/items';

        /** @var \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Items\GetItemsResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'locale' => $request->locale,
        'reference' => $request->reference,
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
        $item = $this->fetchKeyFromContent($response->_content, 'items');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->items = $item;
        }

        return $response;
    }

    public function getField(\Perfumer\Microservices\Forms\Request\Field\GetFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\GetFieldResponse
    {
        $url = '/field';

        /** @var \Perfumer\Microservices\Forms\Response\Field\GetFieldResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Field\GetFieldResponse(), 'get', $url, [
        'id' => $request->id,
        'locale' => $request->locale,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'field');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->field = $item;
        }

        return $response;
    }

    public function deleteField(\Perfumer\Microservices\Forms\Request\Field\DeleteFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\DeleteFieldResponse
    {
        $url = '/field';

        /** @var \Perfumer\Microservices\Forms\Response\Field\DeleteFieldResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Field\DeleteFieldResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveField(\Perfumer\Microservices\Forms\Request\Field\SaveFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\SaveFieldResponse
    {
        $url = '/field';

        /** @var \Perfumer\Microservices\Forms\Response\Field\SaveFieldResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Field\SaveFieldResponse(), 'post', $url, [
        'label' => $request->label,
        'type' => $request->type,
        'model' => $request->model,
        'module' => $request->module,
        'is_required' => $request->is_required,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'field');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->field = $item;
        }

        return $response;
    }

    public function updateField(\Perfumer\Microservices\Forms\Request\Field\UpdateFieldRequest $request): \Perfumer\Microservices\Forms\Response\Field\UpdateFieldResponse
    {
        $url = '/field';

        /** @var \Perfumer\Microservices\Forms\Response\Field\UpdateFieldResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Field\UpdateFieldResponse(), 'patch', $url, [
        'id' => $request->id,
        'type' => $request->type,
        'label' => $request->label,
        'model' => $request->model,
        'module' => $request->module,
        'is_required' => $request->is_required,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'field');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->field = $item;
        }

        return $response;
    }

    public function getFields(\Perfumer\Microservices\Forms\Request\Fields\GetFieldsRequest $request): \Perfumer\Microservices\Forms\Response\Fields\GetFieldsResponse
    {
        $url = '/fields';

        /** @var \Perfumer\Microservices\Forms\Response\Fields\GetFieldsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Fields\GetFieldsResponse(), 'get', $url, [
        'label' => $request->label,
        'type' => $request->type,
        'model' => $request->model,
        'locale' => $request->locale,
        'module' => $request->module,
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
        $item = $this->fetchKeyFromContent($response->_content, 'fields');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->fields = $item;
        }

        return $response;
    }

    public function getModule(\Perfumer\Microservices\Forms\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Forms\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        /** @var \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Modules\GetModulesResponse(), 'get', $url, [
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
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
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
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Forms\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Forms\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Module\UnarchiveModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getReference(\Perfumer\Microservices\Forms\Request\Reference\GetReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse
    {
        $url = '/reference';

        /** @var \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Reference\GetReferenceResponse(), 'get', $url, [
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'reference');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reference = $item;
        }

        return $response;
    }

    public function deleteReference(\Perfumer\Microservices\Forms\Request\Reference\DeleteReferenceRequest $request): \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse
    {
        $url = '/reference';

        /** @var \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Reference\DeleteReferenceResponse(), 'delete', $url, [
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);

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
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'reference');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->reference = $item;
        }

        return $response;
    }

    public function getReferences(\Perfumer\Microservices\Forms\Request\References\GetReferencesRequest $request): \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse
    {
        $url = '/references';

        /** @var \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\References\GetReferencesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'is_archived' => $request->is_archived,
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
        $item = $this->fetchKeyFromContent($response->_content, 'references');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->references = $item;
        }

        return $response;
    }

    public function getArticle(\Perfumer\Microservices\Forms\Request\Article\GetArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse
    {
        $url = '/article';

        /** @var \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Article\GetArticleResponse(), 'get', $url, [
        'id' => $request->id,
        'locale' => $request->locale,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'article');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->article = $item;
        }

        return $response;
    }

    public function deleteArticle(\Perfumer\Microservices\Forms\Request\Article\DeleteArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse
    {
        $url = '/article';

        /** @var \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Article\DeleteArticleResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug, $request->_timeout);

        return $response;
    }

    public function saveArticle(\Perfumer\Microservices\Forms\Request\Article\SaveArticleRequest $request): \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse
    {
        $url = '/article';

        /** @var \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Article\SaveArticleResponse(), 'post', $url, [
        'id' => $request->id,
        'image' => $request->image,
        'category_id' => $request->category_id,
        'title' => $request->title,
        'description' => $request->description,
        'code' => $request->code,
        'html' => $request->html,
        'json' => $request->json,
        'locale' => $request->locale,
        'ticket_modules' => $request->ticket_modules,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'article');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->article = $item;
        }

        return $response;
    }

    public function getArticles(\Perfumer\Microservices\Forms\Request\Articles\GetArticlesRequest $request): \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse
    {
        $url = '/articles';

        /** @var \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Articles\GetArticlesResponse(), 'get', $url, [
        'category' => $request->category,
        'title' => $request->title,
        'description' => $request->description,
        'code' => $request->code,
        'locale' => $request->locale,
        'ticket_module' => $request->ticket_module,
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
        $item = $this->fetchKeyFromContent($response->_content, 'articles');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->articles = $item;
        }

        return $response;
    }

    public function saveSignature(\Perfumer\Microservices\Forms\Request\Signature\SaveSignatureRequest $request): \Perfumer\Microservices\Forms\Response\Signature\SaveSignatureResponse
    {
        $url = '/signature';

        /** @var \Perfumer\Microservices\Forms\Response\Signature\SaveSignatureResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\Signature\SaveSignatureResponse(), 'post', $url, [
        'signature' => $request->signature,
        'data' => $request->data,
        'user_id' => $request->user_id,
        'customer_id' => $request->customer_id,
        'ticket_id' => $request->ticket_id,
        'module' => $request->module,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'signature');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->signature = $item;
        }

        return $response;
    }

    public function getNcaDocument(\Perfumer\Microservices\Forms\Request\NcaDocument\GetNcaDocumentRequest $request): \Perfumer\Microservices\Forms\Response\NcaDocument\GetNcaDocumentResponse
    {
        $url = '/nca-document';

        /** @var \Perfumer\Microservices\Forms\Response\NcaDocument\GetNcaDocumentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\NcaDocument\GetNcaDocumentResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nca_document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nca_document = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'ncaDocument');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ncaDocument = $item;
        }

        return $response;
    }

    public function deleteNcaDocument(\Perfumer\Microservices\Forms\Request\NcaDocument\DeleteNcaDocumentRequest $request): \Perfumer\Microservices\Forms\Response\NcaDocument\DeleteNcaDocumentResponse
    {
        $url = '/nca-document';

        /** @var \Perfumer\Microservices\Forms\Response\NcaDocument\DeleteNcaDocumentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\NcaDocument\DeleteNcaDocumentResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nca_document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nca_document = $item;
        }

        return $response;
    }

    public function saveNcaDocument(\Perfumer\Microservices\Forms\Request\NcaDocument\SaveNcaDocumentRequest $request): \Perfumer\Microservices\Forms\Response\NcaDocument\SaveNcaDocumentResponse
    {
        $url = '/nca-document';

        /** @var \Perfumer\Microservices\Forms\Response\NcaDocument\SaveNcaDocumentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\NcaDocument\SaveNcaDocumentResponse(), 'post', $url, [
        'code' => $request->code,
        'url' => $request->url,
        'description' => $request->description,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nca_document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nca_document = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'ncaDocument');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ncaDocument = $item;
        }

        return $response;
    }

    public function updateNcaDocument(\Perfumer\Microservices\Forms\Request\NcaDocument\UpdateNcaDocumentRequest $request): \Perfumer\Microservices\Forms\Response\NcaDocument\UpdateNcaDocumentResponse
    {
        $url = '/nca-document';

        /** @var \Perfumer\Microservices\Forms\Response\NcaDocument\UpdateNcaDocumentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\NcaDocument\UpdateNcaDocumentResponse(), 'patch', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'url' => $request->url,
        'description' => $request->description,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nca_document');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nca_document = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'ncaDocument');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ncaDocument = $item;
        }

        return $response;
    }

    public function getNcaDocuments(\Perfumer\Microservices\Forms\Request\NcaDocuments\GetNcaDocumentsRequest $request): \Perfumer\Microservices\Forms\Response\NcaDocuments\GetNcaDocumentsResponse
    {
        $url = '/nca-documents';

        /** @var \Perfumer\Microservices\Forms\Response\NcaDocuments\GetNcaDocumentsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Forms\Response\NcaDocuments\GetNcaDocumentsResponse(), 'get', $url, [
        'code' => $request->code,
        'description' => $request->description,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug, $request->_timeout);
        $item = $this->fetchKeyFromContent($response->_content, 'nca_documents');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nca_documents = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'ncaDocuments');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->ncaDocuments = $item;
        }

        return $response;
    }
}
