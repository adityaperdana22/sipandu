<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
    {
        $data['category'] = Categories::get();

        return view('admin.category.index', $data);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_nama' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('category.create')->with('error', 'Data gagal disimpan');
        } else {

            $simpan = Categories::create([
                'category_nama' => $request->category_nama,
            ]);
        }

        return redirect()->route('category.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data['category'] = Categories::where('category_id', $id)->first();

        return view('admin.category.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_nama' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('category.create')->with('error', 'Data gagal diubah');
        } else {

            $simpan = Categories::where('category_id', $id)->update([
                'category_nama' => $request->category_nama,
            ]);
        }

        return redirect()->route('category.index')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        Categories::where('category_id', $id)->first();
        $hapus = Categories::where('category_id', $id)->delete();

        if ($hapus) {
            return redirect()->route('category.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('category.index')->with('error', 'Data gagal dihapus');
        }
    }
}
