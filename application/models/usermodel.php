<?php	class UserModel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		public final function index()
		{
			$this->db->select('u.*');
			$this->db->from('users u');
			return $this->db->get();
		}
    public final function generateToken($id)
    {
      return md5($id . rand(0, 999) . time());
    }
    public final function enable($state, $enableToken)
    {
      $this->db->where('enable_token', $enableToken);
      $this->db->update('users')->row()->id;
      return $this->db->affected_rows();
    }
		public final function create()
		{
			$i = $this->input;
			if($i->post())
			{
				$this->db->insert
				(
					'users', 
					getPostValuePair(array('role'))
				);
        $id = $this->db->insert_id();
        $this->uploadAvatar($id);
				return $this->read($id);
			}
		}
		public final function read($id)
		{
      return $this->db->get_where
      (
        'users', 
        array('id' => $id)
      );
		}
    private final function uploadAvatar($userId)
    {
      //TODO: Query and remove prev image file.
      $avatar = upload('image_path');
      if(isset($avatar))
      {
        $a = array
        (
          'image_path' => $avatar['file_name'],
          'image_filename' => $avatar['orig_name']
        );
        $this->db->where('id', $userId);
        $this->db->update('users', $a);
      }
    }
		public final function update()
		{
			$i = $this->input;
      $id = $i->post('id');
			$this->db->where('id', $id);
			$this->db->update
      (
        'users', 
        getPostValuePair()
      );
      $this->uploadAvatar($i->post('id'));
      return $this->read($i->post('id'));
		}
		public final function delete($id)
    {
      $this->db->where('user.id', $id);
			return $this->db->delete();
    }
	}