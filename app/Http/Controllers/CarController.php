<?php

namespace App\Http\Controllers;

use App\Car;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
    a method that create a new car
	*/ 
	public function create(Request $request){
		$make=$request['make'];
		$model=$request['model'];
		$produced_on=$request['produced_on'];

		$car=new Car();

		$car->make=$make;
		$car->model=$model;
		$car->produced_on=$produced_on;

		$car->save();

		return redirect()->back();
	}

	/**
    a method that shows all the cars
	*/ 
	public function show(){
		$cars=Car::all();

		return view('index', ['cars'=>$cars]);
	}



}
