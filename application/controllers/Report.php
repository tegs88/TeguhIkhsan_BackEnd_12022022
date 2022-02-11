<?php
class Report extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');
    } 

    function index()
    {
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $AccountId = $this->input->post('AccountId');
            $StartDate = $this->input->post('StartDate');
            $EndDate = $this->input->post('EndDate');

            $startParam = date('Y-m-d',strtotime($StartDate));
            $endParam = date('Y-m-d',strtotime($EndDate));

            $this->load->model('Nasabah_model');
            $data['all_nasabah'] = $this->Nasabah_model->get_all_nasabah();
            
            $data['report'] = $this->Report_model->get_report($AccountId,$startParam,$endParam);
            $data['_view'] = 'report/index';
            $this->load->view('layouts/main',$data);
        }
        else
        {            
            $this->load->model('Nasabah_model');
            $data['all_nasabah'] = $this->Nasabah_model->get_all_nasabah();

            $data['_view'] = 'report/index';
            $this->load->view('layouts/main',$data);
        }
    }
}
?>