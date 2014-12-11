<?php	class WorkHistoryModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('w.*');
			$this->db->from('work_histories w');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			$this->db->insert
			(
				'work_histories', 
				getPostValuePair()
			);
			return $this->read($this->db->insert_id());
		}
		public final function read($id)
		{
      return $this->db->get_where
      (
        'work_histories', 
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
        'work_histories', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('work_history.id', $id);
			return $this->db->delete();
    }
	}