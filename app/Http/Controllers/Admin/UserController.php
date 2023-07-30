<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = User::get();

        return view('admin.user.index', $data);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'level_user' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.create')->with('error', 'Data gagal disimpan');
        } else {

            $simpan = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'level_user' => $request->level_user,
            ]);
        }

        return redirect()->route('user.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data['user'] = User::where('id', $id)->first();

        return view('admin.user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'level_user' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('user.create')->with('error', 'Data gagal diubah');
        } else {

            $simpan = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'level_user' => $request->level_user,
            ]);
        }

        return redirect()->route('user.index')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        User::where('id', $id)->first();
        $hapus = User::where('id', $id)->delete();

        if ($hapus) {
            return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('user.index')->with('error', 'Data gagal dihapus');
        }
    }
}
