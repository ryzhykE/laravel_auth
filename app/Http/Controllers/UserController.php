<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Book;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreUserPostRequest;
use Illuminate\Support\Facades\Input;


class UserController extends Controller
{ 
   public function __construct()
    
    public function index(){
        
        $users = User::paginate(10);
        return view('user/index', ['users' => $users]);
    }
    
    public function create(){
        
        return view('user/create');
    }
    
    public function store(Request $request){
        
        $rules = [
            'firstname' => 'required|alpha|min:3',
            'lastname' => 'required|alpha|min:3',
            'email' => 'required|email|unique:users'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return Redirect::to('users/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = new User();
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->save();

            Session::flash('message','User '.$user->firstname.' created');
            return Redirect::to('users');
        }
    }
    
    public function edit($id){
        
        $user = User::find($id);
        return view('user/edit', [ 'user' => $user]);
    }
    
    public function update(Request $request, $id){
        
        $rules = [
            'firstname' => 'required|alpha|min:3',
            'lastname' => 'required|alpha|min:3',
            'email' => 'required|email'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = User::find($id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->save();

            Session::flash('message', 'User '.$user->firstname.' successfully updated');
            return Redirect::to('users');
        }
    }
    
    public function destroy($id){
        User::find($id)->delete();
        Session::flash('message', 'Successfully deleted user with Id:'.$id);
        return Redirect::back();
    }
    
    public function show($id){
        $user = User::find($id);
        return view('user/show', [ 'user' => $user]);
    }
}
