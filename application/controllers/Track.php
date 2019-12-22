<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Track extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Track_model');
    } 

    /*
     * Listing of track
     */
    function index()
    {
        $data['track'] = $this->Track_model->get_all_track();
        
        $data['_view'] = 'track/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new track
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'bus_id' => $this->input->post('bus_id'),
				'x' => $this->input->post('x'),
				'y' => $this->input->post('y'),
            );
            
            $track_id = $this->Track_model->add_track($params);
            redirect('track/index');
        }
        else
        {            
            $data['_view'] = 'track/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a track
     */
    function edit($id)
    {   
        // check if the track exists before trying to edit it
        $data['track'] = $this->Track_model->get_track($id);
        
        if(isset($data['track']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'bus_id' => $this->input->post('bus_id'),
					'x' => $this->input->post('x'),
					'y' => $this->input->post('y'),
                );

                $this->Track_model->update_track($id,$params);            
                redirect('track/index');
            }
            else
            {
                $data['_view'] = 'track/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The track you are trying to edit does not exist.');
    } 

    /*
     * Deleting track
     */
    function remove($id)
    {
        $track = $this->Track_model->get_track($id);

        // check if the track exists before trying to delete it
        if(isset($track['id']))
        {
            $this->Track_model->delete_track($id);
            redirect('track/index');
        }
        else
            show_error('The track you are trying to delete does not exist.');
    }
    
}
