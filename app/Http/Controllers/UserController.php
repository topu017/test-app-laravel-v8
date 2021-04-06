<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate(4);
        return view('users.index')->with('users', $users);
    }

    public function create()
    {
        return view('users.create');
    }
    public function storeUser(Request $request)
    {
        //dd('Ok');
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone_or_mobile' => 'required',
            'username' => 'required',
            'position' => 'required',
            'user_photo' => 'required|image',
            'role' => 'required',
            'password' => 'required|min:8'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_or_mobile = $request->phone_or_mobile;
        $user->username = $request->username;
        $user->position = $request->position;
        if($request->hasFile('user_photo')){
            //store
            $user->user_photo = $request->user_photo->store('public/images');
        }
        $user->role = $request->role;
        $nonHashedPass =  $request->password;
        $hashedPass = Hash::make($nonHashedPass);
        $user->password = $hashedPass;

        $user->save();
        return redirect()->route('users.index')->with('message','Data saved in database successfully');
    }

    public function showUserSingleData(User $user, $id)
    {
        //        echo 'show';
        $user = User::find($id);
        return view('users.show')->with('user', $user);
    }
    public function edit(User $user, $id)
    {
        //        echo 'show';
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }
    public function updateUser(Request $request, User $user, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_or_mobile = $request->phone_or_mobile;
        $user->username = $request->username;
        $user->position = $request->position;
        if($request->hasFile('user_photo')){
            //store
            $user->user_photo = $request->user_photo->store('public/images');
        }
        $user->role = $request->role;
        if(!empty($request->input('password'))) {
            $nonHashedPass = $request->password;
            $hashedPass = Hash::make($nonHashedPass);
            $user->password = $hashedPass;
        }

        $user->update();
        return redirect()->back()->with('message', 'Data updated in database successfully');
    }
    public function destroyUser(User $user, $id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'Data deleted successfully');
    }
}
