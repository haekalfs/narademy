<?php

class User_model extends CI_Model
{

	private $_table = 'user';

	public function list($limit = null, $offset = null)
	{
		$query = $this->db->get($this->_table, $limit, $offset);
		return $query->result();
	}

	public function insert($course)
	{
		return $this->db->insert($this->_table, $course);
	}

	public function update($course)
	{
		if (!isset($course['id'])) {
			return;
		}

		return $this->db->update($this->_table, $course, ['id' => $course['id']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}

	public function list_count()
	{
		$query = $this->db->get_where($this->_table, ['draft' => 'FALSE']);
		return $query->num_rows();
	}
}