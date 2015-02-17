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
      $a = array('email' => $email, 'password' => $pwd, 'enabled' => 1);
      return $this->db->get_where('users', $a);
    }
    public final function fbLogin()
    {
      //TODO: Read from DB. If exists, create session.
      //Else, create new user.
      /*
        will receive the following info: your public profile, 
        friend list, email address, birthday, work history, 
        education history, current city, website and 
        personal description.
      */ 
    }
  }