<?php

namespace Perfumer\Microservices\Contract\Feed;

use Perfumer\Microservices\Annotation\CreateModel;
use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;

/**
 * @GetModel(microservice="feed", model="record", fields={"collection", "badge_user", "recipient", "sender", "id"}, url="/record")
 * @CreateModel(microservice="feed", model="record", fields={"collection","recipient","websocket_channel","badge_user","sender","thread","title","text","image","created_at","payload"}, url="/record")
 * @DeleteModel(microservice="feed", model="record", fields={"collection","badge_user","recipient","sender","id"}, url="/record")
 *
 * @GetModels(microservice="feed", model="records", fields={"collection","sender","user","thread","recipient","search","id","limit","offset","order","is_read"}, url="/records")
 * @CreateModel(microservice="feed", model="records", fields={"collection","recipients","records"}, url="/records")
 * @DeleteModel(microservice="feed", model="records", fields={"collection","badge_user","recipient","sender","thread"}, url="/records")
 * @UpdateModel(microservice="feed", model="records", fields={"collection","where","set"}, url="/records")
 *
 *
 * @SaveModel(microservice="feed", action="Set", model="record", submodel="IsRead", fields={"collection","id","recipient","sender","badge_user"}, url="/record/read")
 * @SaveModel(microservice="feed", action="Set", model="record", submodel="IsUnread", fields={"collection","id","badge_user"}, url="/record/unread")
 * @SaveModel(microservice="feed", action="Set", model="records", submodel="IsReadAll", fields={"collection","recipient","badge_user"}, url="/records/read")
 * @GetModels(microservice="feed", model="records", submodel="Count", fields={"collection","recipient","where","group"}, url="/records/count")
 */
interface Feed
{

}