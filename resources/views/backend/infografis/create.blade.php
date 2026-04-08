@extends('backend.layout')

@section('title')
Infografis
@endsection

@section('content')
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Infografis</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="mb-3" style="margin-left: 20px">
              <a href="{{ route('index.infografis') }}" class="btn btn-sm btn-secondary">< Kembali</a>
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
            <form action="{{route('store.infografis')}}" method="POST" enctype="multipart/form-data" style="padding-left: 20px;">
                @csrf
                <div class="mb-3">
                  <label for="img" class="form-label">Image</label><br>
                  <input type="file" id="img" name="img" aria-describedby="img">
                  <div id="img" class="form-text">Max. 8MB File jpeg,png,jpg</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>
        </div>
      </div>
    </div>
@endsection