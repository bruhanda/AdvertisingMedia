<?php

add_event('admin.menu', function($items) {
            $items[] = array(
                'name' => 'Страницы',
                'url' => 'pages',
                'regexp' => '/pages/s',
                'icon' => 'th-list',
                'type' => 'item',
                'sort' => 'contents',
            );

            return $items;
        });

//add_event('site.main_menu', function($items) {
//
//            $pages = Model::factory('Pages')->get_pages();
//            $items = array_merge($pages, $items);
//            return $items;
//        });
