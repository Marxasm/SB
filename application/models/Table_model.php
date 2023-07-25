<?php
class Table_model extends CI_model{

	public function retrieve_ingoing() {
	   $query=$this->db->get("ingoing");
       return $query->result();
	}
   
   var $table = 'ingoing';
   var $column_order = array(null, 'in_id', 'in_title', 'in_time', 'in_date', 'in_status'); //set column field database for datatable orderable
   var $column_search = array('in_id', 'in_title', 'in_time', 'in_date'); //set column field database for datatable searchable 
   var $order = array('in_id' => 'asc'); // default order 
	private function _get_datatables_query()
    {
         
        $this->db->from($this->table);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                 
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
         
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('in_id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('in_id', $id);
        $this->db->delete($this->table);
    }

    public function retrieve_outgoing() {
        $query=$this->db->get("ingoing");
        return $query->result();
     }
 
    var $table1 = 'outgoing';
    var $column_order1 = array(null, 'out_id', 'out_title', 'out_time', 'out_date', 'out_status'); //set column field database for datatable orderable
    var $column_search1 = array('out_id', 'out_title', 'out_time', 'out_date' ); //set column field database for datatable searchable 
    var $order1 = array('out_id' => 'asc'); // default order 
     private function _get_datatables_query1()
     {
          
         $this->db->from($this->table1);
  
         $i = 0;
      
         foreach ($this->column_search1 as $item) // loop column 
         {
             if($_POST['search']['value']) // if datatable send POST for search
             {
                  
                 if($i===0) // first loop
                 {
                     $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                     $this->db->like($item, $_POST['search']['value']);
                 }
                 else
                 {
                     $this->db->or_like($item, $_POST['search']['value']);
                 }
  
                 if(count($this->column_search1) - 1 == $i) //last loop
                     $this->db->group_end(); //close bracket
             }
             $i++;
         }
          
         if(isset($_POST['order'])) // here order processing
         {
             $this->db->order_by($this->column_order1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
         } 
         else if(isset($this->order1))
         {
             $order = $this->order1;
             $this->db->order_by(key($order), $order[key($order)]);
         }
     }
  
     function get_datatables1()
     {
         $this->_get_datatables_query1();
         if($_POST['length'] != -1)
         $this->db->limit($_POST['length'], $_POST['start']);
         $query = $this->db->get();
         return $query->result();
     }
 
     function count_filtered1()
     {
         $this->_get_datatables_query1();
         $query = $this->db->get();
         return $query->num_rows();
     }
  
     public function count_all1()
     {
         $this->db->from($this->table);
         return $this->db->count_all_results();
     }

     public function get_by_id1($id)
     {
         $this->db->from($this->table1);
         $this->db->where('out_id',$id);
         $query = $this->db->get();
         return $query->row();
     }
 
     public function update1($where, $data)
     {
         $this->db->update($this->table1, $data, $where);
         return $this->db->affected_rows();
     }
 
     public function delete_by_id1($id)
     {
         $this->db->where('out_id', $id);
         $this->db->delete($this->table1);
     }

     // -- End of Document View File Model Functions --

     public function save($data)
     {
         $this->db->insert($this->table, $data);
         return $this->db->insert_id();
     }

     public function save1($data)
     {
         $this->db->insert($this->table1, $data);
         return $this->db->insert_id();
     }

     // -- End of Ingoing and Outgoing File Model Functions -- 

     public function no_ingoing()
     {
        $this->db->from($this->table);
        $query=$this->db->get();
        return $query->num_rows();
     } 

     public function no_outgoing()
     {
        $this->db->from($this->table1);
        $query=$this->db->get();
        return $query->num_rows();
     } 

    // -- End of Home File Model Functions -- 

    var $table2 = 'account';
    var $column_order2 = array(null, 'account_id', 'first_name', 'middle_name', 'last_name', 'email', 'phone', 'position', 'type', 'status', 'date'); //set column field database for datatable orderable
    var $column_search2 = array('account_id', 'first_name', 'middle_name', 'last_name', 'email', 'phone', 'position', 'type', 'status', 'date'); //set column field database for datatable searchable 
    var $order2 = array('account_id' => 'asc'); // default order 
     private function _get_datatables_query2()
     {
          
         $this->db->from($this->table2);
  
         $i = 0;
      
         foreach ($this->column_search2 as $item) // loop column 
         {
             if($_POST['search']['value']) // if datatable send POST for search
             {
                  
                 if($i===0) // first loop
                 {
                     $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                     $this->db->like($item, $_POST['search']['value']);
                 }
                 else
                 {
                     $this->db->or_like($item, $_POST['search']['value']);
                 }
  
                 if(count($this->column_search2) - 1 == $i) //last loop
                     $this->db->group_end(); //close bracket
             }
             $i++;
         }
          
         if(isset($_POST['order'])) // here order processing
         {
             $this->db->order_by($this->column_order2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
         } 
         else if(isset($this->order2))
         {
             $order = $this->order2;
             $this->db->order_by(key($order), $order[key($order)]);
         }
     }
  
     function get_datatables2()
     {
         $this->_get_datatables_query2();
         if($_POST['length'] != -1)
         $this->db->limit($_POST['length'], $_POST['start']);
         $query = $this->db->get();
         return $query->result();
     }
 
     function count_filtered2()
     {
         $this->_get_datatables_query2();
         $query = $this->db->get();
         return $query->num_rows();
     }
  
     public function count_all2()
     {
         $this->db->from($this->table2);
         return $this->db->count_all_results();
     }

     public function register($data)
     {
         $this->db->insert($this->table2, $data);
         return $this->db->insert_id();
     }

     public function get_by_id_profile($id)
    {
        $this->db->from($this->table2);
        $this->db->where('account_id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update_profile($where, $data)
    {
        $this->db->update($this->table2, $data, $where);
        return $this->db->affected_rows();
    }
    
    public function get_by_id_status($id)
    {
        $this->db->from($this->table2);
        $this->db->where('account_id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update_status($where, $data)
    {
        $this->db->update($this->table2, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_account($id)
    {
        $this->db->where('account_id', $id);
        $this->db->delete($this->table2);
    }

// --- End of Account Management File Model Functions -- 
protected $account = "account";
public function check_login($userData) 
      {

        /**
         * First Check username exists in Database
         */
        $query = $this->db->get_where($this->account, array('username' => $userData['username']));

        if ($this->db->affected_rows() > 0) {

            $password = $query->row('password');

            /**
             * Check Password Hash 
             */
            $user = $query->row();
            $id   = $user->account_id;
            $this->session->set_userdata('account_id', $id);


            if (password_verify($userData['password'], $password) === TRUE) {

                /**
                 * Password and username Address Valid
                 */
                return [
                    'status' => TRUE,
                    'data' => $query->row(),
                ];

            } else {
                return ['status' => FALSE,'data' => FALSE];
            }
         

        } else {
            return ['status' => FALSE,'data' => FALSE];
        }
    }


// ---- Change Profile Details and Change Password FUNCTIONS  ----
    public function get_details($id)
    {
      return $this->db->get_where('account', array('account_id' => $id))->row();
    }

    public function get_by_change($id)
    {
        $this->db->from($this->table2);
        $this->db->where('account_id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function update_change($where, $data)
    {
        $this->db->update($this->table2, $data, $where);
        return $this->db->affected_rows();
    }

    public function get_password_id($id)
    {
        $this->db->from($this->table2);
        $this->db->where('account_id',$id);
        $query = $this->db->get();
        return $query->row();
    }

    public function check_password($id,$userData) 
    {

        /**
         * First Check Email is Exists in Database
         */
        $query = $this->db->get_where($this->account, array('account_id' => $id));

        if ($this->db->affected_rows() > 0) {

            $password = $query->row('password');

            /**
             * Check Password Hash 
             */
            $user = $query->row();
            $id   = $user->account_id;
            $this->session->set_userdata('account_id', $id);


            if (password_verify($userData['password'], $password) === TRUE) {

                /**
                 * Password and Email Address Valid
                 */
                return [
                    'status' => TRUE,
                    'data' => $query->row(),
                ];

            } else {
                return ['status' => FALSE,'data' => FALSE];
            }
         

        } else {
            return ['status' => FALSE,'data' => FALSE];
        }
    }

  public function update_password($where, $data)
  {
      $this->db->update($this->table2, $data, $where);
      return $this->db->affected_rows();
  }

// ------ VALIDATION OF ACCOUNT FUNCTIONS ------

public function is_active($id)
  {

    $query = $this->db
            ->select('status')
            ->where(['account_id' =>  $id])
            ->where('status', 'active')
            ->get('account');

            if ($query->num_rows() == 1) {
                $result = $query->row_array();
                return $result;
            } else {
                return FALSE;
            }
}

public function is_inactive($id)
{
     $query = $this->db
            ->select('status')
            ->where(['account_id' =>  $id])
            ->where('status', 'inactive')
            ->get('account');

            if ($query->num_rows() == 1) {
                $result = $query->row_array();
                return $result;
            } else {
                return FALSE;
            }
  }

  public function retrieve_type() 
  {
   return $this->db->get('account');
  }


}