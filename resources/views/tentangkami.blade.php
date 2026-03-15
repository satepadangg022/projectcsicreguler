@extends('layouts.temp')

@section('title')
Tentang Kami | CSIC
@endsection

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<style>
  .page-hero { padding: 80px 0 64px; position: relative; overflow: hidden; background: var(--deep); }
  .page-hero-inner { text-align: center; }
  .page-breadcrumb { display: flex; align-items: center; justify-content: center; gap: 8px; color: var(--muted); font-size: .85rem; margin-top: 16px; }
  .page-breadcrumb a { color: var(--cyan); transition: opacity .2s; }
  .page-breadcrumb a:hover { opacity: .75; }
  .page-breadcrumb iconify-icon { font-size: 11px; }
</style>

{{-- ═══ PAGE HEADER ═══ --}}
<section class="page-hero grid-bg">
  <div class="orb orb-hero-r"></div>
  <div class="wrap">
    <div class="page-hero-inner">
      <div class="section-tag section-tag-center">Tentang Kami</div>
      <h1 class="h2 display">Profil <span class="grad">CSIC</span></h1>
      <nav class="page-breadcrumb">
        <a href="/">Home</a>
        <iconify-icon icon="ph:caret-right-bold"></iconify-icon>
        <span>Tentang Kami</span>
        <iconify-icon icon="ph:caret-right-bold"></iconify-icon>
        <span>Profil</span>
      </nav>
    </div>
  </div>
</section>

{{-- ═══ PROFIL ═══ --}}
<section class="section-dark">
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

<script>
const io = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('on'); io.unobserve(e.target); } });
}, { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));
</script>

@endsection
