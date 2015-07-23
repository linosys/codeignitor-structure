<?php

class user_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['template'] = 'home';
        $this->user_layout($data);
    }

}
