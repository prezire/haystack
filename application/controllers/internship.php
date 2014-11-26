<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Internship extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
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
      //if($this->form_validation->run('internship/create')){
        $o = $this->internshipmodel->create()->row();
        if($o->id)
        {
          redirect(site_url('internship/update/' . $o->id));
        }
        else
        {
          show_error('Error creating internship.');
        }
      /*}
      else
      {
        showView('internships/create');
      }*/
    }
    else
    {
      showView('internships/create');
    }
  }
	public final function read($id)
	{
		showView('internships/read', array('internship' => $this->internshipmodel->read($id)->row()));
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
    $o = $this->internshipmodel->read($id)->row();
    $a = array('internship' => $o);
    if($this->input->post())
    {
      //if($this->form_validation->run('internship/update')){
        $b = $this->internshipmodel->update()->row();
        if($b)
        {
          redirect(site_url('internship/update/' . $b->id));
        }
        else
        {
          show_error('Error updating internship.');
        }
      /*}
      else
      {
        showView('internships/update', $a);
      }*/
    }
    else
    {
      showView('internships/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('internship' => $this->internship_model->delete($id)->row()));
  }
}