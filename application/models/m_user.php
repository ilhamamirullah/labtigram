<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class m_user extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    function getId($name)
    {
      $this->db->select('id');
      $this->db->where('username',$name);
      $a = $this->db->get('user');
      return $a;
    }
    function inputgambar($data)
    {
      $this->db->insert('post', $data);
      return TRUE;
    }

    function inputvideo($data)
    {
      $this->db->insert('post', $data);
      return TRUE;
    }
    
}
