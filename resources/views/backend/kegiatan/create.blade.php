@extends('backend.layout')

@section('title')
Kegiatan
@endsection

@section('content')

    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Kegiatan</h6>
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
            <form action="{{route('store.kegiatan')}}" method="POST" enctype="multipart/form-data" style="padding-left: 20px; padding-right: 20px;">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label><br>
                  <input type="text" id="name" name="name" aria-describedby="name" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="img" class="form-label">Image</label><br>
                  <input type="file" id="img" name="img" aria-describedby="img">
                  <div id="img" class="form-text">Max. 2MB File jpeg,png,jpg</div>
                </div>
                <div class="mb-3">
                  <label for="resume" class="form-label">Resume</label><br>
                  <textarea name="resume" id="" class="form-control form-control-pilltext">{{ old('resume') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
@endsection