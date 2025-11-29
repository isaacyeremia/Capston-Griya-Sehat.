@extends('layouts.app')

@section('title','Tentang Griya Sehat')

@section('content')
<!-- small hero / breadcrumb-like -->
<section class="hero-outer" style="padding:40px 0 40px 0;">
  <div class="hero-inner text-center">
    <h1 style="font-size:34px; font-weight:800; margin:0 0 8px 0; color:#fff">Tentang Griya Sehat</h1>
    <p style="color:rgba(255,255,255,0.9); max-width:900px; margin:8px auto 0;">
      Klinik Kesehatan Akupunktur, Pengobatan Herbal, Kop/Bekam, Kerokan, Pijat/Tuina.
    </p>
  </div>
</section>

<!-- content: about text + image -->
<section class="about-section">
  <div class="about-inner" style="max-width:1100px; margin:0 auto;">
    <div class="about-left">
      <h3 style="font-weight:800; font-size:28px; margin-bottom:14px;">Tentang Griya Sehat</h3>
      <p style="color:var(--muted); line-height:1.8;">
        Klinik Kesehatan Akupunktur, Pengobatan Herbal, Kop/Bekam, Kerokan/GuaSha, Pijat/Tuina.
        Dengan tim dokter spesialis dan fasilitas lengkap, kami berkomitmen memberikan pelayanan kesehatan terpadu yang mudah diakses oleh seluruh masyarakat.
      </p>

      <ul style="color:var(--muted); margin-top:18px; line-height:1.8;">
        <li>Pelayanan Akupunktur & Terapi Tradisional</li>
        <li>Pengobatan Herbal & Konsultasi</li>
        <li>Pelayanan Kop/Bekam, Kerokan, Pijat/Tuina</li>
        <li>Jadwal praktek fleksibel sesuai kebutuhan pasien</li>
      </ul>


    <div class="about-right">
      <div class="about-card">
        <!-- ganti asset jika punya gambar -->
        <img src="{{ asset('images/fasilitas.jpg') }}" alt="Fasilitas" style="width:100%;height:100%;object-fit:cover;border-radius:12px;">
      </div>
    </div>
  </div>
</section>

<!-- tenaga medis / cards -->
<section class="section" style="padding-top:10px;">
  <div class="container text-center">
    <h3 style="font-weight:700;">Tenaga Medis</h3>
    <p style="color:var(--muted); margin-bottom:18px;">Tim dokter profesional kami yang melayani berbagai kebutuhan.</p>

    <div class="services-row" style="justify-content:center; gap:20px; flex-wrap:wrap;">
      <!-- Card 1 -->
      <div class="service-card" style="max-width:260px;">
        <div style="height:120px; display:flex; align-items:center; justify-content:center; color:#7a4b36;">Foto Tenaga Medis</div>
        <h5 style="margin-top:8px;">Dr. A. Contoh</h5>
        <p class="text-muted small">Jadwal Praktek</p>
      </div>

      <!-- Card 2 -->
      <div class="service-card" style="max-width:260px;">
        <div style="height:120px; display:flex; align-items:center; justify-content:center; color:#7a4b36;">Foto Tenaga Medis</div>
        <h5 style="margin-top:8px;">Dr. B. Contoh</h5>
        <p class="text-muted small">Jadwal Praktek</p>
      </div>

      <!-- Card 3 -->
      <div class="service-card" style="max-width:260px;">
        <div style="height:120px; display:flex; align-items:center; justify-content:center; color:#7a4b36;">Foto Tenaga Medis</div>
        <h5 style="margin-top:8px;">Dr. C. Contoh</h5>
        <p class="text-muted small">Jadwal Praktek</p>
      </div>
    </div>
  </div>
</section>

<!-- maps / alamat -->
<section class="section" style="padding-top:18px; padding-bottom:40px;">
  <div class="container text-center">
    <h4 style="font-weight:700; margin-bottom:14px;">Lokasi Kami</h4>

    <div class="map-wrapper">
      <iframe
        class="map-embed"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.553452129015!2d112.77869567377716!3d-7.291537671667388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb001a1b8231%3A0x94ea12288f33fa52!2sGriya%20Sehat%20UKDC!5e0!3m2!1sid!2sid!4v1764408465347!5m2!1sid!2sid"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </div>
</section>
@endsection
