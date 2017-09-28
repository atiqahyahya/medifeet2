<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	 public function getManager(){
	 	return view('manager');

	 }

	 public function getStaff(){
	 	return view('staff');

	 }

	 public function getItem(){
	 	return view('item');

	 }


}