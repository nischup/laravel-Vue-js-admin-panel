<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\TeamMember;
use Session;
use DB;


class TeamMemberController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
           return TeamMember::orderBy('id', 'desc')->paginate($request->perPage);
        }
        return view('backend-file.team-member.team_member');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'name' => 'required',
                'email' => 'required|unique',
                'designation' => 'required',
            ], [
                'name.required' => 'The Name field is required.',
                'email.required' => 'The Email field is required.',
                'designation.required' => 'The Designation field is required.',
            ]);

        try {
            DB::beginTransaction();

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation,
            'profile_pic' => $request->profile_pic,
            'message' => $request->message,
        ];
        TeamMember::create($data);

        DB::commit();
            return response()->json(['status' => 'success', 'message' => 'Successfully Save Team Info']);
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
            TeamMember::find($id)->delete(); 

            DB::commit();
            return response()->json(['status'=>'success','message'=>'Team Member Info successfully deleted !']);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['status'=>'error','message'=>'Something Error Found !, Please try again']);
        }
    }
}
