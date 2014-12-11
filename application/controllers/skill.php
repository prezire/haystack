<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Skill extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('skillmodel');
	}
  public final function index()
  {
    $o = $this->skillmodel->index()->result();
    showView('skills/index', array('skills' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->skillmodel->create()->row();
        if($o->id)
        {
          redirect(site_url('skill/read/' . $o->id));
        }
        else
        {
          show_error('Error creating skill.');
        }
      }
      else
      {
        showView('skills/create');
      }
    }
    else
    {
      showView('skills/create');
    }
  }
	public final function read($id)
	{
		showView('skills/read', array('skill' => $this->skillmodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->skillmodel->read($id)->row();
    $a = array('skill' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->skillmodel->update()->row();
        if($b)
        {
          redirect(site_url('skill/read/' . $o->id));
        }
        else
        {
          show_error('Error updating skill.');
        }
      }
      else
      {
        showView('skills/update', $a);
      }
    }
    else
    {
      showView('skills/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('skill' => $this->skill_model->delete($id)->row()));
  }
}