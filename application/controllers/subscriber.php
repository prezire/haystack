<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Subscriber extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    validateLoginSession
    (
      array('update', 'delete')
    );
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
      if($this->form_validation->run('subscriber/create'))
      {
        $o = $this->subscribermodel->create()->row();
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
          show_error('Error creating subscriber.');
        }
      }
      else
      {
        showView('subscribers/create');
      }
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