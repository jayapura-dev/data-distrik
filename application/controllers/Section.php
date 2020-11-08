<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller {
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
    }

    public function index(){
        $data['title'] = 'Seting Session Akses';
        $get_section = $this->db->get_where('tb_index_distrik',['id_dis_index' => 1])->row_array();
        $get_distrik = $get_section['id_distrik'];
        $data['distrik'] = $this->db->get_where('tb_distrik', ['id_distrik' => $get_distrik])->row_array();
        $data['all_distrik'] = $this->db->query("SELECT * FROM tb_distrik")->result();

        $this->template->load('base_site','page/setup-section', $data);
    }

    function update_section(){
        $id_dis_index = $this->input->post('id_dis_index');
        $id_distrik = $this->input->post('id_distrik');

        $data = array('id_distrik' => $id_distrik);
        $where = array('id_dis_index' => $id_dis_index);

        $this->M_home->update_section($where,$data,'tb_index_distrik');

        return redirect('Section');
    }

    // function cek_section(){
    //     $id = 1;
    //     $session = $this->db->get_where('tb_index_distrik',['id_dis_index' => $id])->row_array();

    //     if ($session['id_dis_index'] === 0){
    //         redirect('Section');
    //     } else {
    //         $id_distrik = $session['id_distrik'];
    //         $get_distrik = $this->db->get_where('tb_distrik', ['id_distrik' => $id_distrik])->row_array();

    //         return true, $get_distrik;
    //     }
    // }


}