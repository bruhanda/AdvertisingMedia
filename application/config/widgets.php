<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Показ виджета только в указанных экшинах, слугах и контроллерах
 * 'виджет' => array(
 *      'контроллер' => array('экшен1', 'экшен2')
 *  )
 *
 */

return array(
    'sitemenu' => array(
        'Main' => array('all_actions'),
        'Feedbacks' => array('all_actions'),
        'Cars' => array('all_actions'),
        'News' => array('all_actions'),
        'Pages' => array('all_actions'),
    // 'account' => array('all_actions'),
    ),
    'pickup' => array(
        'Main' => array('all_actions'),
        'Feedbacks' => array('all_actions'),
        'Cars' => array('all_actions'),
        'News' => array('all_actions'),
        'Pages' => array('all_actions'),
    // 'account' => array('all_actions'),
    ),
    'login' => array(
    // 'cart' => array('index'),
    // 'auth' => array('login', 'register'),
    // 'account' => array('all_actions'),
    //'catalog' => array('f_products', 'register'),
    ),
    'slider' => array(
        'Main' => array('all_actions'),
        'Feedbacks' => array('all_actions'),
        'Cars' => array('all_actions'),
        'News' => array('all_actions'),
        'Pages' => array('all_actions'),
    ),
    'news' => array(
        'Main' => array('all_actions'),
    //'Cars' => array('index'),
    ),
    'sorts' => array(
        'Main' => array('all_actions'),
        'Cars' => array('all_actions'),
    ),
);
?>
