<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kelahiran;
use App\Models\Penduduks;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class KelahiranController extends Controller
{
    public function index()
    {
        $kelahiran = DB::table('kelahiran')
            ->join('penduduk', 'kelahiran.penduduk_id', '=', 'penduduk.penduduk_id')
            ->get();
        return view('admin.kelahiran.index', compact('kelahiran'));
    }
    public function create()
    {
        return view('admin.kelahiran.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'status_kawin' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('penduduk.create')->with('error', 'Data gagal disimpan');
        } else {
            $user = User::insertGetId([
                'name' => $request->nama,
                'email' => $request->nama . '@gmail.com',
                'password' => Hash::make('1'),
                'level_user' => 'warga'
            ]);
            $penduduk = Penduduks::insertGetId([
                'user_id' => $user,
                'nik' => $request->nik,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'rt' => $request->rt,
                'rw' => $request->rw,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'status_kawin' => $request->status_kawin,
                'agama' => $request->agama,
                'kewarganegaraan' => $request->kewarganegaraan,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'status' => 'ada',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Kelahiran::create([
                'penduduk_id' => $penduduk,
            ]);
        }

        return redirect()->route('kelahiran.index')->with('success', 'Data berhasil disimpan');
    }
}
