<?php

class Mascotas_m extends CI_Model {
	function get_all() {
		$this->db->select("id, nombre, especie");
		$this->db->order_by("nombre");
		return $this->db->get("Mascotas")->result();
	}
}

?>