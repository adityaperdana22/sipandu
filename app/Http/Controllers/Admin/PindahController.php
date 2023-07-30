<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penduduks;
use App\Models\Pindah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PindahController extends Controller
{
    public function index()
    {
        $pindah = DB::table('pindah')
            ->join('penduduk', 'pindah.penduduk_id', '=', 'penduduk.penduduk_id')
            ->get();
        return view('admin.pindah.index', compact('pindah'));
    }
    public function create()
    {
        $penduduk = DB::table('penduduk')->where('status', 'ada')->get();
        return view('admin.pindah.create', compact('penduduk'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'penduduk_id' => 'required',
            'tanggal_pindah' => 'required',
            'alamat_pindah' => 'required',
            'alasan_pindah' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('pindah.create')->with('error', 'Data gagal disimpan');
        } else {
            Penduduks::where('penduduk_id', $request->penduduk_id)->update([
                'status' => 'pindah',
            ]);
            Pindah::create([
                'penduduk_id' => $request->penduduk_id,
                'tanggal_pindah' => $request->tanggal_pindah,
                'alamat_pindah' => $request->alamat_pindah,
                'alasan_pindah' => $request->alasan_pindah,
            ]);
            return redirect()->route('pindah.index')->with('success', 'Data berhasil disimpan');
        }
    }
}
