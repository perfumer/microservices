<?php

namespace Perfumer\Microservices\Contract\I18n;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;

/**
 * @GetModel(microservice="i18n", model="translation", fields={"key"})
 * @DeleteModel(microservice="i18n", model="translation", fields={"key", "locale"})
 * @CreateModel(microservice="i18n", model="translation", fields={"key", "text", "is_immutable", "is_richtext"})
 * @UpdateModel(microservice="i18n", model="translation", fields={"key", "new_key", "text", "is_immutable", "is_richtext"})
 * @SaveModel(microservice="i18n", model="translations", fields={"translations"})
 * @GetModels(microservice="i18n", model="translations", fields={"locale"}, url="dump", action="dump", paginate=false)
 *
 * @GetModels(
 *     microservice="i18n",
 *     model="translations",
 *     fields={"count.bool", "text", "locale", "key", "is_immutable", "is_richtext"},
 *     response_fields={"nb_translations.int"}
 * )
 */
interface I18n
{
}
