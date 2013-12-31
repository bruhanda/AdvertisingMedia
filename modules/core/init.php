<?php

defined('SYSPATH') or die('No direct script access.');


/* Стандартные роуты которые не будут меняться */
Route::set('admin', 'admin(/<controller>(/<action>(/page<page>)(/<id>)))')
        ->defaults(array(
            'directory' => 'backend',
            'controller' => 'main',
            'action' => 'index',
            'id' => '',
        ));

Route::set('json', 'json(/<action>)')
        ->defaults(array(
            'directory' => 'ajax',
            'controller' => 'json',
            'action' => 'index',
        ));

Route::set('widgets', 'widgets(/<controller>(/<param>))', array('param' => '.+'))
        ->defaults(array(
            'directory' => 'widgets',
            'action' => 'index',
        ));