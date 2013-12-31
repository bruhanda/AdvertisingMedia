<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_System extends Controller {

    public function before()
    {
        if (Request::current()->is_ajax() === FALSE) {

            throw new HTTP_Exception_404(__('Access denied!'));
            return;
        }
        parent::before();

    }

    public function after()
    {
        if (is_array($this->json)) {
            $this->request->headers('Content-type', 'application/json');
            $this->json = json_encode($this->json);
        }
        $this->response->body($this->json);

    }

}

