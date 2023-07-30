<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Informasis;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class InformasiController extends Controller
{
    public function index()
    {
        $data['informasi'] = DB::table('informasi')
            ->join('category_informasi', 'informasi.category_id', 'category_informasi.category_id')
            ->get();

        return view('admin.informasi.index', $data);
    }

    public function create()
    {
        $data['kategori'] =  Categories::get();

        return view('admin.informasi.create', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'informasi_title' => 'required',
            'informasi_slug' => str_replace('+', '-', urlencode($request->informasi_title)),
            'informasi_deskripsi' => 'required',
            'informasi_gambar' => 'mimes:jpeg,bmp,png,jpg',
            'informasi_lampiran' => 'mimes:pdf',
        ]);

        // dd($validator);
        // die();
        if ($validator->fails()) {
            return redirect()->route('informasi.create')->with('error', 'Data gagal diubah');
        } else {
            $filename = null;
            if ($request->informasi_gambar) {
                $filename = time() . $request->informasi_gambar->getClientOriginalName();
                $request->file('informasi_gambar')->move('gambar/', $filename);
            }

            $filename2 = null;
            if ($request->informasi_lampiran) {
                $filename2 = time() . $request->informasi_lampiran->getClientOriginalName();
                $request->file('informasi_lampiran')->move('lampiran/', $filename2);
            }

            $simpan = Informasis::create([
                'category_id' => $request->category_id,
                'informasi_title' => $request->informasi_title,
                'informasi_slug' => str_replace('+', '-', urlencode($request->informasi_title)),
                'informasi_deskripsi' => $request->informasi_deskripsi,
                'informasi_gambar' => $filename,
                'informasi_lampiran' => $filename2,
            ]);
        }

        return redirect()->route('informasi.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data['informasi'] = Informasis::where('informasi_id', $id)->first();
        $data['kategori'] =  Categories::get();

        return view('admin.informasi.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'informasi_title' => 'required',
            'informasi_deskripsi' => 'required',
            'informasi_gambar' => 'mimes:jpeg,bmp,png,jpg',
            'informasi_lampiran' => 'mimes:doc,docx,xls,xlsx,pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->route('informasi.create')->with('error', 'Data gagal disimpan');
        } else {
            //Gambar
            $filename = $request->gambar_lama;
            if ($request->informasi_gambar) {
                $filename = time() . $request->informasi_gambar->getClientOriginalName();
                $request->file('informasi_gambar')->move('gambar/', $filename);

                if ($request->gambar_lama != NULL) {
                    unlink(public_path('gambar/' . $request->informasi_gambar));
                }
            }
            //Lampiran
            $filename2 = $request->lampiran_lama;
            if ($request->informasi_lampiran) {
                $filename2 = time() . $request->informasi_lampiran->getClientOriginalName();
                $request->file('informasi_lampiran')->move('lampiran/', $filename2);

                if ($request->gambar_lama != NULL) {
                    unlink(public_path('lampiran/' . $request->informasi_lampiran));
                }
            }

            $simpan = Informasis::where('informasi_id', $id)->update([
                'category_id' => $request->category_id,
                'informasi_title' => $request->informasi_title,
                'informasi_slug' => str_replace('+', '-', urlencode($request->informasi_title)),
                'informasi_deskripsi' => $request->informasi_deskripsi,
                'informasi_gambar' => $filename,
                'informasi_lampiran' => $filename2,
            ]);
        }

        return redirect()->route('informasi.index')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        Informasis::where('informasi_id', $id)->first();
        $hapus = Informasis::where('informasi_id', $id)->delete();

        if ($hapus) {
            return redirect()->route('informasi.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('informasi.index')->with('error', 'Data gagal dihapus');
        }
    }
}
