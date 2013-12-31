<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Admin menu widget
 */

class Controller_Widgets_Menuadmin extends Controller_Widgets {



    public $template = 'widgets/menuadmin.widget.view';    // Шаблон виждета
    public $items = array();

    public function action_index()
    {
        $headers=Kohana::$config->load('core.admin_menu');

        $this->items[400] = array(
            'name' => 'Модули',
            'type' => 'header',
        );
        /* $this->items[15] = array(
          'name' => 'Блок текст',
          'url' => 'textblock',
          'regexp' => '/textblock/s',
          'icon' => 'align-justify',
          'type' => 'item',
          ); */
        do_event('admin.menu', $this->items);
        ksort($this->items);  /* sort by key */
        //echo Debug::vars($this->items);
        $this->template->items = $this->items;
        $this->template->headers=$headers;
    }

}