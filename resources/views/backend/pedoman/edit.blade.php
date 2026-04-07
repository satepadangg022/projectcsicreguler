@extends('backend.layout')

@section('title')
Edit pedoman
@endsection

@section('content')
@if(session('msg'))
  <div class="alert alert-success alert-dismissible fade show mx-4 mt-3" role="alert">
    {{ session('msg') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-warning shadow-dark border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Edit Pedoman</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="mb-3" style="margin-left: 20px">
          <a href="{{ route('index.pedoman') }}" class="btn btn-sm btn-secondary">< Kembali</a>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{ route('update.pedoman', $data->id) }}" method="POST" enctype="multipart/form-data" style="padding-left: 20px;">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="name" class="form-label">Name</label><br>
            <input type="text" id="name" name="name" aria-describedby="name" value="{{$data->name}}" class="form-control form-control-pill">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Penerbit</label><br>
            <input type="text" id="type" name="type" aria-describedby="type" value="{{$data->type}}" class="form-control form-control-pill">
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">Image</label><br>
            <input type="file" id="img" name="img" aria-describedby="img">
            <div id="img" class="form-text">Max. 5MB File jpeg,png,jpg</div>
            <div class="mt-2">
              <strong>Gambar Saat Ini:</strong><br>
              @env('local')
              <img src="{{ url('pedoman/' . $data->img) }}" alt="pedoman" width="200">
              @endenv
              @production
              <img src="{{ url('public/pedoman/' . $data->img) }}" alt="pedoman" width="200">
              @endproduction
            </div>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label><br>
            <textarea name="description" class="form-control form-control-pilltext" rows="4">{{ old('description', $data->description) }}</textarea>
          </div>
          <div class="mb-3">
            <label for="pdf" class="form-label">PDF</label><br>
            <input type="file" id="pdf" name="pdf" aria-describedby="pdf" accept="application/pdf">
            @if($data->pdf)
              <div class="mt-2">
                <a href="{{ asset('storage/'.$data->pdf) }}" target="_blank">Current PDF</a>
              </div>
            @endif
            <div id="pdf" class="form-text">Max. 5MB File PDF</div>
          </div>
          <button type="submit" class="btn btn-warning">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
