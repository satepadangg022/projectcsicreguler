@extends('backend.layout')

@section('title')
Edit Kegiatan
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
          <h6 class="text-white text-capitalize ps-3">Edit Kegiatan</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="mb-3" style="margin-left: 20px">
          <a href="{{ route('index.kegiatan') }}" class="btn btn-sm btn-secondary">< Kembali</a>
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
        <form action="{{ route('update.kegiatan', $data->id) }}" method="POST" enctype="multipart/form-data" style="padding-left: 20px;">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="name" class="form-label">Name</label><br>
            <input type="text" id="name" name="name" aria-describedby="name" value="{{$data->name}}" class="form-control form-control-pill">
          </div>
          <div class="mb-3">
            <label for="img" class="form-label">Image</label><br>
            <input type="file" id="img" name="img" aria-describedby="img">
            <div id="img" class="form-text">Max. 2MB File jpeg,png,jpg</div>
            <div class="mt-2">
              <strong>Gambar Saat Ini:</strong><br>
              <img src="{{ url('kegiatan/' . $data->img) }}" alt="kegiatan" width="200">
            </div>
          </div>
          <div class="mb-3">
            <label for="resume" class="form-label">Resume</label><br>
            <textarea name="resume" id="" class="form-control form-control-pilltext">{{ old('resume', $data->resume) }}</textarea>
          </div>
          <button type="submit" class="btn btn-warning">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
