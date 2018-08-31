<?php
/**
 * Created by PhpStorm.
 * User: Timothy Lampung
 * Date: 31/8/2018
 * Time: 12:37 PM
 */

class Asset extends CI_Controller
{
    protected $BASE_PATH = './uploads';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Asset_model', 'AssetModel');
    }

    public function dashboard(){
        $data['list'] = $this->AssetModel->getVideos();
        $this->load->view("dashboard/dashboard", $data);
    }



    public function do_upload(){
        $config['upload_path'] = $this->BASE_PATH;
        $config['allowed_types'] = 'gif|jpg|png|mp4';
        $config['file_name'] = $this->input->post('title');

        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        if( !$this->upload->do_upload('userFile') ){
            $error = array( 'error' => $this->upload->display_errors() );
        }
        else{
            $data = array( 'upload_data' => $this->upload->data() );

            $path = "uploads/" .str_replace(' ', '_', $this->input->post('title'));

            $this->AssetModel->writeMetaData($path . '.mp4',
                $this->input->post('title'),
                $this->input->post('description'));
        }

    }




}