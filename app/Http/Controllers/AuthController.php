<?php

namespace App\Http\Controllers;

use App\Mail\CodeConfirm;
use App\Mail\TestEmail;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');

    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        if($user = User::where('email', $request->input('email'))->first()){
            if(Hash::check($password, $user->password)){
                if($user->rol==1)
                {
                    if(Auth::loginUsingId($user->id)){
                        $request->session()->regenerate();
                        $user->one_time_code = rand(100000, 999999);
                        $user->save();



                         }
                }
                else if ($user->rol==2 || $user->rol==3)
                {
                    $url = URL::temporarySignedRoute('code', now()->addMinutes(10), ['email' => $user->email]);
                    Mail::to($user->email)->send(new CodeConfirm($user->one_time_code));
                    return redirect($url);
                }
            }
            return back()->withErrors([
                'password' => 'Contraseña incorrecta.',
            ]);
        }
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ]);
    }

    public function traer(){
        return $files = Storage::disk('spaces')->files('Codigos');
    }

    public function loginWithCode(Request $request){
        $request->validate([
            'code' => 'required|numeric'
        ]);
        $code = $request->input('code');
        error_log($code);
        if($user = User::where('email', $request->input('email'))->first()){
            error_log($user->one_time_code);
            if($user->one_time_code == $code){
                if(Auth::loginUsingId($user->id)){
                    $request->session()->regenerate();
                    $user->one_time_code = rand(100000, 999999);
                    $user->save();
                    if ($user->rol==2)
  return redirect()->intended('home');
  return redirect()->intended('auth');

                }
                error_log('yes');
            }
            return back()->withErrors([
                'code' => 'El código que introdujo es incorrecto',
            ]);
        }

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        $code = rand(100000, 999999);
        $email = $request->input('email');
        $user = new User();
        $user->email = $request->input('email');
        $user->rol =rand(1,2);
        $user->one_time_code = $code;
        $user->password = Hash::make($request->input('password'));
        if($user->save()){
            return redirect('/login');
        }
        return response()->json(['message' => 'No se pudo crear el usuario'], 500);
    }

    public function sendVerificationEmail($email="19170061@uttcampus.edu.mx"){
        $url = URL::temporarySignedRoute('verifyEmail', now()->addMinutes(30), ['email' => $email]);
        Mail::to($email)->send(new VerifyEmail($url));
        print_r($url);
    }

    // public function verifyEmail(Request $request){
    //     if (! $request->hasValidSignature()) {
    //         return abort(401);
    //     }
    //     try{
    //         $user = User::where('email', $request->input('email'))->first();
    //         if($user->email_verified_at != null){
    //             return redirect('/login')->with('success', 'Tu cuenta ya está verificada');
    //         }
    //         $user->email_verified_at = now();
    //         $user->save();
    //         return redirect('/login')->with('success', 'Tu cuenta ha sido verificada');
    //     }catch (\Exception $e){
    //         return response()->json(['message' => 'El usuario no pudo ser verificado'], 500);
    //     }
    //     //return redirect('/login')->with('success', 'Your email has been verified');

    // }
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $book =  Book::latest('id')->first();;
        $book->title = $request->title;
        $book->description = $request->description;
        if($book->update()){
            return response()->json(['message' => 'No se pudo crear el usuario'], 200);
        }
        return response()->json(['message' => 'No se pudo crear el usuario'], 500);
    }
    public function delete( $id){
        $book = Book::find($id);
        $book->delete();
    }

    public function view( ){
        $id =auth()->user()->id;
        $books=DB::table('books')
        ->select('*')
        ->Where('books.usuario', $id)->get();
        $book =Book ::all();
        return view('home',compact(['book','books']));

    }
    public function upload(Request $request){
        $extension = $request->file('upload')->extension();
        $book = new Book();
        $book->title = $request->title;
        $book->description = $request->description;
        $book->content = $request->content;
        $book->usuario =auth()->user()->id;

        $path = Storage::disk('spaces')->putFileAs('uploads',$request->file('upload'),time().'.'.$extension);
        $prueba = Storage::putFileAs('uploads',$request->file('upload'),time().'.'.$extension);
        $book->image = $path;
        $book->save();

        return redirect()->intended('home');


    }
    public function dowloand( ){



    }
    public function token(Request $request){
        $id =auth()->user()->id;
        $book = User::find($id);
        $book->action ="Add";
        $book->update();
        return redirect()->intended('home');

    }
    public function token2(Request $request){
        $id =auth()->user()->id;
        $book = User::find($id);
        $book->action ="Update";
        $book->update();
        return redirect()->intended('home');

    }
    public function token3(Request $request){
        $id =auth()->user()->id;
        $book = User::find($id);
        $book->action ="Delete";
        $book->update();
        return redirect()->intended('home');


    }
    public function createtoken(Request $request){
        $book = User::find($request->id);
        $book->token = rand(100000, 999999);
        $book->update();
        $user = User::find($request->id);
        Mail::to($user->email)->send(new CodeConfirm($user->token));

        return redirect()->intended('home');

    }
    public function uprange(Request $request){
        $user = User::find($request->id);
        $user->rol =2;
        $user->update();
        return redirect()->intended('home');

    }
    public function downrange(Request $request){
        $user = User::find($request->id);
        $user->rol =1;
        $user->update();
        return redirect()->intended('home');

    }

    public function users(){
        $userAdd=DB::table('users')
->select('*')
->Where('users.action', 'Add')->where('users.token',null)->get();

        $userUpdate=DB::table('users')
->select('*')
->Where('users.action', 'Update')->where('users.token',null)->get();


$usermin=DB::table('users')
->select('*')
->Where('users.rol', 1)->get();
$usermax=DB::table('users')
->select('*')
->Where('users.rol', 2)->get();

        $userDelete=DB::table('users')
->select('*')
->Where('users.action', 'Delete')->where('users.token',null)->get();
return view('permision',compact(['userAdd','userUpdate','userDelete','usermin','usermax']));
    }

    public function modal()
    {
        $id =auth()->user()->id;
        $user = User::find($id);
        return response()->json([
            'user'=> $user,
        ]);
    }
    public function tokeningresado(Request $request)
    {
        $id =auth()->user()->id;
        $user = User::find($id);
        if($user->token==$request->token){
        if($user->action=="Add"){
            $user->token = null;
            $user->action =null;
            $user->save();
            return view("newbook");}
        else if($user->action=="Update"){
            $user->token = null;
            $user->action =null;
            $user->save();
            return redirect()->intended('edit');
        }

        else if($user->action=="Delete"){
            $user->token = null;
            $user->action =null;
            $user->save();
            return redirect()->intended('books');
        }
    } return redirect()->intended('home');
}



}

