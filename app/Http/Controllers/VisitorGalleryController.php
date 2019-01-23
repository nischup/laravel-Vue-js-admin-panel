<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\VisitorGallery;
use Session;
use DB;

class VisitorGalleryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           return VisitorGallery::orderBy('id', 'desc')->paginate($request->perPage);
        }
        return view('backend-file.visitor-gallery.visitor-gallery');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'my_photo' => 'required',
            ], [
                'my_photo.required' => 'The my_photo field is required.',
            ]);

        try {
            DB::beginTransaction();

        $data = [
            'title' => $request->title,
            'photo' => $request->my_photo,
        ];
        VisitorGallery::create($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Successfully Save Visitor Gallery Photo']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Something Error Found !, Please try again']);
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        try{
            DB::beginTransaction();
            VisitorGallery::find($id)->delete(); 

            DB::commit();
            return response()->json(['status'=>'success','message'=>'Visitor Gallery Photo successfully deleted !']);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['status'=>'error','message'=>'Something Error Found !, Please try again']);
        }
    }
}
