<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function user_layout($data) {
        $temp['data'] = $data;
        $this->load->view('user/layout/index', $temp);
    }

    public function admin_layout($data) {
        if ($this->session->userdata('userid') != null) {
            $temp['data'] = $data;
            $this->load->view('admin/layout/index', $temp);
        } else {
            $this->load->view('admin/layout/login');
        }
    }

}
