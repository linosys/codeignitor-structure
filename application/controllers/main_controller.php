<?php

class main_controller extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        require 'user/user_controller.php';
        $main = new user_controller();
        $main->index();
    }

}
