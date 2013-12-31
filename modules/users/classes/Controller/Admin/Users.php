<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Admin {

    public function action_index()
    {
        $count = ORM::factory('User')->count_all();
        $pagination = new Pagination(array('total_items' => $count));
        $users = ORM::factory('User')->limit($pagination->items_per_page)->offset($pagination->offset)->find_all();
        $this->template->contents[] = View::factory('admin/users/list.view', array('users' => $users));
        $this->template->contents[] = $pagination;

    }

    public function action_create()
    {
        if (isset($_POST['submit'])) {
            //echo Debug::vars($this->request->post());
            try {
                $user = ORM::factory('User')->create_user($_POST, array('email', 'password', 'first_name', 'surname'))
                        ->add('roles', ORM::factory('Role', array('name' => 'login')));
                if ($this->request->post('group') != 0) {
                    $user->add('roles', ORM::factory('Role', $this->request->post('group')));
                }
            }
            catch (ORM_Validation_Exception $e) {
                //echo Debug::vars($e->errors('validation'));
                $errors = $e->errors('validation');
            }
        }
        $this->template->contents[] = View::factory('admin/users/form.create.view')
                ->bind('errors', $errors)
                ;

    }

    public function action_edit()
    {
        $user = ORM::factory('User')->where('id', '=', $this->request->param('id'))->find();
        if (isset($_POST['submit'])) {
            try {
                $user = $user->update_user($_POST, array('username','first_name', 'surname', 'email', 'password'));
                $this->redirect('/admin/users/edit/' . $user->id);
            }
            catch (ORM_Validation_Exception $e) {
                //echo Debug::vars($e->errors('validation'));
                $this->template->errors = $e->errors('validation');
            }
        }
        $groups = ORM::factory('Role')->where('name', '!=', 'login')->find_all();
        $this->template->contents[] = View::factory('admin/users/form.create.view', array('title' => 'Редактировать пользователя', 'user' => $user, 'groups' => $groups));

    }

    public function action_remove()
    {
        $user = ORM::factory('User')->where('id', '=', $this->request->param('id'))->find();
        $user->delete();
        $this->redirect('/admin/users');

    }

}

// End Controller_Admin_Users
