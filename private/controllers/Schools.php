<?php

/**
 * schools controller
 */
class Schools extends Controller
{
	
	function index()
	{
		// code...
		if(!Auth::logged_in()){
			$this->redirect('login');
		}

        $school = new School();
		$data = $school->findAll();

		$this->view('v_schools',['rows'=>$data]);
	}
}