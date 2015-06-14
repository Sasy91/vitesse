<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class imagemodel extends CI_Model {

    function getHomeImages() {
        $query = $this->db->get('home_sider');
        return $query->result();
    }

    function saveImage($data) {
        if ($this->db->insert('home_sider', $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deleteImg($id) {
        $this->db->where('id', $id);
        $this->db->delete('home_sider');
    }

}
?>


