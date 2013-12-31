<?php

add_event('admin.menu', function($items) {
            $items[40] = array(
                'name' => 'Сайт',
                'type' => 'header',
            );
            $items[41] = array(
                'name' => 'Пользователи',
                'url' => 'users',
                'regexp' => '/users/s',
                'icon' => 'user',
                'type' => 'item',
            );
            return $items;
        });
