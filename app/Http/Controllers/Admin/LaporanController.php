<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }

    public function print(Request $request)
    {
        $data['tahun'] = $request->tahun;
        if ($request->bulan == '01') {
            $data['bulan'] = 'JANUARI';
        } elseif ($request->bulan == '02') {
            $data['bulan'] = 'FEBRUARI';
        } elseif ($request->bulan == '03') {
            $data['bulan'] = 'MARET';
        } elseif ($request->bulan == '04') {
            $data['bulan'] = 'APRIL';
        } elseif ($request->bulan == '05') {
            $data['bulan'] = 'MEI';
        } elseif ($request->bulan == '06') {
            $data['bulan'] = 'JUNI';
        } elseif ($request->bulan == '07') {
            $data['bulan'] = 'JULI';
        } elseif ($request->bulan == '08') {
            $data['bulan'] = 'AGUSTUS';
        } elseif ($request->bulan == '09') {
            $data['bulan'] = 'SEPTEMBER';
        } elseif ($request->bulan == '10') {
            $data['bulan'] = 'OKTOBER';
        } elseif ($request->bulan == '11') {
            $data['bulan'] = 'NOVEMBER';
        } elseif ($request->bulan == '12') {
            $data['bulan'] = 'DESEMBER';
        }

        $data['penduduk_wni_L'] = DB::table('penduduk')
            ->where('status', 'ada')
            ->where('jenis_kelamin', 'laki-laki')
            ->where('kewarganegaraan', 'indonesia')
            ->count();

        $data['penduduk_wni_P'] = DB::table('penduduk')
            ->where('status', 'ada')
            ->where('jenis_kelamin', 'perempuan')
            ->where('kewarganegaraan', 'indonesia')
            ->count();

        $data['penduduk_wna_L'] = DB::table('penduduk')
            ->where('status', 'ada')
            ->where('jenis_kelamin', 'perempuan')
            ->where('kewarganegaraan', '!=', 'indonesia')
            ->count();

        $data['penduduk_wna_P'] = DB::table('penduduk')
            ->where('status', 'ada')
            ->where('jenis_kelamin', 'perempuan')
            ->where('kewarganegaraan', '!=',  'indonesia')
            ->count();

        $data['kelahiran_wni_L'] = DB::table('kelahiran')
            ->join('penduduk', 'kelahiran.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('kelahiran.created_at', $request->bulan)
            ->whereYear('kelahiran.created_at', $request->tahun)
            ->count();


        $data['kelahiran_wni_P'] = DB::table('kelahiran')
            ->join('penduduk', 'kelahiran.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'perempuan')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('kelahiran.created_at', $request->bulan)
            ->whereYear('kelahiran.created_at', $request->tahun)
            ->count();

        $data['kelahiran_wna_L'] = DB::table('kelahiran')
            ->join('penduduk', 'kelahiran.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('kelahiran.created_at', $request->bulan)
            ->whereYear('kelahiran.created_at', $request->tahun)
            ->count();

        $data['kelahiran_wna_P'] = DB::table('kelahiran')
            ->join('penduduk', 'kelahiran.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'perempuan')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('kelahiran.created_at', $request->bulan)
            ->whereYear('kelahiran.created_at', $request->tahun)
            ->count();

        $data['kematian_wni_L'] = DB::table('kematian')
            ->join('penduduk', 'kematian.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('kematian.created_at', $request->bulan)
            ->whereYear('kematian.created_at', $request->tahun)
            ->count();

        $data['kematian_wni_P'] = DB::table('kematian')
            ->join('penduduk', 'kematian.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'perempuan')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('kematian.created_at', $request->bulan)
            ->whereYear('kematian.created_at', $request->tahun)
            ->count();

        $data['kematian_wna_L'] = DB::table('kematian')
            ->join('penduduk', 'kematian.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('kematian.created_at', $request->bulan)
            ->whereYear('kematian.created_at', $request->tahun)
            ->count();

        $data['kematian_wna_P'] = DB::table('kematian')
            ->join('penduduk', 'kematian.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('kematian.created_at', $request->bulan)
            ->whereYear('kematian.created_at', $request->tahun)
            ->count();

        $data['datang_wni_L'] = DB::table('pendatang')
            ->join('penduduk', 'pendatang.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('pendatang.created_at', $request->bulan)
            ->whereYear('pendatang.created_at', $request->tahun)
            ->count();

        $data['datang_wni_P'] = DB::table('pendatang')
            ->join('penduduk', 'pendatang.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'perempuan')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('pendatang.created_at', $request->bulan)
            ->whereYear('pendatang.created_at', $request->tahun)
            ->count();

        $data['datang_wna_L'] = DB::table('pendatang')
            ->join('penduduk', 'pendatang.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('pendatang.created_at', $request->bulan)
            ->whereYear('pendatang.created_at', $request->tahun)
            ->count();

        $data['datang_wna_P'] = DB::table('pendatang')
            ->join('penduduk', 'pendatang.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'perempuan')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('pendatang.created_at', $request->bulan)
            ->whereYear('pendatang.created_at', $request->tahun)
            ->count();

        $data['pindah_wni_L'] = DB::table('pindah')
            ->join('penduduk', 'pindah.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('pindah.created_at', $request->bulan)
            ->whereYear('pindah.created_at', $request->tahun)
            ->count();

        $data['pindah_wni_P'] = DB::table('pindah')
            ->join('penduduk', 'pindah.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'perempuan')
            ->where('penduduk.kewarganegaraan', 'indonesia')
            ->whereMonth('pindah.created_at', $request->bulan)
            ->whereYear('pindah.created_at', $request->tahun)
            ->count();

        $data['pindah_wna_L'] = DB::table('pindah')
            ->join('penduduk', 'pindah.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'laki-laki')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('pindah.created_at', $request->bulan)
            ->whereYear('pindah.created_at', $request->tahun)
            ->count();

        $data['pindah_wna_P'] = DB::table('pindah')
            ->join('penduduk', 'pindah.penduduk_id', '=', 'penduduk.penduduk_id')
            ->where('penduduk.jenis_kelamin', 'perempuan')
            ->where('penduduk.kewarganegaraan', '!=', 'indonesia')
            ->whereMonth('pindah.created_at', $request->bulan)
            ->whereYear('pindah.created_at', $request->tahun)
            ->count();

        return view('admin.laporan.print', $data);
    }
}
