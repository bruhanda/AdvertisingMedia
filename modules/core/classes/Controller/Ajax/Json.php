<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Json extends Controller_Ajax_System {

    public $json = array();

    public function action_index() {
        
    }

    /*
     * Авторизация пользователей
     */

    public function action_login() {
        $errors = NULL;
        $post = $this->request->post();
        $data = Arr::extract($post, array(
                    'email',
                    'password',
                    'remember'
        ));

        $auth = Auth::instance();
        $status = $auth->login($data['email'], $data['password'], (bool) $data['remember']);

        if ($status == TRUE) {
            if (Auth::instance()->logged_in('admin')) {
                $this->json['url'] = '/admin';
            }
            $this->json['url'] = '/user';
        }
        else {
            $errors = 'Неверный логин или пароль!';
        }
    }

    /*
     * Регистрация пользователей
     */

    public function action_registration() {
        $errors = NULL;
        $this->json = $this->request->post();
        $post = $this->request->post();
        $data = Arr::extract($post, array(
                    'email',
                    'password',
                    'password_confirm',
        ));


        try {
            $user = ORM::factory('User');
            $datenow = date('YmdHis');
            $link = sha1($datenow . Cookie::$salt . $post['email']); // activation link
            $data['link'] = $link;
            $data['registration_date'] = date('Y-m-d H:i:s');
            $user->create_user($data, array(
                'email',
                'password',
                'registration_date',
                'link',
            ));

            $user->add('roles', ORM::factory('Role')->where('name', '=', 'login')->find());
            // Пришлем письмо о подтверждении
            $site_base_url = Kohana::$config->load('settings.site.site_url');
            //$config = Kohana::$config->load('swift.default');
            $site_name = Kohana::$config->load('settings.site.site_name');

            $to = $post['email'];
            $subject = 'Сообщение от ' . $site_name;
            $from = Kohana::$config->load('settings.contacts.admin_email');
            $body = 'Вы были зарегестрированны на сайте. Перейдите по данной ссылке для того чтобы подтвердить регистрацию: ' . $site_base_url . 'activate/' . $link;

            $mail = Email::factory($subject, $body)
                    ->to($to)
                    ->from($from)
                    //->return_path($from)
                    ->send()
            ;
            //echo Debug::vars($mail);

            /* fore crone */
//            $distribution = ORM::factory('Distribution');
//            $distribution->email = $post['email'];
//            $distribution->date_start = date('Y-m-d H:i:s');
//            $distribution->date_end = date('Y-m-d H:i:s', strtotime("+1 month"));
//            $distribution->subject = $subject;
//            $distribution->from = $from;
//            $distribution->body = $body;
//            $distribution->save();
        }
        catch (ORM_Validation_Exception $e) {

            $errors = $e->errors('registration');
            $errors = array_merge($errors, (isset($errors['_external']) ? $errors['_external'] : array()));
            //echo Debug::vars($errors);die;
        }
        if ($errors != NULL) {
            $this->json['errors'] = $errors;
        }
        else {
            $this->json['url'] = '/';
            $this->json['errors'] = null;
        }
    }

}