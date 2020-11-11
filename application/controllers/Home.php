<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $data['title'] = 'Data Distrik';
        $connected = @fsockopen("www.google.com", 80);

        if ($connected) {
            $is_con = true;
            fclose($connected);
        } else {
            $is_con = false;
        }

        $data['status'] = $is_con;

        $this->template->load('base_site','page/home', $data);
    }
}