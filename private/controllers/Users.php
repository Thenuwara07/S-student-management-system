<?php

/**
 * userscontroller
 */
class Users extends Controller
{
	
	function index()
	{
		// code...
		if(!Auth::logged_in()){
			$this->redirect('login');
		}

        $user = new User();
		$data = $user->findAll();

		$this->view('v_users',['rows'=>$data]);
	}
}