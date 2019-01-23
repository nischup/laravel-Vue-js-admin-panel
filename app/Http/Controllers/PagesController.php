<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Service;
use Session;
use DB;  

class PagesController extends Controller
{
    //
    public function dashboard() {
        return view('backend-file.dashboard');
    }    

     public function index() {
        $services = Service::orderBy('id', 'asc')->limit(6)->get();
    	return view('index', compact('services'));
    }    


    public function team() {
    	return view('team');
    }     

    public function visitor() {
    	return view('visitor-gallery');
    }     

    public function service() {
        $services = Service::orderBy('id', 'asc')->get();
    	return view('service', compact('services'));
    }   
          

    public function contact() {
    	return view('contact');
    }  

    public function login() {
    	return view('backend-file.login');
    }
}
