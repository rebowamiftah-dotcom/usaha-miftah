<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Menu - Sarapan Pagi Miftah</title>
    
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fcf6e7; 
        }

        .menu-header {
            text-align: center;
            padding: 3rem 1rem 1rem 1rem;
            color: #4e342e;
        }

        .menu-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .menu-header p {
            font-size: 1.1rem;
            color: #5d4037;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.5;
        }

        .menu-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 20px 4rem 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
        }

        .menu-card {
            background: #fffbf5;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(93, 64, 55, 0.08);
            border-top: 4px solid #d84315;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(93, 64, 55, 0.15);
        }

        /* --- CSS BARU UNTUK GAMBAR MENU --- */
        .menu-img-container {
            width: 100%;
            height: 180px;
            overflow: hidden;
            background-color: #f0e6d2; /* Warna latar placeholder jika gambar belum ada */
        }

        .menu-img-container img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Memastikan gambar memenuhi kotak dengan rapi tanpa gepeng */
            transition: transform 0.3s ease;
        }

        .menu-card:hover .menu-img-container img {
            transform: scale(1.05); /* Efek zoom halus saat card disorot */
        }
        /* --------------------------------- */

        .menu-info {
            padding: 20px;
        }

        .menu-info h3 {
            margin-top: 0;
            margin-bottom: 8px;
            color: #4e342e;
            font-size: 1.25rem;
        }

        .menu-category {
            font-size: 0.85rem;
            color: #d84315;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
            display: inline-block;
        }

        .menu-info p {
            color: #5d4037;
            font-size: 0.95rem;
            line-height: 1.5;
            margin: 0;
        }

        .menu-footer {
            padding: 15px 20px;
            background-color: #f7ede2;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #e0d1b5;
        }

        .menu-price {
            font-weight: bold;
            color: #4e342e;
            font-size: 1.1rem;
        }

        .btn-order {
            background-color: #d84315;
            color: white;
            padding: 6px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-order:hover {
            background-color: #bf360c;
        }
    </style>
</head>
<body>

    <x-navbar />

    <header class="menu-header">
        <h1>Daftar Menu Pagi Pilihan</h1>
        <p>Nikmati ragam menu sarapan tradisional hangat penuh energi untuk mengawali hari terbaikmu.</p>
    </header>

    <main class="menu-container">
        
        <!-- Menu 1: Nasi Uduk -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/NasiUduk.png') }}" alt="Nasi Uduk Komplit">
            </div>
            <div class="menu-info">
                <span class="menu-category">Menu Utama</span>
                <h3>Nasi Uduk Komplit</h3>
                <p>Disajikan dengan bihun goreng, tempe orek, telur dadar iris, sambal kacang gurih, dan kerupuk renyah.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 12.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

        <!-- Menu 2: Nasi Kuning -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/nasikuning.png') }}" alt="Nasi Kuning Tradisional">
            </div>
            <div class="menu-info">
                <span class="menu-category">Menu Utama</span>
                <h3>Nasi Kuning Tradisional</h3>
                <p>Nasi kuning harum rempah, dilengkapi perkedel kentang, mie kuning, abon sapi, dan irisan timun segar.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 13.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

        <!-- Menu 3: Bubur Ayam -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/buburayam.png') }}" alt="Bubur Ayam Spesial">
            </div>
            <div class="menu-info">
                <span class="menu-category">Menu Berkuah</span>
                <h3>Bubur Ayam Spesial</h3>
                <p>Bubur hangat lembut dengan suwiran ayam melimpah, cakwe, kacang kedelai, kuah kaldu gurih, dan kerupuk.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 10.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

        <!-- Menu 4: Nasi Padang -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/nasipadang.png') }}" alt="Nasi Padang Sarapan">
            </div>
            <div class="menu-info">
                <span class="menu-category">Menu Padang</span>
                <h3>Nasi Padang Sarapan</h3>
                <p>Porsi pas pagi hari dengan pilihan gulai nangka, sambal hijau khas, dan tambahan lauk pilihan.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 15.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

        <!-- Menu 5: Ayam Goreng -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/ayam-goreng.jpg') }}" alt="Ayam Goreng Rempah">
            </div>
            <div class="menu-info">
                <span class="menu-category">Lauk Tambahan</span>
                <h3>Ayam Goreng Rempah</h3>
                <p>Potongan ayam pilihan yang dimasak dengan bumbu rempah meresap, digoreng garing di luar dan tetap juicy di dalam.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 8.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

        <!-- Menu 6: Ikan Goreng -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/ikan-goreng.jpg') }}" alt="Ikan Goreng Krispi">
            </div>
            <div class="menu-info">
                <span class="menu-category">Lauk Tambahan</span>
                <h3>Ikan Goreng Krispi</h3>
                <p>Ikan segar pilihan dibalut bumbu gurih khas nusantara, digoreng garing sempurna siap menemani nasi hangat.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 9.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

        <!-- Menu 7: Telur Balado -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/telur-balado.jpg') }}" alt="Telur Balado Merah">
            </div>
            <div class="menu-info">
                <span class="menu-category">Lauk Tambahan</span>
                <h3>Telur Balado Merah</h3>
                <p>Telur rebus pilihan yang dilumuri sambal balado merah segar dengan tingkat kepedasan yang pas di lidah.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 4.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

        <!-- Menu 8: Sayur Asem -->
        <div class="menu-card">
            <div class="menu-img-container">
                <img src="{{ asset('img/sayur-asem.jpg') }}" alt="Sayur Asem Segar">
            </div>
            <div class="menu-info">
                <span class="menu-category">Sayuran Segar</span>
                <h3>Sayur Asem Segar</h3>
                <p>Kuah asam manis segar berisi kacang panjang, labu siam, jagung manis, dan melinjo yang membangkitkan selera makan pagi.</p>
            </div>
            <div class="menu-footer">
                <span class="menu-price">Rp 6.000</span>
                <a href="/pesan" class="btn-order">Pesan</a>
            </div>
        </div>

    </main>

</body>
</html>