<?php	class InternshipModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('i.*');
			$this->db->from('internships i');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
        $this->load->model('employermodel');
        $empId = $this->employermodel->readByUserId(getLoggedUser()->id)->row()->id;
        $a = getPostValuePair();
        $a['employer_id'] = $empId;
        //
				$this->db->insert('internships', $a);
				return $this->read($this->db->insert_id());
			}
		}
		public final function read($id)
		{
      $this->db->select('*, i.id internship_id, i.id employer_id');
      $this->db->from('internships i');
      $this->db->join('employers e', 'e.id = i.employer_id');
      $this->db->join('users u', 'e.user_id = u.id');
      $this->db->where('i.id', $id);
      return $this->db->get();
		}
    public final function readByIndustry($industry)
		{
      return $this->db->get_where
      (
        'internships', 
        array('industry' => $industry)
      );
		}
    public final function readGroupedSummary()
    {
      $this->db->select("industry, count(id) as count");
			$this->db->from('internships');
      $this->db->group_by('industry');
			return $this->db->get();
    }
    public final function readMyPosts()
    {
      $uId = getLoggedUser()->id;
      $this->load->model('employermodel');
      $empId = $this->employermodel->readByUserId($uId)->row()->id;
      //
      $this->db->select('*');
      $this->db->from('internships');
      $this->db->where('employer_id', $empId);
      return $this->db->get();
    }
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'internships', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('id', $id);
			$this->db->delete('internships');
    }
	}