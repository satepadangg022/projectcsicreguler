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
            <img src="{{url('img/lockbit.png')}}" alt="Ilustrasi Ransomware" style="max-width: 100%; height: auto; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
        </div>
    
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px; text-align: center;">Imbauan Keamanan Ransomware LockBit 3.0</h1>
    
        <p style="font-size: 14px; color: #666; margin-bottom: 20px; text-align: center;">
            LockBit 3.0 adalah ransomware canggih yang mengenkripsi sistem jaringan, dengan FBI, CISA, dan MS-ISAC merekomendasikan langkah mitigasi untuk mengurangi dampak serangan.
        </p>
        <hr>
        <div style="text-align: justify; font-size: 16px; line-height: 1.6;">
            <p>
                LockBit ransomware adalah perangkat lunak berbahaya yang dirancang untuk memblokir akses pengguna ke sistem komputer dengan imbalan pembayaran uang tebusan. LockBit akan secara otomatis memeriksa target yang berharga, menyebarkan infeksi, dan mengenkripsi semua sistem komputer yang dapat diakses di jaringan. Terdapat temuan Ransomware LockBit 3.0 yang ditemukan dari investigasi FBI pada bulan Maret 2023. Berdasarkqn Joint Cybersecurity Advisory, FBI, CISA, dan MS-ISAC mendorong organisasi untuk menerapkan rekomendasi di bagian mitigasi Securiity Advisory ini untuk mengurangi kemungkinan dan dampak insiden ransomware.
            </p>
        </div>
    
        <div style="margin-top: 20px; font-size: 14px; color: #555;">
            <p>Source: <br>
                <a href="https://www.idsirtii.or.id/peringatan/baca/570/imbauan-keamanan-ransomware-lockbit-3.html" style="color: #007bff; text-decoration: none;">https://www.idsirtii.or.id/peringatan/baca/570/imbauan-keamanan-ransomware-lockbit-3.html</a><br>
            </p>
        </div>
    </div>
    
</div>



@endsection