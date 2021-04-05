<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function showAccountInfo(Request $request, $id)
    {

        $user = $request->user();
        $id = $request->user()->id;

        return view('userAccountInfo')->with('user', $user);

    }

    public function storePhoto(Request $request, User $user, $id)
    {
        $user = User::find($id);
        $this->validate($request, [
            'user_photo' => 'required|image',
        ]);

        if($request->hasFile('user_photo')){
            //store
            $user->user_photo = $request->user_photo->store('public/images');
        }

        $user->update();

        return redirect()->back()->with('message', 'Your photo has been saved successfully');
    }
}
