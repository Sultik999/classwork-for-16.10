<?php

namespace App\Http\Controllers;
 

use Illuminate\Http\Request;
use App\Car;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class MyController extends Controller
{
    //
	
	public function create(){
		
		return view('index');
	}


	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|max:255',
			'grade' => 'required|numeric'
		]);

		$cars = new Car();
		$cars->name = $request->name;
		$cars->grade = $request->grade;

		Mail::to('mansuraidyn.kalen@sdu.edu.kz')
		->send(new MyMail("qwertyui sdfghj cvbnm, sdfgh"));
	}

	
}
