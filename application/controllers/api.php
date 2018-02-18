<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_controller.php';

class Api extends REST_Controller {
	function __construct() {
		parent::__construct();
	}

	private function _array_student() {
        $student = array(
            1 => array('first' => 'Jim', 'last_name' => 'Test'),
            2 => array('first' => 'Jane', 'last_name' => 'Doe'),
            3 => array('nom' => 'sss', 'prenom' => 'ss_prenom')
        );

	    return $student;

    }
	function student_get() {
		$id = $this->uri->segment(3);
		$student = $this->_array_student();
		if (isset($student[$id])) {
			$this->response(array('status' => 'success', 'message' => $student[$id]));
		}
		else {
			$this->response(array('status' => 'failure', 'message' => 'The specified student could not be found'), REST_Controller::HTTP_CONFLICT);
		}
	}

    function students_get() {
        $student = $this->_array_student();
        if (isset($student)) {
            $this->response(array('status' => 'success', 'message' => $student));
        }
        else {
            $this->response(array('status' => 'failure', 'message' => 'The specified student could not be found'), REST_Controller::HTTP_CONFLICT);
        }
    }

	function professor_get() {
	    $id = $this->uri->segment(3);
	    $professor = array(
	        1 => array('ss' => 'sd', 's2' => 's3'),
            2 => array('sb' => 's1', 'ss1' => 's3')
        );
	    if (isset($professor[$id])) {
	        $this->response(array('status' => 'success', 'message' => $professor[$id]));
        } else {
            $this->response(array('status' => 'failure', 'message' => 'The specified student could not be found'), REST_Controller::HTTP_CONFLICT);
        }
    }
}