<?php
class Transaksi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    /*
     * Get all transaksi
     */
    function get_all_transaksi()
    {
        $this->db->order_by('TransactionDate', 'asc');
        return $this->db->get('tb_transaksi')->result_array();
    }
        
    /*
     * function to add new transaksi
     */
    function add_transaksi($params)
    {
        $this->db->insert('tb_transaksi',$params);
        return $this->db->insert_id();
    }
}
