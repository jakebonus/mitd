<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Services extends MX_Controller
{
    //============ CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_admin');
    }

    public function index() {
          $this->load->view('admin/v_encode');

    }

    public function ajax_get_personnel(){
      $result = $this->mdl_admin->m_get_personnel();
        echo json_encode($result);
    }

    public function ajax_get_office(){
      $result = $this->mdl_admin->m_get_office();
        echo json_encode($result);
    }

    public function save_service(){
      $data['s_personnel'] = $this->input->post('personnel');
      $data['s_office'] = $this->input->post('office');
      $data['s_concern'] = $this->input->post('concern');
      $data['s_date'] = date('Y-m-d');

      if($this->mdl_admin->m_save_service($data)){
        $date = date('Y-m-d');
        file_put_contents(basename('"'.$date.'".txt'),file_get_contents(base_url().'services/ajax_get_services'));
        $result = array('status' => 'yes','content'=> 'success');
        				echo json_encode($result);
        				exit();
      }else{
        $result = array('status' => 'no','content'=> 'failed');
                echo json_encode($result);
                exit();
      }
    }

}
