<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Settings extends Controller_Admin {

    public function action_index() {
        $phone = ORM::factory('Setting')->where('name', '=', 'phone')->find();
        $delivery = ORM::factory('Setting')->where('name', '=', 'delivery')->find();
        $email = ORM::factory('Setting')->where('name', '=', 'email')->find();
        if (isset($_POST['submit'])) {
            try {
                $phone->value=$this->request->post('phone');
                $phone->save();
                $delivery->value=$this->request->post('delivery');
                $delivery->save();
            }
            catch (ORM_Validation_Exception $e) {
                $this->template->errors = $e->errors('validation');
            }
        }
        $title = 'Настройки сайта';
        $this->template->contents[] = View::factory('admin/settings/empty.view')
                ->bind('title', $title)
                ->bind('phone', $phone)
                ->bind('delivery', $delivery)
                ->bind('email', $email)
        ;
    }

}

// End Controller_Admin_Statistics
