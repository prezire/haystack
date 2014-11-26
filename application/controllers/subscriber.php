<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Subscriber extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('subscribermodel');
	}
  public final function index()
  {
    $o = $this->subscribermodel->index()->result();
    showView('subscribers/index', array('subscribers' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      //if($this->form_validation->run('subscriber/create')){
        $o = $this->subscribermodel->create()->row();
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
          show_error('Error creating subscriber.');
        }
      /*}
      else
      {
        showView('subscribers/create');
      }*/
    }
    else
    {
      showView('subscribers/create');
    }
  }
	public final function read($id)
	{
		showView('subscribers/read', array('subscriber' => $this->subscribermodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->subscribermodel->read($id)->row();
    $a = array('subscriber' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->subscribermodel->update()->row();
        if($b)
        {
          redirect(site_url('subscriber/read/' . $o->id));
        }
        else
        {
          show_error('Error updating subscriber.');
        }
      }
      else
      {
        showView('subscribers/update', $a);
      }
    }
    else
    {
      showView('subscribers/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('subscriber' => $this->subscriber_model->delete($id)->row()));
  }
}