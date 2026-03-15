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
</style>

<div class="row full-background">
    <div class="col-md-4">
        <div class="info-card">
            <h1>Contact</h1>
            <div class="breadcrumb">
                <a href="/">Home</a> | 
                <a href="#">Contact</a> 
            </div>
        </div>
    </div>
</div>
<div style=" min-height: 100vh; display: flex; margin-top: 100px;">
    <div class="container text-center mt-5 p-4">
        <h1>Contact</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-3">
                <div class="card border-0 shadow d-flex flex-column h-100" style="min-height: 250px;">
                    <div class="card-body flex-grow-1 d-flex flex-column align-items-center py-5">
                        <div style="padding-bottom: 20px;">
                            <img src="{{ url('icon/email.png') }}" width="70" alt="">
                        </div>
                        <b>Email Address</b>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow d-flex flex-column h-100" style="min-height: 250px;">
                    <div class="card-body flex-grow-1 d-flex flex-column align-items-center py-5">
                        <div style="padding-bottom: 20px;">
                            <img src="{{ url('icon/telpon.png') }}" width="70" alt="">
                        </div>
                        <b>Phone Number</b>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0 shadow d-flex flex-column h-100" style="min-height: 250px;">
                    <div class="card-body flex-grow-1 d-flex flex-column align-items-center py-5">
                        <div style="padding-bottom: 20px;">
                            <img src="{{ url('icon/lokasi.png') }}" width="70" alt="">
                        </div>
                        <b></b>
                        <p><br>
                            <br>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection