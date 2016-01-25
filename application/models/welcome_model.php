<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	public function get_videos()
	{
		$videoInformation = array();

		/*$this->curl->create('https://demo2697834.mockable.io/movies');
		$this->curl->option('ssl_verifypeer', false);
		$data = $this->curl->execute();
		$videoInformation = json_decode($data);*/

		$videoInformation = json_decode(file_get_contents(base_url()."movies.json"));

		return $videoInformation;
	}

	public function set_session($videoId){

		$this->load->library('session');

		$user_history = $this->session->userdata('user_history');

		if(!in_array($videoId,(array)$user_history)){
			$user_history[] = $videoId;
		}

		$this->session->set_userdata("user_history",$user_history);
	}
}