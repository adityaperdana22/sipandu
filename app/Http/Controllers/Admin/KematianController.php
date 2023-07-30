<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kematian;
use App\Models\Penduduks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class KematianController extends Controller
{
    public function index()
    {
        $kematian = DB::table('kematian')
            ->join('penduduk', 'kematian.penduduk_id', '=', 'penduduk.penduduk_id')
            ->get();
        return view('admin.kematian.index', compact('kematian'));
    }
    public function create()
    {
        $penduduk = DB::table('penduduk')->where('status', 'ada')->get();
        return view('admin.kematian.create', compact('penduduk'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'penduduk_id' => 'required',
            'nik_kematian' => 'required',
            'tgl_kematian' => 'required',
            'sebab_kematian' => 'required',
            'tempat_kematian' => 'required',
            'waktu_kematian' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('kematian.create')->with('error', 'Data gagal disimpan');
        } else {
            Penduduks::where('penduduk_id', $request->penduduk_id)->update([
                'status' => 'meninggal',
            ]);
            Kematian::create([
                'penduduk_id' => $request->penduduk_id,
                'nik_kematian' => $request->nik_kematian,
                'tgl_kematian' => $request->tgl_kematian,
                'sebab_kematian' => $request->sebab_kematian,
                'tempat_kematian' => $request->tempat_kematian,
                'waktu_kematian' => $request->waktu_kematian,
            ]);
            return redirect()->route('kematian.index')->with('success', 'Data berhasil disimpan');
        }
    }
}
