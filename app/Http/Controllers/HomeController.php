<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $data['informasi'] = DB::table('informasi')->join('category_informasi', 'informasi.category_id', 'category_informasi.category_id')->orderBy('informasi.created_at', 'DESC')->get();

        return view('page.home', $data);
    }

    public function detail_informasi($slug)
    {
        $data['detail'] = DB::table('informasi')
            ->join('category_informasi', 'informasi.category_id', 'category_informasi.category_id')
            ->where('informasi_slug', $slug)
            ->first();

        $data['kategori'] = DB::table('category_informasi')
            ->get();

        $data['informasi'] = DB::table('informasi')->limit(6)->get();

        return view('page.detail_informasi', $data);
    }

    public function about()
    {
        return view('page.about');
    }

    public function kontak()
    {
        return view('page.kontak');
    }
}
