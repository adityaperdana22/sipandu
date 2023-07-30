<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('level_user') === 'admin') {
            $data['user'] = DB::table('users')
                ->select(DB::raw('count(*) as jumlah'))
                ->first();
            $data['penduduk'] = DB::table('penduduk')
                ->where('status', 'ada')
                ->select(DB::raw('count(*) as jumlah'))
                ->first();
            $data['kategori'] = DB::table('category_informasi')
                ->select(DB::raw('count(*) as jumlah'))
                ->first();
            $data['informasi'] = DB::table('informasi')
                ->select(DB::raw('count(*) as jumlah'))
                ->first();
        } elseif (session('level_user') === 'warga') {
            $data['warga'] = DB::table('penduduk')->where('user_id', session('user_id'))->first();
            $data['cek_pindah'] = DB::table('pindah')->where('penduduk_id', $data['warga']->penduduk_id)->first();
        }
        return view('admin.dashboard', $data);
    }

    public function print_surat_domisili($id)
    {
        $data['warga'] = DB::table('penduduk')->where('penduduk_id', $id)->first();
        return view('admin.surat.domisili', $data);
    }

    public function print_surat_pindah($id)
    {
        $data['warga'] = DB::table('penduduk')
            ->join('pindah', 'penduduk.penduduk_id', '=', 'pindah.penduduk_id')
            ->where('penduduk.penduduk_id', $id)->first();
        return view('admin.surat.pindah', $data);
    }
}
