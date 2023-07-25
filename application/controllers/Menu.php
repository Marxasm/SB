<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Menu extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('table_model');
    $this->load->library('email', 'encrypt');
    $this->load->helper(array('alert', 'captcha', 'download'));
  }

  public function login() {
    $this->load->view('include/header_login');
    $this->load->view('SB/login');
    $this->load->view('include/footer_login');
  }

  public function document() {
    $id = $this->session->userdata('account_id');
    if(! $this->session->userdata('username'))
    {
     $this->session->set_flashdata('error', 'You have not yet logged in an account. Please login first.');
     redirect('login');
    }
    else 
    {
    $active = $this->table_model->is_active($id);
    $inactive = $this->table_model->is_inactive($id);
    if ($active)
    {  
    $data['details'] = $this->table_model->get_details($id);
    $this->load->view('include/header');
    $this->load->view('SB/document', $data);
    $this->load->view('include/footer');
    }
    else if ($inactive)
      {
      $this->session->unset_userdata('username');  
      $this->session->unset_userdata('account_id'); 
      $this->session->set_flashdata('error', 'Your account is currently set to inactive and may not continue. Please contact the admin to regain access.');
      redirect('login');
      }
    }
  }

  public function sample() {
    $id = $this->session->userdata('account_id');
    if(! $this->session->userdata('username'))
    {
     $this->session->set_flashdata('error', 'You have not yet logged in an account. Please login first.');
     redirect('login');
    }
    else 
    {
    $active = $this->table_model->is_active($id);
    $inactive = $this->table_model->is_inactive($id);
    if ($active)
    {  
    $data['details'] = $this->table_model->get_details($id);
    $this->load->view('include/header');
    $this->load->view('SB/sample', $data);
    $this->load->view('include/footersample');
    }
    else if ($inactive)
      {
      $this->session->unset_userdata('username');  
      $this->session->unset_userdata('account_id'); 
      $this->session->set_flashdata('error', 'Your account is currently set to inactive and may not continue. Please contact the admin to regain access.');
      redirect('login');
      }
    }
  }


  public function ingoing() {
    $id = $this->session->userdata('account_id');
    if(! $this->session->userdata('username'))
    {
     $this->session->set_flashdata('error', 'You have not yet logged in an account. Please login first.');
     redirect('login');
    }
    else 
    {
    $active = $this->table_model->is_active($id);
    $inactive = $this->table_model->is_inactive($id);
    if ($active)
    {  
    $data['details'] = $this->table_model->get_details($id);
    $this->load->view('include/header');
    $this->load->view('SB/ingoing', $data);
    $this->load->view('include/footer1');
    }
    else if ($inactive)
      {
      $this->session->unset_userdata('username');  
      $this->session->unset_userdata('account_id'); 
      $this->session->set_flashdata('error', 'Your account is currently set to inactive and may not continue. Please contact the admin to regain access.');
      redirect('login');
      }
    }
  }

  public function outgoing() {
    $id = $this->session->userdata('account_id');
    if(! $this->session->userdata('username'))
    {
     $this->session->set_flashdata('error', 'You have not yet logged in an account. Please login first.');
     redirect('login');
    }
    else 
    {
    $active = $this->table_model->is_active($id);
    $inactive = $this->table_model->is_inactive($id);
    if ($active)
    {  
    $data['details'] = $this->table_model->get_details($id);
    $this->load->view('include/header');
    $this->load->view('SB/outgoing', $data);
    $this->load->view('include/footer1');
    }
    else if ($inactive)
      {
      $this->session->unset_userdata('username');  
      $this->session->unset_userdata('account_id'); 
      $this->session->set_flashdata('error', 'Your account is currently set to inactive and may not continue. Please contact the admin to regain access.');
      redirect('login');
      }
    }
  }

  public function home() {
    $id = $this->session->userdata('account_id');
    if(! $this->session->userdata('username'))
    {
     $this->session->set_flashdata('error', 'You have not yet logged in an account. Please login first.');
     redirect('login');
    }
    else 
    {
    $active = $this->table_model->is_active($id);
    $inactive = $this->table_model->is_inactive($id);
    if ($active)
    {  
      $data['no_ingoing'] = $this->table_model->no_ingoing();
      $data['no_outgoing'] = $this->table_model->no_outgoing();
      $data['details'] = $this->table_model->get_details($id);
      $this->load->view('include/header');
      $this->load->view('SB/home', $data);
      $this->load->view('include/footer1');
    }
    else if ($inactive)
    {
      $this->session->unset_userdata('username');  
      $this->session->unset_userdata('account_id'); 
      $this->session->set_flashdata('error', 'Your account is currently set to inactive and may not continue. Please contact the admin to regain access.');
      redirect('login');
    }
    }


  }

  public function account() {
    $id = $this->session->userdata('account_id');
    if(! $this->session->userdata('username'))
    {
     $this->session->set_flashdata('error', 'You have not yet logged in an account. Please login first.');
     redirect('login');
    }
    else 
    {
    $active = $this->table_model->is_active($id);
    $inactive = $this->table_model->is_inactive($id);
    if ($active)
    {  
    $data['details'] = $this->table_model->get_details($id);
    $this->load->view('include/header');
    $this->load->view('SB/account', $data);
    $this->load->view('include/footer2');
  }
  else if ($inactive)
      {
    $this->session->unset_userdata('username');  
    $this->session->unset_userdata('account_id'); 
    $this->session->set_flashdata('error', 'Your account is currently set to inactive and may not continue. Please contact the admin to regain access.');
    redirect('login');
      }
    } 
  }
}
?>