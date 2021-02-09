<?php

namespace Generated\Perfumer\Microservices\Posts;

abstract class Posts extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Posts\Posts
{
    public function getModule(\Perfumer\Microservices\Posts\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\GetModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Posts\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Module\GetModuleResponse(), 'get', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Posts\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Posts\Response\Modules\GetModulesResponse
    {
        $url = '/modules';

        /** @var \Perfumer\Microservices\Posts\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Modules\GetModulesResponse(), 'get', $url, [
        'name' => $request->name,
        'code' => $request->code,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parent' => $request->parent,
        'parents' => $request->parents,
        'child' => $request->child,
        'children' => $request->children,
        'root' => $request->root,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'modules');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->modules = $item;
        }

        return $response;
    }

    public function saveModule(\Perfumer\Microservices\Posts\Request\Module\SaveModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\SaveModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Posts\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Module\SaveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        'code' => $request->code,
        'name' => $request->name,
        'description' => $request->description,
        'is_archived' => $request->is_archived,
        'parents' => $request->parents,
        'children' => $request->children,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Posts\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\DeleteModuleResponse
    {
        $url = '/module';

        /** @var \Perfumer\Microservices\Posts\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Module\DeleteModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        'code' => $request->code,
        ], $request->_debug);

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Posts\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\ArchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Posts\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Module\ArchiveModuleResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Posts\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\UnarchiveModuleResponse
    {
        $url = '/module/archive';

        /** @var \Perfumer\Microservices\Posts\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Module\UnarchiveModuleResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getTags(\Perfumer\Microservices\Posts\Request\Tags\GetTagsRequest $request): \Perfumer\Microservices\Posts\Response\Tags\GetTagsResponse
    {
        $url = '/tags';

        /** @var \Perfumer\Microservices\Posts\Response\Tags\GetTagsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Tags\GetTagsResponse(), 'get', $url, [
        'text' => $request->text,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'tags');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tags = $item;
        }

        return $response;
    }

    public function getTag(\Perfumer\Microservices\Posts\Request\Tag\GetTagRequest $request): \Perfumer\Microservices\Posts\Response\Tag\GetTagResponse
    {
        $url = '/tag';

        /** @var \Perfumer\Microservices\Posts\Response\Tag\GetTagResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Tag\GetTagResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'tag');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tag = $item;
        }

        return $response;
    }

    public function saveTag(\Perfumer\Microservices\Posts\Request\Tag\SaveTagRequest $request): \Perfumer\Microservices\Posts\Response\Tag\SaveTagResponse
    {
        $url = '/tag';

        /** @var \Perfumer\Microservices\Posts\Response\Tag\SaveTagResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Tag\SaveTagResponse(), 'post', $url, [
        'text' => $request->text,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'tag');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tag = $item;
        }

        return $response;
    }

    public function updateTag(\Perfumer\Microservices\Posts\Request\Tag\UpdateTagRequest $request): \Perfumer\Microservices\Posts\Response\Tag\UpdateTagResponse
    {
        $url = '/tag';

        /** @var \Perfumer\Microservices\Posts\Response\Tag\UpdateTagResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Tag\UpdateTagResponse(), 'patch', $url, [
        'id' => $request->id,
        'text' => $request->text,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'tag');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tag = $item;
        }

        return $response;
    }

    public function deleteTag(\Perfumer\Microservices\Posts\Request\Tag\DeleteTagRequest $request): \Perfumer\Microservices\Posts\Response\Tag\DeleteTagResponse
    {
        $url = '/tag';

        /** @var \Perfumer\Microservices\Posts\Response\Tag\DeleteTagResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Tag\DeleteTagResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);

        return $response;
    }

    public function getComments(\Perfumer\Microservices\Posts\Request\Comments\GetCommentsRequest $request): \Perfumer\Microservices\Posts\Response\Comments\GetCommentsResponse
    {
        $url = '/comments';

        /** @var \Perfumer\Microservices\Posts\Response\Comments\GetCommentsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comments\GetCommentsResponse(), 'get', $url, [
        'text' => $request->text,
        'status' => $request->status,
        'author_id' => $request->author_id,
        'is_removed' => $request->is_removed,
        'liked_at_from' => $request->liked_at_from,
        'liked_at_to' => $request->liked_at_to,
        'rated_at_from' => $request->rated_at_from,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'comments');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comments = $item;
        }

        return $response;
    }

    public function getComment(\Perfumer\Microservices\Posts\Request\Comment\GetCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\GetCommentResponse
    {
        $url = '/comment';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\GetCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\GetCommentResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function saveComment(\Perfumer\Microservices\Posts\Request\Comment\SaveCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\SaveCommentResponse
    {
        $url = '/comment';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\SaveCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\SaveCommentResponse(), 'post', $url, [
        'post_id' => $request->post_id,
        'text' => $request->text,
        'author_id' => $request->author_id,
        'status' => $request->status,
        'parent_id' => $request->parent_id,
        'files' => $request->files,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function updateComment(\Perfumer\Microservices\Posts\Request\Comment\UpdateCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\UpdateCommentResponse
    {
        $url = '/comment';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\UpdateCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\UpdateCommentResponse(), 'patch', $url, [
        'id' => $request->id,
        'text' => $request->text,
        'author_id' => $request->author_id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function deleteComment(\Perfumer\Microservices\Posts\Request\Comment\DeleteCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\DeleteCommentResponse
    {
        $url = '/comment';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\DeleteCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\DeleteCommentResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);

        return $response;
    }

    public function getPosts(\Perfumer\Microservices\Posts\Request\Posts\GetPostsRequest $request): \Perfumer\Microservices\Posts\Response\Posts\GetPostsResponse
    {
        $url = '/posts';

        /** @var \Perfumer\Microservices\Posts\Response\Posts\GetPostsResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Posts\GetPostsResponse(), 'get', $url, [
        'title' => $request->title,
        'author_id' => $request->author_id,
        'locale' => $request->locale,
        'status' => $request->status,
        'description' => $request->description,
        'is_disabled' => $request->is_disabled,
        'liked_at_from' => $request->liked_at_from,
        'liked_at_to' => $request->liked_at_to,
        'rated_at_from' => $request->rated_at_from,
        'limit' => $request->limit,
        'offset' => $request->offset,
        'count' => $request->count,
        'order_field' => $request->order_field,
        'order_direction' => $request->order_direction,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'posts');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->posts = $item;
        }

        return $response;
    }

    public function getPost(\Perfumer\Microservices\Posts\Request\Post\GetPostRequest $request): \Perfumer\Microservices\Posts\Response\Post\GetPostResponse
    {
        $url = '/post';

        /** @var \Perfumer\Microservices\Posts\Response\Post\GetPostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\GetPostResponse(), 'get', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function savePost(\Perfumer\Microservices\Posts\Request\Post\SavePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\SavePostResponse
    {
        $url = '/post';

        /** @var \Perfumer\Microservices\Posts\Response\Post\SavePostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\SavePostResponse(), 'post', $url, [
        'title' => $request->title,
        'author_id' => $request->author_id,
        'status' => $request->status,
        'locale' => $request->locale,
        'image' => $request->image,
        'description' => $request->description,
        'html' => $request->html,
        'json' => $request->json,
        'is_disabled' => $request->is_disabled,
        'tags' => $request->tags,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function updatePost(\Perfumer\Microservices\Posts\Request\Post\UpdatePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\UpdatePostResponse
    {
        $url = '/post';

        /** @var \Perfumer\Microservices\Posts\Response\Post\UpdatePostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\UpdatePostResponse(), 'patch', $url, [
        'id' => $request->id,
        'title' => $request->title,
        'author_id' => $request->author_id,
        'locale' => $request->locale,
        'image' => $request->image,
        'description' => $request->description,
        'html' => $request->html,
        'json' => $request->json,
        'is_disabled' => $request->is_disabled,
        'tags' => $request->tags,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function deletePost(\Perfumer\Microservices\Posts\Request\Post\DeletePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\DeletePostResponse
    {
        $url = '/post';

        /** @var \Perfumer\Microservices\Posts\Response\Post\DeletePostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\DeletePostResponse(), 'delete', $url, [
        'id' => $request->id,
        ], $request->_debug);

        return $response;
    }

    public function likeComment(\Perfumer\Microservices\Posts\Request\Comment\LikeCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\LikeCommentResponse
    {
        $url = '/comment/like';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\LikeCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\LikeCommentResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function dislikeComment(\Perfumer\Microservices\Posts\Request\Comment\DislikeCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\DislikeCommentResponse
    {
        $url = '/comment/dislike';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\DislikeCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\DislikeCommentResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function publishComment(\Perfumer\Microservices\Posts\Request\Comment\PublishCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\PublishCommentResponse
    {
        $url = '/comment/publish';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\PublishCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\PublishCommentResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function rejectComment(\Perfumer\Microservices\Posts\Request\Comment\RejectCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\RejectCommentResponse
    {
        $url = '/comment/reject';

        /** @var \Perfumer\Microservices\Posts\Response\Comment\RejectCommentResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Comment\RejectCommentResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function likePost(\Perfumer\Microservices\Posts\Request\Post\LikePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\LikePostResponse
    {
        $url = '/post/like';

        /** @var \Perfumer\Microservices\Posts\Response\Post\LikePostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\LikePostResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function dislikePost(\Perfumer\Microservices\Posts\Request\Post\DislikePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\DislikePostResponse
    {
        $url = '/post/dislike';

        /** @var \Perfumer\Microservices\Posts\Response\Post\DislikePostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\DislikePostResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function publishPost(\Perfumer\Microservices\Posts\Request\Post\PublishPostRequest $request): \Perfumer\Microservices\Posts\Response\Post\PublishPostResponse
    {
        $url = '/post/publish';

        /** @var \Perfumer\Microservices\Posts\Response\Post\PublishPostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\PublishPostResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function rejectPost(\Perfumer\Microservices\Posts\Request\Post\RejectPostRequest $request): \Perfumer\Microservices\Posts\Response\Post\RejectPostResponse
    {
        $url = '/post/reject';

        /** @var \Perfumer\Microservices\Posts\Response\Post\RejectPostResponse $response */
        $response = $this->doRequest(new \Perfumer\Microservices\Posts\Response\Post\RejectPostResponse(), 'post', $url, [
        'id' => $request->id,
        ], $request->_debug);
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }
}
