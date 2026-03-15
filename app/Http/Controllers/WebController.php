<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Infografis;
use App\Models\Kegiatan;
use App\Models\Pedoman;
use App\Models\Rfc;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // ========================================
    // METHOD ORIGINAL (JANGAN DIUBAH)
    // ========================================

    public function index()
    {
        $infografis = Infografis::all();
        $kegiatan = Kegiatan::all();
        $berita = Berita::all();
        $pedoman = Pedoman::all();
        $rfc= Rfc::all();

        return view('welcome', compact('berita','kegiatan','infografis','pedoman','rfc'));
    }

    public function dashboard()
    {
        $totalInfografis = Infografis::count();
        $totalKegiatan = Kegiatan::count();
        $totalBerita = Berita::count();
        $totalRfc = Rfc::count();
        $totalPedoman = Pedoman::count();

        $berita     = Berita::latest()->get();
        $infografis = Infografis::latest()->get();
        $kegiatan   = Kegiatan::latest()->get();
        $rfc        = Rfc::latest()->get();
        $pedoman    = Pedoman::latest()->get();

        return view('backend.dashboard', compact(
            'totalInfografis',
            'totalKegiatan',
            'totalBerita',
            'totalRfc',
            'totalPedoman',
            'berita',
            'infografis',
            'kegiatan',
            'rfc',
            'pedoman',
        ));
    }

    // ... method lain tetap sama ...

    // ========================================
    // METHOD BARU UNTUK TESTING
    // ========================================

    /**
     * HALAMAN UTAMA - EAGER LOADING VERSION
     * Untuk testing performa dengan eager loading
     */
    public function indexEager()
    {
        // Query sama seperti original
        // Perbedaan hanya di view (welcome-eager.blade.php)
        $infografis = Infografis::all();
        $kegiatan = Kegiatan::all();
        $berita = Berita::all();

        return view('welcome-eager', compact('berita','kegiatan','infografis'));
    }

    /**
     * HALAMAN UTAMA - LAZY LOADING VERSION
     * Untuk testing performa dengan lazy loading IntersectionObserver
     */
    public function indexLazy()
    {
        // Query sama seperti original
        // Perbedaan di view (welcome-lazy.blade.php) menggunakan lazy loading
        $infografis = Infografis::all();
        $kegiatan = Kegiatan::all();
        $berita = Berita::all();

        return view('welcome-lazy', compact('berita','kegiatan','infografis'));
    }

    /**
     * DASHBOARD - EAGER LOADING VERSION
     * Normal implementation untuk data-heavy page
     */
    public function dashboardEager()
    {
        // Load semua data sekaligus untuk dashboard
        $infografis = Infografis::all();
        $kegiatan = Kegiatan::all();
        $berita = Berita::all();
        $rfc = Rfc::all();
        $pedoman = Pedoman::all();

        $totalInfografis = $infografis->count();
        $totalKegiatan = $kegiatan->count();
        $totalBerita = $berita->count();
        $totalRfc = $rfc->count();
        $totalPedoman = $pedoman->count();

        return view('backend.dashboard-eager', compact(
            'totalInfografis',
            'totalKegiatan',
            'totalBerita',
            'totalRfc',
            'totalPedoman',
            'infografis',
            'kegiatan',
            'berita',
            'rfc',
            'pedoman'
        ));
    }

    /**
     * DASHBOARD - LAZY LOADING VERSION (UJI SILANG)
     * Testing lazy loading pada data-heavy page
     * Untuk membuktikan lazy loading tidak selalu optimal
     */
    public function dashboardLazy()
    {
        // Query sama seperti eager
        // Perbedaan di view menggunakan lazy loading
        $infografis = Infografis::all();
        $kegiatan = Kegiatan::all();
        $berita = Berita::all();
        $rfc = Rfc::all();
        $pedoman = Pedoman::all();

        $totalInfografis = $infografis->count();
        $totalKegiatan = $kegiatan->count();
        $totalBerita = $berita->count();
        $totalRfc = $rfc->count();
        $totalPedoman = $pedoman->count();

        return view('backend.dashboard-lazy', compact(
            'totalInfografis',
            'totalKegiatan',
            'totalBerita',
            'totalRfc',
            'totalPedoman',
            'infografis',
            'kegiatan',
            'berita',
            'rfc',
            'pedoman'
        ));
    }

    /**
     * KEGIATAN PAL-CSIRT - EAGER LOADING VERSION
     */
    public function kegiatanEager()
    {
        $berita = Berita::all();
        $kegiatan = Kegiatan::all();
        return view('kegiatanpalcsirt-eager', compact('berita','kegiatan'));
    }

    /**
     * KEGIATAN PAL-CSIRT - LAZY LOADING VERSION
     */
    public function kegiatanLazy()
    {
        $berita = Berita::all();
        $kegiatan = Kegiatan::all();
        return view('kegiatanpalcsirt-lazy', compact('berita','kegiatan'));
    }

    // ========================================
    // METHOD ORIGINAL LAINNYA (JANGAN DIUBAH)
    // ========================================

    public function tentangkami()
    {
        return view('tentangkami');
    }

    public function jenislayanan()
    {
        return view('jenislayanan');
    }

    public function contact()
    {
        return view('contact');
    }

    public function visimisi()
    {
        return view('visimisi');
    }

    public function kegiatanpalcsirt()
    {
        $berita = Berita::all();
        $kegiatan = Kegiatan::all();
        return view('kegiatanpalcsirt', compact('berita','kegiatan'));
    }

    public function panduanteknis()
    {
        $data = Pedoman::all();
        return view('panduanteknis', compact('data'));
    }

    public function panduanteknisshow($id)
    {
        $data = Pedoman::find($id);
        return view('panduanteknishow', compact('data'));
    }

    public function login()
    {
        return view('login');
    }

    public function detailberita($id)
    {
        $data = Berita::findorfail($id);
        return view('detailberita', compact('data'));
    }

    public function rfc()
    {
        $data = Rfc::all();
        return view('rfc', compact('data'));
    }
}
