<?php

namespace Perfumer\Microservices\Contract\Posts;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\SaveMeshModel;

/**
 * @GetModel(microservice="posts", model="module", fields={"id", "code"})
 * @GetMeshModels(microservice="posts", model="modules", fields={"name", "code", "description", "is_archived.bool"})
 * @SaveMeshModel(microservice="posts", model="module", fields={"id", "code", "name", "description", "is_archived.bool"})
 * @DeleteModel(microservice="posts", model="module", fields={"id", "code"})
 * @SaveModel(microservice="posts", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="posts", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 * @UpdateModel(microservice="posts", model="module", fields={"id", "code", "name", "description", "is_archived.bool"})
 *
 * @GetModels(microservice="posts", model="tags", fields={"text"})
 * @GetModel(microservice="posts", model="tag", fields={"id.int"})
 * @SaveModel(microservice="posts", model="tag", fields={"text"})
 * @UpdateModel(microservice="posts", model="tag", fields={"id.int", "text"})
 * @DeleteModel(microservice="posts", model="tag", fields={"id.int"})
 *
 * @GetModels(microservice="posts", model="comments", fields={"text", "status", "author_id", "is_removed.bool",
 *     "liked_at_from", "liked_at_to", "rated_at_from", "rated_at_from"})
 * @GetModel(microservice="posts", model="comment", fields={"id.int"})
 * @SaveModel(microservice="posts", model="comment", fields={"post_id", "text", "author_id", "status", "parent_id",
 *     "files"})
 * @UpdateModel(microservice="posts", model="comment", fields={"id.int", "text", "author_id"})
 * @DeleteModel(microservice="posts", model="comment", fields={"id.int"})
 *
 * @GetModels(microservice="posts", model="posts", fields={"title", "author_id", "locale", "status", "description",
 *     "is_disabled", "liked_at_from", "liked_at_to", "rated_at_from", "rated_at_from"})
 * @GetModel(microservice="posts", model="post", fields={"id.int"})
 * @SaveModel(microservice="posts", model="post", fields={"title", "author_id", "status", "locale", "image",
 *     "description", "html", "json", "is_disabled.bool", "tags"})
 * @UpdateModel(microservice="posts", model="post", fields={"id.int", "title", "author_id", "locale", "image",
 *     "description", "html", "json", "is_disabled.bool", "tags"})
 * @DeleteModel(microservice="posts", model="post", fields={"id.int"})
 *
 * @SaveModel(microservice="events", model="comment", fields={"id.int"}, url="/comment/like", action="like")
 * @SaveModel(microservice="events", model="comment", fields={"id.int"}, url="/comment/dislike", action="dislike")
 * @SaveModel(microservice="events", model="comment", fields={"id.int"}, url="/comment/publish", action="publish")
 * @SaveModel(microservice="events", model="comment", fields={"id.int"}, url="/comment/reject", action="reject")
 *
 * @SaveModel(microservice="events", model="post", fields={"id.int"}, url="/post/like", action="like")
 * @SaveModel(microservice="events", model="post", fields={"id.int"}, url="/post/dislike", action="dislike")
 * @SaveModel(microservice="events", model="post", fields={"id.int"}, url="/post/publish", action="publish")
 * @SaveModel(microservice="events", model="post", fields={"id.int"}, url="/post/reject", action="reject")
 */
interface Posts
{
}