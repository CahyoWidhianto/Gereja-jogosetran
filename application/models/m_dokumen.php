<?php

class M_Dokumen extends CI_Model
{
	var $table ="dokumen";
    var $primaryKey ="no_dokumen";
	
	function data_taking()
	{
		return $this->db->get('dokumen');
	}

	function show_data()
	{
		return $this->db->get('dokumen');
	}
	public function getByPrimaryKey($id)
	{
		$this->db->where($this->primaryKey, $id);
        return $this->db->get($this->table)->row();
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data);
	}

	function delete_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function delete($id)
    {
        return $this->db->where($this->primaryKey,$id)->delete($this->table);
    }

	function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
