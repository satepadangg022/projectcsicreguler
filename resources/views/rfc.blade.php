@extends('layouts.temp')

@section('title')
FRC
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

    .card {
        width: 100%;
        max-width: 250px;
        margin: auto;
    }

    .card object, .card img {
        height: 350px;
        object-fit: cover;
        width: 100%;
        border-radius: 10px 10px 0 0;
    }

    .btn-primary {
        background-color: #5A7BEF;
        border: none;
    }

    .btn-primary:hover {
        background-color: #4a6ed8;
    }
</style>

<div class="row full-background">
    <div class="col-md-4">
        <div class="info-card">
            <h1>RFC</h1>
            <div class="breadcrumb">
                <a href="/">Home</a> | 
                <a href="#">Layanan</a> |
                <a href="#">RFC</a>
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
                                    <object data="{{ asset('rfc/pdf/' . $item->pdf) }}" type="application/pdf" width="100%" height="400px">
                                        <p>PDF tidak dapat ditampilkan. 
                                            <a href="{{ asset('rfc/pdf/' . $item->pdf) }}" target="_blank">Klik di sini untuk melihat PDF</a>.
                                        </p>
                                    </object>
                                    <div class="card-body">
                                        <h5 class="card-title text-left">{{ $item->title }}</h5>
                                        <a href="{{ asset('rfc/pdf/' . $item->pdf) }}" target="_blank" class="btn btn-primary btn-sm w-80 text-left">Download PDF</a>
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
                                        <object data="{{ asset('frc/img/' . $item->img) }}" type="application/pdf">
                                            <img src="{{ asset('frc/img/' . $item->img) }}" alt="{{ $item->name }}">
                                        </object>
                                        <div class="card-body">
                                            <h5 class="card-title text-left">{{ $item->name }}</h5>
                                            <a href="{{ asset('frc/pdf/' . $item->pdf) }}" target="_blank" class="btn btn-primary w-80 text-left">Lihat PDF</a>
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
