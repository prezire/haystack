<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Applicant extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    validateLoginSession
    (
      array('update', 'delete')
    );
    $this->load->model('applicantmodel');
	}
  public final function index()
  {
    $o = $this->applicantmodel->index()->result();
    showView('applicants/index', array('applicants' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run('applicant/create'))
      {
        $o = $this->applicantmodel->create()->row();
        if($o->id)
        {
          $conf = $this->config->item('email');
          $a = array
          (
            'full_name' => $o->full_name,
            'site_url' => site_url(),
            'activation_url' => site_url('auth/enable/1/' . $o->enable_token)
          );
          //
          sendEmailer
          (
            'Simplifie Haystack - Verify Account',
            $conf['admin'],
            'haystackuser@localhost' /*$o->email*/,
            $this->parser->parse
            (
              'auth/emailers/account_activation', 
              $a, 
              true
            )
          );
          redirect(site_url('auth/registerSuccess'));
        }
        else
        {
          $this->session->set_flashdata('error', '<p>Error creating applicant account.</p>');
          redirect(site_url('auth/register#applicant'));
        }
      }
      else
      {
        $this->session->set_flashdata('error', validation_errors());
        redirect(site_url('auth/register#applicant'));
      }
    }
    else
    {
      showView('applicants/create');
    }
  }
	public final function read($id)
	{
    $appl = $this->applicantmodel->read($id)->row();
    $this->load->model('usermodel');
    $user = $this->usermodel->read($appl->user_id)->row();
    $a = array('applicant' => $appl, 'user' => $user);
    $this->load->model('commentmodel');
    $a['comments'] = $this->commentmodel->readByUserId($user->id, 'to')->result();
    showView('applicants/read', $a);
	}
	public final function readByUserId($userId)
	{
    $this->load->model('usermodel');
    $this->load->model('commentmodel');
    $user = $this->usermodel->read($userId)->row();
    $appl = $this->applicantmodel->readByUserId($userId)->row();
    $a = array
    (
      'applicant' => $appl, 
      'user' => $user,
      'comments' => $this->commentmodel->readByUserId($userId)->result()
    );
		showView('applicants/read', $a);
	}
  public final function readByJobTitle($jobTitle)
	{
    $jobTitle = urldecode($jobTitle);
    $jobTitles = $this->applicantmodel->readByJobTitle($jobTitle)->result();
    $a = array('jobTitles' => $jobTitles);
		showView('applicants/job_title_listing', $a);
	}
	public final function update($id = null)
  {
    $o = $this->applicantmodel->read($id)->row();
    $a = array('applicant' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run('applicant/update'))
      {
        $b = $this->applicantmodel->update()->row();
        if($b)
        {
          redirect(site_url('applicant/read/' . $o->id));
        }
        else
        {
          show_error('Error updating applicant.');
        }
      }
      else
      {
        showView('applicants/update', $a);
      }
    }
    else
    {
      showView('applicants/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('applicant' => $this->applicant_model->delete($id)->row()));
  }
  //Pools.
  public final function pools()
  {
    //Check session.
  }
  public final function createPool(){}
  public final function deletePool(){}
}