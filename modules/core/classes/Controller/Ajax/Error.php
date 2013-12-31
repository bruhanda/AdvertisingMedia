<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax_Error extends Controller_Ajax_JSON {

    public function action_index()
    {
        $this->json['message'] = '';
        $this->json['uri'] = URL::site( rawurldecode( Request::$initial->uri() ) );
        if ( $message = rawurldecode( $this->request->param( 'id' ) ) )
        {
            $this->json['message'] = $message;
        }
    }
}