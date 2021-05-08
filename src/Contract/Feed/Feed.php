<?php

namespace Perfumer\Microservices\Contract\Feed;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;

/**
 * @GetModel(microservice="feed", model="record", fields={"collection", "badge_user", "recipient", "sender", "id.int"}, url="/record")
 * @CreateModel(microservice="feed", model="record", fields={"collection","recipient","websocket_channel","badge_user","sender","thread","title","text","image","created_at","payload"}, url="/record")
 * @DeleteModel(microservice="feed", model="record", fields={"collection","badge_user","recipient","sender","id.int"}, url="/record")
 *
 * @GetModels(microservice="feed", model="records", fields={"collection","sender","user","thread","recipient","search","id","order","is_read"}, url="/records")
 * @CreateModel(microservice="feed", model="records", fields={"collection","recipients.array","records.array"}, url="/records")
 * @DeleteModel(microservice="feed", model="records", fields={"collection","badge_user","recipient","sender","thread"}, url="/records")
 * @UpdateModel(microservice="feed", model="records", fields={"collection","where.array","set.array"}, url="/records")
 *
 * @SaveModel(microservice="feed", action="read", model="record", fields={"collection","id.int","recipient","sender","badge_user"}, url="/record/read")
 * @SaveModel(microservice="feed", action="unread", model="record", fields={"collection","id.int","badge_user"}, url="/record/unread")
 * @SaveModel(microservice="feed", action="read", model="records", fields={"collection","recipient","badge_user"}, url="/records/read")
 * @GetModel(microservice="feed", action="count", model="records", fields={"collection","recipient","where.array","group.array"}, url="/records/count")
 */
interface Feed
{

}