@extends('layouts.temp')

@section('title')
Landing Page - Regular Loading
@endsection

@section('content')

{{-- Loading Type Badge --}}
<div class="loading-badge">REGULAR LOADING</div>

{{-- External CSS --}}
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

{{-- Google Fonts + Iconify --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
<script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

{{-- ═══ HERO ═══ --}}
<section id="section-hero" class="section-anchor hero grid-bg">
  <div class="orb orb-hero-r"></div>
  <div class="orb orb-hero-l"></div>

  <div class="wrap hero-wrap">
    <div class="hero-inner">

      {{-- Left --}}
      <div class="hero-left">
        <div class="hero-badge">
          <span class="badge-pulse"></span>
          Sistem Aktif — Perlindungan 24/7
        </div>

        <h1 class="hero-title display">
          Lindungi Aset<br>
          Digital dengan<br>
          <span class="grad">Respons Cepat</span>
        </h1>

        <p class="hero-desc">
          Platform informasi keamanan siber yang menyediakan edukasi, panduan, dan pengetahuan untuk membantu pengguna memahami ancaman digital serta meningkatkan kesadaran dalam melindungi data dan sistem informasi.
        </p>

        <div class="hero-btns">
          <a href="#section-layanan" class="btn-primary">
            <iconify-icon icon="ph:shield-check-bold" style="font-size:17px;"></iconify-icon>
            Lihat Layanan
          </a>
          <a href="#section-contact" class="btn-outline">
            <iconify-icon icon="ph:paper-plane-tilt-bold" style="font-size:17px;"></iconify-icon>
            Laporkan Insiden
          </a>
        </div>
      </div>

      {{-- Right: Shield rings --}}
      <div class="hero-right">
        <div class="sh-container">
          <div class="sh-ring sh-ring-1">
            <div class="sh-dot sh-dot-cyan"></div>
            <div class="sh-dot sh-dot-blue"></div>
          </div>
          <div class="sh-ring sh-ring-2"></div>
          <div class="sh-ring sh-ring-3"></div>
          <div class="sh-core">
            <iconify-icon icon="mdi:shield-check" style="color:#2979ff;font-size:72px;filter:drop-shadow(0 0 20px rgba(41,121,255,.7));"></iconify-icon>
          </div>
        </div>
      </div>
    </div>

    {{-- Stats --}}
    <div class="stats-grid reveal">
      <div class="stat-card">
        <div class="stat-header">
          <iconify-icon icon="ph:shield-check-duotone" style="color:#2979ff;font-size:22px;"></iconify-icon>
          <div class="stat-num">240+</div>
        </div>
        <div class="stat-label">Insiden Ditangani</div>
      </div>
      <div class="stat-card">
        <div class="stat-header">
          <iconify-icon icon="ph:trend-up-duotone" style="color:#2979ff;font-size:22px;"></iconify-icon>
          <div class="stat-num">99.8%</div>
        </div>
        <div class="stat-label">Tingkat Resolusi</div>
      </div>
      <div class="stat-card">
        <div class="stat-header">
          <iconify-icon icon="ph:clock-countdown-duotone" style="color:#2979ff;font-size:22px;"></iconify-icon>
          <div class="stat-num">&lt;2h</div>
        </div>
        <div class="stat-label">Rata-rata Respons</div>
      </div>
      <div class="stat-card">
        <div class="stat-header">
          <iconify-icon icon="ph:eye-duotone" style="color:#2979ff;font-size:22px;"></iconify-icon>
          <div class="stat-num">24/7</div>
        </div>
        <div class="stat-label">Monitoring Aktif</div>
      </div>
    </div>
  </div>
</section>

{{-- ═══ PROFIL ═══ --}}
<section id="section-profil" class="section-anchor section-dark">
  <div class="wrap">
    <div class="profil-inner">

      {{-- Image --}}
      <div class="profil-img-col reveal">
        <div class="profil-img-wrap">
          <div class="profil-img-glow"></div>
          <img src="{{ asset('img/gambar2.png') }}" alt="Robot hand with shield" class="img-float">
        </div>
      </div>

      {{-- Content --}}
      <div class="profil-content reveal delay-1">
        <div class="section-tag">Tentang Kami</div>
        <h2 class="h2 display mb-3">Profil <span class="grad">CSIC</span></h2>
        <p class="profil-desc">
          Platform Informasi Keamanan Siber (<strong class="profil-strong">Cyber Security Information Center / CSIC</strong>) Website ini merupakan platform informasi yang menyediakan berbagai pengetahuan dan sumber daya terkait keamanan siber. Tujuan utama dari website ini adalah untuk meningkatkan pemahaman masyarakat mengenai pentingnya melindungi sistem informasi, data, serta aktivitas digital dari berbagai ancaman di dunia siber.
        </p>
        <p class="profil-desc">Melalui website ini, pengguna dapat memperoleh informasi mengenai jenis-jenis serangan siber, teknik pencegahan, praktik keamanan terbaik, serta perkembangan terbaru di dunia keamanan informasi. Konten yang disediakan bertujuan untuk meningkatkan kesadaran dan pemahaman mengenai pentingnya menjaga keamanan data dan sistem di era digital.
        </p>
        <p class="profil-desc">Website ini juga menjadi media edukasi yang memberikan panduan mengenai langkah-langkah perlindungan terhadap berbagai ancaman seperti malware, phishing, peretasan, serta kebocoran data. Dengan adanya informasi tersebut, diharapkan pengguna dapat lebih waspada dan mampu menerapkan langkah-langkah keamanan yang tepat saat menggunakan teknologi digital.
        </p>
        <p class="services-label">CSIC memberikan layanan utama seperti:</p>

        <div class="services-list">
          <div class="profile-item">
            <div class="p-icon"><iconify-icon icon="ph:bell-ringing-bold"></iconify-icon></div>
            <span class="service-text">Pemberian Informasi Keamanan Siber</span>
          </div>
          <div class="profile-item">
            <div class="p-icon"><iconify-icon icon="ph:shield-plus-bold"></iconify-icon></div>
            <span class="service-text">Edukasi dan Kesadaran Keamanan Siber</span>
          </div>
          <div class="profile-item">
            <div class="p-icon"><iconify-icon icon="ion:git-network"></iconify-icon></div>
            <span class="service-text">Informasi Pendeteksian Ancaman</span>
          </div>
          <div class="profile-item">
            <div class="p-icon"><iconify-icon icon="ph:magnifying-glass-bold"></iconify-icon></div>
            <span class="service-text">Panduan Perlindungan Sistem</span>
          </div>
          <div class="profile-item">
            <div class="p-icon"><iconify-icon icon="ph:megaphone-bold"></iconify-icon></div>
            <span class="service-text">Berita &amp; Perkembangan Keamanan Siber</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ═══ VISI MISI ═══ --}}
<section id="section-visimisi" class="section-anchor grid-bg section-deep">
  <div class="wrap">

    <div class="section-header reveal">
      <div class="section-tag section-tag-center">Arah &amp; Tujuan</div>
      <h2 class="h2 display">Visi &amp; <span class="grad">Misi</span></h2>
    </div>

    <div class="vm-layout">

      <div class="vm-left">
        <div class="vm-card visi reveal">
          <div class="vm-card-header">
            <div class="vm-icon-box"><iconify-icon icon="ph:eye-bold"></iconify-icon></div>
            <h3 class="vm-heading">Visi</h3>
          </div>
          <p class="visi-quote">
            Menjadi pusat informasi keamanan siber yang terpercaya dalam menyediakan edukasi, pengetahuan, serta referensi mengenai perlindungan sistem informasi, data, dan aktivitas digital dari berbagai ancaman siber.
          </p>
        </div>

        <div class="vm-card reveal delay-1">
          <div class="vm-card-header-lg">
            <div class="vm-icon-box"><iconify-icon icon="ph:target-bold"></iconify-icon></div>
            <h3 class="vm-heading">Misi</h3>
          </div>
          <p class="misi-intro">Perwujudan visi tersebut dilakukan melalui beberapa upaya berikut:</p>
          <div class="misi-list">
            <div class="misi-item">
              <span class="vm-letter">a</span>
              <p class="misi-text">Menyediakan informasi dan edukasi mengenai keamanan siber yang mudah dipahami oleh masyarakat, mahasiswa, dan pengguna teknologi informasi.</p>
            </div>
            <div class="misi-item">
              <span class="vm-letter">b</span>
              <p class="misi-text">Meningkatkan kesadaran pengguna internet terhadap pentingnya menjaga keamanan data pribadi, akun digital, dan sistem informasi.</p>
            </div>
            <div class="misi-item">
              <span class="vm-letter">c</span>
              <p class="misi-text">Menyajikan berbagai referensi mengenai jenis ancaman siber, metode serangan, serta cara pencegahannya.</p>
            </div>
            <div class="misi-item">
              <span class="vm-letter">d</span>
              <p class="misi-text">Mendukung peningkatan literasi keamanan siber melalui artikel, panduan, dan materi pembelajaran yang informatif.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="vm-img-col reveal delay-2">
        <div class="vm-img-wrap">
          <div class="vm-img-glow"></div>
          <img src="{{ url('img/visimisi.png') }}" alt="Collaboration illustration" class="img-float-vm">
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ═══ LAYANAN ═══ --}}
<section id="section-layanan" class="section-anchor section-dark">
  <div class="wrap">

    <div class="section-header reveal">
      <div class="section-tag section-tag-center">Apa yang Kami Lakukan</div>
      <h2 class="h2 display">Layanan <span class="grad">Utama CSIC</span></h2>
      <p class="section-desc">Kami menyediakan lima layanan inti untuk memastikan keamanan ekosistem digital secara menyeluruh.</p>
    </div>

    <div class="layanan-grid">

      <div class="layanan-card reveal">
        <div class="l-icon"><iconify-icon icon="ph:bell-ringing-bold"></iconify-icon></div>
        <h4 class="card-heading">a. Pemberian Informasi dan Peringatan Keamanan Siber</h4>
        <p class="card-text">Website ini menyediakan informasi mengenai perkembangan terbaru berbagai ancaman siber yang sedang berkembang, sehingga pengguna dapat mengetahui potensi risiko dan melakukan langkah pencegahan sejak dini.</p>
      </div>

      <div class="layanan-card reveal delay-1">
        <div class="l-icon"><iconify-icon icon="ph:shield-plus-bold"></iconify-icon></div>
        <h4 class="card-heading">b. Informasi Penanganan Insiden Siber</h4>
        <p class="card-text">Layanan ini diberikan berupa kegiatan penanganan dan pemulihan Insiden Siber secara cepat dan terstruktur.</p>
      </div>

      <div class="layanan-card reveal delay-2">
        <div class="l-icon"><iconify-icon icon="ion:git-network"></iconify-icon></div>
        <h4 class="card-heading">c. Informasi Koordinasi dan Respons Insiden</h4>
        <p class="card-text">Memberikan penjelasan mengenai proses koordinasi insiden dengan konstituen, menentukan kemungkinan penyebab insiden, dan memberikan rekomendasi penanggulangan.</p>
      </div>

      <div class="widget-span reveal delay-3">
        <div class="widget-box">
          <div class="widget-icon-wrap">
            <div class="widget-ring-1"></div>
            <div class="widget-ring-2"></div>
            <div class="widget-icon-core">
              <iconify-icon icon="mdi:shield-check" style="color:#2979ff;font-size:44px;filter:drop-shadow(0 0 16px rgba(41,121,255,.6));"></iconify-icon>
            </div>
          </div>
          <div class="widget-text-center">
            <p class="widget-title">5 Layanan Inti</p>
            <p class="widget-subtitle">Perlindungan dan edukasi komprehensif untuk ekosistem digital Anda</p>
          </div>
          <div class="widget-stats">
            <div class="widget-stat">
              <p class="widget-stat-num">24/7</p>
              <p class="widget-stat-label">Update</p>
            </div>
            <div class="widget-stat">
              <p class="widget-stat-num">99%</p>
              <p class="widget-stat-label">Informasi</p>
            </div>
          </div>
        </div>
      </div>

      <div class="layanan-card reveal">
        <div class="l-icon"><iconify-icon icon="mdi:radar"></iconify-icon></div>
        <h4 class="card-heading">d. Pendeteksian Serangan</h4>
        <p class="card-text">Menyediakan pengetahuan mengenai cara mengenali aktivitas mencurigakan yang dapat mengindikasikan adanya serangan terhadap sistem atau jaringan.</p>
      </div>

      <div class="layanan-card layanan-e reveal delay-1">
        <div class="l-icon"><iconify-icon icon="ph:megaphone-bold"></iconify-icon></div>
        <h4 class="card-heading">e. Pembangunan Kesadaran Dan Kepedulian Terhadap Keamanan Siber</h4>
        <p class="card-text">Menyediakan artikel, panduan, dan materi edukasi yang bertujuan untuk meningkatkan kesadaran pengguna dalam menjaga keamanan data pribadi, akun digital, serta sistem informasi.</p>
      </div>

    </div>
  </div>
</section>

{{-- ═══ BERITA ═══ --}}
<section id="section-berita" class="section-anchor grid-bg section-deep">
  <div class="wrap">

    <div class="section-header-row reveal">
      <div>
        <div class="section-tag">Berita Terkini</div>
        <h2 class="h2 display">Laporan &amp; Analisis<br><span class="grad">Keamanan Siber</span></h2>
      </div>
      <a href="#" class="read-more-link">
        Baca Selengkapnya
        <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
      </a>
    </div>

    <div class="berita-grid">
      @foreach($berita as $b)
      <a href="{{ route('detail.berita', $b->id) }}" class="news-card reveal">
        <div class="news-img">
          @if(!empty($b->img))
            <img src="{{ url($b->img) }}" alt="{{ $b->title }}">
          @else
            <div class="news-img-placeholder">
              <iconify-icon icon="ph:newspaper-bold" style="color:var(--cyan);font-size:3rem;opacity:.5;"></iconify-icon>
            </div>
          @endif
        </div>
        <div class="news-body">
          <div class="news-meta">
            <span class="news-tag"><iconify-icon icon="ph:newspaper-bold"></iconify-icon>Berita</span>
            <span class="news-date"><iconify-icon icon="ph:calendar-blank"></iconify-icon>{{ $b->created_at->format('d M Y') }}</span>
          </div>
          <h3 class="news-title">{{ $b->title }}</h3>
          <p class="news-excerpt">{{ Str::limit($b->desc, 120) }}</p>
        </div>
      </a>
      @endforeach
    </div>
  </div>
</section>

{{-- ═══ INFOGRAFIS CAROUSEL ═══ --}}
<section id="section-infografis" class="section-anchor section-dark">
  <div class="wrap">
    <div class="section-header-sm reveal">
      <div class="section-tag section-tag-center">Edukasi Keamanan</div>
      <h2 class="h2 display">Infografis <span class="grad">Keamanan Siber</span></h2>
    </div>

    <div class="carousel-wrap carousel-padded reveal">
      <div class="carousel-outer">
        <div class="carousel-track" id="info-track">

          @foreach($infografis as $info)
          <div class="info-slide">
            <div class="info-card" data-bs-toggle="modal" data-bs-target="#infografisModal{{ $info->id }}">
              <img src="{{ url($info->img) }}" alt="{{ $info->name }}" class="info-img">
              <div class="info-foot">
                <iconify-icon icon="ph:download-simple-bold"></iconify-icon>
                <p class="info-foot-text">
                  Download Infografis</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      <button class="c-arrow prev" id="info-prev" aria-label="Prev">
        <iconify-icon icon="ph:caret-left-bold" class="icon-btn"></iconify-icon>
      </button>
      <button class="c-arrow next" id="info-next" aria-label="Next">
        <iconify-icon icon="ph:caret-right-bold" class="icon-btn"></iconify-icon>
      </button>
      <div class="c-dots" id="info-dots"></div>
    </div>
  </div>
</section>

@foreach($infografis as $info)
<div class="modal fade" id="infografisModal{{ $info->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body text-center p-4">
        <a href="{{ url($info->img) }}" download class="modal-dl-btn">
          <iconify-icon icon="ph:download-bold"></iconify-icon> Download
        </a>
        <img src="{{ url($info->img) }}" class="img-fluid" alt="{{ $info->name }}">
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- ═══ KEGIATAN CAROUSEL ═══ --}}
<section id="section-kegiatan" class="section-anchor grid-bg section-deep">
  <div class="wrap">
    <div class="section-header-row reveal">
      <div>
        <div class="section-tag">Kegiatan &amp; Webinar</div>
        <h2 class="h2 display">Program Edukasi<br><span class="grad">Keamanan Siber</span></h2>
      </div>
      <a href="#" class="read-more-link">
        Semua Kegiatan <iconify-icon icon="ph:arrow-right-bold"></iconify-icon>
      </a>
    </div>

    <div class="carousel-wrap carousel-padded reveal">
      <div class="carousel-outer">
        <div class="carousel-track" id="event-track">

          @foreach($kegiatan as $k)
          <div class="event-slide">
            <div class="event-card" data-bs-toggle="modal" data-bs-target="#modalKegiatan{{ $k->id }}">
              <div class="event-img">
                @if(!empty($k->img))
                  <img src="{{ url($k->img) }}" alt="{{ $k->name }}">
                @else
                  <div class="event-img-placeholder">
                    <iconify-icon icon="ph:presentation-chart-bold" style="color:var(--cyan);font-size:3rem;opacity:.5;"></iconify-icon>
                  </div>
                @endif
              </div>
              <div class="event-content">
                <div class="event-header">
                  <span class="event-badge"><iconify-icon icon="ph:presentation-chart-bold"></iconify-icon>Kegiatan</span>
                  <div class="event-date-right">
                    <p class="event-date-num">{{ $k->created_at->format('d') }}</p>
                    <p class="event-date-label">{{ $k->created_at->translatedFormat('F Y') }}</p>
                  </div>
                </div>
                <h3 class="event-title">{{ $k->name }}</h3>
                @if($k->resume)
                <p class="event-desc">{{ Str::limit($k->resume, 120) }}</p>
                @endif
              </div>
              <div class="event-footer">
                <p class="event-location"><iconify-icon icon="ph:calendar-blank" style="font-size:12px;"></iconify-icon>{{ $k->created_at->translatedFormat('d F Y') }}</p>
                <a href="#" class="btn-primary btn-sm">Detail</a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
      <button class="c-arrow prev" id="event-prev" aria-label="Prev">
        <iconify-icon icon="ph:caret-left-bold" class="icon-btn"></iconify-icon>
      </button>
      <button class="c-arrow next" id="event-next" aria-label="Next">
        <iconify-icon icon="ph:caret-right-bold" class="icon-btn"></iconify-icon>
      </button>
      <div class="c-dots" id="event-dots"></div>
    </div>
  </div>
</section>

@foreach($kegiatan as $k)
<div class="modal fade" id="modalKegiatan{{ $k->id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ $k->name }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-4">
        @if($k->img)
        <img src="{{ url($k->img) }}" class="img-fluid mb-3" alt="{{ $k->name }}">
        @endif
        @if($k->resume)
        <h6 class="text-start modal-resume-title"><strong>Resume Kegiatan:</strong></h6>
        <p class="text-start modal-resume-text">{{ $k->resume }}</p>
        @endif
      </div>
    </div>
  </div>
</div>
@endforeach

{{-- ═══ CONTACT ═══ --}}
<section id="section-contact" class="section-anchor section-dark">
  <div class="wrap">
    <div class="section-header reveal">
      <div class="section-tag section-tag-center">Hubungi Kami</div>
      <h2 class="h2 display">Siap Membantu <span class="grad">Kapan Saja</span></h2>
      <p class="section-desc" style="max-width:420px;">Temukan informasi atau ajukan pertanyaan seputar keamanan siber melalui website ini.</p>
    </div>

    <div class="contact-grid">
      <div class="contact-card reveal">
        <div class="c-icon"><iconify-icon icon="ph:envelope-simple-bold"></iconify-icon></div>
        <h3 class="contact-title">Email Address</h3>
        <p class="contact-subtitle">Kirim laporan atau pertanyaan</p>
        <a href="mailto:csic@ca.id" class="contact-link">csic@ca.id</a>
      </div>
      <div class="contact-card reveal delay-1">
        <div class="c-icon"><iconify-icon icon="ph:phone-call-bold"></iconify-icon></div>
        <h3 class="contact-title">Phone Number</h3>
        <p class="contact-subtitle">Hubungi hotline 24/7 kami</p>
        <a href="tel:" class="contact-link">(Ext. 3320, 3321)</a>
      </div>
      <div class="contact-card reveal delay-2">
        <div class="c-icon"><iconify-icon icon="ph:map-pin-bold"></iconify-icon></div>
        <h3 class="contact-title">Office Address</h3>
        <p class="contact-subtitle">Kunjungi kantor kami</p>
        <p class="contact-link-p">Jakarta, Indonesia</p>
      </div>
    </div>

    {{-- CTA Box --}}
    <div class="cta-box reveal">
      <div class="cta-glow"></div>
      <h3 class="cta-title">Laporkan Insiden Sekarang</h3>
      <p class="cta-desc">Dapatkan informasi dan edukasi keamanan siber untuk membantu melindungi data dan aktivitas digital Anda.</p>
      <div class="cta-btns">
        <a href="mailto:" class="btn-primary">
          <iconify-icon icon="ph:envelope-simple-bold" style="font-size:17px;"></iconify-icon>
          Kirim Laporan
        </a>
        <a href="#" class="btn-outline">
          <iconify-icon icon="ph:download-simple-bold" style="font-size:17px;"></iconify-icon>
          Unduh Formulir
        </a>
      </div>
    </div>
  </div>
</section>

{{-- POPUP MODAL WELCOME --}}
<div class="modal fade" id="imageSliderModal" tabindex="-1" aria-labelledby="imageSliderModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageSliderModalLabel">Selamat Datang di Pusat Informasi Keamanan Siber</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-4">
        <div id="imageSliderCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            @for($i = 1; $i <= 5; $i++)
              <div class="carousel-item @if($i == 1) active @endif">
                <div class="mb-3">
                  <a href="{{ asset('infografis/' . $i . '.png') }}" download class="modal-dl-btn">
                    <iconify-icon icon="ph:download-bold"></iconify-icon> Download
                  </a>
                </div>
                <img src="{{ asset('infografis/' . $i . '.png') }}" class="img-fluid modal-img" alt="Infografis {{ $i }}">
              </div>
            @endfor
          </div>
          <button class="carousel-control-prev popup-carousel-btn" type="button" data-bs-target="#imageSliderCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </button>
          <button class="carousel-control-next popup-carousel-btn" type="button" data-bs-target="#imageSliderCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- External JS --}}
<script src="{{ asset('assets/js/script.js') }}?v={{ filemtime(public_path('assets/js/script.js')) }}"></script>

@endsection
