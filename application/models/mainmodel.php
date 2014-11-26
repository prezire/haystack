<?php	class MainModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			//
		}
    public final function search()
    {
      $i = $this->input;
      //search fields in users, applicants, employers, subscribers, internships.
      $kwds = $i->post('keywords');
      $ctry = $i->post('country');
      //$s = "SELECT * FROM searchengine WHERE pagecontent LIKE '%$_GET[term]%'";
      return $this->db->query($s);
    }
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
        $this->db->insert
				(
					'users', 
					getPostValuePair
          (
            array
            (
              'role',
              'expected_salary',
              'internship_position',
              'preferred_country',
              'job_title'
            )
          )
				);
        $uId = $this->db->insert_id();
        //upload('avatar');
        //upload('resume');
        //
        $this->db->insert
				(
					'applicants', 
					array
          (
            'user_id' => $uId,
            'expected_salary' => $i->post('expected_salary'),
            'internship_position' => $i->post('internship_position'),
            'preferred_country' => $i->post('preferred_country'),
            'job_title' => $i->post('job_title')
          )
				);
				return $this->read($this->db->insert_id());
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
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'applicants', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('applicant.id', $id);
			return $this->db->delete();
    }
	}