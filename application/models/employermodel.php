<?php	class EmployerModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('e.*');
			$this->db->from('employers e');
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
        $a = getPostValuePair(array('role'));
        $this->load->model('rolemodel');
        $a['role_id'] = $this->rolemodel->readByName($i->post('role'))->row()->id;
        $this->db->insert('users', $a);
        $uId = $this->db->insert_id();
        //upload('avatar');
        //
				$this->db->insert
				(
					'employers', 
					array('user_id' => $uId)
				);
				$this->load->model('usermodel');
				return $this->usermodel->read($uId);
			}
		}
		public final function read($id)
		{
      return $this->db->get_where
      (
        'employers', 
        array('id' => $id)
      );
		}
    public final function readByUserId($userId)
    {
      return $this->db->get_where('employers', array('user_id' => $userId));
    }
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'employers', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('employer.id', $id);
			return $this->db->delete();
    }
	}