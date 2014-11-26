<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');
  class Auth extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
    }
    public final function fbLogin($email, $fullName)
    {
      //TODO: Read from DB. If exists, create session.
      //Else, create new user.
      redirect(site_url());
    }
    public final function login()
    {
      if($this->input->post())
      {
        //if($this->form_validation->run('auth/login')){
          $this->load->model('authmodel');
          $u = $this->authmodel->login()->row();
          if($u->id > 0)
          {
            $this->session->set_userdata('user', $u);
            redirect(site_url('/'));
          }
          else
          {
            showView
            (
              'login', 
              array('error' => 'User not found.')
            );
          }
        /*}
        else
        {
          showView('login');
        }*/
      }
      else
      {
        showView('login');
      }
    }
    public final function logout()
    {
      $this->session->set_userdata('user', null);
      $this->session->sess_destroy();
      redirect(site_url('/'));
    }
  }