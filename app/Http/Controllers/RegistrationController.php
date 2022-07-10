<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('posts/form');
    }

    public function register(Request $request){
        
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                // 'confirm-password' => 'required|same:password'

            ]
        );

        // 
        // print_r($request->all());

        $post = new User;
        $post->name=$request->name;
        $post->email=$request->email;
        $post->password=$request->password;
        $post->country_id=1;
        $post->save();
        // return redirect()->action('RegistrationController@message_save');
        return view('posts.save-message');
        
    //     echo '<pre>';
    }

    public function message_save(){
        return view('posts.save-message');
    }
    
    public function save(Request $request){
        dd($request->input());

    }
}
