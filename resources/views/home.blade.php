@extends('layouts.app')

@section('title','Beranda')

@section('content')

<section class="hero-outer">
  <div class="hero-inner">
    <div class="hero-row">
      <div class="hero-left">
        <h1 class="hero-title">WELLNESS FOR EVERYONE</h1>
        <p class="hero-desc">Layanan kesehatan terpadu dengan teknologi modern untuk kenyamanan dan kemudahan Anda.</p>
        <div class="hero-cta">
          <a href="#" class="btn btn-brown">Booking Antrian</a>
        </div>
      </div>

      <div class="hero-right">
        <div class="hero-card">
          <div>Gambar Dokter / Medical Illustration</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container text-center">
    <h3 style="font-weight:700">Our Service</h3>
    <p style="color:var(--muted); max-width:720px; margin:8px auto 0;">Berbagai layanan kesehatan yang dapat Anda akses dengan mudah</p>

    <div class="services-row" style="margin-top:36px;">
      <div class="service-card">
        <div class="icon">💊</div>
        <h5>Konsultasi</h5>
        <p class="text-muted small">Konsultasi dengan dokter profesional secara online maupun offline.</p>
      </div>

      <div class="service-card">
        <div class="icon">🛒</div>
        <h5>Toko Online</h5>
        <p class="text-muted small">Beli obat dan produk kesehatan dengan mudah dan aman.</p>
      </div>

      <div class="service-card">
        <div class="icon">📅</div>
        <h5>Cek Antrian Online</h5>
        <p class="text-muted small">Pantau antrian secara real-time tanpa perlu menunggu lama.</p>
      </div>
    </div>
  </div>
</section>

<section class="about-section">
  <div class="about-inner">
    <div class="about-left">
      <h3 style="font-weight:800">Tentang Griya Sehat</h3>
      <p style="color:var(--muted); margin-top:14px;">Klinik Kesehatan Akupunktur, Pengobatan Herbal, Kop/Bekam, Kerokan, Pijat/Tuina. Dengan tim dokter spesialis dan fasilitas lengkap, kami berkomitmen memberikan pelayanan kesehatan terpadu yang mudah diakses oleh seluruh masyarakat.</p>
      <div style="margin-top:18px;">
        <a href="{{ route('about') }}" class="btn btn-brown">Selengkapnya</a>
      </div>
    </div>

    <div class="about-right">
      <div class="about-card">Gambar Fasilitas Kesehatan</div>
    </div>
  </div>
</section>

@endsection
