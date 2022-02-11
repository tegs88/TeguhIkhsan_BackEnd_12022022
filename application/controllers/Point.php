<?php
class Point extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Point_model');
    } 

    function index()
    {
        $data['point'] = $this->Point_model->get_point();
        
        $data['_view'] = 'point/index';
        $this->load->view('layouts/main',$data);
    }
}
?>