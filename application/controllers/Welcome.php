<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//use PHPMailer\PHPMailer\Exception;

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('Email_library');

		$this->email_library->do_email('londuso@ke.ci.org', 'Onduso');
		// $this->email_library->do_email('nkarisa@ke.ci.org', 'karisa');
		// $this->email_library->do_email('gkimani@ke.ci.org', 'Kimani');
		// $this->email_library->do_email('jmuchori@ke.ci.org', 'Muchori');
		// $this->email_library->do_email('nkmwambs@gmail.com', 'Karisa');
		// $this->email_library->do_email('livingstoneonduso@gmail.com', 'Onduso');
	//	$this->email_library->do_email('geogakim@gmail.com', 'Kimani');

		

		$this->load->view('welcome_message');
	}
}
