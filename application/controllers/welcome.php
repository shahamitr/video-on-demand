<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('welcome_model');
	}

	public function index()
	{
		$data['title'] = "Welcome to Video on Demand";
		$data['videos'] = $this->welcome_model->get_videos();
		$this->load->view('templates/header');
		$this->load->view('welcome_message',$data);
		$this->load->view('templates/footer');
	}

	public function play()
	{
		$videos = $this->welcome_model->get_videos();
		$video_info = $videos->entries[$_GET['v']];
		$this->welcome_model->set_session($_GET['v']);
		$data['title'] = "Full Screen Video";
		$data['video_info'] = $video_info;
		$this->load->view('templates/header');
		$this->load->view('play',$data);
		$this->load->view('templates/footer');
	}

	public function history()
	{
		$data['title'] = "Watch History";
		$data['session_list'] = $this->session->userdata('user_history');
		$data['videoInformation'] = json_decode(file_get_contents(base_url()."movies.json"));
		$this->load->view('templates/header');
		$this->load->view('watch-history',$data);
		$this->load->view('templates/footer');
	}

	public function clear()
	{
		$this->session->unset_userdata('user_history');
		redirect(base_url());
	}

	public function cron()
	{
		$this->welcome_model->populate_videos();
		redirect(base_url());
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */