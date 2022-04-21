<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Books extends Controller
{
    public function store(Request $request){
        $id =auth()->user()->id;
        $books=DB::table('books')
        ->select('*')
        ->Where('books.usuario', $id)->get();
        return view('mybooks',compact('books'));
    }
    public function delete(Request $request){
        $book = Book ::find($request->id);
        $book->delete();
        return redirect()->intended('home');
    }
    public function edit(Request $request){
        $id =auth()->user()->id;
        $books=DB::table('books')
        ->select('*')
        ->Where('books.usuario', $id)->get();
        return view('myupdatebooks',compact('books'));
    }
    public function editbook(Request $request){
        $book = Book ::find($request->id);
        return view('editbook',compact('book'));
    }
    public function edituploadbook(Request $request){
        $book = Book ::find($request->id);
        $extension = $request->file('upload')->extension();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->content = $request->content;
        $book->usuario =auth()->user()->id;

        $path = Storage::disk('spaces')->putFileAs('uploads',$request->file('upload'),time().'.'.$extension);
        $prueba = Storage::putFileAs('uploads',$request->file('upload'),time().'.'.$extension);
        $book->image = $path;
        $book->update();

        return redirect()->intended('home');


    }
    public function showbook(Request $request){
        $book = Book ::find($request->id);
        return view('showbook',compact('book'));
    }
    public function auth(){
        return view('android');
    }
}
