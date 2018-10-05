
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Model {
	public function storeData($data)
	{
		$this->db->insert('registers' , $data);
	}

	public function checkUser($d = array())
	{
		if(empty($d))
			return false;
		else
		{
			$this->db->where($d);
			return $this->db->get('registers')->result_array();
		}
	}
	public function getPosts($id= 0)
	{
		if($id != 0)
		$this->db->where('id', $id);
		$this->db->select('id,user_name,email,name,contact_no');
		$this->db->from('registers');
		$res = $this->db->get();

		return $res->result();
	}
	 public function entry_update( $id ) {

                $this->db->select('*');
                $this->db->from('registers');
                $this->db->where('id',$id );
                $query = $this->db->get()->result_array();
                return $query;

     }
            public function entry_update1($id, $datainput) {
              $data = array(

			        'name' => $datainput['name'],
			        'user_name' => $datainput['user_name'],
			        'email' => $datainput['email'],
			        'contact_no' => $datainput['contact_no']
				);
                $this->db->where('id', $id);
                $this->db->update('registers', $data);

            }
            public function delete_user($id)
		    {
		        $this->db->where('id', $id);
		        return $this->db->delete('registers');
		    }









}