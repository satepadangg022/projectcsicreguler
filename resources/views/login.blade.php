@extends('layouts.temp')

@section('title')
Home
@endsection

@section('content')
@guest
    <div style="background-color: white;">
        <div class="container my-auto" style="padding:20px;">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header bg-dark">
                            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('login.proses') }}" method="POST">
                                @csrf 
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="input-group input-group-outline my-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email..." value="{{ old('email') }}" required>
                                </div>
                                <div class="input-group input-group-outline mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Password..." required>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endguest
@endsection
