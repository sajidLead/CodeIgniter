

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {


    public function add($data){

        ///print_r($data); exit; 
        // Inserting into your table
        //print_r($data); exit; 
         $this->db->insert('users', $data);
        

        // Return the id of inserted row
         $idOfInsertedData = $this->db->insert_id();
       // echo $idOfInsertedData; exit; 
       // return $idOfInsertedData = $this->db->insert_id();
    }
    function getPosts($id =0){
    	if($id != 0)
    		$this->db->where('id', $id);
		  $this->db->select("id,first_name,last_name"); 
		  $this->db->from('users');
		  $query = $this->db->get();
		  return $query->result();
		 }
	public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }


     public function entry_update( $id ) {

                $this->db->select('*');
                $this->db->from('users');
                $this->db->where('id',$id );
                $query = $this->db->get()->result_array();
                return $query;

            }
            public function entry_update1($id, $datainput) {
              $data = array(

			        'first_name' => $datainput['first_name'],
			        'last_name' => $datainput['last_name'],
				);
                 $this->db->where('id', $id);
                $this->db->update('users', $data);

            }

}