<?php
class GirlsController extends AppController {
    public $helpers = array('Html', 'Form');

    public $components = array(
        'Auth' => array(
            'logoutRedirect' => array('controller' => 'homes', 'action' => 'index', 'home'),
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Girl',
                    'fields' => array(
                        'username' => 'username',
                        'password' => 'password'
                    )
                )
            ),
            'loginAction' => array(
                'admin' => false,
                'controller' => 'girls',
                'action' => 'login',
            ),
        )

    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add','login','view','logout');
        $this->Auth->authorize = array('controller');
    }

    public function add() {
        $this->layout = 'auth';
        if ($this->request->is('post')) {
            $this->Girl->create();
            if ($this->Girl->save($this->request->data)) { 
                $this->Session->setFlash(__('The girl has been saved'));
                $this->redirect(array('controller' => 'homes','action' => 'index'));
            } else { 
                $this->Session->setFlash(__('The girl could not be saved. Please, try again.'));
            }
        }
    }


    public function login() {
        $this->layout = 'auth';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

    public function view($id = null) {
        $this->layout = 'girl';
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $girl = $this->Girl->findById($id);
        if (!$girl) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('girl', $girl);
    }
}
