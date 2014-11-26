<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class CompanyAm extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('companyammodel');
	}
  public final function index()
  {
    $o = $this->companyammodel->index()->result();
    showView('company_ams/index', array('companyAms' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->companyammodel->create()->row();
        if($o->id)
        {
          redirect(site_url('company_am/read/' . $o->id));
        }
        else
        {
          show_error('Error creating company_am.');
        }
      }
      else
      {
        showView('company_ams/create');
      }
    }
    else
    {
      showView('company_ams/create');
    }
  }
	public final function read($id)
	{
		showView('company_ams/read', array('companyAm' => $this->companyammodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->companyammodel->read($id)->row();
    $a = array('companyAm' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->companyammodel->update()->row();
        if($b)
        {
          redirect(site_url('company_am/read/' . $o->id));
        }
        else
        {
          show_error('Error updating company_am.');
        }
      }
      else
      {
        showView('company_ams/update', $a);
      }
    }
    else
    {
      showView('company_ams/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('companyAm' => $this->companyAm_model->delete($id)->row()));
  }
}