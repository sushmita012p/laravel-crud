<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = user::all();
        return view('index', compact('users'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $request->validate(
            [
                'first_name'=>'required',
                'last_name'=>'required',
                'email'=>'required',
                'contact_number'=>'required',
            ]
            );
        $data=$request->all();
        $user = User::create($data);

        return redirect('/users/view');
    }
    public function view(){
        $users=User::all();
        $data=compact('users');
        return view('index')->with($data);
    }

    public function delete($id){
        $user=User::find($id)->delete();
        return redirect()->back()->with('success', 'user deleted successfully');
    }

    public function edit($id){
        $users=User::find($id);
        return view('edit', compact('users'));
    }
    public function update($id, Request $request){
        $users=User::find($id);
        
        $users->update($request->all());
        // $users->first_name=$request['first_name'];
        // $users->last_name=$request['last_name'];
        // $users->email=$request['email'];
        // $users->contact_number=$request['contact_number'];
        // $users->save();

        return redirect('/users/view');
    }
}
