@extends('backend.layout')

@section('title')
Berita
@endsection

@section('content')

    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Berita</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="mb-3" style="margin-left: 20px">
              <a href="{{ route('index.berita') }}" class="btn btn-sm btn-secondary">< Kembali</a>
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
            <form action="{{route('store.berita')}}" method="POST" enctype="multipart/form-data" style="padding-left: 20px; padding-right: 20px;">
                @csrf
                <div class="mb-3">
                  <label for="img" class="form-label">Image</label><br>
                  <input type="file" id="img" name="img" aria-describedby="img">
                  <div id="img" class="form-text">Max. 2MB File jpeg,png,jpg</div>
                </div>
                <div class="mb-3">
                  <label for="title" class="form-label">Title</label><br>
                  <input type="text" id="title" name="title" aria-describedby="title" value="{{ old('title') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="sub_title" class="form-label">Sub-Title</label><br>
                  <input type="text" id="sub_title" name="sub_title" aria-describedby="sub_title" value="{{ old('sub_title') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="desc" class="form-label">Description</label><br>
                  <textarea name="desc" id="" class="form-control form-control-pilltext">{{ old('desc') }}</textarea>
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source</label><br>
                  <input type="text" id="source" name="source" aria-describedby="source" value="{{ old('source') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source II</label><br>
                  <input type="text" id="source" name="source2" aria-describedby="source" value="{{ old('source2') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source III</label><br>
                  <input type="text" id="source" name="source3" aria-describedby="source" value="{{ old('source3') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source IV</label><br>
                  <input type="text" id="source" name="source4" aria-describedby="source" value="{{ old('source4') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source V</label><br>
                  <input type="text" id="source" name="source4" aria-describedby="source" value="{{ old('source5') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source VI</label><br>
                  <input type="text" id="source" name="source4" aria-describedby="source" value="{{ old('source6') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source VII</label><br>
                  <input type="text" id="source" name="source4" aria-describedby="source" value="{{ old('source7') }}" class="form-control form-control-pill">
                </div>
                <div class="mb-3">
                  <label for="source" class="form-label">Source VII</label><br>
                  <input type="text" id="source" name="source4" aria-describedby="source" value="{{ old('source8') }}" class="form-control form-control-pill">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
@endsection