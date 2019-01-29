<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Service;
use App\Message;
use App\VisitorGallery;
use App\TeamMember;
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
        $team_photos = TeamMember::orderBy('id', 'asc')->limit(3)->get();
        $gallery_photos = VisitorGallery::orderBy('id', 'desc')->limit(3)->get();
    	return view('index', compact('services','team_photos', 'gallery_photos'));
    }    


    public function team() {
        $team_photos = TeamMember::orderBy('id', 'asc')->get();
    	return view('team', compact('team_photos'));
    }     

    public function visitor() {
        $gallery_photos = VisitorGallery::orderBy('id', 'asc')->get();
    	return view('visitor-gallery', compact('gallery_photos'));
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

    public function message(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required',
            ], [
                'name.required' => 'The Name field is required.',
                'email.required' => 'The Email field is required.',
                'mobile.required' => 'The Mobile field is required.',
            ]);

        try {
            DB::beginTransaction();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'message' => $request->message,
        ];

        Message::create($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Message Send Successfully']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Something Error Found !, Please try again']);
        }
    }
}
