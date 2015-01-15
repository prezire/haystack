<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Resume extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    validateLoginSession
    (
      array
      (
        'create', 
        'updateBySession', 
        'update', 
        'delete'
      )
    );
    $this->load->model('resumemodel');
	}
  public final function index()
  {
    $o = $this->resumemodel->index()->result();
    showView('resumes/index', array('resumes' => $o));
  }
  //@param  $recipients   Comma-separated string.
  public final function forward($applicantId, $recipients)
  {
    //$this->exportResume($applicantId);

  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->resumemodel->create()->row();
        if($o->id)
        {
          redirect(site_url('resume/read/' . $o->id));
        }
        else
        {
          show_error('Error creating resume.');
        }
      }
      else
      {
        showView('resumes/create');
      }
    }
    else
    {
      showView('resumes/create');
    }
  }
	public final function read($id)
	{
    $a = $this->resumemodel->readDetails($id);
		showView('resumes/read', $a);
	}
  public final function updateBySession()
  {
    if(!isLoggedIn()) redirect(site_url('auth/login'));
    //
    $uId = getLoggedUser()->id;
    $this->load->model('applicantmodel');
    $applId = $this->applicantmodel->readByUserId($uId)->row()->id;
    $a = $this->resumemodel->readByApplicantId($applId);
    if($this->input->post())
    {
      if($this->form_validation->run('resume/updateBySession'))
      {
        $b = $this->resumemodel->update()->row();
        if($b)
        {
          //showJsonView(array('success' => true));
        }
        else
        {
          //showJsonView(array('success' => false, 'message' => 'Error updating resume.'));
        }
      }
      else
      {
        //showJsonView(array('success' => false, 'message' => validation_errors()));
      }
    }
    else
    {
      showView('resumes/update', $a);
    }
  }
	public final function update()
  {
    if($this->input->post())
    {
      if($this->form_validation->run('resume/update'))
      {
        $this->resumemodel->update();
        showJsonView(array('success' => true));
      }
      else
      {
        showJsonView(array('success' => false, 'message' => validation_errors()));
      }
    }
  }
	public final function delete($id)
  {
    showJsonView(array('resume' => $this->resume_model->delete($id)->row()));
  }
}