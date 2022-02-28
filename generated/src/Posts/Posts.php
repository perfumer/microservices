<?php

namespace Generated\Perfumer\Microservices\Posts;

abstract class Posts extends \Perfumer\Microservices\Microservice implements \Perfumer\Microservices\Contract\Posts\Posts
{
    public function getModule(\Perfumer\Microservices\Posts\Request\Module\GetModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\GetModuleResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Module\GetModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Module\GetModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getModules(\Perfumer\Microservices\Posts\Request\Modules\GetModulesRequest $request): \Perfumer\Microservices\Posts\Response\Modules\GetModulesResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Modules\GetModulesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Modules\GetModulesResponse());
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
        /** @var \Perfumer\Microservices\Posts\Response\Module\SaveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Module\SaveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function deleteModule(\Perfumer\Microservices\Posts\Request\Module\DeleteModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\DeleteModuleResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Module\DeleteModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Module\DeleteModuleResponse());

        return $response;
    }

    public function archiveModule(\Perfumer\Microservices\Posts\Request\Module\ArchiveModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\ArchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Module\ArchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Module\ArchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function unarchiveModule(\Perfumer\Microservices\Posts\Request\Module\UnarchiveModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\UnarchiveModuleResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Module\UnarchiveModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Module\UnarchiveModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function updateModule(\Perfumer\Microservices\Posts\Request\Module\UpdateModuleRequest $request): \Perfumer\Microservices\Posts\Response\Module\UpdateModuleResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Module\UpdateModuleResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Module\UpdateModuleResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'module');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->module = $item;
        }

        return $response;
    }

    public function getSubscriptions(\Perfumer\Microservices\Posts\Request\Subscriptions\GetSubscriptionsRequest $request): \Perfumer\Microservices\Posts\Response\Subscriptions\GetSubscriptionsResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Subscriptions\GetSubscriptionsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Subscriptions\GetSubscriptionsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'subscriptions');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->subscriptions = $item;
        }

        return $response;
    }

    public function saveSubscription(\Perfumer\Microservices\Posts\Request\Subscription\SaveSubscriptionRequest $request): \Perfumer\Microservices\Posts\Response\Subscription\SaveSubscriptionResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Subscription\SaveSubscriptionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Subscription\SaveSubscriptionResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'subscription');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->subscription = $item;
        }

        return $response;
    }

    public function deleteSubscription(\Perfumer\Microservices\Posts\Request\Subscription\DeleteSubscriptionRequest $request): \Perfumer\Microservices\Posts\Response\Subscription\DeleteSubscriptionResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Subscription\DeleteSubscriptionResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Subscription\DeleteSubscriptionResponse());

        return $response;
    }

    public function getTags(\Perfumer\Microservices\Posts\Request\Tags\GetTagsRequest $request): \Perfumer\Microservices\Posts\Response\Tags\GetTagsResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Tags\GetTagsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Tags\GetTagsResponse());
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
        /** @var \Perfumer\Microservices\Posts\Response\Tag\GetTagResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Tag\GetTagResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'tag');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tag = $item;
        }

        return $response;
    }

    public function saveTag(\Perfumer\Microservices\Posts\Request\Tag\SaveTagRequest $request): \Perfumer\Microservices\Posts\Response\Tag\SaveTagResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Tag\SaveTagResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Tag\SaveTagResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'tag');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tag = $item;
        }

        return $response;
    }

    public function updateTag(\Perfumer\Microservices\Posts\Request\Tag\UpdateTagRequest $request): \Perfumer\Microservices\Posts\Response\Tag\UpdateTagResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Tag\UpdateTagResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Tag\UpdateTagResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'tag');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->tag = $item;
        }

        return $response;
    }

    public function deleteTag(\Perfumer\Microservices\Posts\Request\Tag\DeleteTagRequest $request): \Perfumer\Microservices\Posts\Response\Tag\DeleteTagResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Tag\DeleteTagResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Tag\DeleteTagResponse());

        return $response;
    }

    public function getComments(\Perfumer\Microservices\Posts\Request\Comments\GetCommentsRequest $request): \Perfumer\Microservices\Posts\Response\Comments\GetCommentsResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comments\GetCommentsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comments\GetCommentsResponse());
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
        /** @var \Perfumer\Microservices\Posts\Response\Comment\GetCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\GetCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function saveComment(\Perfumer\Microservices\Posts\Request\Comment\SaveCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\SaveCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\SaveCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\SaveCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function updateComment(\Perfumer\Microservices\Posts\Request\Comment\UpdateCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\UpdateCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\UpdateCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\UpdateCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function deleteComment(\Perfumer\Microservices\Posts\Request\Comment\DeleteCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\DeleteCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\DeleteCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\DeleteCommentResponse());

        return $response;
    }

    public function getPosts(\Perfumer\Microservices\Posts\Request\Posts\GetPostsRequest $request): \Perfumer\Microservices\Posts\Response\Posts\GetPostsResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Posts\GetPostsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Posts\GetPostsResponse());
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
        /** @var \Perfumer\Microservices\Posts\Response\Post\GetPostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\GetPostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function savePost(\Perfumer\Microservices\Posts\Request\Post\SavePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\SavePostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\SavePostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\SavePostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function updatePost(\Perfumer\Microservices\Posts\Request\Post\UpdatePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\UpdatePostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\UpdatePostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\UpdatePostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function deletePost(\Perfumer\Microservices\Posts\Request\Post\DeletePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\DeletePostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\DeletePostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\DeletePostResponse());

        return $response;
    }

    public function likeComment(\Perfumer\Microservices\Posts\Request\Comment\LikeCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\LikeCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\LikeCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\LikeCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function dislikeComment(\Perfumer\Microservices\Posts\Request\Comment\DislikeCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\DislikeCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\DislikeCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\DislikeCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function publishComment(\Perfumer\Microservices\Posts\Request\Comment\PublishCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\PublishCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\PublishCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\PublishCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function rejectComment(\Perfumer\Microservices\Posts\Request\Comment\RejectCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\RejectCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\RejectCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\RejectCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function activateComment(\Perfumer\Microservices\Posts\Request\Comment\ActivateCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\ActivateCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\ActivateCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\ActivateCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function disableComment(\Perfumer\Microservices\Posts\Request\Comment\DisableCommentRequest $request): \Perfumer\Microservices\Posts\Response\Comment\DisableCommentResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Comment\DisableCommentResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Comment\DisableCommentResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'comment');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->comment = $item;
        }

        return $response;
    }

    public function likePost(\Perfumer\Microservices\Posts\Request\Post\LikePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\LikePostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\LikePostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\LikePostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function dislikePost(\Perfumer\Microservices\Posts\Request\Post\DislikePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\DislikePostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\DislikePostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\DislikePostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function publishPost(\Perfumer\Microservices\Posts\Request\Post\PublishPostRequest $request): \Perfumer\Microservices\Posts\Response\Post\PublishPostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\PublishPostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\PublishPostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function rejectPost(\Perfumer\Microservices\Posts\Request\Post\RejectPostRequest $request): \Perfumer\Microservices\Posts\Response\Post\RejectPostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\RejectPostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\RejectPostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function disablePost(\Perfumer\Microservices\Posts\Request\Post\DisablePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\DisablePostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\DisablePostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\DisablePostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function activatePost(\Perfumer\Microservices\Posts\Request\Post\ActivatePostRequest $request): \Perfumer\Microservices\Posts\Response\Post\ActivatePostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\ActivatePostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\ActivatePostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function incrementNbViewsPost(\Perfumer\Microservices\Posts\Request\Post\IncrementNbViewsPostRequest $request): \Perfumer\Microservices\Posts\Response\Post\IncrementNbViewsPostResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Post\IncrementNbViewsPostResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Post\IncrementNbViewsPostResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'post');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->post = $item;
        }

        return $response;
    }

    public function getSettings(\Perfumer\Microservices\Posts\Request\Settings\GetSettingsRequest $request): \Perfumer\Microservices\Posts\Response\Settings\GetSettingsResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Settings\GetSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Settings\GetSettingsResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'crm');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->crm = $item;
        }

        return $response;
    }

    public function saveSettings(\Perfumer\Microservices\Posts\Request\Settings\SaveSettingsRequest $request): \Perfumer\Microservices\Posts\Response\Settings\SaveSettingsResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Settings\SaveSettingsResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Settings\SaveSettingsResponse());

        return $response;
    }

    public function activateQuiz(\Perfumer\Microservices\Posts\Request\Quiz\ActivateQuizRequest $request): \Perfumer\Microservices\Posts\Response\Quiz\ActivateQuizResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Quiz\ActivateQuizResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Quiz\ActivateQuizResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'quiz');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->quiz = $item;
        }

        return $response;
    }

    public function disableQuiz(\Perfumer\Microservices\Posts\Request\Quiz\DisableQuizRequest $request): \Perfumer\Microservices\Posts\Response\Quiz\DisableQuizResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Quiz\DisableQuizResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Quiz\DisableQuizResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'quiz');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->quiz = $item;
        }

        return $response;
    }

    public function answerQuiz(\Perfumer\Microservices\Posts\Request\Quiz\AnswerQuizRequest $request): \Perfumer\Microservices\Posts\Response\Quiz\AnswerQuizResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Quiz\AnswerQuizResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Quiz\AnswerQuizResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'quiz');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->quiz = $item;
        }

        return $response;
    }

    public function getQuizzes(\Perfumer\Microservices\Posts\Request\Quizzes\GetQuizzesRequest $request): \Perfumer\Microservices\Posts\Response\Quizzes\GetQuizzesResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Quizzes\GetQuizzesResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Quizzes\GetQuizzesResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'nb_results');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->nb_results = $item;
        }
        $item = $this->fetchKeyFromContent($response->_content, 'quizzes');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->quizzes = $item;
        }

        return $response;
    }

    public function getQuiz(\Perfumer\Microservices\Posts\Request\Quiz\GetQuizRequest $request): \Perfumer\Microservices\Posts\Response\Quiz\GetQuizResponse
    {
        /** @var \Perfumer\Microservices\Posts\Response\Quiz\GetQuizResponse $response */
        $response = $this->doRequest($request, new \Perfumer\Microservices\Posts\Response\Quiz\GetQuizResponse());
        $item = $this->fetchKeyFromContent($response->_content, 'quiz');

        if (!$item instanceof \Perfumer\Microservices\Undefined) {
            $response->quiz = $item;
        }

        return $response;
    }
}
