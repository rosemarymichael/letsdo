<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
  
    public function __construct()
    {
        parent::__construct();
        
    }
   /*
    * List all users
   */
	public function get_all_users($arr_data){
		
		$sql = $this->db-> select('*')
		                -> from('users')
		                -> where($arr_data)
		                -> get(); 
		$arr_result = $sql->result_array();
		return $arr_result;

	}

   /*
    * Get  user row
   */

   public function get_row_user($arr_data){

   	    $sql = $this->db->select('user_email,user_password,user_type')
		             -> from('users')
		             -> where('user_email',$arr_data['user_email'])
		             -> where('user_password',$arr_data['user_password'])
		             -> get();

		$arr_result = $sql->row_array();
		return $arr_result;

   }
 
   /*
    * Delete user
   */
	/*public function delete_user($id){
        
        $success = $this->db->delete('brandhub_users', array('user_id'=>$id));
		             
        if($success)
        	return true;
        else
        	return false;

	}*/
  

}