<?php

defined('SYSPATH') or die('No direct access allowed.');

class Model_User extends Model_Auth_User {

    /**
     * A user has many tokens and roles
     *
     * @var array Relationhips
     */
    protected $_has_many = array(
        'user_tokens' => array('model' => 'user_token'),
        'roles' => array('model' => 'role', 'through' => 'roles_users'),
        'questions' => array(),
        'answers' => array(),
        'user_photo' => array(),
    );
    protected $_has_one = array(
        'profile' => array(),
    );

    /**
     * Rules for the user model. Because the password is _always_ a hash
     * when it's set,you need to run an additional not_empty rule in your controller
     * to make sure you didn't hash an empty string. The password rules
     * should be enforced outside the model or with a model helper method.
     *
     * @return array Rules
     */
    public function rules() {
        return array(
            'password' => array(
                array('not_empty'),
                array('min_length', array(':value', 8)),
            ),
            'email' => array(
                array('not_empty'),
                array('email'),
                array(array($this, 'unique'), array('email', ':value')),
            ),
            'first_name' => array(
                array('not_empty'),
                array('min_length', array(':value', 3)),
            ),
           
        );
    }

    /**
     * Filters to run when data is set in this model. The password filter
     * automatically hashes the password when it's set in the model.
     *
     * @return array Filters
     */
    public function filters() {
        return array(
            'password' => array(
                array(array(Auth::instance(), 'hash'))
            )
        );
    }

    /**
     * Labels for fields in this model
     *
     * @return array Labels
     */
    public function labels() {
        return array(
            'password' => 'Пароль',
            'email' => 'E-mail',
            'first_name' => 'Имя',
        );
    }
    
    

}

// End Auth User Model