<?php

/**
 * Logout controller
 */
class Logout extends Controller
{
	
	function index()
	{
		// code...
		Auth::logout();
		$this->redirect('login');

	}
}