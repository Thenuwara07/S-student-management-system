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

		//$data = $user->where('firstname','pramuka');

        $arr['firstname'] = 'Thushanka';
        $arr['lastname'] = 'Pramuditha';
        $arr['date'] = '2023-11-13 18:32:18.000000';
        $arr['user_id'] = 'user_020';
        $arr['gender'] = 'male';
        $arr['school_id'] = 'school_010';
        $arr['rank'] = 'student';

         $user->insert($arr);
        // $user->update(id,$data);
        // $user->delete(id);

		$this->view('v_home',['rows'=>$data]);
	}
}