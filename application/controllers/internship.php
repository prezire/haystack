<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Internship extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    validateLoginSession
    (
      array
      (
        'create', 
        'readMyPosts', 
        'update', 
        'delete'
      )
    );
    $this->load->model('internshipmodel');
	}
  public final function index()
  {
    $o = $this->internshipmodel->index()->result();
    showView('internships/index', array('internships' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run('internship/create'))
      {
        $o = $this->internshipmodel->create()->row();
        if($o->internship_id)
        {
          redirect(site_url('internship/update/' . $o->internship_id));
        }
        else
        {
          show_error('Error creating internship.');
        }
      }
      else
      {
        showView('internships/create');
      }
    }
    else
    {
      showView('internships/create');
    }
  }
	public final function read($id)
	{
    $this->load->model('internshipapplicationmodel');
    //TODO: Check if $ia is used properly.
    $ia = $this->internshipapplicationmodel->readBySpecificId($id, 'internship');
    $bHasApplied = $this->internshipapplicationmodel->hasApplied($id);
    $i = $this->internshipmodel->read($id)->row();
    $a = array
    (
      'internship' => $i,
      'hasApplied' => $bHasApplied
    );
    //$this->internshipmodel->createImpression($i->internship_id);
		showView('internships/read', $a);
	}
  public final function readByIndustry($industry)
	{
    $industry = urldecode($industry);
    $industry = str_replace('haystackescapedslash', '/', $industry);
    $internships = $this->internshipmodel->readByIndustry($industry)->result();
    $a = array('internships' => $internships);
		showView('internships/industry_listing', $a);
	}
  public final function readMyPosts()
  {
    $i = $this->internshipmodel->readMyPosts()->result();
    showView('internships/index', array('internships' => $i));
  }
	public final function update($id = null)
  {
    $i = $this->input;
    if($i->post())
    {
      $id = $i->post('id');
      $o = $this->internshipmodel->read($id)->row();
      $a = array('internship' => $o);
      if($this->form_validation->run('internship/update'))
      {
        $this->internshipmodel->update();
        $this->session->set_flashdata('status', 'success');
        redirect(site_url('internship/update/' . $id));
      }
      else
      {
        showView('internships/update', $a);
      }
    }
    else
    {
      $o = $this->internshipmodel->read($id)->row();
      $a = array('internship' => $o);
      showView('internships/update', $a);
    }
  }
	public final function delete($id)
  {
    $this->internshipmodel->delete($id);
    showJsonView(array('success' => true, 'id' => $id));
  }
  //Bookmarks.
  public final function bookmarks()
  {
    //Check session.
  }
  public final function createBookmark(){}
  public final function deleteBookmark($id){}
  //Alerts.
  public final function alerts()
  {
    //Check session.
  }
  public final function createAlert(){}
  public final function deleteAlert($id){}
}