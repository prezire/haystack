<?php	class EducationModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('e.*');
			$this->db->from('educations e');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			$this->db->insert
			(
				'educations', 
				getPostValuePair()
			);
			return $this->read($this->db->insert_id());
		}
		public final function read($id)
		{
      return $this->db->get_where
      (
        'educations', 
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
        'educations', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('education.id', $id);
			return $this->db->delete();
    }
	}