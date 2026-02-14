<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index() {
		$now = time();
		$name = "Nawaf Ibrahim";
		return view('welcome', [
		'current_time' => $now,
		'name_a' => $name,
		'active' => 'Home Page',
		'page_title' => 'This is, in fact, Home Page',
		]);
	}

	public function products() {
		return view('products', ['active' => 'Products Page', 
			'page_title' => 'This is, in fact, Products Page',
		]);
	}
	
	public function pricing() {
		return view('pricing', ['active' => 'Pricing Page', 
		'page_title' => 'This is, in fact, Pricing Page',
		]);
	}
	
	public function contact() {
		return view('contact', ['active' => 'Contact Page', 
		'page_title' => 'This is, in fact, Contact Page',
		]);
	}
}
