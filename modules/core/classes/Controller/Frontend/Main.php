<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Frontend_Main extends Controller_Frontend {

	public function action_index()
	{
		$this->template->contents[]=  View::factory('frontend/registration.view');
                
	}

} // End Welcome
