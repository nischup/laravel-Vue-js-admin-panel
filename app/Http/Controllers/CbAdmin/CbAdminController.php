<?php

namespace App\Http\Controllers\CbAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\CbAdmin;
use Session;
use DB;

class CbAdminController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           return CbAdmin::orderBy('id', 'desc')->paginate($request->perPage);
        }
        return view('backend-file.admin-new.admin-new');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
         $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'status' => 'required',
            ], [
                'name.required' => 'The Name field is required.',
                'password.required' => 'The password field is required.',
                'status.required' => 'The status field is required.',
            ]);

        try {
            DB::beginTransaction();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ];
        // dd($data);
        CbAdmin::create($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Successfully Save Admin']);
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
        return CbAdmin::FindOrFail($id);
    }

    public function update(Request $request, $id)
    {
         $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'status' => 'required',
            ], [
                'name.required' => 'The Name field is required.',
                'password.required' => 'The password field is required.',
                'status.required' => 'The status field is required.',
            ]);

        try {
            DB::beginTransaction();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ];
        CbAdmin::FindOrFail($id)->update($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Update Admin info']);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['status' => 'error', 'message' => 'Something Error Found !, Please try again']);
        }
    }

    public function destroy($id)
    {
        try{
            DB::beginTransaction();
            CbAdmin::find($id)->delete(); 

            DB::commit();
            return response()->json(['status'=>'success','message'=>'Admin successfully deleted !']);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['status'=>'error','message'=>'Something Error Found !, Please try again']);
        }
    }
}
