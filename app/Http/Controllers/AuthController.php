<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\AkunUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login'); 
    }
    public function login()
    {
    return $this->index();
    }

    protected $akunuser;
    protected $Akun;
    public function __construct()
    {
        // Inisialisasi model yang benar
        $this->Akun = new AkunUser();
    }

    public function loginAction(Request $request)
    {
    Validator::make($request->all(), [
        'username' => 'required|username',
        'password' => 'required'
    ])->validate();

    if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
    }

    /** @var \App\Models\AkunUser $user */
    $user = Auth::user();

    if (!$user instanceof \App\Models\AkunUser) {
        abort(403, 'Unauthorized');
    }

    $user->last_login_at = now();
    $user->save();

    $request->session()->regenerate();

    return redirect()->route('/dashboard');
    }


    public function logout(){
        session()->flush();
        return redirect('/');// Ke front end
    }


    public function register(){
        return view('Auth.register');
    }
    
    public function save(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:akun_user,username',
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:akun_user,email',
            'nohp' => 'required|string|max:20',
            'password' => 'required|string|min:6|confirmed',
        ]);

        DB::table('akun_user')->insert([
            'username' => $request->username,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'pwasli' => null, 
            'status' => 'User',
            'gambar' => null,
            'alamat' => null,
            'nohp' => $request->nohp,
            'tanggal_create' => now(),
            'status_akun' => 'aktif',

        ]);

        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }

    
        public function editsandi(){

        return view('Login.resetpw');
    }

}
