<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Site_Pages extends Controller_Site {
    
    
    public function action_index(){
        $slug = $this->request->param('slug');
        $page = Model::factory("Page")->get_page($slug);
        $this->template->contents[] = View::factory('site/pages/default.view', array('page' => $page));
    }
    
}

// End Controller_Site_Pages
