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
        justify-content: flex-end;
    }

    .info-card {
    background: rgba(78, 115, 223, 0.7); 
    color: white;
    padding: 20px 30px;
    border-radius: 10px;
    width: 350px;
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
    .nav-pills {
        display: flex;
        justify-content: center; /* Membuat nav berada di tengah */
        gap: 250px; /* Menambah jarak antar nav-link */
    }
    
    .nav-pills .nav-link {
        color: white;
        font-weight: bold;
        font-size: 18px;
        padding: 10px 20px; /* Tambahkan padding agar lebih nyaman diklik */
    }
    
    .nav-pills .nav-link.active {
        background-color: white !important;
        color: #5A7BEF !important; /* Warna teks aktif biru */
        font-weight: bold;
        border-radius: 20px;
        padding: 8px 18px;
    }
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        .carousel-item {
            text-align: center;
        }
        .event-card {
            background-color: white;
            border-radius: 15px;
            padding: 15px;
            color: black;
        }
        .event-card img {
            border-radius: 10px;
        }
        .search-container {
            display: flex;
            align-items: center;
            background-color: white; /* Warna latar belakang biru */
            padding: 2px;
            border-radius: 10px; /* Membulatkan sudut */
            width: 300px; /* Sesuaikan ukuran */
        }

        .search-container input {
            border: none;
            outline: none;
            background: transparent;
            padding: 8px;
            flex: 1;
        }

        .search-container input::placeholder {
            color: white;
        }

        .search-container button {
            background: #5A7BEF;
            border: none;
            padding: 10px 14px;
            border-radius: 20%;
            cursor: pointer;
        }

        .search-container button i {
            color: white;
        }
        .file-drop-area {
            border: 2px dashed #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        .file-drop-area:hover {
            border-color: #5A7BEF;
        }

        .btn-primary {
            background-color: #5A7BEF;
            border: none;
        }

        .btn-primary:hover {
            background-color: #4a6ed8;
        }
        .card {
            width: 100%;
            max-width: 250px;
            margin: auto;
        }
        .card img {
            height: 350px;
            object-fit: cover;
        }
</style>

<div class="row full-background">
    <div class="col-md-4">
        <div class="info-card">
            <h1>Panduan Teknis</h1>
            <div class="breadcrumb">
                <a href="/">Home</a> | 
                <a href="#">Layanan</a> |
                <a href="#">Panduan Teknis</a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5" style="padding-bottom: 100px;">
    <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($data->chunk(4) as $key => $chunk)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="row">
                        @foreach($chunk->take(2) as $item)
                        <div class="col-md-6 d-flex">
                            <div class="card w-100">
                                <img src="{{ asset('pedoman/' . $item->img) }}" class="card-img-top" alt="{{ $item->name }}">
                                <div class="card-body">
                                    <h5 class="card-title text-left">{{ $item->name }}</h5>
                                    <div class="d-flex justify-content-start align-items-center gap-2 mt-2">
                                        <span class="text-secondary">{{ $item->type }}</span>
                                    </div>
                        
                                    <div class="d-flex justify-content-start align-items-center gap-2 mt-2">
                                        <a href="{{ asset('pedoman/pdf/' . $item->pdf) }}" target="_blank" class="btn btn-primary btn-sm">Baca Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                    @if($chunk->count() > 2)
                        <div class="row mt-4">
                            @foreach($chunk->slice(2) as $item)
                                <div class="col-md-6 d-flex">
                                    <div class="card">
                                        <img src="{{ asset('pedoman/' . $item->img) }}" class="card-img-top" alt="{{ $item->name }}">
                                        <div class="card-body">
                                            <h5 class="card-title text-left">{{ $item->name }}</h5>
                                            <div class="text-start">
                                                <a href="{{ asset('pedoman/pdf/' . $item->pdf) }}" target="_blank"  class="btn btn-primary btn-sm">Baca Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    
</div>

@endsection