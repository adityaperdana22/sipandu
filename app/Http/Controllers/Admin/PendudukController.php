<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Penduduks;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PendudukController extends Controller
{
    public function index()
    {
        $data['penduduk'] = DB::table('penduduk')
            ->join('users', 'penduduk.user_id', 'users.id')
            ->orderBy('nama', 'ASC')
            ->get();

        return view('admin.penduduk.index', $data);
    }

    public function create()
    {
        return view('admin.penduduk.create');
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
            'status' => 'ada',
        ]);

        if ($validator->fails()) {
            return redirect()->route('penduduk.create')->with('error', 'Data gagal disimpan');
        } else {
            $user = User::insertGetId([
                'name' => $request->nama,
                'nik' => $request->nik,
                'email' => $request->nama . '@gmail.com',
                'password' => Hash::make('12345678'),
                'level_user' => 'warga'
            ]);
            $simpan = Penduduks::create([
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
            ]);
        }

        return redirect()->route('penduduk.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data['penduduk'] = Penduduks::where('penduduk_id', $id)->first();

        return view('admin.penduduk.edit', $data);
    }

    public function update(Request $request, $id)
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
            return redirect()->route('penduduk.edit', $id)->with('error', 'Data gagal diubah');
        } else {
            $simpan = Penduduks::where('penduduk_id', $id)->update([
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
            ]);
        }

        return redirect()->route('penduduk.index')->with('success', 'Data berhasil diubah');
    }

    public function detail($id)
    {
        $data['penduduk'] = Penduduks::where('penduduk_id', $id)->first();

        return view('admin.penduduk.detail', $data);
    }

    public function delete($id)
    {
        $penduduk = Penduduks::where('penduduk_id', $id)->first();
        $user = User::find($penduduk->user_id);
        $user->delete();
        $hapus = Penduduks::where('penduduk_id', $id)->delete();

        if ($hapus) {
            return redirect()->route('penduduk.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('penduduk.index')->with('error', 'Data gagal dihapus');
        }
    }
}
