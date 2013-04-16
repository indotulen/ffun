<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GameModel extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function update_lahan() {
		$panen = "img/panen/panen.png";
		$data = array('pic' => $panen);
		$this->db->where('id_lahan',$id_lahan);
		$update = $this->db->update('lahan',$data);
	}

	function update_level() {
		$level = $level+1;
		$data = array('level' => $level);
		$this->db->update('user',$data)
	}
}

/* End of file GameModel.php */
/* Location: ./application/models/GameModel.php */