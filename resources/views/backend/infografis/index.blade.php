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
            @if(session('msg'))
            <div class="alert alert-success alert-dismissible fade show mx-4 mt-3" role="alert">
              {{ session('msg') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif
            <div class="d-flex justify-content-end mb-3" style="margin-right: 30px">
              <a href="{{ route('create.infografis') }}" class="btn btn-sm btn-primary">Tambah</a>
            </div>
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="@if (empty($d->img)) {{ url('') }}/images/default-image.png
                                                    @else
                                                    {{ url('') }}/infografis/{{ $d->img }} @endif" style="height: 90px; width:auto;">
                        </div>
                      </div>
                    </td>
                    <td class="align-middle">
                      <a href="{{route('edit.infografis',$d->id)}}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit Data">
                        Edit
                      </a>
                      |
                      <a href="{{ route('delete.infografis', $d->id) }}"
                        class="text-secondary font-weight-bold text-xs"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                        data-toggle="tooltip"
                        data-original-title="Hapus Data">
                        Hapus
                     </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection