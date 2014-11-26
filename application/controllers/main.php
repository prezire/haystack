<?php 
  if(!defined('BASEPATH')) 
    exit('No direct script access allowed');

class Main extends CI_Controller 
{
  public function __construct(){parent::__construct();}
	public final function index()
  {
    $this->load->model('applicantmodel');
    $this->load->model('internshipmodel');
    $appls = $this->applicantmodel->index()->result();
    $applsSummary = $this->applicantmodel->readGroupedSummary()->result();
    $internsSummary = $this->internshipmodel->readGroupedSummary()->result();
    $groupedSummary = array
    (
      'applicants' => $applsSummary, 
      'internships' => $internsSummary
    );
    $a = array
    (
      'applicants' => $appls,
      'groupedSummary' => $groupedSummary
    );
    showView('home', $a);
  }
  public final function register(){showView('register');}
  public final function registerSuccess(){showView('register_success');}
  public final function about()
  {
    if($this->input->post())
    {
      //Send to email.
    }
    else
    {
      showView('about');
    }
  }
  public final function faq(){showView('faq');}
  public final function search()
  {
    if($this->input->post())
    {
      $o = $this->mainmodel->search();
      $a = array('results' => $o);
      showView('search_results', $a);
    }
  }
}