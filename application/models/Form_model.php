<?php
class Form_model extends CI_Model
{
    public function getForm()
    {
        $query =$this->db->get('v_data_detail');
        return $query;
    }

    public function getInputById()
    {
        $query = $this->db->get_where('v_data_detail', $where)->row_array();
        return $query;
    }
   
}

?>
