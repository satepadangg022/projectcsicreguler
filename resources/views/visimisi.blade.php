@extends('layouts.temp')

@section('title')
Visi & Misi | CSIC
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
      <div class="section-tag section-tag-center">Arah &amp; Tujuan</div>
      <h1 class="h2 display">Visi &amp; <span class="grad">Misi</span></h1>
      <nav class="page-breadcrumb">
        <a href="/">Home</a>
        <iconify-icon icon="ph:caret-right-bold"></iconify-icon>
        <span>Tentang Kami</span>
        <iconify-icon icon="ph:caret-right-bold"></iconify-icon>
        <span>Visi &amp; Misi</span>
      </nav>
    </div>
  </div>
</section>

{{-- ═══ VISI MISI ═══ --}}
<section class="section-deep grid-bg">
  <div class="wrap">
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

<script>
const io = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('on'); io.unobserve(e.target); } });
}, { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));
</script>

@endsection
