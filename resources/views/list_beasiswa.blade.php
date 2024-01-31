@extends('layouts.landing')
@section('title', 'List Beasiswa')
@section('content')

    <div id="carousel" class="carousel mt-3" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/ittp-depan.jpg') }}" class=" d-block w-100 h-100" alt="carousel"
                    style="opacity: 80%">
                <div class="carousel-caption text-white">
                    <h4>Beasiswa IT Telkom Purwokerto</h4>
                    <p>Website yang memberikan informasi tentang beasiswa yang tersedia di IT Telkom Purwokerto. Yang dibuka
                        untuk tahun
                        akademik
                        2023/2024. Jalur ini memberikan kesempatan beasiswa seleksi ujian online.
                    <p>
                </div>
            </div>
        </div>
    </div>
    <div class="box-shadow-full rounded mt-3 bg-danger text-white">
        <h1 style="text-align: center; padding-top: 50px;">Syarat dan Ketentuan Akademik</h1>
        <ol type="1" style="padding-top: 20px;">
            <li>Sehat Jasmani dan Rohani.</li>
            <li>Memiliki Presetasi Akademik yang baik.</li>
            <li>Status Mahasiswa Aktif</li>
            <li>Berkewarganeraan Indonesia.</li>
            <li>Surat Rekomendasi</li>
        </ol>
    </div>

    <div class="box-shadow-full rounded mt-3 ">
        <h1 style="text-align: center; padding-top: 50px;">Syarat dan Ketentuan Non-Akademik</h1>
        <ol type="1" style="padding-top: 20px;">
            <li>Sehat Jasmani dan Rohani.</li>
            <li>Bakat atau Prestasi di Bidang Tertentu.</li>
            <li>Kriteria Khusus.</li>
            <li>Berkewarganeraan Indonesia.</li>
            <li>Surat Rekomendasi</li>
        </ol>
    </div>

@endsection
