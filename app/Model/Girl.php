<?php
App::uses('AuthComponent', 'Controller/Component');
class Girl extends AppModel {
    public $hasMany = array(
        'Post' => array(
            'className' => 'Post',
        )
    );
    public $validate = array(
        'username' => array(                                                     
            'required' => array(                                                 
                'rule' => array('notEmpty'), 'message' => 'Username is required' 
            ),
            'uniqueness' => array(
                'rule' => 'isUnique',
                'message' => 'Usename already registered'
            )            
        ),                                               
        'password' => array(                                                     
            'required' => array(                                                 
                'rule' => array('notEmpty'),                                     
                'message' => 'Password is required'                              
            ),                                                                    
            'between' => array(
                'rule'    => array('between', 6, 20),
                'message' => 'Password must have 6 to 20 characters'
            )
        ),     
        'password_confirmation' => array(                                                     
            'equaltofield' => array(
                'rule' => array('checkMatchPassword','password',),
                'message' => 'Require the same value to password.',
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
    );

    function checkMatchPassword($check,$password) {
        $pwd_cf = '';
        foreach ($check as $key => $value){
            $pwd_cf = $key;
            break;
        }
        return $this->data[$this->name][$password] === $this->data[$this->name][$pwd_cf];
    } 

    //encoding password
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }

    public $actsAs = array(
        'Upload.Upload' => array(
            'avatar' => array(
                'fields' => array(
                    'dir' => 'avatar_dir'
                )
            ),

            'cover_image' => array(
                'fields' => array(
                    'dir' => 'cover_image_dir'
                )
            )
        )
    );

}
