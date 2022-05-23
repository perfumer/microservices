<?php

namespace Perfumer\Microservices\Contract\Webapps;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;

/**
 * @GetModel(microservice="webapps", model="message")
 *
 * @GetModels(microservice="webapps", model="clientStates", fields={"bot_id"}, response_fields={"states"})
 */
interface Webapps
{
}