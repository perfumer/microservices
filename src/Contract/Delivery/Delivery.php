<?php

namespace Perfumer\Microservices\Contract\Delivery;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;

/**
 * @GetModel(microservice="delivery", model="delivery", fields={"id.int"})
 * @DeleteModel(microservice="delivery", model="delivery", fields={"id.int"})
 * @SaveModel(microservice="delivery", model="delivery", fields={"min.int", "max.int", "gap.int", "name", "has_email.bool", "has_sms.bool", "has_feed.bool", "email_subject.array", "email_html.array", "sms_message.array", "feed_title.array", "feed_text.array", "feed_image.array", "feed_payload.array", "payload.array", "data_url", "filters.array"})
 * @UpdateModel(microservice="delivery", model="delivery", fields={"id.int", "min.int", "max.int", "gap.int", "name", "has_email.bool", "has_sms.bool", "has_feed.bool", "email_subject.array", "email_html.array", "sms_message.array", "feed_title.array", "feed_text.array", "feed_image.array", "feed_payload.array", "payload.array",})
 * @GetModels(microservice="delivery", model="deliveries", fields={"name", "has_email.bool", "has_sms.bool", "has_feed.bool", "status"})
 * @SaveModel(microservice="delivery", model="delivery", url="delivery/cancel", action="cancel", fields={"id.int"})
 * @SaveModel(microservice="delivery", model="delivery", url="delivery/copy", action="copy", fields={"id.int"})
 * @SaveModel(microservice="delivery", model="delivery", url="delivery/start", action="start", fields={"id.int"})
 */
interface Delivery
{
}
