<?php	
  class ApplicantModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('a.*, u.*, u.id user_id');
			$this->db->from('applicants a');
      $this->db->join('users u', 'a.user_id = u.id');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
        $a = getPostValuePair
        (
          array
          (
            'role',
            'expected_salary',
            'desired_internship_position',
            'preferred_country',
            'current_position_title'
          )
        );
        $this->load->model('rolemodel');
        $a['role_id'] = $this->rolemodel->readByName($i->post('role'))->row()->id;
        $a['enable_token'] = md5(date('Ymd') . rand(0, 999) . time());
        $this->db->insert('users', $a);
        $uId = $this->db->insert_id();
        //upload('image_path');
        //upload('resume_path');
        //
        $this->db->insert
				(
					'applicants', 
					array
          (
            'user_id' => $uId,
            'expected_salary' => $i->post('expected_salary'),
            'desired_internship_position' => $i->post('desired_internship_position'),
            'preferred_country' => $i->post('preferred_country'),
            'current_position_title' => $i->post('current_position_title')
          )
				);
        //Create resume.
        $applId = $this->db->insert_id();
        $this->db->insert('resumes', array('applicant_id' => $applId));
        //
        $this->load->model('usermodel');
				return $this->usermodel->read($uId);
			}
		}
		public final function read($id)
		{
      return $this->db->get_where
      (
        'applicants', 
        array('id' => $id)
      );
		}
    public final function readByUserId($userId)
    {
      return $this->db->get_where
      (
        'applicants', 
        array('user_id' => $userId)
      );
    }
    public final function readByJobTitle($jobTitle)
    {
      return $this->db->get_where
      (
        'applicants', 
        array('current_position_title' => $jobTitle)
      );
    }
    public final function readGroupedSummary()
    {
      $this->db->select("current_position_title, count(id) as count");
			$this->db->from('applicants');
      $this->db->group_by('current_position_title');
			return $this->db->get();
    }
		public final function update()
		{
			$i = $this->input;
      //
      //
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'applicants', 
        getPostValuePair()
      );
      //
      
      return $this->read($i->post('id'));
		}
		public final function delete($id)
    {
      $this->db->where('applicant.id', $id);
			return $this->db->delete();
    }
	}