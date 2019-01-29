<?php

namespace App\Http\Controllers\CbAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\VisitorGallery;
use Session;
use DB;
use Carbon\Carbon;

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
                'gallery_photo' => 'required',
            ], [
                'gallery_photo.required' => 'The gallery_photo field is required.',
            ]);

        try {
            DB::beginTransaction();

            $imageData = $request->get('gallery_photo');
            $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
            \Image::make($request->get('gallery_photo'))->resize(300, 250)->save(public_path('uploads/gallery/').$fileName);

        $data = [
            'title' => $request->title,
            'photo' => $fileName,
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
        return VisitorGallery::FindOrFail($id);
    }

    public function update(Request $request, $id)
    {
            // $this->validate($request, [
            //     'gallery_photo' => 'required',
            // ], [
            //     'gallery_photo.required' => 'The gallery_photo field is required.',
            // ]);

        try {
            DB::beginTransaction();

            // $imageData = $request->get('gallery_photo');
            // $fileName = Carbon::now()->timestamp . '_' . uniqid() . '.' . explode('/', explode(':', substr($imageData, 0, strpos($imageData, ';')))[1])[1];
            // \Image::make($request->get('gallery_photo'))->resize(300, 250)->save(public_path('uploads/gallery/').$fileName);

        $data = [
            'title' => $request->title,
            // 'photo' => $fileName,
        ];
        VisitorGallery::FindOrFail($id)->update($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Update Gallery']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Something Error Found !, Please try again']);
        }
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
