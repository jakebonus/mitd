<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller
{
    //============ CONSTRUCTOR
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mdl_admin');
    }

    public function index() {
      $this->load->view('admin/v_monitoring');
    }

    public function encode(){
      $this->load->view('admin/v_encode');
    }

    public function ajax_get_personnel(){
      if($this->uri->segment(2) == 'projects'){
        $is_software = 'yes';
      }else{
        $is_software = 'no';
      }
      $result = $this->mdl_admin->m_get_personnel($is_software);
        echo json_encode($result);
    }

    public function ajax_get_office(){
      $result = $this->mdl_admin->m_get_office();
        echo json_encode($result);
    }

    public function ajax_get_processor(){
      $result = $this->mdl_admin->m_get_processor();
        echo json_encode($result);
    }

    public function ajax_get_os(){
      $result = $this->mdl_admin->m_get_os();
        echo json_encode($result);
    }

    public function save_service(){
      $data['p_id'] = $this->input->post('p_id');
      $data['s_personnel'] = strtoupper($this->input->post('personnel'));
      $data['s_office'] = strtoupper(ltrim($this->input->post('office'), ','));
      $data['s_concern'] = strtoupper($this->input->post('concern'));
      $data['s_date'] = date('Y-m-d');

      if($this->mdl_admin->m_save_service($data)){
        $date = date('Y-m-d');
        file_put_contents(basename('/services.txt'),file_get_contents(base_url().'admin/ajax_get_personnelmonitoring'));
        // file_put_contents(basename('/getassessment.txt'),file_get_contents(base_url().'transaction/ajax_get_cassessment'));
        $result = array('status' => 'yes','content'=> 'success');
        				echo json_encode($result);
        				exit();
      }else{
        $result = array('status' => 'no','content'=> 'failed');
                echo json_encode($result);
                exit();
      }
    }

    public function ajax_get_services(){
      $result = $this->mdl_admin->m_get_services();
      echo json_encode($result);
    }

    public function ajax_get_personnelmonitoring(){
      $result = $this->mdl_admin->m_get_personnelmonitoring();
      echo json_encode($result);
    }

    // public function monitoring(){
    //   $this->load->view('admin/v_monitoring');
    // }

    public function services(){
      $data['content'] = 'admin/v_service';
      $this->load->view('layouts/v_master',$data);
    }


    public function update_service(){

      $s_id = $this->input->post('s_id');

      $temp['s_type'] = '';
     foreach ($this->input->post('s_type') as $a){
         $temp['s_type'] .= $a .",";
     }
       
      $data['s_type'] = rtrim($temp['s_type'],",");
       
      $data['s_ongoing']    = strtoupper($this->input->post('s_ongoing'));
      $data['s_thru']       = strtoupper($this->input->post('s_thru'));
      $data['c_propertycode']       = strtoupper($this->input->post('c_propertycode'));
      $data['s_date']       = $this->input->post('s_date');
      $data['s_timestart']  = $this->input->post('s_timestart');
      $data['s_timeend']    = $this->input->post('s_timeend');
      $data['s_remarks']    = strtoupper($this->input->post('s_remarks'));
      
      $data['p_id'] = $this->input->post('s_personnel');
      $data['s_personnel']  = $this->input->post('pname');

      if($this->input->post('sp_id') == '0'){
          $data['sp_id'] = $this->input->post('s_personnel');
          $data['s_pulloutby']  = $this->input->post('pname');
      }else{
          $data['sp_id'] = $this->input->post('s_pulloutby');
          $data['s_pulloutby']  = $this->input->post('pbyname');
      }
   

      if($res = $this->mdl_admin->m_get_id($data['c_propertycode'])){
        foreach($res as $r){
          $data['c_id'] = $r->c_id;
          $data['c_enduser'] = $r->c_enduser;
          $data['c_office'] = $r->c_office;
        }
      }else{
        $data['c_id'] = '0';
      }

      if($s_id == null || $s_id == ''){

        $data['p_id']         = $this->input->post('s_personnel');
        $data['s_personnel']  = $this->input->post('pname');


        $data['s_office']     = $this->input->post('s_office');

        if($this->mdl_admin->m_save_service($data)){
            file_put_contents(basename('/services.txt'),file_get_contents(base_url().'admin/ajax_get_personnelmonitoring'));
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
            exit();
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
            exit();
        }

      }else{
        if($this->mdl_admin->m_update_service($s_id,$data)){
            
            file_put_contents(basename('/services.txt'),file_get_contents(base_url().'admin/ajax_get_personnelmonitoring'));
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

    public function ajax_del_service(){
       $s_id = $this->input->post('s_id');
       $data['s_deleted'] = 'YES';

      if($this->mdl_admin->m_update_service($s_id,$data)){
          file_put_contents(basename('/services.txt'),file_get_contents(base_url().'admin/ajax_get_services'));
          $result = array('status' => 'yes','content'=> 'success');
          echo json_encode($result);
          exit();
      }else{
          $result = array('status' => 'no','content'=> 'failed');
          echo json_encode($result);
          exit();
      }
    }

    public function computers(){
      $data['content'] = 'admin/v_computers';
      $this->load->view('layouts/v_master',$data);
    }

    public function save_computer(){

      $c_id                 = strtoupper($this->input->post('c_id'));

      $data['c_type']                 = strtoupper($this->input->post('c_type'));
      $data['c_propertycode']         = strtoupper($this->input->post('c_propertycode'));
      $data['c_brand']                = strtoupper($this->input->post('c_brand'));
      $data['c_model']                = strtoupper($this->input->post('c_model'));
      $data['c_serial']               = strtoupper($this->input->post('c_serial'));
      $data['c_iso']                  = strtoupper($this->input->post('c_iso'));
      $data['c_isonum']               = strtoupper($this->input->post('c_isonum'));
      $data['c_office']               = strtoupper($this->input->post('c_office'));
      $data['c_enduser']              = strtoupper($this->input->post('c_enduser'));
      $data['c_mrto']                 = strtoupper($this->input->post('c_mrto'));
      $data['c_ipaddress']            = $this->input->post('c_ipaddress');
      $data['c_network']              = strtoupper($this->input->post('c_network'));
      $data['c_datedelivered']        = $this->input->post('c_datedelivered');
      $data['c_sourceoffund']         = strtoupper($this->input->post('c_sourceoffund'));
      $data['c_cost']                 = str_replace("₱ ","",$this->input->post('c_cost'));
      $data['c_remarks']              = strtoupper($this->input->post('c_remarks'));


      if($c_id == '' || $c_id == null){
        if($this->mdl_admin->m_check_propertycode($data['c_propertycode'])){
          $result = array('status' => 'no','content'=> 'Property code exist!');
          echo json_encode($result);
        }else{
          if($this->mdl_admin->m_save_computer($data)){
              $result = array('status' => 'yes','content'=> 'success');
              echo json_encode($result);
          }else{
              $result = array('status' => 'no','content'=> 'failed');
              echo json_encode($result);
          }
        }
      }else{
        if($this->mdl_admin->m_update_computer($c_id,$data)){
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
        }

      }



    }

    public function save_pc_specs(){

      $id                 = $this->input->post('id');
      $data['c_id']      = $this->input->post('c_id');
      $data['type']      = strtoupper($this->input->post('type'));
      $data['brand']     = strtoupper($this->input->post('brand'));
      $data['model']     = strtoupper($this->input->post('model'));
      $data['serial']    = strtoupper($this->input->post('serial'));
      $data['remarks']   = strtoupper($this->input->post('remarks'));

      if($id != '' || $id != null){
        if($this->mdl_admin->m_update_pc_specs($id,$data)){
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
        }
      }else{
        if($this->mdl_admin->m_save_pc_specs($data)){
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
        }
      }

    }


    public function computerslist(){
      $data['content'] = 'admin/v_complist';
      $this->load->view('layouts/v_master',$data);
    }

    public function get_complist(){

      $ftr['ftr_office']        = $this->input->post('ftr_office');
      $ftr['ftr_type']        = $this->input->post('ftr_type');
      $ftr['ftr_propertycode']  = $this->input->post('ftr_propertycode');
      $ftr['ftr_isonum']        = $this->input->post('ftr_isonum');
      // $ftr['ftr_processor']     = $this->input->post('ftr_processor');
      $ftr['ftr_condemn']       = $this->input->post('ftr_condemn');
      // $ftr['ftr_os']            = $this->input->post('ftr_os');
      // print_r($ftr);
      // die();
      $data['result'] =  $this->mdl_admin->m_get_complist($ftr);
      echo json_encode($data);
    }

    // old
    public function get_pcdetails(){
      $id = $this->input->get('id');
      $result = $this->mdl_admin->m_get_pcdetails($id);
      $data = str_replace(array('[', ']'), '', htmlspecialchars(json_encode($result), ENT_NOQUOTES));
      echo $data;
      // echo json_encode($result);
    }

    public function ajax_get_computers(){
      $result = $this->mdl_admin->m_get_computers();
      echo json_encode($result);
    }

    public function ajax_get_pcspecs(){
      $c_id = $this->input->get('id');
      $result = $this->mdl_admin->m_get_pcspecs($c_id);
      echo json_encode($result);
    }

    public function ajax_get_pcspecs_forindexcard(){
      $c_id = $this->input->get('id');
      $result = $this->mdl_admin->m_get_pcspecs($c_id);
      // $data = str_replace(array('[', ']'), '', htmlspecialchars(json_encode($result), ENT_NOQUOTES));
      // echo $data;
        echo json_encode($result);
    }

    public function ajax_get_pcinfo(){
      $c_id = $this->input->get('id');
      $result = $this->mdl_admin->m_get_pcinfo($c_id);
      // $data = str_replace(array('[', ']'), '', htmlspecialchars(json_encode($result), ENT_NOQUOTES));
      // echo $data;
        echo json_encode($result);
    }

    public function ajax_get_unithistory(){
      $propcode = $this->input->get('propcode');
      $result = $this->mdl_admin->m_get_unithistory($propcode);
        echo json_encode($result);
    }
    public function ajax_get_projects(){
      // $propcode = $this->input->get('propcode');
      $result = $this->mdl_admin->m_get_projects();
        echo json_encode($result);
    }

    public function ajax_update_computer(){
      $c_id =  $this->input->post('c_id');
      $data['c_condemdate']     =  $this->input->post('c_condemdate');
      $data['c_iscondemn']      =  'YES';
      $data['c_condemnreason']  =  $this->input->post('c_condemnreason');

      if($this->mdl_admin->m_update_computer($c_id,$data)){
          $result = array('status' => 'yes','content'=> 'success');
          echo json_encode($result);
      }else{
          $result = array('status' => 'no','content'=> 'failed');
          echo json_encode($result);
      }
    }

    public function projects(){
      $data['content'] = 'admin/v_projects';
      $this->load->view('layouts/v_master',$data);
    }

    public function save_project(){
      $id     = $this->input->post('id');
      if($id != null || $id !=''){
        $data['p_id']     = strtoupper($this->input->post('p_id'));
        $data['p_name']   = strtoupper($this->input->post('p_name'));
        $data['name']     = strtoupper($this->input->post('name'));
        $data['status']   = strtoupper($this->input->post('status'));
        $data['office']   = strtoupper($this->input->post('office'));
        $data['devstart'] = strtoupper($this->input->post('devstart'));
        $data['deadline'] = strtoupper($this->input->post('deadline'));
        $data['remarks']  = strtoupper($this->input->post('remarks'));

        if($this->mdl_admin->m_update_project($id,$data)){
          file_put_contents(basename('/sdsprojects.txt'),file_get_contents(base_url().'admin/ajax_get_projects'));
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
        }
      }else{
        $data['p_id']     = strtoupper($this->input->post('p_id'));
        $data['p_name']   = strtoupper($this->input->post('p_name'));
        $data['name']     = strtoupper($this->input->post('name'));
        $data['status']   = strtoupper($this->input->post('status'));
        $data['office']   = strtoupper($this->input->post('office'));
        $data['devstart'] = strtoupper($this->input->post('devstart'));
        $data['deadline'] = strtoupper($this->input->post('deadline'));
        $data['remarks']  = strtoupper($this->input->post('remarks'));

        if($this->mdl_admin->m_save_project($data)){
          file_put_contents(basename('/sdsprojects.txt'),file_get_contents(base_url().'admin/ajax_get_projects'));
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
        }
      }
    }

    public function save_personnel(){
      $p_id    = $this->input->post('p_id');
      if($p_id != null || $p_id !=''){
        $data['p_fname']     = strtoupper($this->input->post('p_fname'));
        $data['p_mname']   = strtoupper($this->input->post('p_mname'));
        $data['p_mi']     = strtoupper($this->input->post('p_mi'));
        $data['p_lname']   = strtoupper($this->input->post('p_lname'));
        $data['p_next']   = strtoupper($this->input->post('p_next'));
        $data['p_position'] = strtoupper($this->input->post('p_position'));
        $data['p_section'] = strtoupper($this->input->post('p_section'));
        $data['p_gender']  = strtoupper($this->input->post('p_gender'));
        $data['p_nickname']  = strtoupper($this->input->post('p_nickname'));
        $data['p_mobilenum']  = strtoupper($this->input->post('p_mobilenum'));
        $data['p_active']  = strtoupper($this->input->post('p_active'));
        $data['p_status']  = strtoupper($this->input->post('p_status'));

        if($this->mdl_admin->m_update_personnel($p_id,$data)){
          file_put_contents(basename('/personnellist.txt'),file_get_contents(base_url().'admin/ajax_get_personnel'));
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
        }
      }else{
        $data['p_fname']     = strtoupper($this->input->post('p_fname'));
        $data['p_mname']   = strtoupper($this->input->post('p_mname'));
        $data['p_mi']     = strtoupper($this->input->post('p_mi'));
        $data['p_lname']   = strtoupper($this->input->post('p_lname'));
        $data['p_next']   = strtoupper($this->input->post('p_next'));
        $data['p_position'] = strtoupper($this->input->post('p_position'));
        $data['p_section'] = strtoupper($this->input->post('p_section'));
        $data['p_gender']  = strtoupper($this->input->post('p_gender'));
        $data['p_nickname']  = strtoupper($this->input->post('p_nickname'));
        $data['p_mobilenum']  = strtoupper($this->input->post('p_mobilenum'));
        $data['p_active']  = strtoupper($this->input->post('p_active'));
        $data['p_status']  = strtoupper($this->input->post('p_status'));

        if($this->mdl_admin->m_save_personnel($data)){
          file_put_contents(basename('/personnellist.txt'),file_get_contents(base_url().'admin/ajax_get_personnel'));
            $result = array('status' => 'yes','content'=> 'success');
            echo json_encode($result);
        }else{
            $result = array('status' => 'no','content'=> 'failed');
            echo json_encode($result);
        }
      }
    }


        public function personnel(){
          $data['content'] = 'admin/v_personnel';
          $this->load->view('layouts/v_master',$data);
        }

        // public function get_personnel(){
        //   $id     = $this->input->post('id');
        //   if($id != null || $id !=''){
        //     $data['p_id']     = strtoupper($this->input->post('p_id'));
        //     $data['p_name']   = strtoupper($this->input->post('p_name'));
        //     $data['name']     = strtoupper($this->input->post('name'));
        //     $data['status']   = strtoupper($this->input->post('status'));
        //     $data['office']   = strtoupper($this->input->post('office'));
        //     $data['devstart'] = strtoupper($this->input->post('devstart'));
        //     $data['deadline'] = strtoupper($this->input->post('deadline'));
        //     $data['remarks']  = strtoupper($this->input->post('remarks'));
        //
        //     if($this->mdl_admin->m_update_project($id,$data)){
        //         $result = array('status' => 'yes','content'=> 'success');
        //         echo json_encode($result);
        //     }else{
        //         $result = array('status' => 'no','content'=> 'failed');
        //         echo json_encode($result);
        //     }
        //   }else{
        //     $data['p_id']     = strtoupper($this->input->post('p_id'));
        //     $data['p_name']   = strtoupper($this->input->post('p_name'));
        //     $data['name']     = strtoupper($this->input->post('name'));
        //     $data['status']   = strtoupper($this->input->post('status'));
        //     $data['office']   = strtoupper($this->input->post('office'));
        //     $data['devstart'] = strtoupper($this->input->post('devstart'));
        //     $data['deadline'] = strtoupper($this->input->post('deadline'));
        //     $data['remarks']  = strtoupper($this->input->post('remarks'));
        //
        //     if($this->mdl_admin->m_save_project($data)){
        //         $result = array('status' => 'yes','content'=> 'success');
        //         echo json_encode($result);
        //     }else{
        //         $result = array('status' => 'no','content'=> 'failed');
        //         echo json_encode($result);
        //     }
        //   }
        //
        //
        // }

}
