<?php

namespace Generated\Perfumer\Microservices\Events\Request\Event;

class CreateEventRequest extends \Perfumer\Microservices\Request
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $module_id;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $user;

    /**
     * @var bool
     */
    public $is_registration_open;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $html;

    /**
     * @var string
     */
    public $json;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $opened_at;

    /**
     * @var string
     */
    public $closed_at;

    /**
     * @var string
     */
    public $apply_from;

    /**
     * @var string
     */
    public $apply_till;

    /**
     * @var string
     */
    public $published_at;

    /**
     * @var string
     */
    public $nb_invites_per_participant;

    /**
     * @var string
     */
    public $nb_invites;

    /**
     * @var bool
     */
    public $is_confirm_required;

    /**
     * @var string
     */
    public $confirmed_at;

    /**
     * @var bool
     */
    public $is_review_needed;

    /**
     * @var bool
     */
    public $is_statement_needed;

    /**
     * @var string
     */
    public $registration_form;

    /**
     * @var array
     */
    public $user_speakers = [
    ];

    /**
     * @var array
     */
    public $hidden_files = [
    ];

    /**
     * @var string
     */
    public $code;

    public function __construct()
    {
        $this->_request_url = '/event';
        $this->_request_method = 'post';
        $this->id = new \Perfumer\Microservices\Undefined();
        $this->module_id = new \Perfumer\Microservices\Undefined();
        $this->locale = new \Perfumer\Microservices\Undefined();
        $this->user = new \Perfumer\Microservices\Undefined();
        $this->is_registration_open = new \Perfumer\Microservices\Undefined();
        $this->title = new \Perfumer\Microservices\Undefined();
        $this->image = new \Perfumer\Microservices\Undefined();
        $this->description = new \Perfumer\Microservices\Undefined();
        $this->html = new \Perfumer\Microservices\Undefined();
        $this->json = new \Perfumer\Microservices\Undefined();
        $this->format = new \Perfumer\Microservices\Undefined();
        $this->location = new \Perfumer\Microservices\Undefined();
        $this->opened_at = new \Perfumer\Microservices\Undefined();
        $this->closed_at = new \Perfumer\Microservices\Undefined();
        $this->apply_from = new \Perfumer\Microservices\Undefined();
        $this->apply_till = new \Perfumer\Microservices\Undefined();
        $this->published_at = new \Perfumer\Microservices\Undefined();
        $this->nb_invites_per_participant = new \Perfumer\Microservices\Undefined();
        $this->nb_invites = new \Perfumer\Microservices\Undefined();
        $this->is_confirm_required = new \Perfumer\Microservices\Undefined();
        $this->confirmed_at = new \Perfumer\Microservices\Undefined();
        $this->is_review_needed = new \Perfumer\Microservices\Undefined();
        $this->is_statement_needed = new \Perfumer\Microservices\Undefined();
        $this->registration_form = new \Perfumer\Microservices\Undefined();
        $this->user_speakers = new \Perfumer\Microservices\Undefined();
        $this->hidden_files = new \Perfumer\Microservices\Undefined();
        $this->code = new \Perfumer\Microservices\Undefined();
    }

    public function getBody(): array
    {
        $array = [];
        if (!$this->id instanceof \Perfumer\Microservices\Undefined) {
            $array['id'] = $this->id;
        }
        if (!$this->module_id instanceof \Perfumer\Microservices\Undefined) {
            $array['module_id'] = $this->module_id;
        }
        if (!$this->locale instanceof \Perfumer\Microservices\Undefined) {
            $array['locale'] = $this->locale;
        }
        if (!$this->user instanceof \Perfumer\Microservices\Undefined) {
            $array['user'] = $this->user;
        }
        if (!$this->is_registration_open instanceof \Perfumer\Microservices\Undefined) {
            $array['is_registration_open'] = $this->is_registration_open;
        }
        if (!$this->title instanceof \Perfumer\Microservices\Undefined) {
            $array['title'] = $this->title;
        }
        if (!$this->image instanceof \Perfumer\Microservices\Undefined) {
            $array['image'] = $this->image;
        }
        if (!$this->description instanceof \Perfumer\Microservices\Undefined) {
            $array['description'] = $this->description;
        }
        if (!$this->html instanceof \Perfumer\Microservices\Undefined) {
            $array['html'] = $this->html;
        }
        if (!$this->json instanceof \Perfumer\Microservices\Undefined) {
            $array['json'] = $this->json;
        }
        if (!$this->format instanceof \Perfumer\Microservices\Undefined) {
            $array['format'] = $this->format;
        }
        if (!$this->location instanceof \Perfumer\Microservices\Undefined) {
            $array['location'] = $this->location;
        }
        if (!$this->opened_at instanceof \Perfumer\Microservices\Undefined) {
            $array['opened_at'] = $this->opened_at;
        }
        if (!$this->closed_at instanceof \Perfumer\Microservices\Undefined) {
            $array['closed_at'] = $this->closed_at;
        }
        if (!$this->apply_from instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_from'] = $this->apply_from;
        }
        if (!$this->apply_till instanceof \Perfumer\Microservices\Undefined) {
            $array['apply_till'] = $this->apply_till;
        }
        if (!$this->published_at instanceof \Perfumer\Microservices\Undefined) {
            $array['published_at'] = $this->published_at;
        }
        if (!$this->nb_invites_per_participant instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites_per_participant'] = $this->nb_invites_per_participant;
        }
        if (!$this->nb_invites instanceof \Perfumer\Microservices\Undefined) {
            $array['nb_invites'] = $this->nb_invites;
        }
        if (!$this->is_confirm_required instanceof \Perfumer\Microservices\Undefined) {
            $array['is_confirm_required'] = $this->is_confirm_required;
        }
        if (!$this->confirmed_at instanceof \Perfumer\Microservices\Undefined) {
            $array['confirmed_at'] = $this->confirmed_at;
        }
        if (!$this->is_review_needed instanceof \Perfumer\Microservices\Undefined) {
            $array['is_review_needed'] = $this->is_review_needed;
        }
        if (!$this->is_statement_needed instanceof \Perfumer\Microservices\Undefined) {
            $array['is_statement_needed'] = $this->is_statement_needed;
        }
        if (!$this->registration_form instanceof \Perfumer\Microservices\Undefined) {
            $array['registration_form'] = $this->registration_form;
        }
        if (!$this->user_speakers instanceof \Perfumer\Microservices\Undefined) {
            $array['user_speakers'] = $this->user_speakers;
        }
        if (!$this->hidden_files instanceof \Perfumer\Microservices\Undefined) {
            $array['hidden_files'] = $this->hidden_files;
        }
        if (!$this->code instanceof \Perfumer\Microservices\Undefined) {
            $array['code'] = $this->code;
        }

        return $array;
    }
}
