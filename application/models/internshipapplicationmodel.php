<?php	
	class InternshipApplicationModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('i.*');
			$this->db->from('internship_applications i');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			$this->db->insert
			(
				'internship_applications', 
				getPostValuePair()
			);
			return $this->read($this->db->insert_id());
		}
		public final function createFromApplication($internshipId)
		{
			$this->load->model('applicantmodel');
			$uId = getLoggedUser()->id;
			$applId = $this->applicantmodel->readByUserId($uId)->row()->id;
			$a = array
			(
				'applicant_id' => $applId,
				'internship_id' => $internshipId,
				'date_time_applied' => date("Y-m-d h:i:s")
			);
			$this->db->insert('internship_applications', $a);
			$iaId = $this->db->insert_id();
			return $this->read($iaId);
		}
		public final function read($id)
		{
	      return $this->db->get_where
	      (
	        'internship_applications', 
	        array('id' => $id)
	      );
		}
		public final function readDetails($internshipId)
	    {
	    	$this->db->select('u.full_name, a.id, a.current_position_title, ia.date_time_applied');
	    	$this->db->from('internship_applications ia');
	    	$this->db->join('applicants a', 'ia.applicant_id = a.id');
	    	$this->db->join('users u', 'a.user_id = u.id');
	    	$this->db->join('internships i', 'ia.internship_id = i.id');
	    	$this->db->join('employers e', 'i.employer_id = e.id');
	    	$this->db->where('i.id', $internshipId);
	    	return $this->db->get();	
	    }
		//@param  @entityType	String.  Either applicant, employer, internship. 
		public final function readBySpecificId($id, $entityType)
		{
			$this->db->select('*, i.id internship_id');
			$this->db->from('internship_applications ia');
			$this->db->join('applicants a', 'ia.applicant_id = a.id');
			$this->db->join('internships i', 'ia.internship_id = i.id');
			$this->db->join('employers e', 'i.employer_id = e.id');
			switch($entityType)
			{
				case 'applicant':
					$this->db->where('ia.applicant_id', $id);
				break;
				case 'employer':
					//Empl details can be found in the internships table.
					$this->db->group_by('i.id');
					$this->db->where('i.employer_id', $id);
				break;
				case 'internship':
					$this->db->where('ia.internship_id', $id);
				break;
			}
			return $this->db->get();
		}
		public final function hasApplied($internshipId)
		{
			if(!isLoggedIn()) return false;
			//
			$this->load->model('applicantmodel');
			$uId = getLoggedUser()->id;
			$applId = $this->applicantmodel->readByUserId($uId)->row()->id;
			$a = array
			(
				'id' => $internshipId,
				'applicant_id' => $applId,
			);
			$o = $this->db->get_where('internship_applications', $a);
			//echo $this->db->last_query(); exit;
			return $o->num_rows() > 0;
		}
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
		      (
		        'internship_applications', 
		        getPostValuePair()
		      );
		}
		public final function delete($id)
	    {
	      $this->db->where('internship_application.id', $id);
				return $this->db->delete();
	    }
	}