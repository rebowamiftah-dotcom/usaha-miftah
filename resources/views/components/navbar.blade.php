<div>
<style>
    /* Mengatur gaya dasar untuk seluruh header yang sticky */
    .header-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 4px 15px rgba(93, 64, 55, 0.15); 
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    .batik-strip {
        height: 4.5rem;
        background-color: #fcf6e7; 
        background-image: url('{{ asset('img/batik.png') }}');
        background-repeat: repeat; 
        background-size: contain; 
        border-bottom: 2px solid #8d6e63; 
    }

    /* Gaya untuk Navbar */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 5%;
        background-color: #fffbf5; 
        height: 4.5rem; 
    }

    /* Gaya untuk Logo */
    .navbar-brand a {
        font-weight: 800;
        font-size: 1.6rem;
        text-decoration: none;
        color: #4e342e; 
        letter-spacing: 0.5px;
    }

    .navbar-brand span {
        color: #d84315; 
    }

    /* --- PERUBAHAN DI SINI UNTUK MENU NAVIGASI --- */
    .navbar-nav {
        display: flex;
        position: relative; /* Penting agar kotak bisa diposisikan di dalamnya */
        align-items: center;
    }

    .navbar-nav a {
        text-decoration: none;
        color: #5d4037; 
        font-weight: 600;
        font-size: 1rem;
        transition: color 0.3s ease; 
        padding: 8px 16px; /* Memberikan ruang agar kotak latar tidak terlalu sempit */
        margin: 0 5px; /* Menggantikan property 'gap' agar posisi JavaScript lebih akurat */
        border-radius: 20px;
        position: relative;
        z-index: 1; /* Memastikan teks menu selalu berada di atas kotak */
    }

    .navbar-nav a:hover {
        color: #d84315; 
    }

    /* Gaya Khusus untuk Kotak yang Bergerak */
    .slide-box {
        position: absolute;
        height: 100%;
        background-color: #fbe9e7; /* Warna krem kemerahan yang sangat lembut */
        border-radius: 20px;
        /* cubic-bezier membuat efek pantulan/sliding menjadi sangat natural dan premium */
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); 
        opacity: 0;
        z-index: 0; /* Posisi di belakang teks */
        pointer-events: none; /* Agar tidak mengganggu klik menu */
        top: 0;
        left: 0;
    }
    /* ------------------------------------------- */

    /* Gaya untuk Tombol Pesan */
    .navbar-btn {
        background-color: #d84315; 
        color: white;
        padding: 10px 24px;
        border-radius: 25px; 
        text-decoration: none;
        font-weight: bold;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(216, 67, 21, 0.2);
    }

    .navbar-btn:hover {
        background-color: #bf360c; 
        box-shadow: 0 6px 12px rgba(216, 67, 21, 0.3);
        transform: translateY(-2px); 
    }
</style>

<div class="header-container">
    <!-- Strip Motif Gambar -->
    <div class="batik-strip"></div>

    <!-- Navbar Profesional -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="/">Sarapan<span>Pagi</span></a>
        </div>

        <div class="navbar-nav">
            <a href="/">Beranda</a>
            <a href="/menu">Daftar Menu</a>
            <a href="/promo">Paket Hemat</a>
            <a href="/lokasi">Lokasi</a>
        </div>

        <div class="navbar-cta">
            <a href="/pesan" class="navbar-btn">Pesan Sekarang</a>
        </div>
    </nav>
</div>

<!-- Script untuk menggerakkan kotak secara halus -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const nav = document.querySelector('.navbar-nav');
        const links = nav.querySelectorAll('a');
        
        // Buat elemen kotak baru menggunakan JavaScript
        const slideBox = document.createElement('div');
        slideBox.classList.add('slide-box');
        nav.appendChild(slideBox);

        // Berikan instruksi ke kotak saat mouse menyorot link
        links.forEach(link => {
            link.addEventListener('mouseenter', (e) => {
                // Lebar kotak mengikuti panjang teks menu
                slideBox.style.width = `${e.target.offsetWidth}px`;
                // Posisi kiri kotak mengikuti posisi menu
                slideBox.style.left = `${e.target.offsetLeft}px`;
                // Tampilkan kotak
                slideBox.style.opacity = '1';
            });
        });

        // Sembunyikan kotak jika kursor keluar dari area seluruh menu
        nav.addEventListener('mouseleave', () => {
            slideBox.style.opacity = '0';
        });
    });
</script>
</div>