<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingsContorller extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){
        return view('settings');
    }

    public function update(UpdateSettingsRequest $request){
        $user = auth()->user();
        if($request->name){
            $user->name = $request->name;
        }

        if($request->email){
            $user->email = $request->email;
        }

        if($request->password){
            $user->password =  Hash::make($request->password);
        }
        $user->save();
        return redirect()->route('home');
    }
}
