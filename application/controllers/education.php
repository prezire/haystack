<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Education extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('educationmodel');
	}
  public final function index()
  {
    $o = $this->educationmodel->index()->result();
    showView('educations/index', array('educations' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->educationmodel->create()->row();
        if($o->id)
        {
          redirect(site_url('education/read/' . $o->id));
        }
        else
        {
          show_error('Error creating education.');
        }
      }
      else
      {
        showView('educations/create');
      }
    }
    else
    {
      showView('educations/create');
    }
  }
	public final function read($id)
	{
		showView('educations/read', array('education' => $this->educationmodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->educationmodel->read($id)->row();
    $a = array('education' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->educationmodel->update()->row();
        if($b)
        {
          redirect(site_url('education/read/' . $o->id));
        }
        else
        {
          show_error('Error updating education.');
        }
      }
      else
      {
        showView('educations/update', $a);
      }
    }
    else
    {
      showView('educations/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('education' => $this->education_model->delete($id)->row()));
  }
}