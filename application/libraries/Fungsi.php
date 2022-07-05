<?php

class Fungsi {
    protected $ci;

    public function __construct() {
        $this->ci =& get_instance();
        
    }

    function user_login() {
        $this->ci->load->model('user_model');
        $user_id = $this->ci->session->userdata('user_id');
        $user_data = $this->ci->user_model->get($user_id)->row();
        return $user_data;
    }

    function menu_active() {
        $this->ci->load->model('menu_model');
        // $menu_id = $this->ci->session->userdata('user_id');
        $user_data = $this->ci->user_model->geta($user_id)->row();
        return $user_data;  
    }
} 