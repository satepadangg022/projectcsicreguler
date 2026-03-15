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
    .nav-pills {
        display: flex;
        justify-content: center; /* Membuat nav berada di tengah */
        gap: 250px; /* Menambah jarak antar nav-link */
    }
    
    .nav-pills .nav-link {
        color: #5A7BEF;
        font-weight: bold;
        font-size: 18px;
        padding: 10px 20px; /* Tambahkan padding agar lebih nyaman diklik */
    }
    
    .nav-pills .nav-link.active {
        background-color: #5A7BEF !important;
        color: white !important; /* Warna teks aktif biru */
        font-weight: bold;
        border-radius: 10px;
        padding: 8px 18px;
    }
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
        }
        .carousel-item {
            text-align: center;
        }
        .event-card {
            background-color: white;
            border-radius: 15px;
            padding: 15px;
            color: black;
        }
        .event-card img {
            border-radius: 10px;
        }
        .search-container {
            display: flex;
            align-items: center;
            background-color: white; /* Warna latar belakang biru */
            padding: 2px;
            border-radius: 10px; /* Membulatkan sudut */
            width: 300px; /* Sesuaikan ukuran */
        }

        .search-container input {
            border: none;
            outline: none;
            background: transparent;
            padding: 8px;
            flex: 1;
        }

        .search-container input::placeholder {
            color: white;
        }

        .search-container button {
            background: #5A7BEF;
            border: none;
            padding: 10px 14px;
            border-radius: 20%;
            cursor: pointer;
        }

        .search-container button i {
            color: white;
        }
        .file-drop-area {
            border: 2px dashed #ccc;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
        }

        .file-drop-area:hover {
            border-color: #5A7BEF;
        }

        .btn-primary {
            background-color: #5A7BEF;
            border: none;
        }

        .btn-primary:hover {
            background-color: #4a6ed8;
        }

        .custom-carousel {
        overflow: hidden;
    }

    .news-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 15px;
    background-color: #fff;
    max-width: 600px;
    width: 100%;
}

.news-title {
    font-size: 18px;
    font-weight: bold;
    margin: 8px 0;
}

.news-date {
    font-size: 14px;
    color: #888;
}

.news-desc {
    font-size: 14px;
    color: #333;
}

.carousel-image {
    border-radius: 8px;
    object-fit: cover;
}
.news-card .news-date,
.news-card .news-title,
.news-card .news-desc {
    text-align: left !important;
}
.card img {
        width: 100%;
        height: 380px;
        object-fit: cover;
    }
    .carousel-control-prev-icon,
.carousel-control-next-icon {
    filter: invert(100%);
}
</style>

<div class="row full-background">
    <div class="col-md-4">
        <div class="info-card">
            <h1>Kegiatan</h1>
            <div class="breadcrumb">
                <a href="/">Home</a> | 
                <a href="#">Layanan</a> |
                <a href="#">Kegiatan</a>
            </div>
        </div>
    </div>
</div>
<div class="container" style="padding-top: 30px; padding-bottom: 200px;">
    <!-- Navbar -->
    <nav class="nav nav-pills justify-content-center mb-4 mt-3">
        <a class="nav-link active" data-bs-toggle="pill" href="#berita">Berita</a>
        <a class="nav-link" data-bs-toggle="pill" href="#kegiatan">Kegiatan</a>
    </nav>

    <!-- Tab Content -->
    <div class="tab-content">
        <!-- Berita Tab -->
        <div class="tab-pane fade show custom-carousel d-none" id="berita">
            <div class="container justify-content-center d-flex py-4 mb-4" style="background-color: #5A7BEF;">
                <div id="eventCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        @foreach ($berita->chunk(2) as $chunkIndex => $chunk)
                            <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                                <div class="d-flex justify-content-center gap-4 flex-wrap">
                                    @foreach ($chunk as $item)
                                    <div class="news-card card" style="width: 550px;">
                                        <div class="image-wrapper" style="height: 180px; overflow: hidden;">
                                            <img src="{{ asset('berita/' . ($item->img ?? 'default.jpg')) }}" 
                                                 class="card-img-top" 
                                                 alt="Gambar Berita" 
                                                 style="object-fit: cover; width: 100%; height: 100%;" />
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <div class="news-date mb-2" style="font-size: 0.85rem; color: #777;">
                                                {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}
                                            </div>
                                            <div class="news-title mb-2" style="font-weight: bold;">
                                                {{ $item->title }}
                                            </div>
                                            <div class="news-desc" style="font-size: 0.9rem; flex-grow: 1;">
                                                {{ \Illuminate\Support\Str::limit(strip_tags($item->desc), 200, '...') }}
                                                <br><br>
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('detail.berita', $item->id) }}" class="btn btn-sm btn-primary">Lihat Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <div class="row g-4 justify-content-center">
                    @foreach($berita as $b)
                        <div class="col-md-6 col-sm-6 mb-4 px-4">
                            <div class="card shadow border-0">
                                <div class="p-2"> 
                                    <img src="@if (empty($b->img)) {{ url('') }}/images/default-image.png
                                    @else
                                    {{ url('') }}/berita/{{ $b->img }} @endif" class="card-img-top" alt="...">
                                </div>
                                
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title">{{ $b->title }}</h5>
                                        <small>{{ \Carbon\Carbon::parse($b->created_at)->format('d F Y') }}</small>
                                    </div>
                                    <a href="{{route('detail.berita', $b->id)}}" class="btn btn-primary btn-sm" style="background-color: #5A7BEF;">Baca Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            
        </div>
    </div>

       <!-- Kegiatan Tab -->
<div class="tab-pane fade d-none" id="kegiatan">
    <div class="container">
        <div id="kegiatanCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($kegiatan->chunk(2) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            @foreach ($chunk as $item)
                                @php
                                    $imgUrl = empty($item->img) 
                                        ? url('images/default-image.png') 
                                        : url('kegiatan/' . $item->img);
                                @endphp
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div class="card shadow-sm border" style="width: 18rem;">
                                        <img src="{{ $imgUrl }}"
                                             class="card-img-top kegiatan-img"
                                             alt="Kegiatan {{ $loop->iteration }}"
                                             style="cursor:pointer"
                                             data-bs-toggle="modal"
                                             data-bs-target="#kegiatanModal"
                                             data-img="{{ $imgUrl }}"
                                             data-title="{{ $item->name }}"
                                             data-resume="{{ strip_tags($item->resume) }}">
                                        <div class="card-body text-center">
                                            <h5 class="card-title fw-bold">{{ $item->name ?? 'Judul Kegiatan' }}</h5>
                                            <button 
                                                class="btn btn-sm btn-primary mt-2 openModalBtn" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#kegiatanModal"
                                                data-img="{{ $imgUrl }}"
                                                data-title="{{ $item->name }}"
                                                data-resume="{{ strip_tags($item->resume) }}">
                                                Lihat Detail
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Navigasi Panah -->
            <button class="carousel-control-prev" type="button" data-bs-target="#kegiatanCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#kegiatanCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</div>

<!-- Modal Kegiatan -->
<div class="modal fade" id="kegiatanModal" tabindex="-1" aria-labelledby="kegiatanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-4">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold" id="kegiatanModalLabel">Judul Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <div class="modal-body">
                <img id="kegiatanImage" src="" class="img-fluid rounded mb-3" alt="Poster Kegiatan">
                <pre id="kegiatanFormattedText" class="bg-light p-2 rounded border text-dark" style="white-space: pre-wrap;"></pre>

                <div class="d-flex flex-wrap gap-2 mt-3">
                    <a id="downloadPosterBtn" href="#" class="btn btn-sm btn-secondary" download>
                        Unduh Poster
                    </a>
                    <button id="copyTextBtn" class="btn btn-sm btn-outline-dark">
                        Salin Pesan
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

<!-- jsPDF & Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    const kegiatanModal = document.getElementById('kegiatanModal');
    kegiatanModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const img = button.getAttribute('data-img');
        const title = button.getAttribute('data-title');
        const resume = button.getAttribute('data-resume');

        const pesan = `📢 Judul Kegiatan: ${title}\n📄 Ringkasan: ${resume}\n🖼️ Lihat poster: ${img}`;
        document.getElementById('kegiatanFormattedText').textContent = pesan;

        document.getElementById('kegiatanModalLabel').innerText = title;
        document.getElementById('kegiatanImage').src = img;

        // Unduh Poster
        document.getElementById('downloadPosterBtn').href = img;

        // Salin Pesan
        document.getElementById('copyTextBtn').onclick = () => {
            navigator.clipboard.writeText(pesan).then(() => {
                alert('Pesan disalin ke clipboard!');
            });
        };
    });

document.addEventListener('DOMContentLoaded', function () {
    // Menangani perubahan tab
    const tabLinks = document.querySelectorAll('.nav-link');
    
    // Set "Berita" as default active tab
    const defaultTab = document.querySelector('.nav-link[href="#berita"]'); // Assuming #berita is the ID for Berita tab
    if (defaultTab) {
        defaultTab.classList.add('active'); // Add 'active' class to the "Berita" tab link
        const defaultTabPane = document.querySelector(defaultTab.getAttribute('href'));
        if (defaultTabPane) {
            defaultTabPane.classList.remove('d-none'); // Show the "Berita" tab content
            defaultTabPane.classList.add('show', 'active'); // Make it visible and active
        }
    }

    tabLinks.forEach(tab => {
        tab.addEventListener('click', function () {
            // Menyembunyikan semua konten tab dengan menambahkan kelas 'd-none'
            const tabPanes = document.querySelectorAll('.tab-pane');
            tabPanes.forEach(pane => {
                pane.classList.add('d-none');
                pane.classList.remove('show', 'active');
            });
            
            // Menampilkan konten tab yang aktif
            const targetTab = document.querySelector(tab.getAttribute('href'));
            targetTab.classList.remove('d-none');
            targetTab.classList.add('show', 'active');
            
            // Update active class on tab link
            tabLinks.forEach(link => {
                link.classList.remove('active');
            });
            tab.classList.add('active');
        });
    });
});

// Modal kegiatan dynamic content
document.querySelectorAll('.openModalBtn').forEach(button => {
    button.addEventListener('click', () => {
        const title = button.getAttribute('data-title');
        const img = button.getAttribute('data-img');
        const resume = button.getAttribute('data-resume');

        document.getElementById('kegiatanModalLabel').innerText = title;
        document.getElementById('kegiatanImage').src = img;
        document.getElementById('kegiatanResume').innerText = resume;
    });
});


</script>
@endsection