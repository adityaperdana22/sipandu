<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.layout.login');
    }

    public function login(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'nik' => 'required',
            'password' => 'required',
            'level_user' => 'required'
        ]);

        if ($valid->fails()) {
            return redirect()->route('login')->withErrors($valid)->withInput();
        } else {
            if ($request->level_user === 'admin') {
                $data_user = DB::table('users')->where('email', $request->nik)->get();
            } elseif ($request->level_user === 'warga') {
                $data_user = DB::table('users')->join('penduduk', 'users.id', '=', 'penduduk.user_id')
                    ->where('penduduk.nik', $request->nik)->get();
            }
            if (count($data_user) == 1) {
                if (Hash::check($request->password, $data_user[0]->password)) {
                    //buat session
                    $request->session()->put('user_id', $data_user[0]->id);
                    $request->session()->put('name', $data_user[0]->name);
                    $request->session()->put('level_user', $data_user[0]->level_user);
                    return redirect()->route('dashboard')->with("pesan", "Selamat Datang ");
                } else {
                    return redirect()->route('login')->with('error', 'Password Anda Salah');
                }
            } else {
                return redirect()->route('login')->with('error', 'NIK atau Password salah');
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        $request->session()->forget('name');
        $request->session()->forget('level_user');
        $request->session()->flush();
        return redirect()->route('login')->with('success', 'Anda telah logout');
    }
}
