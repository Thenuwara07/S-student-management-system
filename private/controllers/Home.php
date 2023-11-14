<?php

/**
 * home controller
 */
class Home extends Controller
{
	
	function index()
	{
		// code...
        $user = new User();
		$data = $user->findAll();

		$this->view('v_home',['rows'=>$data]);
	}
}