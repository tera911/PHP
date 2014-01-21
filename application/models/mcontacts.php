<?php
class MContacts extends CI_Model {
/**
 * CodeIgniterではModelを作成する場合はCI_Modelを継承する
 * 命名規則は最初は大文字。
 * 
 * example.
 * //sakura.php
 * class Sakura extends CI_Model{}
 */
	
	/**
	 * constructer
	 * 機能拡張はないので親のconstructerをそのまま使う
	 */
	function __construct() {
		parent::__construct();
	}


	function addContact() {
		$this->load->helper('security');
		$now = date("Y-m-d H:i:s");
		$data = array( 
			'name' => $this->security->xss_clean($this->input->post('name')),
			'email' => $this->security->xss_clean($this->input->post('email')),
			'notes' => $this->security->xss_clean($this->input->post('notes')),
			'ipaddress' => $this->input->ip_address(),
			'stamp' => $now
		);

		$this->db->insert('contacts', $data);	 
	}
}
?>