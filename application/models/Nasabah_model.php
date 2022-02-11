<?php
class Nasabah_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get nasabah by AccountId
     */
    function get_nasabah($AccountId)
    {
        return $this->db->get_where('tb_nasabah',array('AccountId'=>$AccountId))->row_array();
    }
        
    /*
     * Get all nasabah
     */
    function get_all_nasabah()
    {
        $this->db->order_by('AccountId', 'desc');
        return $this->db->get('tb_nasabah')->result_array();
    }
        
    /*
     * function to add new nasabah
     */
    function add_nasabah($params)
    {
        $this->db->insert('tb_nasabah',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update nasabah
     */
    function update_nasabah($AccountId,$params)
    {
        $this->db->where('AccountId',$AccountId);
        return $this->db->update('tb_nasabah',$params);
    }
    
    /*
     * function to delete nasabah
     */
    function delete_nasabah($AccountId)
    {
        return $this->db->delete('tb_nasabah',array('AccountId'=>$AccountId));
    }
}
