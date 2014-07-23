<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth' => array(
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('index', 'view');
        $this->set('current_user', $this->Auth->user());
    }
}
