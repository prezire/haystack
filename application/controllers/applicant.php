<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Applicant extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
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
      //if($this->form_validation->run('applicant/create')){
        $o = $this->applicantmodel->create()->row();
        if($o->id)
        {
          /*sendEmailer
          (
            'Simplifie - Haystack Verify Account',
            'admin@simplifie.com',
            $o->email
          );*/
          redirect(site_url('main/registerSuccess'));
        }
        else
        {
          show_error('Error creating applicant.');
        }
      /*}
      else
      {
        showView('applicants/create');
      }*/
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
		showView('applicants/read', $a);
	}
	public final function readByUserId($userId)
	{
    $this->load->model('usermodel');
    $user = $this->usermodel->read($userId)->row();
    $appl = $this->applicantmodel->readByUserId($userId)->row();
    //
    $this->load->model('commentmodel');
    $comments = $this->commentmodel->readByCommentedUserId($userId)->result();
    //
    $a = array
    (
      'applicant' => $appl, 
      'user' => $user,
      'comments' => $comments
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
}