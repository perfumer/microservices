<?php

namespace Perfumer\Microservices\Contract\Posts;

use Perfumer\Microservices\Annotation\DeleteModel;
use Perfumer\Microservices\Annotation\GetModel;
use Perfumer\Microservices\Annotation\RequestModel;
use Perfumer\Microservices\Annotation\SaveModel;
use Perfumer\Microservices\Annotation\UpdateModel;
use Perfumer\Microservices\Annotation\GetModels;
use Perfumer\Microservices\Annotation\GetMeshModels;
use Perfumer\Microservices\Annotation\SaveMeshModel;

/**
 * @GetModel(microservice="posts", model="module", fields={"id", "code", "locale"})
 * @GetMeshModels(microservice="posts", model="modules", fields={"post_id.int", "name", "code", "description", "is_archived.bool", "locale"})
 * @SaveMeshModel(microservice="posts", model="module", fields={"id", "code", "name", "description", "is_archived.bool", "locale", "image"})
 * @DeleteModel(microservice="posts", model="module", fields={"id", "code"})
 * @SaveModel(microservice="posts", model="module", fields={"id.int"}, url="/module/archive", action="archive")
 * @SaveModel(microservice="posts", model="module", fields={"id.int"}, url="/module/archive", action="unarchive", request_method="delete")
 * @UpdateModel(microservice="posts", model="module", fields={"id", "code", "name", "description", "is_archived.bool", "locale", "image"})
 *
 * @GetModels(microservice="posts", model="subscriptions", fields={"subscriber_id", "module_id"})
 * @SaveModel(microservice="posts", model="subscription", fields={"subscriber_id", "module_id"})
 * @DeleteModel(microservice="posts", model="subscription", fields={"id.int", "subscriber_id", "module_id"})
 *
 * @GetModels(microservice="posts", model="tags", fields={"text"})
 * @GetModel(microservice="posts", model="tag", fields={"id.int"})
 * @SaveModel(microservice="posts", model="tag", fields={"text"})
 * @UpdateModel(microservice="posts", model="tag", fields={"id.int", "text"})
 * @DeleteModel(microservice="posts", model="tag", fields={"id.int"})
 *
 * @GetModels(microservice="posts", model="comments", fields={"id.int", "post_id.int", "text", "status", "author_id", "is_removed.bool",
 *     "liked_at_from", "liked_at_to", "rated_at_from", "rated_at_from", "rater_id"})
 * @GetModel(microservice="posts", model="comment", fields={"id.int"})
 * @SaveModel(microservice="posts", model="comment", fields={"post_id", "text", "author_id", "status", "parent_id",
 *     "files"})
 * @UpdateModel(microservice="posts", model="comment", fields={"id.int", "text", "author_id"})
 * @DeleteModel(microservice="posts", model="comment", fields={"id.int"})
 *
 * @GetModels(microservice="posts", model="posts", fields={"title", "code", "author_id", "locale", "status", "description",
 *     "is_disabled", "liked_at_from", "liked_at_to", "rated_at_from", "rated_at_from", "rater_id", "module"})
 * @GetModel(microservice="posts", model="post", fields={"id.int", "rater_id", "code"})
 * @SaveModel(microservice="posts", model="post", fields={"title", "author_id", "status", "locale", "image",
 *     "description", "html", "json", "is_disabled.bool", "tags", "code", "modules", "is_comments_enabled.bool", "is_likes_enabled.bool", "quizzes.array"})
 * @UpdateModel(microservice="posts", model="post", fields={"id.int", "title", "author_id", "locale", "image",
 *     "description", "html", "json", "is_disabled.bool", "tags", "code", "modules", "is_comments_enabled.bool", "is_likes_enabled.bool"})
 * @DeleteModel(microservice="posts", model="post", fields={"id.int"})
 *
 * @SaveModel(microservice="posts", model="comment", fields={"id.int", "rater_id", "post_id", "comment_id"}, url="/comment/like", action="like")
 * @SaveModel(microservice="posts", model="comment", fields={"id.int", "rater_id", "post_id", "comment_id"}, url="/comment/dislike", action="dislike")
 * @SaveModel(microservice="posts", model="comment", fields={"id.int"}, url="/comment/publish", action="publish")
 * @SaveModel(microservice="posts", model="comment", fields={"id.int"}, url="/comment/reject", action="reject")
 * @SaveModel(microservice="posts", model="comment", fields={"id.int"}, url="/comment/activate", action="activate")
 * @SaveModel(microservice="posts", model="comment", fields={"id.int"}, url="/comment/disable", action="disable")
 *
 * @SaveModel(microservice="posts", model="post", fields={"id.int", "rater_id", "post_id"}, url="/post/like", action="like")
 * @SaveModel(microservice="posts", model="post", fields={"id.int", "rater_id", "post_id"}, url="/post/dislike", action="dislike")
 * @SaveModel(microservice="posts", model="post", fields={"id.int", "code"}, url="/post/publish", action="publish")
 * @SaveModel(microservice="posts", model="post", fields={"id.int"}, url="/post/reject", action="reject")
 * @SaveModel(microservice="posts", model="post", fields={"id.int"}, url="/post/disable", action="disable")
 * @SaveModel(microservice="posts", model="post", fields={"id.int"}, url="/post/activate", action="activate")
 * @SaveModel(microservice="posts", model="post", fields={"id.int"}, url="/post/increment-nb-views", action="incrementNbViews")
 *
 * @RequestModel(microservice="posts", model="settings", submodel="Settings", action="get", url="settings", fields={}, response_fields={"crm.array"}, request_method="get")
 * @RequestModel(microservice="posts", model="settings", submodel="Settings", action="save", url="settings", fields={"crm.array"}, request_method="post")
 *
 * @SaveModel(microservice="posts", model="quiz", fields={"id.int"}, url="/quiz/activate", action="activate")
 * @SaveModel(microservice="posts", model="quiz", fields={"id.int"}, url="/quiz/disable", action="disable")
 * @SaveModel(microservice="posts", model="quiz", fields={"customer_id.int", "answers.array"}, url="/quiz/answer", action="answer")
 * @GetModels(microservice="posts", model="quizzes", fields={"post"})
 * @GetModel(microservice="posts", model="quiz", fields={"id.int"})
 */
interface Posts
{
}