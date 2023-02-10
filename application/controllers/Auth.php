<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->output->set_header("X-Frame-Options: sameorigin");
		$this->output->set_header("X-XSS-Protection: 1; mode=block");
		$this->output->set_header("X-Content-Type-Options: nosniff");
		$this->output->set_header("Strict-Transport-Security: max-age=31536000");

		$this->lang->load('vasha', $this->db->get_where('setting', array('name' => 'language'))->row()->content);
	}

	function signin()
	{
		$email				=	$this->input->post('email');
		$password			=	$this->input->post('password');
		$query				=	$this->db->get_where('user', array('email' => $email, 'status' => 1));

		// MATCHES WITH THE USER TABLE
		if ($query->num_rows() > 0) {
			$db_password	=	$this->db->get_where('user', array('email' => $email))->row()->password;

			if (password_verify($password, $db_password)) {
				$this->session->set_userdata('user_type', $query->row()->user_type);
				$this->session->set_userdata('user_id', $query->row()->user_id);
				$this->session->set_userdata('permissions', explode(",", $query->row()->permissions));
				
				if ($query->row()->user_type == 3) {
					redirect(base_url() . 'monthly_invoices', 'refresh');
				}
				elseif(in_array($this->db->get_where('module', array('module_name' => 'dashboard'))->row()->module_id, $this->session->userdata('permissions'))) {
					redirect(base_url(), 'refresh');

				}
				elseif(in_array($this->db->get_where('module', array('module_name' => 'invoices'))->row()->module_id, $this->session->userdata('permissions'))) {
					redirect(base_url() . 'invoices', 'refresh');

				}
				elseif(in_array($this->db->get_where('module', array('module_name' => 'rooms'))->row()->module_id, $this->session->userdata('permissions'))) {
					redirect(base_url() . 'rooms', 'refresh');

				}
				elseif(in_array($this->db->get_where('module', array('module_name' => 'tenants'))->row()->module_id, $this->session->userdata('permissions'))) {
					redirect(base_url() . 'tenants', 'refresh');

				}
				else {
					$this->session->set_flashdata('success', $this->lang->line('auth_successful_login'));
					redirect(base_url(), 'refresh');
				}
			} else {
				$this->session->set_flashdata('warning', $this->lang->line('auth_incorrect_password'));

				redirect(base_url() . 'login', 'refresh');
			}
		} else {
			$this->session->set_flashdata('warning', $this->lang->line('auth_incorrect_email'));

			redirect(base_url() . 'login', 'refresh');
		}
	}

	function logout()
	{
		$this->session->unset_userdata('user_type');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('permissions');

		$this->session->set_flashdata('success', $this->lang->line('auth_successful_logout'));

		redirect(base_url()  . 'login', 'refresh');
	}
}
