<?php

namespace App\Http\Controllers;

class PostsController extends Controller {

	public function welcome() {

		return view('/welcome');
	}

	public function contact() {

		return view('/contact');
	}

	public function services() {
		return view('/services');
	}

	public function portfolio() {

		return view('/portfolio');
	}
}
