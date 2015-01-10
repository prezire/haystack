<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class PooledApplicant extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('pooledapplicantmodel');
	}
  public final function index()
  {
    $o = $this->pooledapplicantmodel->index()->result();
    showView('pooled_applicants/index', array('pooledApplicants' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run(''))
      {
        $o = $this->pooledapplicantmodel->create()->row();
        if($o->id)
        {
          redirect(site_url('pooled_applicant/read/' . $o->id));
        }
        else
        {
          show_error('Error creating pooled_applicant.');
        }
      }
      else
      {
        showView('pooled_applicants/create');
      }
    }
    else
    {
      showView('pooled_applicants/create');
    }
  }
	public final function read($id)
	{
		showView('pooled_applicants/read', array('pooledApplicant' => $this->pooledapplicantmodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->pooledapplicantmodel->read($id)->row();
    $a = array('pooledApplicant' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run(''))
      {
        $b = $this->pooledapplicantmodel->update()->row();
        if($b)
        {
          redirect(site_url('pooled_applicant/read/' . $o->id));
        }
        else
        {
          show_error('Error updating pooled_applicant.');
        }
      }
      else
      {
        showView('pooled_applicants/update', $a);
      }
    }
    else
    {
      showView('pooled_applicants/update', $a);
    }
  }
	public final function delete($id)
  {
    $this->pooledApplicant_model->delete($id)->row()
    showJsonView(array('success' => true, 'id' => $id));
  }
}