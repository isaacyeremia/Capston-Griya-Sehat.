<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Griya Sehat')</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar">
    <div class="container">
      <a class="brand-logo" href="{{ url('/home') }}">
        <img src="{{ asset('logo.png') }}" alt="logo" style="height:44px;"/>
        <span style="font-size:16px;">Griya Sehat UKDC</span>
      </a>

      {{-- Sembunyikan menu tengah saat di halaman login atau register --}}
      @if (!request()->is('login') && !request()->is('register'))
      <div class="nav-menu">
        <a href="{{ url('/home') }}">Beranda</a>
        <a href="#">Profil</a>
        <a href="#">Apotek</a>
        <a href="#">Layanan</a>
        <a href="#">Kontak</a>
      </div>
      @endif

      <div class="nav-actions">
        @auth
        <form method="POST" action="{{ route('logout') }}">@csrf
          <button type="submit" class="btn btn-outline-brown">Logout</button>
        </form>
        @else
          <a href="{{ route('login') }}" class="btn btn-outline-brown">Login</a>
          <a href="{{ route('register') }}" class="btn btn-brown">Daftar</a>
        @endauth
      </div>
    </div>
  </nav>

  @yield('content')

  {{-- Footer lengkap hanya tampil di halaman /home --}}
@if (request()->is('home') || request()->is('about'))
<footer class="footer">
  <div class="footer-top container">
    <div class="footer-cols">
      <div class="footer-col">
        <h5>Griya Sehat</h5>
        <p class="muted">
          Pelayanan Kesehatan Tradisional Interkontinental dan Pengobatan Tradisional Indonesia Melayani:
          Akupunktur, Herbal TCM/Indonesia, Kop/Bekam, Kerokan/GuaSha, Pijat/Tuina.
        </p>
        <div class="social-badges">
          <span>IG</span><span>TP</span>
        </div>
      </div>

      <div class="footer-col">
        <h6>Jadwal Praktik</h6>
        <p class="muted">Senin 08.00 – 17.00<br>Selasa – Jumat 08.00 – 21.00<br>Sabtu – Minggu Tutup</p>
      </div>

      <div class="footer-col">
        <h6>Layanan</h6>
        <p class="muted">Akupunktur<br>Herbal TCM/Indonesia<br>Kop/Bekam<br>Kerokan/GuaSha<br>Pijat/Tuina</p>
      </div>

      <div class="footer-col">
        <h6>Kontak</h6>
        <p class="muted">📞 0822-2772-2234<br>📍 Jl. Dr. Ir. H. Soekarno No.201b, Klampis Ngasem, Kec. Sukolilo, Surabaya</p>
      </div>
    </div>

    <!-- separator line -->
    <div class="footer-sep" aria-hidden="true"></div>
  </div>

  <!-- copyright bottom (centered) -->
  <div class="footer-bottom">
    © {{ date('Y') }} Griya Sehat. All rights reserved.
  </div>
</footer>
@endif

@if (request()->is('login') || request()->is('register'))
    <footer style="
        background: var(--brown-800);
        height: 80px;
        margin-top: 40px;
        width: 100%;
    ">
    </footer>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
{{-- Render semua skrip yang dipush dari child views --}}
@stack('scripts')
</body>
</html>
