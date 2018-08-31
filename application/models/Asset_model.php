<?php
/**
 * Created by PhpStorm.
 * User: Timothy Lampung
 * Date: 31/8/2018
 * Time: 12:31 PM
 */

class Asset_model extends CI_Model
{

    protected $asset_table = "assets";


    public function writeMetaData($path,$title,$description)
    {
        $data = array(
            'path'       => $path,
            'title'     => $title,
            'description'   => $description
        );

        $this->db->insert($this->asset_table, $data);
    }


    public function getVideos()
    {
        $this->db->select("id,path,title,description,date_added");
        $this->db->from($this->asset_table);
        $query = $this->db->get();
        return $query->result();
    }


}