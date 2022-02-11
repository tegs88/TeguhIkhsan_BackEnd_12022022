<?php
class Transaksi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('Nasabah_model');
        $this->load->model('Point_model');
    } 

    /*
     * Listing of transaksi
     */
    function index()
    {
        $data['transaksi'] = $this->Transaksi_model->get_all_transaksi();
        
        $data['_view'] = 'transaksi/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new transaksi
     */
    function add()
    {   
        $desc = $this->input->post('Description');
        $amount = $this->input->post('Amount');
        $AccountId = $this->input->post('AccountId');
        $point = 0;
        if(isset($_POST) && count($_POST) > 0)     
        {   
            //calculate points
            if($desc == 3 || $desc == 4){
                if($desc == 3){
                    if($amount >= 10001 && $amount <=30000)
                        $point = (($amount-10000)/1000) * 1;
                    else if($amount > 30000){
                        $first_point = 20;
                        $point = $first_point + ((($amount-30000)/1000) * 2);
                    }
                    else
                        $point = 0;
                } else if($desc== 4){
                    if($amount >=50001 && $amount <= 100000)
                        $point = (($amount-50000)/2000) * 1;
                    else if($amount > 100000){
                        $first_point = 25;
                        $point = $first_point +((($amount-100000)/2000) * 2);
                    }
                    else
                        $point = 0;
                }
                $name = $this->Nasabah_model->get_nasabah($AccountId);
                $params_point = array(
                    'AccountId' => $AccountId,
                    'Name' => $name['Name'],
                    'poin' => $point
                );
                $point_id = $this->Point_model->add_point($params_point);
            }
            //end calculate points

            $params = array(
				'AccountId' => $this->input->post('AccountId'),
				'Description' => $this->input->post('Description'),
				'DebitCreditStatus' => $this->input->post('DebitCreditStatus'),
				'TransactionDate' => $this->input->post('TransactionDate'),
				'Amount' => $this->input->post('Amount'),
            );
            
            $transaksi_id = $this->Transaksi_model->add_transaksi($params);
            redirect('transaksi/index');
        }
        else
        {
			$this->load->model('Nasabah_model');
			$data['all_nasabah'] = $this->Nasabah_model->get_all_nasabah();
            
            $data['_view'] = 'transaksi/add';
            $this->load->view('layouts/main',$data);
        }
    }
}
