<?php
class Post extends AppModel {
    public $belongsTo = "Girl";
    public $hasMany = array(
        'PostPhoto' => array(
            'className' => 'Post_photo',
        )
    );
}
