<?php

defined('SYSPATH') or die('No direct access allowed.');

class Model_User_Photo extends ORM {

    protected $_belongs_to = array('User' => array());
}

// End Auth User Model