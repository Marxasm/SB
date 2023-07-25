<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller {
  
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('table_model');
    $this->load->library('email', 'encrypt');
    $this->load->helper(array('alert', 'captcha', 'download'));
  }

  public function getingoing(){
    $data = $row = array();
    
    // Fetch member's records
    $memData = $this->table_model->get_datatables();

    $i = $_POST['start'];
    foreach($memData as $row){
        $i++; 
$action = '<a href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$row->in_id."'".')" class="btn btn btn-primary btn-sm"
    style="color: white; display: inline-block;">
    <i class="fa-solid fa-pencil"></i></a> <a href="javascript:void(0)" title="Delete" onclick="delete_person('."'".$row->in_id."'".')" class="btn btn btn-danger btn-sm"
    style="color: white; display: inline-block;">
    <i class="fa-solid fa-trash-can"></i></a>';
$date = '<div class="badge badge-secondary">'.$row->in_date.'</div>';
$status = '<div class="badge badge-warning">'.$row->in_status.'</div>';

if ($row->in_update == 'pending')
{
  $update = '<div class="badge badge-warning">'.$row->in_update.'</div>';
}
else if ($row->in_update == 'done')
{
  $update = '<div class="badge badge-success">'.$row->in_update.'</div>';
}
$data[] = array( $i ,$row->in_id, $row->in_title, date("h:i A", strtotime($row->in_time)) , $date, $update, $status, $action);
}

$output = array(
"draw" => $_POST['draw'],
"recordsTotal"=> $this->table_model->count_all(),
"recordsFiltered"=> $this->table_model->count_filtered(),
"data" => $data,
);

// Output to JSON format
echo json_encode($output);
}

public function ajax_edit($id)
{
    $data = $this->table_model->get_by_id($id);
    echo json_encode($data);
}

public function ajax_update()
    {
      $this->form_validation->set_rules('title', 'Title', 'required|max_length[5000]');
      $this->form_validation->set_rules('time', 'Time', 'required');
      $this->form_validation->set_rules('update', 'Status', 'required');
      if ($this->form_validation->run() == FALSE){

        $array = array(
          'error'   => true,
          'title_error' => form_error('title'),
          'time_error' => form_error('time'),
          'update_error' => form_error('update')
         ); 
         echo json_encode($array);

      }
      else
      {

      if ($this->input->post('title') != $this->input->post('hid_title') || 
      $this->input->post('time') != $this->input->post('hid_time') || 
      $this->input->post('update') != $this->input->post('hid_update'))
        {
          date_default_timezone_set('Asia/Manila');
          $fulldate = "Last edited since" .' '. date("Y-m-d h:i:sa");
        }
      else
        {
          $fulldate = $this->input->post('hid_status');
        }

        $data = array(
                'in_title' => $this->input->post('title', TRUE),
                'in_time' => $this->input->post('time', TRUE),
                'in_status' => $fulldate,
                'in_update' => $this->input->post('update', TRUE)
        );

        $this->table_model->update(array('in_id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
      }
    }

 public function ajax_delete()
    {   $id = $this->input->post('id');
        $this->table_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function getoutgoing(){
      $data = $row = array();
      
      // Fetch member's records
      $memData = $this->table_model->get_datatables1();
    
      $i = $_POST['start'];
      foreach($memData as $row){
          $i++; 
    $action = '<a href="javascript:void(0)" title="Edit" onclick="edit_person1('."'".$row->out_id."'".')" class="btn btn btn-primary btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-pencil"></i></a> <a href="javascript:void(0)" title="Delete" onclick="delete_person1('."'".$row->out_id."'".')" class="btn btn btn-danger btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-trash-can"></i></a>';
    $date = '<div class="badge badge-secondary">'.$row->out_date.'</div>';
    $status = '<div class="badge badge-warning">'.$row->out_status.'</div>';
        if ($row->out_update == 'pending')
    {
      $update = '<div class="badge badge-warning">'.$row->out_update.'</div>';
    }
    else if ($row->out_update == 'released')
    {
      $update = '<div class="badge badge-success">'.$row->out_update.'</div>';
    }
    $data[] = array( $i ,$row->out_id, $row->out_title, date("h:i A", strtotime($row->out_time)) , $date, $update, $status, $action);
    }
    
    $output = array(
    "draw" => $_POST['draw'],
    "recordsTotal"=> $this->table_model->count_all1(),
    "recordsFiltered"=> $this->table_model->count_filtered1(),
    "data" => $data,
    );
    
    // Output to JSON format
    echo json_encode($output);
    }

    public function ajax_edit1($id)
{
    $data = $this->table_model->get_by_id1($id);
    echo json_encode($data);
}

    public function ajax_update1()
    {
      $this->form_validation->set_rules('title', 'Title', 'required|max_length[5000]');
      $this->form_validation->set_rules('time', 'Time', 'required');
      $this->form_validation->set_rules('update1', 'Status', 'required');

      if ($this->form_validation->run() == FALSE){

        $array = array(
          'error'   => true,
          'title_error' => form_error('title'),
          'time_error' => form_error('time'),
          'update1_error' => form_error('update1')
         );
         echo json_encode($array);       
      }
      else
      {

      if ($this->input->post('title') != $this->input->post('hid_title') || 
      $this->input->post('time') != $this->input->post('hid_time') || 
      $this->input->post('update1') != $this->input->post('hid_update1'))
        {
          date_default_timezone_set('Asia/Manila');
          $fulldate = "Last edited since" .' '. date("Y-m-d h:i:sa");
        }
      else
        {
          $fulldate = $this->input->post('hid_status');
        }

        $data = array(
                'out_title' => $this->input->post('title', TRUE),
                'out_time' => $this->input->post('time', TRUE),
                'out_status' => $fulldate,
                'out_update' => $this->input->post('update1', TRUE)

        );

        $this->table_model->update1(array('out_id' => $this->input->post('id')), $data);
        echo json_encode(array("status" => TRUE));
      }
    }

 public function ajax_delete1()
    {   $id = $this->input->post('id');
        $this->table_model->delete_by_id1($id);
        echo json_encode(array("status" => TRUE));
    }

// -- End of Document View File Controller Functions --

public function ajax_add()
{
  $this->form_validation->set_rules('title', 'Title', 'required|max_length[5000]');
  $this->form_validation->set_rules('time', 'Time', 'required');

  if ($this->form_validation->run() == FALSE){

    $array = array(
      'error'   => true,
      'title_error' => form_error('title'),
      'time_error' => form_error('time')
     );
     echo json_encode($array);      
    
  }
  else
  {
    date_default_timezone_set('Asia/Manila');
    $fulldate = "Unedited since" .' '. date("Y-m-d h:i:sa");
    $data = array(
            'in_title' => $this->input->post('title', TRUE),
            'in_time' => $this->input->post('time', TRUE),
            'in_status' => $fulldate
        );
    $insert = $this->table_model->save($data);
    echo json_encode(array("status" => TRUE));
  }
}

public function ajax_add1()
{
  $this->form_validation->set_rules('title', 'Title', 'required|max_length[5000]');
  $this->form_validation->set_rules('time', 'Time', 'required');

  if ($this->form_validation->run() == FALSE){

    $array = array(
      'error'   => true,
      'title_error' => form_error('title'),
      'time_error' => form_error('time')
     );
     echo json_encode($array);      
    
  }
  else
  {
    date_default_timezone_set('Asia/Manila');
    $fulldate = "Unedited since" .' '. date("Y-m-d h:i:sa");
    $data = array(
            'out_title' => $this->input->post('title', TRUE),
            'out_time' => $this->input->post('time', TRUE),
            'out_status' => $fulldate
        );
    $insert = $this->table_model->save1($data);
    echo json_encode(array("status" => TRUE));
  }
}

// -- End of Ingoing and Outgoing View File Controller Functions --

public function getaccount(){
  $data = $row = array();
  
  // Fetch member's records
  $memData = $this->table_model->get_datatables2();
  $user_id = $this->session->userdata('account_id');
  $event_data = $this->table_model->retrieve_type();
  foreach($event_data->result_array() as $row)
  {
    if ($user_id == $row['account_id'])
    {
      $usertype =  $row['type'];
    }   

  }
  $i = $_POST['start'];
  foreach($memData as $row){
      $i++; 

if ($usertype == 'admin') {
    $action = '<a href="javascript:void(0)" title="Edit User Type" onclick="editp('."'".$row->account_id."'".')" class="btn btn btn-primary btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-user-pen"></i></a>
      <a href="javascript:void(0)" title="Edit User Status" onclick="edit_status('."'".$row->account_id."'".')" class="btn btn btn-info btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-pencil"></i></a> <a href="javascript:void(0)" title="Delete" onclick="delete_view('."'".$row->account_id."'".')" class="btn btn btn-danger btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-trash-can"></i></a>';
  }
else if ($usertype == 'user') {
    $action = '<a href="javascript:void(0)" title="Edit User Type" class="btn btn btn-secondary btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-user-pen"></i></a>
      <a href="javascript:void(0)" title="Edit User Status" class="btn btn btn-secondary btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-pencil"></i></a> <a href="javascript:void(0)" title="Delete" class="btn btn btn-secondary btn-sm"
      style="color: white; display: inline-block;">
      <i class="fa-solid fa-trash-can"></i></a>';
  }
$status = '<div class="badge badge-warning">'.$row->status.'</div>';
$type = '<div class="badge badge-info">'.$row->type.'</div>';
$data[] = array( $i ,$row->account_id, $row->first_name, $row->middle_name, $row->last_name, $row->email, $row->phone, $row->position, $type, $status, $row->date, $action);
}

$output = array(
"draw" => $_POST['draw'],
"recordsTotal"=> $this->table_model->count_all2(),
"recordsFiltered"=> $this->table_model->count_filtered2(),
"data" => $data,
);

// Output to JSON format
echo json_encode($output);
}

public function ajax_register()
{
  $this->form_validation->set_rules('last_name', 'Last Name', 'trim|regex_match[/^([a-z ])+$/i]|required|max_length[100]');
  $this->form_validation->set_rules('first_name', 'First Name', 'trim|regex_match[/^([a-z ])+$/i]|required|max_length[100]');
  $this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|regex_match[/^([a-z ])+$/i]|required|max_length[100]');
  $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[account.email]|max_length[100]');
  $this->form_validation->set_rules('phone', 'Contact Number', 'trim|numeric|min_length[11]|max_length[11]');
  $this->form_validation->set_rules('position', 'Position', 'required|max_length[100]');
  $this->form_validation->set_rules('type', 'User Type', 'required|max_length[40]');
  $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[50]|is_unique[account.username]');
  $this->form_validation->set_rules('password', 'Password', 'callback_valid_password|max_length[50]');
  $this->form_validation->set_rules('confirm', 'Confirm Password', 'required|matches[password]|max_length[50]');

  if ($this->form_validation->run() == FALSE){

    $array = array(
      'error'   => true,
      'lastname_error' => form_error('last_name'),
      'firstname_error' => form_error('first_name'),
      'middlename_error' => form_error('middle_name'),
      'email_error' => form_error('email'),
      'phone_error' => form_error('phone'),
      'position_error' => form_error('position'),
      'type_error' => form_error('type'),
      'username_error' => form_error('username'),
      'password_error' => form_error('password'),
      'confirm_error' => form_error('confirm')
     );
     echo json_encode($array);
  }
  else
  {
    $data = array(
            'first_name' => $this->input->post('first_name', TRUE),
            'middle_name' => $this->input->post('middle_name', TRUE),
            'last_name' => $this->input->post('last_name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'position' => $this->input->post('position', TRUE),
            'type' => $this->input->post('type', TRUE),
            'username' => $this->input->post('username', TRUE),
            'password' => password_hash($this->input->post('password', TRUE), PASSWORD_DEFAULT),
            'confirm' => password_hash($this->input->post('confirm', TRUE), PASSWORD_DEFAULT)
        );
    $insert = $this->table_model->register($data);
    echo json_encode(array("status" => TRUE));
  }
 
}

public function ajax_edit_profile($id)
{
    $data = $this->table_model->get_by_id_profile($id);
    echo json_encode($data);
}

public function update_profile()
{
  $this->form_validation->set_rules('usertype', 'User Type', 'required');

  if ($this->form_validation->run() == FALSE){

    $array = array(
      'error'   => true,
      'usertype_error' => form_error('usertype')
     );
     echo json_encode($array);       
  }
  else
  {
    $data = array(
            'type' => $this->input->post('usertype', TRUE),
    );

    $this->table_model->update_profile(array('account_id' => $this->input->post('id')), $data);
    echo json_encode(array("status" => TRUE));
  }
}

public function ajax_status($id)
{
    $data = $this->table_model->get_by_id_status($id);
    echo json_encode($data);
}

public function update_status()
{
  $this->form_validation->set_rules('status', 'User Status', 'required');

  if ($this->form_validation->run() == FALSE){

    $array = array(
      'error'   => true,
      'status_error' => form_error('status')
     );
     echo json_encode($array);       
  }
  else
  {
    $data = array(
            'status' => $this->input->post('status', TRUE),
    );

    $this->table_model->update_status(array('account_id' => $this->input->post('id')), $data);
    echo json_encode(array("status" => TRUE));
  }
}

public function delete_account()
{   $id = $this->input->post('id');
    $this->table_model->delete_by_account($id);
    echo json_encode(array("status" => TRUE));
}

public function valid_password($password = '')
{
  $password = trim($password);

  $regex_lowercase = '/[a-z]/';
  $regex_uppercase = '/[A-Z]/';
  $regex_number = '/[0-9]/';
  $regex_special = '/[!@#$%^&*()\-_=+{};:,<.>ยง~]/';

  if (empty($password))
  {
    $this->form_validation->set_message('valid_password', 'The {field} field is required.');

    return FALSE;
  }

  if (strlen($password) < 6)
  {
    $this->form_validation->set_message('valid_password', 'The {field} field must be at least 6 characters in length.');

    return FALSE;
  }
  if (preg_match_all($regex_number, $password) < 1)
  {
    $this->form_validation->set_message('valid_password', 'The {field} field must have at least one number.');
    return FALSE;
  }

  if (preg_match_all($regex_uppercase, $password) < 1)
  {
          $this->form_validation->set_message('valid_password', 'The {field} field must be at least one uppercase letter.');
          return FALSE;
  }

  return TRUE;
}
//strong password end

// --- End of Account Management Functions ---

  public function login() 
  {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', 'The username and password fields are required.');
            redirect('login');
        }

        else
      {
        
        $username =  $this->input->post('username', TRUE);
        $password = $this->input->post('password', TRUE);

                $login_data = array(
                  'username' => $username,
                  'password' => $password
                );

                $result = $this->table_model->check_login($login_data);

                if (!empty($result['status']) && $result['status'] === TRUE) 
                {
                    $this->session->set_userdata(array('username'=>$username)); 
                    $this->session->set_flashdata('success', 'You have successfully logged in.');
                    redirect('home');
                }

                else 
                {
                    $this->session->set_flashdata('error', 'Invalid username and password. Please try again.');
                    redirect('login');
                }
      }
  }

  public function logout() 
      {
        $id = $this->session->userdata('account_id');
        $this->session->unset_userdata('username');  
        $this->session->unset_userdata('account_id');                    

        $this->session->set_flashdata('success', 'You have successfully logged out.'); 
        redirect("login");
      }

// --- Change Profile and Change Password FUNCTIONS ---

  public function get_change($id)
  {
      $data = $this->table_model->get_by_change($id);
      echo json_encode($data);
  }
      

  public function ajax_change()
  {
    $id = $this->input->post('id');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|regex_match[/^([a-z ])+$/i]|required|max_length[100]');
    $this->form_validation->set_rules('first_name', 'First Name', 'trim|regex_match[/^([a-z ])+$/i]|required|max_length[100]');
    $this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|regex_match[/^([a-z ])+$/i]|required|max_length[100]');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[account.account_id!='.$id.' AND '.'email=]|max_length[100]');
    $this->form_validation->set_rules('phone', 'Contact Number', 'trim|numeric|min_length[11]|max_length[11]');
    $this->form_validation->set_rules('position', 'Position', 'required|max_length[100]');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[50]|is_unique[account.account_id!='.$id.' AND '.'username=]');

    if ($this->form_validation->run() == FALSE){

      $array = array(
        'error'   => true,
        'lastname_error' => form_error('last_name'),
        'firstname_error' => form_error('first_name'),
        'middlename_error' => form_error('middle_name'),
        'email_error' => form_error('email'),
        'phone_error' => form_error('phone'),
        'position_error' => form_error('position'),
        'username_error' => form_error('username'),
      );
      echo json_encode($array);       
    }
    else
    {
      $data = array(
        'first_name' => $this->input->post('first_name', TRUE),
        'middle_name' => $this->input->post('middle_name', TRUE),
        'last_name' => $this->input->post('last_name', TRUE),
        'email' => $this->input->post('email', TRUE),
        'phone' => $this->input->post('phone', TRUE),
        'position' => $this->input->post('position', TRUE),
        'username' => $this->input->post('username', TRUE),
      );

      $this->table_model->update_change(array('account_id' => $this->input->post('id')), $data);
      echo json_encode(array("status" => TRUE));
    }
  }

  public function get_password_id($id)
  {
      $data = $this->table_model->get_password_id($id);
      echo json_encode($data);
  }

  public function ajax_password()
  {
    $id = $this->input->post('id');
    $this->form_validation->set_rules('current', 'Current Password', 'callback_valid_password|max_length[50]');
    $this->form_validation->set_rules('new', 'New Password', 'callback_valid_password|max_length[50]');
    $this->form_validation->set_rules('confirm1', 'Confirm Password', 'required|matches[new]|max_length[50]');

    if ($this->form_validation->run() == FALSE){

      $array = array(
        'error'   => true,
        'current_error' => form_error('current'),
        'new_error' => form_error('new'),
        'confirm1_error' => form_error('confirm1')
      );
      echo json_encode($array);       
    }
    else
    {
      $data = array(
        'password' => password_hash($this->input->post('new', TRUE), PASSWORD_DEFAULT),
        'confirm' => password_hash($this->input->post('confirm1', TRUE), PASSWORD_DEFAULT)
      );

      $login_data = array(
        'password' => $this->input->post('current')
      );

      $result = $this->table_model->check_password($id, $login_data);
                  if (!empty($result['status']) && $result['status'] === TRUE) 
                  {
                  $this->table_model->update_password(array('account_id' => $this->input->post('id')), $data);
                  echo json_encode(array("status" => TRUE));
                  } 
                  else 
                  {
                    echo json_encode(array("wrong" => TRUE));
                  }

    }
  }
}
?>