<?php

class admin_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['template'] = 'home';
        $this->admin_layout($data);
    }

}
