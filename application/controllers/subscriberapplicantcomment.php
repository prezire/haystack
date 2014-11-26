<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class SubscriberApplicantComment extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
    $this->load->model('subscriberapplicantcommentmodel');
	}
  public final function index()
  {
    $o = $this->subscriberapplicantcommentmodel->index()->result();
    showView('subscriber_applicant_comments/index', array('subscriberApplicantComments' => $o));
  }
  public final function create()
  {
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $o = $this->subscriberapplicantcommentmodel->create()->row();
        if($o->id)
        {
          redirect(site_url('subscriber_applicant_comment/read/' . $o->id));
        }
        else
        {
          show_error('Error creating subscriber_applicant_comment.');
        }
      }
      else
      {
        showView('subscriber_applicant_comments/create');
      }
    }
    else
    {
      showView('subscriber_applicant_comments/create');
    }
  }
	public final function read($id)
	{
		showView('subscriber_applicant_comments/read', array('subscriberApplicantComment' => $this->subscriberapplicantcommentmodel->read($id)->row()));
	}
	public final function update($id = null)
  {
    $o = $this->subscriberapplicantcommentmodel->read($id)->row();
    $a = array('subscriberApplicantComment' => $o);
    if($this->input->post())
    {
      if($this->form_validation->run())
      {
        $b = $this->subscriberapplicantcommentmodel->update()->row();
        if($b)
        {
          redirect(site_url('subscriber_applicant_comment/read/' . $o->id));
        }
        else
        {
          show_error('Error updating subscriber_applicant_comment.');
        }
      }
      else
      {
        showView('subscriber_applicant_comments/update', $a);
      }
    }
    else
    {
      showView('subscriber_applicant_comments/update', $a);
    }
  }
	public final function delete($id)
  {
    showJsonView(array('subscriberApplicantComment' => $this->subscriberApplicantComment_model->delete($id)->row()));
  }
}