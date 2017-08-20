<?php

namespace App\Http\Controllers;
use Validator;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class contact extends Controller
{
 public function index(){
 	return view('contact');
 }
}
