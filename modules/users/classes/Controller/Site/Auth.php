<?php

defined('SYSPATH') or die('No direct script access.');
/*
 * Авторизация
 */

class Controller_Site_Auth extends Controller_Site {

    public function action_index()
    {
        $this->action_login();
    }

    public function action_confirm()
    {

        $code = (int) $this->request->param('code');

        $user = ORM::factory('user')
                ->where('code', '=', $code)
                ->find();

        if ($user->loaded()) {
            $role = ORM::factory('role')->where('name', '=', 'login')->find();
            $result = $user->add('roles', $role);
            if ($result) {
                Auth::instance()->force_login($user->username);
                $this->request->redirect("/profile");
            }
        }
        else {
            $errors = 'Не верная ссылка активации аккаунта!';
        }


        $content = View::factory('index/auth/v_auth_confirm')
                ->bind('errors', $errors)
                ->bind('data', $data);

        // Выводим в шаблон
        $this->template->title = 'Активация';
        $this->template->page_title = 'Активация';
        $this->template->content = $content;

    }

    public function action_login()
    {
        if (Auth::instance()->logged_in()) {
            $this->redirect('account');
        }
        $content = View::factory('site/users/default.form.login.view');
        // Выводим в шаблон
        $this->template->title = 'Вход';
        $this->template->page_title = 'Вход';
        $this->template->contents[] = $content;
    }

    public function action_register()
    {

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('username', 'password', 'first_name', 'password_confirm', 'email', 'phone', 'address'));
            foreach ($data as $name => $link) {
                $link = mysql_real_escape_string(htmlspecialchars(strip_tags(stripslashes(trim($link)))));
                $data[$name] = $link;
            }


            $users = ORM::factory('user');

            $valid = Validation::factory($_POST);
            $valid
                    ->rule('address', 'not_empty')
                    ->rule('phone', 'not_empty');
            $valid->labels(array(
                'phone' => 'Телефон',
                'address' => 'Адрес',
            ));

            if (!$valid->check()) {
                $errors2 = $valid->errors('auth');
            }
            else {


                try {

                    $code = rand(12513600000, 98935200000);
                    $link = "http://www.vs-lures.com/confirm/" . $code;
                    $data['code'] = $code;

                    $users->create_user($data, array('username', 'password', 'first_name', 'email', 'phone', 'address', 'code'));
                    $users->username = $data['username'];
                    $users->password = $data['password'];
                    $users->first_name = $data['first_name'];
                    $users->email = $data['email'];
                    $users->phone = $data['phone'];
                    $users->address = $data['address'];
                    $users->code = $data['code'];
                    //$role = ORM::factory('role')->where('name', '=', 'login')->find();
                    //$users->add('roles', $role);
                    // $this->action_login();
                    //$user = ORM::factory('user')->where('email', '=', $data['email'])->find();
                    //$pass = Auth::instance()->hash_password($user->password);
                    //$user->password = $pass;
                    //$user->save();


                    $subject = "Подтверждение регистрации на сайта www.vs-lures.com";
                    $headers = "From: info@vs-lures.com \r\n" . "Content-type: text/html; charset=utf-8 \r\n";
                    $headers .= 'MIME-Version: 1.0' . "\r\n";
                    $email = $data['email'];
                    $message = "
					<p>Подтверждение регистрации на сайте vs-lures.com</p>
					<h2>Для подтверждения регистрации пройдите по ссылке: <a href='" . $link . "' >Подтвердить</a></h2>";


                    $mail = mail($email, $subject, $message, $headers);
                    /*
                      $to = $data['email'];
                      $subject="Подтверждение регистрации на сайта www.vs-lures.com";
                      $body="<p>Для подтверждения регистрации пройдите по ссылке: <a href='".$link."' />Подтвердить</a></p>";
                      $header = "From: \"Admin\" <info@vs-lures.com>\n";
                      $header .= "Content-type: text/html; charset=\"utf-8\"";
                     */
                    if (!$mail)
                        $text_res = "Ошибка при отправке письма активации";
                    else
                        $text_res = "<span style='font-weight: bold; color: red;'>На вашу почту отправлено письмо для активации аккаунта!</span>";





                    //Auth::instance()->login($data['email'], $data['password'], true);
                    //$this->request->redirect('/profile');
                }
                catch (ORM_Validation_Exception $e) {
                    $errors = $e->errors('auth');
                }
            }
        }

        $content = View::factory('site/users/default.form.register.view')
                ->bind('text_res', $text_res)
                ->bind('errors', $errors)
                ->bind('errors2', $errors2)
                ->bind('data', $data);

        // Выводим в шаблон
        $this->template->title = 'Регистрация';
        $this->template->page_title = 'Регистрация';
        $this->template->contents[] = $content;

    }

    public function action_logout()
    {
        if (Auth::instance()->logout()) {
            $this->request->redirect();
        }

    }

}