<?php

defined('SYSPATH') or die('No direct script access.');

return array(
    'default' => array(
        'current_page' => array('source' => 'route', 'key' => 'page'),
        'total_items' => 0,
        'items_per_page' => 10,
        'view' => 'pagination/site',
        'auto_hide' => TRUE,
        'first_page_in_url' => FALSE,
    ),
);
