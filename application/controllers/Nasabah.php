<?php
class Nasabah extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Nasabah_model');
    } 

    /*
     * Listing of nasabah
     */
    function index()
    {
        $data['nasabah'] = $this->Nasabah_model->get_all_nasabah();
        
        $data['_view'] = 'nasabah/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new nasabah
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'Name' => $this->input->post('Name'),
            );
            
            $nasabah_id = $this->Nasabah_model->add_nasabah($params);
            redirect('nasabah/index');
        }
        else
        {            
            $data['_view'] = 'nasabah/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a nasabah
     */
    function edit($AccountId)
    {   
        // check if the nasabah exists before trying to edit it
        $data['nasabah'] = $this->Nasabah_model->get_nasabah($AccountId);
        
        if(isset($data['nasabah']['AccountId']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'Name' => $this->input->post('Name'),
                );

                $this->Nasabah_model->update_nasabah($AccountId,$params);            
                redirect('nasabah/index');
            }
            else
            {
                $data['_view'] = 'nasabah/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The nasabah you are trying to edit does not exist.');
    } 

    /*
     * Deleting nasabah
     */
    function remove($AccountId)
    {
        $nasabah = $this->Nasabah_model->get_nasabah($AccountId);

        // check if the nasabah exists before trying to delete it
        if(isset($nasabah['AccountId']))
        {
            $this->Nasabah_model->delete_nasabah($AccountId);
            redirect('nasabah/index');
        }
        else
            show_error('The nasabah you are trying to delete does not exist.');
    }
    
}
