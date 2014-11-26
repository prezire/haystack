<?php	class CommentModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('c.*, u1.full_name commenter_full_name, u2.full_name commented_full_name');
			$this->db->from('comments c');
      $this->db->join('users u1', 'c.from_user_id = u1.id');
      $this->db->join('users u2', 'c.to_user_id = u2.id');
      $this->db->where('to_user_id', getLoggedUser()->id);
			return $this->db->get();
		}
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
				$this->db->insert
				(
					'comments', 
					getPostValuePair()
				);
				return $this->read($this->db->insert_id());
			}
		}
    public final function createForProfile()
		{
			$i = $this->input;
      $a = getPostValuePair(array('applicant_id'));
      $this->load->model('applicantmodel');
      $uId = $this->applicantmodel->read($i->post('applicant_id'))->row()->user_id;
      $a['to_user_id'] = $uId;
      $this->db->insert('comments', $a);
      return $this->read($this->db->insert_id());
		}
    public final function readByCommentedUserId($userId)
    {
      $this->db->select('c.*, u1.id commenter_id, u1.full_name commenter_full_name, u2.full_name commented_full_name');
			$this->db->from('comments c');
      $this->db->join('users u1', 'c.from_user_id = u1.id');
      $this->db->join('users u2', 'c.to_user_id = u2.id');
      $this->db->where('to_user_id', $userId);
      $this->db->where('approved', true);
			return $this->db->get();
    }
		public final function read($id)
		{
      return $this->db->get_where
      (
        'comments', 
        array('id' => $id)
      );
		}
    public final function updateApproved($id, $approved)
    {
      $b = $approved == 'true' ? true : false;
      $this->db->where('id', $id);
      $this->db->update('comments', array('approved' => $b));
      return $this->read($id);
    }
		public final function update()
		{
			$i = $this->input;
			$id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'comments', 
        getPostValuePair()
      );
		}
		public final function delete($id)
    {
      $this->db->where('comment.id', $id);
			return $this->db->delete();
    }
	}