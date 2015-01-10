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
      $kwds = $i->post('keywords');
      /*http://stackoverflow.com/questions/394041/mysql-how-to-search-multiple-tables-for-a-string-existing-in-any-column
      union all
      select * from table2 where match(col1, col2) against ('some string')
      union all
      select * from table3 where match(col1, col2, col3, col4) against ('some string')*/
      $s = "SELECT * FROM internships WHERE MATCH (name, industry, description) AGAINST ('$kwds' IN BOOLEAN MODE)";
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