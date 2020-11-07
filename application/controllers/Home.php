<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $data['title'] = 'Data Distrik';
        $this->template->load('base_site','page/home', $data);
    }
}