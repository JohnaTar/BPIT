<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function index(){
		return view('layouts.pages.index');
	}
	public function index2(){
		return view('layouts.pages.index2');
	}
	public function home(){
		return view('layouts.pages.home');
	}
	public function company_overview(){
		return view('layouts.pages.company_overview');
	}
	public function profile_rungnikorn(){
		return view('layouts.pages.profile_rungnikorn');
	}
	public function executive_search(){
		return view('layouts.pages.executive_search');
	}
	public function staff_outsourcing(){
		return view('layouts.pages.staff_outsourcing');
	}
	public function inhouse_training(){
		return view('layouts.pages.Inhouse_training');
	}
	public function payrolling_service(){
		return view('layouts.pages.payrolling_service');
	}
	public function account(){
		return view('layouts.pages.account');
	}
	public function contact(){
		return view('layouts.pages.contact');
	}
	public function credit(){
		return view('layouts.pages.credit');
	}
	public function activities(){
		return view('layouts.pages.activities');
	}
	public function facebook(){
		return redirect('https://www.facebook.com/BpitHolding/');
	}
	public function business_consulting(){
		return view('layouts.pages.business_consulting');
	}


    //
}
