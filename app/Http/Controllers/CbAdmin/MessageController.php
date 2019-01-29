<?php

namespace App\Http\Controllers\CbAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Message;
use Session;
use DB;


class MessageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           return Message::orderBy('id', 'desc')->paginate($request->perPage);
        }
        return view('backend-file.message.show-message');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
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
            Message::find($id)->delete(); 

            DB::commit();
            return response()->json(['status'=>'success','message'=>'User Message successfully deleted !']);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['status'=>'error','message'=>'Something Error Found !, Please try again']);
        }
    }
}
