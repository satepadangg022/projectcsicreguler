@extends('backend.layout')

@section('title')
Dashboard - Regular Loading
@endsection

@section('content')

{{-- Loading Type Badge --}}
<div class="loading-badge">REGULAR LOADING</div>

<style>
.loading-badge {
    position: fixed;
    top: 80px;
    right: 20px;
    background: #ff6b6b;
    color: white;
    padding: 12px 24px;
    border-radius: 8px;
    font-weight: bold;
    z-index: 1000;
    box-shadow: 0 4px 15px rgba(255,107,107,0.3);
}
</style>


<div class="row mb-3">
    <div class="col-12">
        <div class="row">

            {{-- Card Statistik: Berita --}}
            <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
                <a href="#tab-berita" class="text-decoration-none stat-card-link" data-tab="tab-berita">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                                    <i class="fas fa-newspaper text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Berita</p>
                                    <h5 class="font-weight-bolder">{{ $totalBerita }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Statistik: Infografis --}}
            <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
                <a href="#tab-infografis" class="text-decoration-none stat-card-link" data-tab="tab-infografis">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                    <i class="fas fa-image text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Infografis</p>
                                    <h5 class="font-weight-bolder">{{ $totalInfografis }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Statistik: Kegiatan --}}
            <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
                <a href="#tab-kegiatan" class="text-decoration-none stat-card-link" data-tab="tab-kegiatan">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                                    <i class="fas fa-calendar-alt text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Kegiatan</p>
                                    <h5 class="font-weight-bolder">{{ $totalKegiatan }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Statistik: RFC --}}
            <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
                <a href="#tab-rfc" class="text-decoration-none stat-card-link" data-tab="tab-rfc">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                                    <i class="fas fa-file-alt text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">RFC</p>
                                    <h5 class="font-weight-bolder">{{ $totalRfc }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Card Statistik: Pedoman --}}
            <div class="col-xl-2 col-sm-6 mb-xl-0 mb-4">
                <a href="#tab-pedoman" class="text-decoration-none stat-card-link" data-tab="tab-pedoman">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="icon icon-shape bg-gradient-danger shadow text-center border-radius-md">
                                    <i class="fas fa-book text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Pedoman</p>
                                    <h5 class="font-weight-bolder">{{ $totalPedoman }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>


@if(session('msg'))
<div class="row mb-3">
    <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
</div>
@endif


<div class="row">
    <div class="col-12">
        <div class="card">

            {{-- Header Tab Navigation --}}
            <div class="card-header pb-0">
                <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">

                    {{-- Tab: Berita --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="berita-tab" data-bs-toggle="tab"
                            data-bs-target="#tab-berita" type="button" role="tab"
                            aria-controls="tab-berita" aria-selected="true">
                            <i class="fas fa-newspaper me-1"></i> Berita
                        </button>
                    </li>

                    {{-- Tab: Infografis --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="infografis-tab" data-bs-toggle="tab"
                            data-bs-target="#tab-infografis" type="button" role="tab"
                            aria-controls="tab-infografis" aria-selected="false">
                            <i class="fas fa-image me-1"></i> Infografis
                        </button>
                    </li>

                    {{-- Tab: Kegiatan --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kegiatan-tab" data-bs-toggle="tab"
                            data-bs-target="#tab-kegiatan" type="button" role="tab"
                            aria-controls="tab-kegiatan" aria-selected="false">
                            <i class="fas fa-calendar-alt me-1"></i> Kegiatan
                        </button>
                    </li>

                    {{-- Tab: RFC --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="rfc-tab" data-bs-toggle="tab"
                            data-bs-target="#tab-rfc" type="button" role="tab"
                            aria-controls="tab-rfc" aria-selected="false">
                            <i class="fas fa-file-alt me-1"></i> RFC
                        </button>
                    </li>

                    {{-- Tab: Pedoman --}}
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pedoman-tab" data-bs-toggle="tab"
                            data-bs-target="#tab-pedoman" type="button" role="tab"
                            aria-controls="tab-pedoman" aria-selected="false">
                            <i class="fas fa-book me-1"></i> Pedoman
                        </button>
                    </li>

                </ul>
            </div>

            {{-- Tab Content --}}
            <div class="card-body px-0 pb-2">
                <div class="tab-content" id="dashboardTabsContent">

                    <div class="tab-pane fade show active" id="tab-berita" role="tabpanel" aria-labelledby="berita-tab">
                        <div class="d-flex justify-content-between align-items-center px-4 pt-3 pb-2">
                            <h6 class="mb-0">Data Berita</h6>
                            <a href="{{ route('create.berita') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah Berita
                            </a>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sub-Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Desc</th>
                                        <th class="text-secondary opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($berita as $d)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <img src="@if(empty($d->img)){{ url('') }}/images/default-image.png @else {{ url('') }}/{{ $d->img }}@endif"
                                                     style="height: 90px; width:auto;">
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold mb-0">{{ $d->title }}</span>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold mb-0">{{ $d->sub_title }}</span>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold mb-0">{{ Str::limit($d->desc, 100) }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('edit.berita', $d->id) }}" class="text-secondary font-weight-bold text-xs">Edit</a>
                                            |
                                            <a href="{{ route('delete.berita', $d->id) }}" class="text-secondary font-weight-bold text-xs"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center py-4">
                                            <span class="text-sm text-secondary">Belum ada data berita.</span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-infografis" role="tabpanel" aria-labelledby="infografis-tab">
                        <div class="d-flex justify-content-between align-items-center px-4 pt-3 pb-2">
                            <h6 class="mb-0">Data Infografis</h6>
                            <a href="{{ route('create.infografis') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah Infografis
                            </a>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                                        <th class="text-secondary opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($infografis as $d)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <img src="@if(empty($d->img)){{ url('') }}/images/default-image.png @else {{ url('') }}/{{ $d->img }}@endif"
                                                     style="height: 90px; width:auto;">
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('edit.infografis', $d->id) }}" class="text-secondary font-weight-bold text-xs">Edit</a>
                                            |
                                            <a href="{{ route('delete.infografis', $d->id) }}" class="text-secondary font-weight-bold text-xs"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="2" class="text-center py-4">
                                            <span class="text-sm text-secondary">Belum ada data infografis.</span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-kegiatan" role="tabpanel" aria-labelledby="kegiatan-tab">
                        <div class="d-flex justify-content-between align-items-center px-4 pt-3 pb-2">
                            <h6 class="mb-0">Data Kegiatan</h6>
                            <a href="{{ route('create.kegiatan') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah Kegiatan
                            </a>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                                        <th class="text-secondary opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kegiatan as $d)
                                    <tr>
                                        <td>
                                            <span class="text-xs font-weight-bold mb-0">{{ $d->name }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <img src="@if(empty($d->img)){{ url('') }}/images/default-image.png @else {{ url('') }}/{{ $d->img }}@endif"
                                                     style="height: 90px; width:auto;">
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('edit.kegiatan', $d->id) }}" class="text-secondary font-weight-bold text-xs">Edit</a>
                                            |
                                            <a href="{{ route('delete.kegiatan', $d->id) }}" class="text-secondary font-weight-bold text-xs"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-4">
                                            <span class="text-sm text-secondary">Belum ada data kegiatan.</span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-rfc" role="tabpanel" aria-labelledby="rfc-tab">
                        <div class="d-flex justify-content-between align-items-center px-4 pt-3 pb-2">
                            <h6 class="mb-0">Data RFC</h6>
                            <a href="{{ route('create.rfc') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah RFC
                            </a>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PDF Preview</th>
                                        <th class="text-secondary opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($rfc as $d)
                                    <tr>
                                        <td>
                                            <span class="text-xs font-weight-bold mb-0">{{ $d->title }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                @if (!empty($d->pdf))
                                                    <object data="{{ url('rfc/pdf/' . $d->pdf) }}" type="application/pdf" width="120" height="90">
                                                        <a href="{{ url('rfc/pdf/' . $d->pdf) }}" target="_blank">Lihat PDF</a>
                                                    </object>
                                                @else
                                                    <span class="text-danger text-xs">PDF tidak tersedia</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('edit.rfc', $d->id) }}" class="text-secondary font-weight-bold text-xs">Edit</a>
                                            |
                                            <a href="{{ route('delete.rfc', $d->id) }}" class="text-secondary font-weight-bold text-xs"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-4">
                                            <span class="text-sm text-secondary">Belum ada data RFC.</span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab-pedoman" role="tabpanel" aria-labelledby="pedoman-tab">
                        <div class="d-flex justify-content-between align-items-center px-4 pt-3 pb-2">
                            <h6 class="mb-0">Data Pedoman</h6>
                            <a href="{{ route('create.pedoman') }}" class="btn btn-sm btn-primary">
                                <i class="fas fa-plus me-1"></i> Tambah Pedoman
                            </a>
                        </div>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Penerbit</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                                        <th class="text-secondary opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pedoman as $d)
                                    <tr>
                                        <td>
                                            <span class="text-xs font-weight-bold mb-0">{{ $d->name }}</span>
                                        </td>
                                        <td>
                                            <span class="text-xs font-weight-bold mb-0">{{ $d->type }}</span>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <img src="@if(empty($d->img)){{ url('') }}/images/default-image.png @else {{ url('') }}/{{ $d->img }}@endif"
                                                     style="height: 90px; width:auto;">
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <a href="{{ route('edit.pedoman', $d->id) }}" class="text-secondary font-weight-bold text-xs">Edit</a>
                                            |
                                            <a href="{{ route('delete.pedoman', $d->id) }}" class="text-secondary font-weight-bold text-xs"
                                               onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-4">
                                            <span class="text-sm text-secondary">Belum ada data pedoman.</span>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    console.log('REGULAR LOADING - Dashboard');
    console.log('Semua gambar dimuat langsung tanpa optimasi');
    console.log('Total images:', document.querySelectorAll('img').length);


    var hash = window.location.hash;
    if (hash) {
        var tabId = hash.replace('#', '');
        var tabButton = document.querySelector('[data-bs-target="#' + tabId + '"]');
        if (tabButton) {
            var tab = new bootstrap.Tab(tabButton);
            tab.show();
        }
    }

    var tabButtons = document.querySelectorAll('#dashboardTabs button[data-bs-toggle="tab"]');
    tabButtons.forEach(function(btn) {
        btn.addEventListener('shown.bs.tab', function(e) {
            var target = e.target.getAttribute('data-bs-target');
            history.replaceState(null, null, target);
        });
    });

    var statCards = document.querySelectorAll('.stat-card-link');
    statCards.forEach(function(card) {
        card.addEventListener('click', function(e) {
            e.preventDefault();
            var tabId = this.getAttribute('data-tab');
            var tabButton = document.querySelector('[data-bs-target="#' + tabId + '"]');
            if (tabButton) {
                var tab = new bootstrap.Tab(tabButton);
                tab.show();
            }
        });
    });
});
</script>

@endsection
