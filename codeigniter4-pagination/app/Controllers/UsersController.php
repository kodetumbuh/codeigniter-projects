<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Users;

class UsersController extends BaseController
{
	public function index()
	{
		return redirect()->route('loadRecord');
	}


	public function loadRecord(){
		$request = service('request');
		$searchData = $request->getGet();

		$search = "";
		if(isset($searchData) && isset($searchData['search'])){
			$search = $searchData['search'];
		}

    // Get data 
		$users = new Users();

		if($search == ''){
			$paginateData = $users->paginate(10);
		}else{
			$paginateData = $users->select('*')
			->orLike('name', $search)
			->orLike('email', $search)
			->orLike('city', $search)
			->paginate(10);
		}

		$data = [
			'users' => $paginateData,
			'pager' => $users->pager,
			'search' => $search
		];

		return view('index',$data); 
	}
}
