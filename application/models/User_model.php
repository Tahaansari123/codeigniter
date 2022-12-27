<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{

  public function create($formdata)
  {
    $formdata['status'] = 1;
    $this->db->insert('users', $formdata);
  }

  public function UserLogin($email, $password)
  {

    $this->db->where('email', $email);
    $this->db->where('password', $password);
    return  $this->db->get('users')->row_array();

  }


  public function getUser()
  {
    return $this->db->get('users')->result();
  }

  public function editUser($id)
  {
    $query = $this->db->get_where('users', ['id' => $id]);
    return $query->row();
  }

  public function updateUser($id, $edit)
  {
    return $this->db->update('users', $edit, ['id' => $id]);
  }

  public function deleteUser($id)
  {
    return $this->db->delete('users', ['id' => $id]);
  }
}