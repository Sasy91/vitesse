<?php
class File extends CI_Model {

    public  function  insert($fileName){
        $data=array(
                    'url'=>$fileName,
                    
            );

        $this->db->insert('home_sider',$data);
        return null;
    }

    public function show(){
    	$query=$this->db->query("SELECT * FROM pic")->result();
        return $query;
    }

    public function delete($id){
    	$this->db->where('id', $id);
        $this->db->delete('pic'); 
    }

    public function select($id){
    	$query=$this->db->query("SELECT id,dics FROM pic WHERE id='$id'")->result();
        return $query;
    }

    public function update($data){
    	$details = array(
    			'id'=> $data['id'],
               'dics' => $data['title'],
               'url' => $data['img']
            );

		$this->db->where('id', $data['id']);
		$this->db->update('pic', $details); 
    }


}
