@extends('layouts.temp')

@section('title')
Home
@endsection

@section('content')
<style>
    .full-background {
        background: url("{{ asset('img/tangan1.png') }}") no-repeat center center/cover;
        height: 80vh;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .info-card {
        background: rgba(78, 115, 223, 0.7); 
        color: white;
        padding: 20px 30px;
        border-radius: 10px;
        width: 350px;
        text-align: center; /* Agar teks tetap rapi */
    }

    .info-card h1 {
        font-size: 42px;
        font-weight: 600;
    }

    .breadcrumb a {
        color: white;
        text-decoration: none;
        margin: 0 5px;
    }

    .breadcrumb a:hover {
        text-decoration: underline;
    }
</style>

<div class="full-background">
    <div class="info-card">
        <h1>News</h1>
    </div>
</div>
<div style="background-color: white;">
    <div style="max-width: 900px; margin: auto; background-color: white; padding: 20px;">
    
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{url('img/ransomware.png')}}" alt="Ilustrasi Ransomware" style="max-width: 100%; height: auto; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
        </div>
    
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px; text-align: center;">Laporan Analisis Malware<br> Ransom:Win32/Lockbit.SA!MSR</h1>
    
        <p style="font-size: 14px; color: #666; margin-bottom: 20px; text-align: center;">
            Ransom:Win32/Lockbit.SA!MR, ransomware berbahaya yang dikategorikan CATASTROPHIC, 
            mengancam data pengguna—lindungi diri dengan update rutin, antivirus terkini, dan langkah pencegahan cerdas!
        </p>
        <hr>
        <div style="text-align: justify; font-size: 16px; line-height: 1.6;">
            <p>
                Ransom:Win32/Lockbit.SA!MR merupakan salah satu malware dengan yang memiliki 
                kemampuan untuk menghentikan pengguna untuk tidak dapat mengakses data miliknya atau menyandera data pengguna.
                Rekomendasi untuk menghindari infeksi malware ini adalah dengan update dan patching perangkat dan aplikasi, menggunakan
                antivirus dan perangkat security yang update, berhati-hati dalam mengakses URL, link/attachment email, mengunduh software,
                pastikan melakukan blok terhadap URL yang digunakan oleh malware untuk melakukan komunikasi TCP dan melakukan disable autorun.
            </p>
            <p>
                Malware Rating System dibuat sebagai metode penilaian yang akurat dan objektif dalam menilai sebuah malware sehingga 
                dapat diketahui tingkat risiko dan keterkaitan dengan dampak penyebaran yang ditimbulkan dan memudahkan bagi personel teknis
                dan non teknis untuk menentukan upaya mitigasi untuk mencegah penyebaran malware terjadi. Ransom:Win32/Lockbit.SA!MSR memiliki
                nilai 84 dari penilaian pengukuran Potential Payload (dampak payload pada target), Proliferation Potential (potensi penyebaran malware), 
                dan Hostility Level (motif pelaku) dan termasuk ke dalam kategori CATASTROPHIC.
            </p>
        </div>
    
        <div style="margin-top: 20px; font-size: 14px; color: #555;">
            <p>Source: <br>
                <a href="https://www.idsirtii.or.id/peringatan/baca/572/laporan-analisis-malware-ransom-win32-lockbit.html" style="color: #007bff; text-decoration: none;">https://www.idsirtii.or.id/peringatan/baca/572/laporan-analisis-malware-ransom-win32-lockbit.html</a><br>
            </p>
        </div>
    </div>
    
</div>



@endsection