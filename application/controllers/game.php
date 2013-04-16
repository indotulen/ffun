<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('farmingfun');
		$this->load->helper(array('url','asset','html'));
	}

	function index() {
		$data['title'] = "Welcome to the game";
		$this->load->view('head',$data);
		$this->load->view('cover/cover_view');
		$this->load->view('foot');
	}
	
	function welcome() {
		$this->load->view('welcome_message');
	}

	function profile() {
		$data['title'] = "Farming Fun Tutorial";
		$this->load->view('head',$data);
		$this->load->view('header_box');	//=> header box seperti tulisan TUTORIAL
		$this->load->view('menu_bar');		//=> menu, seperti Home, inventori, dll
		$this->load->view('play/play_index_view');
		$this->load->view('foot');
	}

	function farm()	{
		$data['title'] = "Farm";
		$r['status_tanam'] = "tanam";

		$q1 = $this->db->get_where('lahan',array('id_lahan' => 1));
		$q2 = $this->db->get_where('lahan',array('id_lahan' => 2));
		$q3 = $this->db->get_where('lahan',array('id_lahan' => 3));
		$q4 = $this->db->get_where('lahan',array('id_lahan' => 4));
		$q5 = $this->db->get_where('lahan',array('id_lahan' => 5));
		$q6 = $this->db->get_where('lahan',array('id_lahan' => 6));
		$q7 = $this->db->get_where('lahan',array('id_lahan' => 7));
		$q8 = $this->db->get_where('lahan',array('id_lahan' => 8));
		$q9 = $this->db->get_where('lahan',array('id_lahan' => 9));
		$row1 = $q1->row();
		$row2 = $q2->row();
		$row3 = $q3->row();
		$row4 = $q4->row();
		$row5 = $q5->row();
		$row6 = $q6->row();
		$row7 = $q7->row();
		$row8 = $q8->row();
		$row9 = $q9->row();
		$r['pic1'] = $row1->pic;
		$r['pic2'] = $row2->pic;
		$r['pic3'] = $row3->pic;
		$r['pic4'] = $row4->pic;
		$r['pic5'] = $row5->pic;
		$r['pic6'] = $row6->pic;
		$r['pic7'] = $row7->pic;
		$r['pic8'] = $row8->pic;
		$r['pic9'] = $row9->pic;

		$qq1 = $this->db->get_where('tanaman',array('id_tanaman' => 1));
		// $qq2 = $this->db->get_where('tanaman',array('id_tanaman' => 2));
		// $qq3 = $this->db->get_where('tanaman',array('id_tanaman' => 3));
		// $qq4 = $this->db->get_where('tanaman',array('id_tanaman' => 4));
		// $qq5 = $this->db->get_where('tanaman',array('id_tanaman' => 5));
		// $qq6 = $this->db->get_where('tanaman',array('id_tanaman' => 6));
		// $qq7 = $this->db->get_where('tanaman',array('id_tanaman' => 7));
		// $qq8 = $this->db->get_where('tanaman',array('id_tanaman' => 8));
		// $qq9 = $this->db->get_where('tanaman',array('id_tanaman' => 9));
		$id_tanaman1 = $qq1->row()->id_tanaman;
		// $id_tanaman2 = $qq2->row()->id_tanaman;
		// $id_tanaman3 = $qq3->row()->id_tanaman;
		// $id_tanaman4 = $qq4->row()->id_tanaman;
		// $id_tanaman5 = $qq5->row()->id_tanaman;
		// $id_tanaman6 = $qq6->row()->id_tanaman;
		// $id_tanaman7 = $qq7->row()->id_tanaman;
		// $id_tanaman8 = $qq8->row()->id_tanaman;
		// $id_tanaman9 = $qq9->row()->id_tanaman;
		$waktu_tumbuh1 = $qq1->row()->waktu_tumbuh;
		// $waktu_tumbuh2 = $qq2->row()->waktu_tumbuh;
		// $waktu_tumbuh3 = $qq3->row()->waktu_tumbuh;
		// $waktu_tumbuh4 = $qq4->row()->waktu_tumbuh;
		// $waktu_tumbuh5 = $qq5->row()->waktu_tumbuh;
		// $waktu_tumbuh6 = $qq6->row()->waktu_tumbuh;
		// $waktu_tumbuh7 = $qq7->row()->waktu_tumbuh;
		// $waktu_tumbuh8 = $qq8->row()->waktu_tumbuh;
		// $waktu_tumbuh9 = $qq9->row()->waktu_tumbuh;

		$this->farmingfun->farming($id_tanaman1,$waktu_tumbuh1);

		$this->load->view('head',$data);
		$this->load->view('header_box');	//=> header box seperti tulisan TUTORIAL
		$this->load->view('menu_bar');		//=> menu, seperti Home, inventori, dll
		$this->load->view('play/play_farm_view',$r);
		$this->load->view('foot');
	}

	function bibit() {
		$data['title'] = "Pilih bibit";

		$q_tnm = $this->db->get('tanaman');
		$q_lhn = $this->db->get('lahan');
		$row['tnm1'] = $q_tnm->row()->pic;
		$id_tnm1 = $q_tnm->row()->id_tanaman;
		$row['lhn1'] = $q_lhn->row()->pic;
		$id_lhn1 = $q_lhn->row()->id_lahan;

		if (isset($_GET['act'])) {
			if (isset($_GET['farm'])) {
				$data = array('pic' => $row['tnm1']);

				$this->db->where('id_lahan',$_GET['farm']);
				$this->db->update('lahan',$data);
				header("location:../farm");
			}
		}

		$this->load->view('head',$data);
		$this->load->view('header_box');	//=> header box seperti tulisan TUTORIAL
		$this->load->view('menu_bar');		//=> menu, seperti Home, inventori, dll
		$this->load->view('play/play_bibit_view',$row);
		$this->load->view('foot');	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */