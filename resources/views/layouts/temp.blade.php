<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Iconify --}}
    <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
    @font-face {
        font-family: 'Satoshi';
        src: url("{{ asset('fonts/Satoshi-Regular.otf') }}") format('opentype');
        font-weight: normal; font-style: normal;
    }
    @font-face {
        font-family: 'Satoshi';
        src: url("{{ asset('fonts/Satoshi-Bold.otf') }}") format('opentype');
        font-weight: bold; font-style: normal;
    }
    @font-face {
        font-family: 'Satoshi';
        src: url("{{ asset('fonts/Satoshi-Italic.otf') }}") format('opentype');
        font-weight: normal; font-style: italic;
    }

    /* ─── CSIC Base Theme ─── */
    :root {
        --deep:   #020c1b;
        --dark:   #051020;
        --panel:  #071628;
        --card:   rgba(255,255,255,.035);
        --border: rgba(11,95,255,.2);
        --accent: #0b5fff;
        --bright: #2979ff;
        --cyan:   #00d4ff;
        --white:  #eef4ff;
        --muted:  #7a9cc4;
    }

    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }

    body {
        font-family: 'Plus Jakarta Sans', 'Satoshi', sans-serif;
        background: var(--deep);
        color: var(--white);
        overflow-x: hidden;
        margin: 0;
    }

    h1, h2, h3, h4, h5, h6 { font-family: 'Space Grotesk', sans-serif; }
    a { text-decoration: none; color: inherit; }
    iconify-icon { display: inline-block; vertical-align: -0.125em; }

    /* ─── NAVBAR ─── */
    .csic-nav {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 300;
        background: rgba(2,12,27,.9);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border-bottom: 1px solid var(--border);
    }
    .nav-inner {
        max-width: 1240px;
        margin: 0 auto;
        padding: 0 28px;
        height: 68px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }
    .nav-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        flex-shrink: 0;
    }
    .nav-logo-box {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: linear-gradient(135deg, #0b5fff, #00d4ff);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }
    .nav-logo-text {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 700;
        font-size: 1.25rem;
        background: linear-gradient(135deg, #fff 40%, #00d4ff);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        white-space: nowrap;
    }
    .nav-links {
        display: flex;
        align-items: center;
        gap: 30px;
    }
    .nav-link {
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 500;
        font-size: .82rem;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: var(--muted);
        position: relative;
        padding-bottom: 3px;
        transition: color .25s;
        white-space: nowrap;
    }
    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background: var(--cyan);
        border-radius: 2px;
        transition: width .3s;
    }
    .nav-link:hover,
    .nav-link.active { color: var(--cyan); }
    .nav-link:hover::after,
    .nav-link.active::after { width: 100%; }

    /* CTA button */
    .btn-nav {
        background: linear-gradient(135deg, #0b5fff, #2979ff);
        color: #fff !important;
        padding: 9px 22px;
        border-radius: 9px;
        font-family: 'Space Grotesk', sans-serif;
        font-weight: 600;
        font-size: .8rem;
        letter-spacing: .04em;
        transition: box-shadow .25s, transform .2s;
        box-shadow: 0 4px 18px rgba(11,95,255,.38);
        white-space: nowrap;
        flex-shrink: 0;
        text-decoration: none;
    }
    .btn-nav:hover { transform: translateY(-1px); box-shadow: 0 6px 26px rgba(11,95,255,.58); color: #fff !important; }

    /* ─── RESPONSIVE NAVBAR ─── */
    @media (max-width: 768px) {
        .nav-links { display: none; }
    }

    /* ─── FOOTER ─── */
    .csic-footer {
        background: var(--deep);
        border-top: 1px solid var(--border);
    }
    .footer-inner {
        max-width: 1240px;
        margin: 0 auto;
        padding: 42px 28px 28px;
    }
    .footer-top {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 22px;
        margin-bottom: 26px;
    }
    .footer-logo {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .footer-logo-box {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, #0b5fff, #00d4ff);
        border-radius: 9px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .footer-nav {
        display: flex;
        flex-wrap: wrap;
        gap: 22px;
    }
    .footer-link {
        font-family: 'Space Grotesk', sans-serif;
        color: var(--muted);
        font-size: .82rem;
        transition: color .2s;
    }
    .footer-link:hover { color: var(--cyan); }
    .footer-socials { display: flex; gap: 8px; }
    .social-btn {
        width: 36px;
        height: 36px;
        border-radius: 9px;
        background: rgba(11,95,255,.18);
        border: 1px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all .25s;
        color: var(--muted);
    }
    .social-btn:hover { border-color: var(--cyan); background: rgba(0,212,255,.1); color: var(--cyan); }
    .social-btn iconify-icon { font-size: 16px; }
    .footer-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(11,95,255,.42), transparent);
        margin-bottom: 22px;
    }
    .footer-bottom {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }
    .footer-copy, .footer-contact {
        color: var(--muted);
        font-size: .77rem;
        display: flex;
        align-items: center;
        gap: 6px;
        margin: 0;
    }
    .footer-contact iconify-icon { font-size: 13px; }

    /* ─── MISC ─── */
    .banner { width: 100%; height: 400px; background: url('image.png') no-repeat center center/cover; }
    </style>
</head>
<body>

{{-- ═══ NAVBAR ═══ --}}
<nav class="csic-nav" id="csic-nav">
    <div class="nav-inner">

        {{-- Logo --}}
        <a href="#section-hero" class="nav-logo">
            <span class="nav-logo-text">CSIC</span>
        </a>

        {{-- Nav Links --}}
        <div class="nav-links" id="nav-links">
            <a href="/#section-hero"      class="nav-link active">Home</a>
            <a href="/tentang-kami"    class="nav-link">Tentang Kami</a>
            <a href="/visi-misi"  class="nav-link">Visi &amp; Misi</a>
            <a href="/jenis-layanan"   class="nav-link">Layanan</a>
            <a href="/#section-contact"   class="nav-link">Kontak</a>
            @auth
            @endauth
        </div>

        {{-- CTA Button --}}
        <a href="#section-contact" class="btn-nav">Hubungi Kami</a>

    </div>
</nav>

{{-- Content --}}
<div style="padding-top:68px;">
    @yield('content')
</div>

{{-- ═══ FOOTER ═══ --}}
<footer class="csic-footer">
    <div class="footer-inner">

        {{-- Top row --}}
        <div class="footer-top">

            {{-- Logo + tagline --}}
            <div class="footer-logo">
                <div>
                    <p style="font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:1rem;color:#eef4ff;margin:0;">CSIC</p>
                    <p style="font-size:.68rem;color:var(--muted);margin:0;">Cyber Security Information Center</p>
                </div>
            </div>

            {{-- Nav links --}}
            <div class="footer-nav">
                <a href="#section-hero"       class="footer-link">Home</a>
                <a href="#section-profil"     class="footer-link">Profil</a>
                <a href="#section-visimisi"   class="footer-link">Visi &amp; Misi</a>
                <a href="#section-layanan"    class="footer-link">Layanan</a>
                <a href="#section-berita"     class="footer-link">Berita</a>
                <a href="#section-contact"    class="footer-link">Kontak</a>
            </div>

            {{-- Social icons --}}
            <div class="footer-socials">
                <a href="" target="_blank" class="social-btn" aria-label="LinkedIn">
                    <iconify-icon icon="mdi:linkedin"></iconify-icon>
                </a>
                <a href="" target="_blank" class="social-btn" aria-label="Twitter">
                    <iconify-icon icon="mdi:twitter"></iconify-icon>
                </a>
                <a href="" target="_blank" class="social-btn" aria-label="Instagram">
                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                </a>
                <a href="" target="_blank" class="social-btn" aria-label="YouTube">
                    <iconify-icon icon="mdi:youtube"></iconify-icon>
                </a>
                <a href="" target="_blank" class="social-btn" aria-label="Facebook">
                    <iconify-icon icon="mdi:facebook"></iconify-icon>
                </a>
            </div>
        </div>

        {{-- Divider --}}
        <div class="footer-divider"></div>

        {{-- Bottom row --}}
        <div class="footer-bottom">
            <p class="footer-copy">Copyright &copy; 2026. All Rights Reserved.</p>
            <p class="footer-contact">
                <iconify-icon icon="ph:envelope-simple"></iconify-icon>
                <span>csic@ca.id</span>
                &nbsp;&bull;&nbsp;
                <iconify-icon icon="ph:phone"></iconify-icon>
                <span>(Ext. 3320, 3321)</span>
            </p>
        </div>

    </div>
</footer>

{{-- Scripts --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// ── Active nav scroll spy ─────────────────────────────────
const secs  = document.querySelectorAll('section[id]');
const links = document.querySelectorAll('.nav-link');
window.addEventListener('scroll', () => {
    let cur = '';
    secs.forEach(s => { if (window.scrollY >= s.offsetTop - 120) cur = s.id; });
    links.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + cur));
}, { passive: true });
</script>

</body>
</html>
