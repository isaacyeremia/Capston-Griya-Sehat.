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
        <img 
          src="{{ asset('images/CISAT-traditional-chinese-medicine5.jpg') }}"
          alt="Dokter Griya Sehat"
          style="width:100%;height:100%;object-fit:contain;"
        >
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
        <div class="icon">🩺</div>
        <h5>Konsultasi</h5>
        <p class="text-muted small">Konsultasi dengan dokter profesional secara online maupun offline.</p>
      </div>

      <div class="service-card">
        <div class="icon">
          📇
        </div>
          <h5>Katalog Apotek</h5>
          <p>
            Lihat daftar obat dan produk kesehatan yang tersedia di Griya Sehat.
          </p>
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
  <div class="about-card">
    <div id="fasilitasCarousel" class="carousel slide h-100" data-bs-ride="carousel">
      <div class="carousel-inner h-100">

        <div class="carousel-item active h-100">
          <img
            src="{{ asset('images/fasilitas 1.jpg') }}"
            class="d-block w-100 h-100"
            style="object-fit:cover; border-radius:12px;"
            alt="Fasilitas Terapi"
          >
        </div>

  </div>
</section>

@endsection
