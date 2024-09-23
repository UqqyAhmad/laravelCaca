@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Header -->
<div style="background-image: url('images/header-bg.jpg'); background-size: cover; background-position: center; padding: 100px 0; color: white; text-align: center;">
    <h1 style="font-size: 48px; margin: 0; text-transform: uppercase; font-weight: bold; letter-spacing: 3px;">Tentang Saya</h1>
</div>

<!-- Biografi Singkat -->
<div style="display: flex; justify-content: center; align-items: center; background-color: #f4f4f4; padding: 80px 50px;">
    <div style="max-width: 900px; display: flex; gap: 40px; align-items: center;">
        <!-- Foto Profil -->
        <div style="flex-shrink: 0;">
            <img src="{{ asset('images/caca.png') }}" alt="Foto Profil" style="width: 250px; height: 250px; border-radius: 50%; border: 8px solid #fff; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);">
        </div>
        <!-- Deskripsi Singkat -->
        <div>
            <h2 style="font-size: 36px; margin-bottom: 20px;">Risa Maulana</h2>
            <p style="font-size: 18px; line-height: 1.8; color: #333;">Saya adalah siswa SMK dengan fokus di bidang Software Engineering, penuh semangat dalam dunia teknologi dan pengembangan perangkat lunak. Saya telah terlibat dalam beragam proyek dan selalu siap mempelajari hal-hal baru serta berperan di berbagai bidang IT.</p>
        </div>
    </div>
</div>

<!-- Keterampilan dan Keahlian -->
<div style="background-color: #fff; padding: 80px 50px;">
    <div style="max-width: 1000px; margin: 0 auto; text-align: center;">
        <h3 style="font-size: 32px; margin-bottom: 40px; text-transform: uppercase; color: #2d2d2d;">Keterampilan dan Keahlian</h3>
        <div style="display: flex; justify-content: space-between; gap: 40px;">
            <div style="flex-basis: 33%; padding: 20px; background-color: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">
                <h4 style="font-size: 22px; margin-bottom: 10px;">Web Development</h4>
                <p style="font-size: 16px; color: #666;">Membuat struktur web dengan HTML dan gaya dengan CSS untuk berbagai jenis proyek.</p>
            </div>
            <div style="flex-basis: 33%; padding: 20px; background-color: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">
                <h4 style="font-size: 22px; margin-bottom: 10px;">Mobile Development</h4>
                <p style="font-size: 16px; color: #666;">Membuat aplikasi mobile dengan Flutter dan Dart untuk autentikasi dan UI/UX interaktif.</p>
            </div>
            <div style="flex-basis: 33%; padding: 20px; background-color: #f9f9f9; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">
                <h4 style="font-size: 22px; margin-bottom: 10px;">Database Management</h4>
                <p style="font-size: 16px; color: #666;">Manajemen data dan pemrosesan menggunakan sistem database untuk aplikasi web.</p>
            </div>
        </div>
    </div>
</div>


<!-- Tujuan dan Aspirasi -->
<div style="background-image: url('images/aspirasi-bg.jpg'); background-size: cover; background-attachment: fixed; padding: 100px 50px; text-align: center; color: white;">
    <h3 style="font-size: 36px; margin-bottom: 40px;">Tujuan dan Aspirasi</h3>
    <p style="font-size: 18px; max-width: 800px; margin: 0 auto; line-height: 1.8; color: #2d2d2d;">Saya memiliki aspirasi untuk menjadi seorang pengembang perangkat lunak profesional dan bermimpi untuk mendirikan startup teknologi yang bisa memberikan dampak yang berarti di dunia teknologi modern.</p>
</div>

<!-- Footer -->
<div style="background-color: #333; color: white; padding: 20px; text-align: center;">
    <p>&copy; 2024 Risa Maulana. Semua Hak Cipta Dilindungi.</p>
    <div>
        <a href="https://www.instagram.com/__y0urccaa?igsh=bXNleXlvMzVlMHc3" style="color: #d18800; text-decoration: none;">Instagram</a>
    </div>
</div>
@endsection
