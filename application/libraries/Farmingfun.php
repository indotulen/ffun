<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Farmingfun {
	function __construct() {
		$CI =& get_instance();
		$CI->load->model('GameModel');
	}
	# fungsi naik level
	private function level_up($lvl) {
		$lvl++;
		$CI->db->update($lvl);
	}

	# fungsi energi turun
	private function energi_down($level,$energi) {
		$energi--;	# energi berkurang sesuai level
		$CI->db->update($energi);
	}
	
	# fungsi water turun
	private function water_down($water,$level) {
		$water--;	# water berkurang sesuai level
		$CI->db->update($water);
	}

	# param $value dari get db panjang bar
	public function water_bar($value) {
		$value = $value + 2;
		return $value;
	}

	public function level_bar($value) {
		$value = $value + 2;
		return $value;
	}

	# fungsi exp (quest)
	public function exp_petani($exp,$lvl) {
		if ($exp == 10 || $exp == 35 || $exp == 80 || $exp == 150 || $exp == 250 || $exp == 385 || $exp == 560
			|| $exp == 780 || $exp == 1045 || $exp == 1360) {
			level_up($lvl);
		}
	}

	# fungsi farming (quest)
	public function farming($id_tanaman,$waktu_tumbuh) {
		if (isset($_GET['lhn'])) {
			$CI->GameModel->update_lahan();
			header("location:farm");
		}
	}

	# fungsi di ?lahan
	public function lahan($lahan,$user) {
		lahan_change($lahan,$user);
	}

	# fungsi siram (quest)
	public function siram() {
		lahan_change($lahan,$user);
		energi_down($level,$energi);
		water_down($water,$level);
	}
}

/* End of file Farmingfun.php */
/* location: .application/libraries/Farmingfun.php */