<?php

namespace Perfumer\Microservices\I18n;

use Perfumer\Microservices\I18n\Request\DeleteTranslationRequest;
use Perfumer\Microservices\I18n\Request\DumpRequest;
use Perfumer\Microservices\I18n\Request\GetTranslationRequest;
use Perfumer\Microservices\I18n\Request\GetTranslationsRequest;
use Perfumer\Microservices\I18n\Request\SaveTranslationRequest;
use Perfumer\Microservices\I18n\Response\DeleteTranslationResponse;
use Perfumer\Microservices\I18n\Response\DumpResponse;
use Perfumer\Microservices\I18n\Response\GetTranslationResponse;
use Perfumer\Microservices\I18n\Response\GetTranslationsResponse;
use Perfumer\Microservices\I18n\Response\SaveTranslationResponse;
use Perfumer\Microservices\Microservice;

class I18n extends Microservice implements \Perfumer\Microservices\Contract\I18n
{
    public function __construct($host)
    {
        $this->host = $host;
    }

    public function getTranslation(GetTranslationRequest $request): GetTranslationResponse
    {
        $url = '/translation';

        /** @var GetTranslationResponse $response */
        $response = $this->doRequest(new GetTranslationResponse(), 'get', $url, [
            'key' => $request->key,
        ]);

        $array = $this->fetchKeyFromContent($response->content, 'translation');

        $response->translation = $array;

        return $response;
    }

    public function getTranslations(GetTranslationsRequest $request): GetTranslationsResponse
    {
        $url = '/translations';

        /** @var GetTranslationsResponse $response */
        $response = $this->doRequest(new GetTranslationsResponse(), 'get', $url, [
            'key' => $request->key,
            'limit' => $request->limit,
            'offset' => $request->offset,
        ]);

        $array = $this->fetchKeyFromContent($response->content, 'translations');

        $response->translations = $array;

        return $response;
    }

    public function saveTranslation(SaveTranslationRequest $request): SaveTranslationResponse
    {
        $url = '/translation';

        /** @var SaveTranslationResponse $response */
        $response = $this->doRequest(new SaveTranslationResponse(), 'post', $url, [
            'key' => $request->key,
            'text' => $request->text,
        ]);

        return $response;
    }

    public function deleteTranslation(DeleteTranslationRequest $request): DeleteTranslationResponse
    {
        $url = '/translation';

        /** @var DeleteTranslationResponse $response */
        $response = $this->doRequest(new DeleteTranslationResponse(), 'delete', $url, [
            'key' => $request->key,
            'locale' => $request->locale,
        ]);

        return $response;
    }

    public function dump(DumpRequest $request): DumpResponse
    {
        $url = '/dump';

        /** @var DumpResponse $response */
        $response = $this->doRequest(new DumpResponse(), 'get', $url, [
            'locale' => $request->locale,
        ]);

        $array = $this->fetchKeyFromContent($response->content, 'translations');

        $response->translations = $array;

        return $response;
    }
}
