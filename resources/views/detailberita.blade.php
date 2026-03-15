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
            <img src="@if (empty($data->img)) {{ url('') }}/images/default-image.png
                                    @else
                                    {{ url('') }}/berita/{{ $data->img }} @endif" alt="Ilustrasi Ransomware" style="max-width: 100%; height: auto; border: 1px solid #ccc; box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);">
        </div>
    
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px; text-align: center;">{{$data->title}}</h1>
    
        <p style="font-size: 14px; color: #666; margin-bottom: 20px; text-align: center;">
            {{$data->sub_title}}
        </p>
        <hr>
        <div style="text-align: justify; font-size: 16px; line-height: 1.6;">
            <p>
                {!! $data->desc !!}
            </p>
        </div>
    
        <div style="margin-top: 20px; font-size: 14px; color: #555;">
            <p>Source: <br>
                <a href="{{$data->source}}" style="color: #007bff; text-decoration: none;">{{$data->source}}</a><br>
                <a href="{{$data->source2}}" style="color: #007bff; text-decoration: none;">{{$data->source2}}</a><br>
                <a href="{{$data->source3}}" style="color: #007bff; text-decoration: none;">{{$data->source3}}</a><br>
                <a href="{{$data->source4}}" style="color: #007bff; text-decoration: none;">{{$data->source4}}</a><br>
                <a href="{{$data->source5}}" style="color: #007bff; text-decoration: none;">{{$data->source5}}</a><br>
                <a href="{{$data->source6}}" style="color: #007bff; text-decoration: none;">{{$data->source6}}</a><br>
                <a href="{{$data->source7}}" style="color: #007bff; text-decoration: none;">{{$data->source7}}</a><br>
                <a href="{{$data->source8}}" style="color: #007bff; text-decoration: none;">{{$data->source8}}</a><br>
            </p>
        </div>
    </div>
    
</div>



@endsection