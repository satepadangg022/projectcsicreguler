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
            <img src="{{url('img/trojan.png')}}" alt="Ilustrasi Ransomware" style="max-width: 100%; height: auto; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
        </div>
    
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px; text-align: center;">Laporan Analisis Malware Trojan.LockBit/Blackmatter</h1>
    
        <p style="font-size: 14px; color: #666; margin-bottom: 20px; text-align: center;">
            Trojan.LockBit/Blackmatter adalah ransomware yang mengenkripsi file korban, dengan pencegahan melalui update sistem, antivirus terkini, kewaspadaan terhadap tautan mencurigakan, dan pemblokiran komunikasi malware.
        </p>
        <hr>
        <div style="text-align: justify; font-size: 16px; line-height: 1.6;">
            <p>
                Malware Trojan.LockBit/Blackmatter termasuk dalam kategori Trojan Ramsomware LockBit 3.0. Malware ini memiliki isi beberapa file yaitu folder Build, Build.bat, builder.exe config.json, dan keygen.exe LockBit 3.0 memiliki kemampuan mengenkripsi file-file korban. Apabila korban hendak memulihkan file yang terinfeksi korban harus membayar sejumlah uang kepada penyerang. Rekomendasi untuk menghindari infeksi Malware ini adalah dengan update dan patching perangkat dan aplikasi, menggunakan antivirus dan perangkat security yang update, berhati – hati dalam mengakses URL, link/attachment email, mengunduh software, pastikan melakukan block terhadap URL/IP yang digunakan oleh Malware untuk melakukan komunikasi TCP dan melakukan disable autorun.
            </p>
        </div>
    
        <div style="margin-top: 20px; font-size: 14px; color: #555;">
            <p>Source: <br>
                <a href="https://www.idsirtii.or.id/peringatan/baca/571/laporan-analisis-malware-trojan.html" style="color: #007bff; text-decoration: none;">https://www.idsirtii.or.id/peringatan/baca/571/laporan-analisis-malware-trojan.html</a><br>
            </p>
        </div>
    </div>
    
</div>



@endsection