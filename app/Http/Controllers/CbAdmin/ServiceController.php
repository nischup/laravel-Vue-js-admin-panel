<?php

namespace App\Http\Controllers\CbAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Service;
use Session;
use DB;

class ServiceController extends Controller
{
     public function index(Request $request)
    {
        if ($request->ajax()) {
           return Service::orderBy('id', 'desc')->paginate($request->perPage);
        }
        return view('backend-file.service-setup.service');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
            ], [
                'name.required' => 'The Name field is required.',
                'description.required' => 'The description field is required.',
            ]);

        try {
            DB::beginTransaction();

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        Service::create($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Successfully Save Services']);
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
        return Service::FindOrFail($id);
    }

    public function update(Request $request, $id)
    {
         $this->validate($request, [
                'name' => 'required',
                'description' => 'required',
            ], [
                'name.required' => 'The Name field is required.',
                'description.required' => 'The description field is required.',
            ]);

        try {
            DB::beginTransaction();

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        Service::FindOrFail($id)->update($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Update Service info']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Something Error Found !, Please try again']);
        }
    }

    public function destroy($id)
    {
        try{
            DB::beginTransaction();
            Service::find($id)->delete(); 

            DB::commit();
            return response()->json(['status'=>'success','message'=>'Service successfully deleted !']);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['status'=>'error','message'=>'Something Error Found !, Please try again']);
        }
    }
}
