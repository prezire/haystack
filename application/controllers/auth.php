<?php
  if(!defined('BASEPATH')) exit('No direct script access allowed');
  class Auth extends CI_Controller
  {
    public function __construct()
    {
      parent::__construct();
    }
    public final function enable($state = 1, $enableToken)
    {
      $this->load->model('usermodel');
      $i = $this->usermodel->enable($state, $enableToken);
      $b = $i > 0;
      if($b)
      {
        showView('auth/activation_success');
      }
      else
      {
        show_error('Invalid activation URL. Please try again.');
      }
    }
    public final function register(){showView('auth/register');}
    public final function registerSuccess(){showView('auth/register_success');}
    //
    public final function resetPassword($passwordResetToken)
    {
      //
    }
    public final function forgotPassword(){
      $i = $this->input;
      if($i->post())
      {
        if($this->form_validation->run('auth/forgotPassword'))
        {
          $b = $this->usermodel->forgotPassword();
          if($b->id)
          {
            $this->config->load('custom_configs');
            $c = $this->config->item('email');
            sendEmailer
            (
              'Simplifie Haystack - Forgot Password', 
              $b->email, 
              $c['admin'], 
              $this->parser->parse
              (
                'auth/emailers/reset_password',
                array
                (
                  'email' => $b->email,
                  'full_name' => $b->full_name,
                  'url' => site_url('auth/resetPassword' . $b->password_reset_token)
                ),
                true
              )
            );
            $this->session->set_flashdata
            (
              'status', 
              'A password reset emailer was sent to' . $b->email
            );
            showView('auth/reset_password_success'); 
          }
          else
          {
            showView('auth/reset_password', array('error' => 'No record of such email. Please try again.')); 
          }
        }
        else
        {
          showView('auth/reset_password');
        }
      }
      else
      {
        showView('auth/reset_password');
      }
    }
    public final function fbLogin($email, $fullName)
    {
      $this->authmodel->fbLogin($email, $fullName);
      redirect(site_url());
    }
    public final function login()
    {
      if($this->input->post())
      {
        if($this->form_validation->run('auth/login'))
        {
          $this->load->model('authmodel');
          $u = $this->authmodel->login()->row();
          if(isset($u->id))
          {
            $this->session->set_userdata('user', $u);
            redirect(site_url('/'));
          }
          else
          {
            showView
            (
              'auth/login', 
              array('error' => '<p>User not found. Check your credentials and try again.</p>')
            );
          }
        }
        else
        {
          showView('auth/login');
        }
      }
      else
      {
        showView('auth/login');
      }
    }
    public final function logout()
    {
      $this->session->set_userdata('user', null);
      $this->session->sess_destroy();
      redirect(site_url('auth/login'));
    }
  }