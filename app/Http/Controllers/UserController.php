<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
    	return 'hello world';
}
	public function login() {
		return view('frontend.login');
	}
}