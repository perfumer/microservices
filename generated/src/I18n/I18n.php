<?php

namespace Generated\Perfumer\Microservices\I18n;

abstract class I18n extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\I18n\I18n
{
    public function getTranslation(\Perfumer\Microservices\I18n\Request\Translation\GetTranslationRequest $request): \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse
    {
        $url = '/translation';

        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse(), 'get', $url, [
        'key' => $request->key,
        ]);

        /** @var \Perfumer\Microservices\I18n\Response\Translation\GetTranslationResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'translation');

        $response->translation = $array;

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
        ]);

        /** @var \Perfumer\Microservices\I18n\Response\Translation\CreateTranslationResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'translation');

        if (null !== $array) {
            $response->translation = $array;
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
        ]);

        /** @var \Perfumer\Microservices\I18n\Response\Translation\UpdateTranslationResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'translation');

        if (null !== $array) {
            $response->translation = $array;
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

        /** @var \Perfumer\Microservices\I18n\Response\Translations\SaveTranslationsResponse $response */
        $array = $this->fetchKeyFromContent($response->_content, 'translations');

        if (null !== $array) {
            $response->translations = $array;
        }

        return $response;
    }

    public function dumpTranslations(\Perfumer\Microservices\I18n\Request\Translations\DumpTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse
    {
        $url = '/dump';

        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse(), 'get', $url, [
        'locale' => $request->locale,
        ]);

        /* @var \Perfumer\Microservices\I18n\Response\Translations\DumpTranslationsResponse $response */
        $response->translations = $this->fetchKeyFromContent($response->_content, 'translations');

        return $response;
    }

    public function getTranslations(\Perfumer\Microservices\I18n\Request\Translations\GetTranslationsRequest $request): \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse
    {
        $url = '/translations';

        $response = $this->doRequest(new \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse(), 'get', $url, [
        'count' => $request->count,
        'text' => $request->text,
        'locale' => $request->locale,
        'key' => $request->key,
        'is_immutable' => $request->is_immutable,
        'is_richtext' => $request->is_richtext,
        'limit' => $request->limit,
        'offset' => $request->offset,
        ]);

        /* @var \Perfumer\Microservices\I18n\Response\Translations\GetTranslationsResponse $response */
        $response->nb_translations = $this->fetchKeyFromContent($response->_content, 'nb_translations');
        $response->translations = $this->fetchKeyFromContent($response->_content, 'translations');

        return $response;
    }
}
