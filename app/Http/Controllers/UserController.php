<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function index(Request $request){
        $data = User::all();
        return view('index', compact('data'));
    }

    function add(Request $request){
        return view('add');
    }

    function store(Request $request){
        // dd($request);
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->save();

        session()->flash('success', 'User added successfully!');
        return redirect()->route('index');
    }

    function edit($id){
        $id = base64_decode($id);
        $data = User::findorfail($id);
        
        return view('edit', compact('data'));
    }

    function update(Request $request, $id){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required'
        ]);

        $Data = User::findorfail(base64_decode($id));
        $Data->name = $request->name;
        $Data->email = $request->email;
        $Data->mobile = $request->mobile;
        $Data->save();

        session()->flash('success', 'User details update successfully!');
        return redirect()->route('index');
    }

    function delete($id){
        User::where('id', base64_decode($id))->delete();

        session()->flash('success', 'User deleted successfully!');
        return redirect()->route('index');
    }

    function view($id){
        $DatA = User::findorfail(base64_decode($id));
        return view('view', compact('DatA'));
    }
}
