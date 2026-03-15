@extends('backend.layout')

@section('title')
RFC
@endsection

@section('content')

    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Add New RFC</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="mb-3" style="margin-left: 20px">
              <a href="{{ route('index.rfc') }}" class="btn btn-sm btn-secondary">< Kembali</a>
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
            <form action="{{route('store.rfc')}}" method="POST" enctype="multipart/form-data" style="padding-left: 20px; padding-right: 20px;">
                @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Name</label><br>
                  <input type="text" id="title" name="title" aria-describedby="title" class="form-control form-control-pill" required>
                </div>

                <div class="mb-3">
                  <label for="pdf" class="form-label">PDF</label><br>
                  <input type="file" id="pdf" name="pdf" aria-describedby="pdf" accept="application/pdf" required>
                  <div id="pdf" class="form-text">Max. 5MB File PDF</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
@endsection
