<?php 
  if(!defined('BASEPATH')) exit('No direct script access allowed');
  class InternshipApplication extends CI_Controller 
  {
  	public function __construct()
  	{
  		parent::__construct();
      validateLoginSession
      (
        array('create', 'read', 'update', 'delete')
      );
      $this->load->model('internshipapplicationmodel');
  	}
    public final function index()
    {
      if(isLoggedIn())
      {
        $this->load->model('applicantmodel');
        $this->load->model('employermodel');
        $uId = getLoggedUser()->id;
        $r = getRoleName();
        if($r == 'Applicant')
        {
          $applId = $this->applicantmodel->readByUserId($uId)->row()->id;
          $o = $this->internshipapplicationmodel->readBySpecificId
          (
            $applId, 
            'applicant'
          )->result();
          showView
          (
            'internship_applications/applicant', 
            array('applications' => $o)
          );
        }
        else if($r == 'Employer')
        {
          $emplId = $this->employermodel->readByUserId($uId)->row()->id;
          $oAppliedInternships = $this->internshipapplicationmodel->readBySpecificId
          (
            $emplId, 
            'employer'
          )->result();
          $aAppliedInternships = array();
          foreach($oAppliedInternships as $ai)
          {
            $tmpApplInterns = array();
            $tmpApplInterns['id'] = $ai->id;
            $tmpApplInterns['internshipId'] = $ai->internship_id;
            $tmpApplInterns['name'] = $ai->name;
            $tmpApplInterns['description'] = $ai->description;
            $tmpApplInterns['dateFrom'] = $ai->date_from;
            $tmpApplInterns['dateTo'] = $ai->date_to;
            $tmpApplInterns['vacancyCount'] = $ai->vacancy_count;
            $summary = $this->internshipapplicationmodel->readDetails
            (
              $ai->internship_id
            );
            $count = $summary->num_rows();
            $tmpApplInterns['summaryCount'] = $count;
            $applicants = $summary->result();
            $tmpApplInterns['applicants'] = array();
            foreach($applicants as $applicant)
            {
              $applId = $applicant->id;
              $fullName = $applicant->full_name;
              $applCurrPosTtl = $applicant->current_position_title;
              $tmpApplicants = array
              (
                'applicant' => array
                (
                  'id' => $applId,
                  'fullName' => $fullName,
                  'currentPositionTitle' => $applCurrPosTtl,
                  'dateTimeApplied' => $applicant->date_time_applied
                )
              );
              array_push($tmpApplInterns['applicants'], $tmpApplicants);
            }
            array_push($aAppliedInternships, $tmpApplInterns);
          }
          showView
          (
            'internship_applications/employer', 
            array('appliedInternships' => $aAppliedInternships)
          );
        }
        
      }
    }
    public final function create()
    {
      if($this->input->post())
      {
        if($this->form_validation->run())
        {
          $o = $this->internshipapplicationmodel->create()->row();
          if($o->id)
          {
            redirect(site_url('internship_application/read/' . $o->id));
          }
          else
          {
            show_error('Error creating internship_application.');
          }
        }
        else
        {
          showView('internship_applications/create');
        }
      }
      else
      {
        showView('internship_applications/create');
      }
    }
    public final function createFromApplication($internshipId)
    {
      if(isLoggedIn())
      {
        $ia = $this->internshipapplicationmodel->createFromApplication($internshipId)->row();
        showJsonView
        (
          array
          (
            'success' => true, 
            'internship_application' => $ia
          )
        );
      }
      else
      {
        showJsonView(array('success' => false));
      }
    }
  	public final function read($id)
  	{
  		showView('internship_applications/read', array('internshipApplication' => $this->internshipapplicationmodel->read($id)->row()));
  	}
  	public final function update($id = null)
    {
      $o = $this->internshipapplicationmodel->read($id)->row();
      $a = array('internshipApplication' => $o);
      if($this->input->post())
      {
        if($this->form_validation->run())
        {
          $b = $this->internshipapplicationmodel->update()->row();
          if($b)
          {
            redirect(site_url('internship_application/read/' . $o->id));
          }
          else
          {
            show_error('Error updating internship_application.');
          }
        }
        else
        {
          showView('internship_applications/update', $a);
        }
      }
      else
      {
        showView('internship_applications/update', $a);
      }
    }
  	public final function delete($id)
    {
      showJsonView(array('internshipApplication' => $this->internshipApplication_model->delete($id)->row()));
    }
  }