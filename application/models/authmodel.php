<?php  
  class AuthModel extends CI_Model
  {
    public function __construct()
    {
      parent::__construct();
    }
    public final function login()
    {
      $i = $this->input;
      $email = $i->post('email');
      $pwd = $i->post('password');
      $a = array('email' => $email, 'password' => $pwd);
      return $this->db->get_where('users', $a);
    }
  }