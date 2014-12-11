<?php	class ResumeModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('r.*');
			$this->db->from('resumes r');
      //
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			$this->db->insert
			(
				'resumes', 
				getPostValuePair()
			);
			return $this->read($this->db->insert_id());
		}
    public final function createFromProfile()
    {
      $a = array();
      $i = $this->input;
      $fName = $i->post('full_name');
      $this->db->create('resumes', array('full_name' => $fName));
      return $this->read($this->db->result_id());
    }
		public final function read($id)
		{
      $this->db->select('r.*');
			$this->db->from('resumes r');
      $this->db->join('work_histories wh', 'wh.resume_id = r.id');
      $this->db->join('educations e', 'e.resume_id = r.id');
      $this->db->join('skills s', 's.resume_id = r.id');
      $this->db->join('certifcations c', 'c.resume_id = r.id');
      $this->db->join('additional_informations ai', 'ai.resume_id = r.id');
      $this->db->where('id', $id);
      return $this->db->get();
		}
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'resumes', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('resume.id', $id);
			return $this->db->delete();
    }
	}