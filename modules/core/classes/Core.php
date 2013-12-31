<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * @author Vasiliy Bruhanda <bruhanda@gmail.com>
 */
class Core extends Controller_Template {

    protected $user;
    protected $auth;
    protected $cache;
    protected $session;

    public function before() {
        parent::before();
        //$this->cache = Cache::instance('file');
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
        $this->session = Session::instance();

        $this->template->styles = array();
        $this->template->scripts = array();
        $this->template->extras = array();

        $this->template->contents = null;

    }

    public static function check_user() {

    }

}

