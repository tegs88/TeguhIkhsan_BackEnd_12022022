<?php
class Point_model extends CI_Model{
    function add_point($params)
    {
        $this->db->insert('tb_point',$params);
        return $this->db->insert_id();
    }

    function get_point()
    {
        $query = $this->db->query("SELECT AccountId, Name, sum(poin) as total FROM tb_point GROUP BY Name ORDER BY AccountId ASC");
        return $query->result_array();
    }
}
?>