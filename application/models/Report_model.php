<?php
class Report_model extends CI_Model{
    function get_report($AccountId,$StartDate,$EndDate){
        $query = $this->db->query("SELECT TransactionDate,Description, (CASE When DebitCreditStatus = 'C' THEN Amount END) Credit, (CASE WHEN DebitCreditStatus = 'D' THEN Amount END) Debit,Amount  FROM tb_transaksi WHERE AccountId= $AccountId AND TransactionDate BETWEEN '$StartDate' AND '$EndDate'");
        return $query->result_array();
    }
}
?>