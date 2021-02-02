<?php

namespace Generated\Perfumer\Microservices\I18n;

abstract class I18n extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\I18n\I18n
{
    public function getTranslation(\Perfumer\Microservices\I18n\Request\Translation\GetTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse
    {
        $url = '/translation';

        /** @var \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse(), 'get', $url, [
        'key' => $request->key,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'translation');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translation = $item;
        }

        return $response;
    }

    public function deleteTranslation(\Perfumer\Microservices\I18n\Request\Translation\DeleteTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\DeleteTranslationResponse
    {
        $url = '/translation';

        /** @var \Perfumer\Microservices\I18n\Response\Translation\DeleteTranslationResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translation\DeleteTranslationResponse(), 'delete', $url, [
        'key' => $request->key,
        'locale' => $request->locale,
        ]);

        return $response;
    }

    public function createTranslation(\Perfumer\Microservices\I18n\Request\Translation\CreateTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\CreateTranslationResponse
    {
        $url = '/translation';

        /** @var \Perfumer\Microservices\I18n\Response\Translation\CreateTranslationResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translation\CreateTranslationResponse(), 'post', $url, [
        'key' => $request->key,
        'text' => $request->text,
        'is_immutable' => $request->is_immutable,
        'is_richtext' => $request->is_richtext,
        'tags' => $request->tags,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'translation');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translation = $item;
        }

        return $response;
    }

    public function updateTranslation(\Perfumer\Microservices\I18n\Request\Translation\UpdateTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\UpdateTranslationResponse
    {
        $url = '/translation';

        /** @var \Perfumer\Microservices\I18n\Response\Translation\UpdateTranslationResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translation\UpdateTranslationResponse(), 'patch', $url, [
        'key' => $request->key,
        'new_key' => $request->new_key,
        'text' => $request->text,
        'is_immutable' => $request->is_immutable,
        'is_richtext' => $request->is_richtext,
        'tags' => $request->tags,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'translation');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translation = $item;
        }

        return $response;
    }

    public function saveTranslations(\Perfumer\Microservices\I18n\Request\Translations\SaveTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\SaveTranslationsResponse
    {
        $url = '/translations';

        /** @var \Perfumer\Microservices\I18n\Response\Translations\SaveTranslationsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translations\SaveTranslationsResponse(), 'post', $url, [
        'translations' => $request->translations,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translations = $item;
        }

        return $response;
    }

    public function dumpTranslations(\Perfumer\Microservices\I18n\Request\Translations\DumpTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse
    {
        $url = '/dump';

        /** @var \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse(), 'get', $url, [
        'locale' => $request->locale,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translations = $item;
        }

        return $response;
    }

    public function getTranslations(\Perfumer\Microservices\I18n\Request\Translations\GetTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse
    {
        $url = '/translations';

        /** @var \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse(), 'get', $url, [
        'count' => $request->count,
        'text' => $request->text,
        'locale' => $request->locale,
        'key' => $request->key,
        'is_immutable' => $request->is_immutable,
        'is_richtext' => $request->is_richtext,
        'tag' => $request->tag,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ]);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_translations = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'translations');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->translations = $item;
        }

        return $response;
    }
}
