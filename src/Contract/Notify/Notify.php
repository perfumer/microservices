<?php

namespace Perfumer\Microservices\Contract\Notify;

use Perfumer\Microservices\Annotation\CreateModel;

/**
 * @CreateModel(microservice="notify", model="notify", action="do", fields={"notification", "locale", "phone", "email", "feed_collection", "feed_recipient", "feed_payload.array", "payload.array"})
 */
interface Notify
{

}