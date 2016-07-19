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

class AddController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
     public function takeBook() {
              
        $bookId = Input::get('book_id');
        $book = Book::find($bookId);
        $book->user_id = \Auth::user()->id;
        $book->save();
        Session::flash('message', 'You take Book ' .$book->title);
        return Redirect::back();}
    

    public function returnBook(){
        
        $bookId = Input::get('book_id');
        $book = Book::find($bookId);
        $book->user_id = null;
        $book->save();
        Session::flash('message', 'You return book ' .$book->title);
        return Redirect::back();
    }        
}