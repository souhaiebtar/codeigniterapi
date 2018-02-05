<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_controller.php';

class Api extends REST_Controller {
	function __construct() {
		parent::__construct();
	}

	function student_get() {
		$id = $this->uri->segment(3);
		$student = array(
			1 => array('first' => 'Jim', 'last_name' => 'Test'),
			2 => array('first' => 'Jane', 'last_name' => 'Doe')
		);
		if (isset($student[$id])) {
			$this->response(array('status' => 'success', 'message' => $student[$id]));
		}
		else {
			$this->response(array('status' => 'failure', 'message' => 'The specified student could not be found'), REST_Controller::HTTP_CONFLICT);
		}
	}
}