<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Page extends ORM {

    public function get_page($slug){
        $page=  ORM::factory('Page')
                ->where('slug', '=', $slug)
                ->find();
                //->as_array();
        return $page;
    }
}

// End Model_Page
