@extends('layouts.app')

@section('title','Profile')

@section('content')
<div class="section">
  <div class="container">

    <h3 class="fw-bold mb-4">Profil Saya</h3>

    {{-- ALERT --}}
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row g-4">

      {{-- PROFILE FORM --}}
      <div class="col-md-6">
        <div class="card p-4">
          <h5 class="fw-semibold mb-3">Data Profil</h5>

          <form method="POST" action="{{ route('profile.update') }}">
            @csrf

            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="name" value="{{ $user->name }}" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Nomor Telepon</label>
              <input type="text" name="phone" value="{{ $user->phone }}" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" value="{{ $user->email }}" class="form-control">
            </div>

            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <textarea name="address" class="form-control" rows="3">{{ $user->address }}</textarea>
            </div>

            <button class="btn btn-brown">Simpan Perubahan</button>
          </form>
        </div>
      </div>

{{-- RIWAYAT PASIEN --}}
<div class="col-md-6">
  <div class="card p-4">
    <h5 class="fw-semibold mb-3">Riwayat Pasien</h5>

    <table class="table table-sm">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Tanggal</th>
          <th>Layanan</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>

        @forelse($histories as $h)
        <tr>
          <td>{{ $h->patient_name }}</td>
          <td>{{ \Carbon\Carbon::parse($h->visit_date)->format('d-m-Y') }}</td>
          <td>{{ $h->service }}</td>
          <td>
            <span class="badge bg-success">
              {{ $h->status }}
            </span>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="4" class="text-center text-muted">
            Belum ada riwayat pasien
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
@endsection
