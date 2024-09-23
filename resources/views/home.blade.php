@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div style="position: relative; color: white; padding: 50px 0; text-align: left;">
    <div style="position: relative; z-index: 1; max-width: 800px; margin-left: 30px; display: flex; align-items: center;">
        <!-- Foto Profil -->
        <img src="images/caca.png" alt="Foto Profil" style="width: 200px; height: 200px; border-radius: 50%; margin-right: 20px;">
        
        <!-- Teks di samping foto -->
        <div>
            <h1 style="font-size: 3em; font-weight: bold; color: #311200;">Selamat Datang di Blog Saya!</h1>
            <p style="font-size: 1.5em; color: #311200;">Haloo! Namaku Risa! Panggil aja Caca.</p>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>

<div style="display: flex; justify-content: space-around; align-items: center; padding: 60px 20px; background-color: rgba(0, 0, 0, 0.7); color: white;">
    <div style="text-align: left; max-width: 500px;">
        <h2 style="font-size: 2em;">Siswa SMK Bakti Nusantara 666</h2>
        <p style="font-size: 1.2em;">Ceria, Mudah Bekerja Sama! SAJUTA!!!!</p>
    </div>
    <div>
        <button style="padding: 15px 25px; font-size: 1.2em; background-color: #d18800; color: white; border: none; border-radius: 10px; cursor: pointer;"
            onclick="location.href='#tentang-saya'">Pelajari Lebih Lanjut</button>
    </div>
</div>

<div id="tentang-saya" style="padding: 80px 20px; background-color: rgba(255, 255, 255, 0.8); text-align: left; max-width: 900px; margin: 0 auto;">
    <h3 style="color: #333; font-size: 2em;">Sekilas Tentang Saya</h3>
    <p style="font-size: 1.2em; color: #555;">Nama Saya Risa Maulana, saya mempunyai ilmu di bidang Rekayasa Perangkat Lunak. Menguasai framework Laravel dengan cukup baik.</p>
    <a href="{{ route('contact') }}" style="display: inline-block; margin-top: 10px; color: #d18800; font-weight: bold; text-decoration: none;">Lihat Lebih Lanjut di Halaman Tentang Saya</a>
</div>

<div style="background-color: rgba(255, 255, 255, 0.8); padding: 50px 0; text-align: center;">
    <h3 style="margin-bottom: 40px; color: #333; font-size: 2em;">Proyek Unggulan</h3>
    
    <div style="display: flex; justify-content: space-around; flex-wrap: wrap; max-width: 1200px; margin: 0 auto;">
        <div style="text-align: left; width: 280px; margin-bottom: 40px;">
            <h4 style="font-size: 1.5em; color: #333;">Web Kehadiran Siswa/Siswi</h4>
            <img src="images/u.png" alt="Thumbnail Proyek 1" style="width: 100%; height: auto; border-radius: 10px;">
            <p style="font-size: 1em; color: #666; margin-top: 10px;">Membuat web kehadiran murid untuk mencatat absensi dan mempermudah pengelolaan data siswa dan siswi.</p>
            <a href="{{ route('article') }}" style="color: #d18800; text-decoration: none;">Lihat Detail Proyek</a>
        </div>

        <div style="text-align: left; width: 280px; margin-bottom: 40px;">
            <h4 style="font-size: 1.5em; color: #333;">Fungsi Dasar dengan Flutter & Dart</h4>
            <img src="images/uu.png" alt="Thumbnail Proyek 2" style="width: 100%; height: auto; border-radius: 10px;">
            <p style="font-size: 1em; color: #666; margin-top: 10px;">Mempelajari fungsi dasar Flutter dan Dart memungkinkan pengembangan aplikasi mobile yang responsif dan menarik.</p>
            <a href="{{ route('article') }}" style="color: #d18800; text-decoration: none;">Lihat Detail Proyek</a>
        </div>
    </div>
</div>

<div style="background-color: #333; color: white; padding: 20px; text-align: center;">
    <p>&copy; 2024 Risa Maulana. Semua Hak Cipta Dilindungi.</p>
    <div>
        <a href="https://www.instagram.com/__y0urccaa?igsh=bXNleXlvMzVlMHc3" style="color: #d18800; text-decoration: none;">Instagram</a>
    </div>
</div>

<!-- CSS untuk background -->
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Verdana', sans-serif;
        background-image: url('images/sss.png'); /* Foto latar lokal */
        background-size: cover;
        background-attachment: fixed; /* Foto tetap saat scroll */
        background-position: center;
        background-repeat: no-repeat;
    }

    /* Atur teks agar mudah dibaca di atas latar belakang */
    h1, h2, h3, h4, h5, h6, p {
        color: white;
    }

   
</style>

@endsection
