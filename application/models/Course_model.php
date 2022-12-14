<?php

class Course_model extends CI_Model
{
	private $_table = 'courses';

	public function get($limit = null, $offset = null)
	{
		$query = $this->db->get($this->_table, $limit, $offset);
		return $query->result();
	}
	public function get_published($limit = null, $offset = null)
	{
		if (!$limit && $offset) {
			$query = $this->db
				->get_where($this->_table, ['draft' => 'FALSE']);
		} else {
			$query = $this->db->order_by("title", "asc");
			$query =  $this->db
				->get_where($this->_table, ['draft' => 'FALSE'], $limit, $offset);
		}
		return $query->result();
	}

	public function find_by_slug($slug)
	{
		if (!$slug) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['slug' => $slug]);
		return $query->row();
	}

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function find_title($course_title)
	{
		if (!$course_title) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['title' => $course_title]);
		return $query->row();
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

	public function count(){
		return $this->db->count_all($this->_table);
	}

	public function rules()
	{
		return [
			[
				'field' => 'title',
				'label' => 'Title',
				'rules' => 'required|max_length[128]'
			],
			[
				'field' => 'draft',
				'label' => 'Draft',
				'rules' => 'required|in_list[true,false]'
			],
			[
				'field' => 'content',
				'label' => 'Content',
				'rules' => '' // <-- rules dikosongkan
			]
		];
	}

	public function search($keyword)
	{
		if(!$keyword){
			return null;
		}
		$this->db->like('title', $keyword);
		$this->db->or_like('content', $keyword);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function get_published_count()
	{
		$query = $this->db->get_where($this->_table, ['draft' => 'FALSE']);
		return $query->num_rows();
	}
}