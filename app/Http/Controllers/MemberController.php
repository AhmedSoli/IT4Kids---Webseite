<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $members = Member::all();
        return view('team.index',compact('members'));
    }

    public function create()
    {
        return view('team.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'leader' => 'required|boolean'
        ]);

        if ($request->image == "") {
            $request->image = "  ";
        }

        $member = new Member(['name' => $request->name, 'description' => $request->description, 'image' => $request->image,'leader' => $request->leader,'email' => $request->email]);
        $member->save();
        return back();

    }


    public function edit(Member $member)
    {
        return view('team.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'image' => 'required|url',
            'description' => 'required|string',
            'leader' => 'required|boolean'
        ]);

        $member->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {   
        $member->delete();
        return redirect()->action('MemberController@index');
    }
}
