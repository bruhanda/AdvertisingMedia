<?php

add_event('admin.menu', function($items) {
            $items[1003] = array(
                'name' => 'Настройки',
                'url' => 'settings',
                'regexp' => '/(admin\/settings)/s',
                'icon' => 'wrench',
                'type' => 'item',
            );
            return $items;
        });