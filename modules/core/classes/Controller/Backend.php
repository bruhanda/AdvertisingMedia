<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Backend extends Core {

    public $template = 'backend/base.view';        // Базовый шаблон

    public function before()
    {
        parent::before();

        /* Подключаем стили и скрипты */
        $this->template->scripts[] = 'http://code.jquery.com/jquery-latest.js';
        $this->template->scripts[] = '/media/resources/bootstrap/js/bootstrap.min.js';
        $this->template->styles[] = '/media/resources/bootstrap/css/bootstrap-theme.min.css';
        $this->template->styles[] = '/media/resources/bootstrap/css/bootstrap.min.css';
        $this->template->styles[] = '/media/css/backend/backend.css';

        $settings = Kohana::$config->load('settings');
        $this->template->site_name = $settings->site['site_name'];
        $this->template->site_description = $settings->site['site_description'];
        $this->template->page_title = NULL;

        $menu=  Widget::load('menuadmin');
        $this->template->menu=$menu;

    }

}

// End Controller_Backend
