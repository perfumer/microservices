<?php

namespace Perfumer\Microservices\Contract\Notify;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;

/**
 * @CreateModel(microservice="notify", model="notify", action="do", fields={"notification", "locale", "phone", "email", "telegram_chat_id.int", "feed_collection", "feed_recipient", "feed_payload.array", "payload.array"})
 * @GetModels(microservice="notify", model="notifications", fields={"name", "code", "has_email.bool", "has_sms.bool", "has_feed.bool", "has_telegram.bool"})
 * @GetModel(microservice="notify", model="notification", fields={"id.int", "code", "locale", "payload.array"})
 */
interface Notify
{

}