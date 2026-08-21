<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarapan Pagi</title>
    
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #fcf6e7; 
        }

        .hero {
            background-image: linear-gradient(rgba(78, 52, 46, 0.7), rgba(78, 52, 46, 0.7)), url('{{ asset('img/makanan.png') }}');
            background-size: cover;
            background-position: center;
            height: 80vh; 
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fffbf5; 
            padding: 0 20px;
            border-bottom: 4px solid #8d6e63;
        }

        .hero h1 { font-size: 3.5rem; margin-bottom: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.6); }
        .hero p { font-size: 1.2rem; max-width: 600px; margin-bottom: 30px; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.8); }

        .btn-hero {
            background-color: #d84315; 
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }
        .btn-hero:hover { background-color: #bf360c; transform: translateY(-2px); box-shadow: 0 6px 12px rgba(0,0,0,0.4); }
     
        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px; 
            padding: 5rem 2rem;
            text-align: center;
        }

        .feature-box {
            background: #fffbf5; 
            padding: 30px 25px;
            border-radius: 12px 12px 3px 3px; 
            box-shadow: 0 8px 25px rgba(93, 64, 55, 0.06); 
            max-width: 290px;
            border-top: 5px solid #5d4037;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative; 
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(93, 64, 55, 0.12);
        }

        .feature-number {
            position: absolute;
            top: -20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #d84315; 
            color: #fffbf5;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-weight: bold;
            font-size: 1.1rem;
            box-shadow: 0 4px 8px rgba(216, 67, 21, 0.3);
            border: 3px solid #fffbf5;
        }

        .feature-box h3 {
            color: #4e342e;
            margin-top: 15px; 
            margin-bottom: 15px;
            font-size: 1.3rem;
            letter-spacing: 0.5px;
            border-bottom: 2px dotted #a1887f;
            padding-bottom: 10px;
        }

        .feature-box p {
            color: #5d4037;
            line-height: 1.6;
            font-size: 0.95rem;
            margin: 0;
        }

        /* --- CSS UNTUK BAGIAN ULASAN (TESTIMONI) --- */
        .testimonials-section {
            padding: 4rem 2rem;
            background-color: #f7ede2; 
            text-align: center;
            border-top: 2px solid #e0d1b5;
            border-bottom: 2px solid #e0d1b5;
        }

        .testimonials-section h2 {
            color: #4e342e;
            font-size: 2.2rem;
            margin-bottom: 10px;
        }

        .testimonials-section p.subtitle {
            color: #5d4037;
            font-size: 1.05rem;
            margin-bottom: 3rem;
        }

        .testimonials-grid {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: #fffbf5;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(93, 64, 55, 0.08);
            text-align: left;
            position: relative;
            border-left: 5px solid #d84315; 
        }

        .testimonial-text {
            color: #5d4037;
            font-size: 0.95rem;
            line-height: 1.6;
            font-style: italic;
            margin-bottom: 20px;
        }

        .testimonial-author h4 {
            color: #4e342e;
            margin: 0 0 4px 0;
            font-size: 1.1rem;
        }

        .testimonial-author span {
            color: #8d6e63;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* --- CSS UNTUK FOOTER --- */
        .site-footer {
            background-color: #3e2723; 
            color: #d7ccc8; 
            padding: 4rem 2rem 2rem 2rem;
            font-size: 0.95rem;
            border-top: 4px solid #d84315;
        }

        .footer-container {
            max-width: 1100px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 3rem;
        }

        .footer-col h3 {
            color: #fffbf5;
            font-size: 1.2rem;
            margin-top: 0;
            margin-bottom: 15px;
            letter-spacing: 0.5px;
            border-bottom: 2px solid #d84315;
            display: inline-block;
            padding-bottom: 5px;
        }

        .footer-col p {
            line-height: 1.6;
            margin: 0 0 15px 0;
            color: #bcaaa4;
        }

        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #d7ccc8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #d84315;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #5d4037;
            color: #a1887f;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>

    <x-navbar />

    <header class="hero">
        <h1>Awali Harimu dengan Sarapan Pagi!</h1>
        <p>Dari Nasi Uduk hangat hingga Roti Bakar manis, kami menyiapkan sarapan terbaik untuk memberi energi pada aktivitasmu hari ini.</p>
        <a href="/menu" class="btn-hero">Lihat Daftar Menu</a>
    </header>

    <section class="features">
        <div class="feature-box">
            <div class="feature-number">1</div>
            <h3>Dibuat Segar</h3>
            <p>Seluruh hidangan dimasak langsung setiap pagi dengan bahan baku pilihan terbaik yang terjamin kesegarannya.</p>
        </div>
        
        <div class="feature-box">
            <div class="feature-number">2</div>
            <h3>Siap Antar</h3>
            <p>Nikmati kemudahan sarapan tanpa keluar rumah. Pesanan akan diantar dengan aman selagi masih hangat.</p>
        </div>
        
        <div class="feature-box">
            <div class="feature-number">3</div>
            <h3>Harga Terjangkau</h3>
            <p>Cita rasa bintang lima dengan porsi yang mengenyangkan, ditawarkan dengan harga yang bersahabat.</p>
        </div>
    </section>

    <!-- Bagian Ulasan Pelanggan -->
    <section class="testimonials-section">
        <h2>Kata Mereka yang Sudah Mencoba</h2>
        <p class="subtitle">Pendapat jujur dari para pelanggan setia penikmat sarapan pagi kami.</p>
        
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <p class="testimonial-text">"Nasi uduknya benar-benar pulen dan gurih. Cocok banget buat sarapan sebelum berangkat kerja, rasanya konsisten enak setiap hari!"</p>
                <div class="testimonial-author">
                    <h4>Bapak Rian</h4>
                    <span>Karyawan Swasta</span>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">"Bubur ayamnya pas banget, kuah kaldunya berasa dan hangat. Pesan lewat website langsung diantar cepat ke rumah. Mantap!"</p>
                <div class="testimonial-author">
                    <h4>Ibu Siska</h4>
                    <span>Ibu Rumah Tangga</span>
                </div>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">"Porsi pas, harga ramah di kantong pelajar, dan rasanya bintang lima. Paling suka sama menu nasi kuningnya yang khas."</p>
                <div class="testimonial-author">
                    <h4>Dimas Pratama</h4>
                    <span>Mahasiswa</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Footer -->
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-col">
                <h3>Sarapan Pagi</h3>
                <p>Menyajikan berbagai menu sarapan tradisional Nusantara yang lezat, higienis, dan dimasak segar setiap pagi untuk mengawali hari Anda.</p>
            </div>

            <div class="footer-col">
                <h3>Tautan Cepat</h3>
                <ul class="footer-links">
                    <li><a href="/">Beranda</a></li>
                    <li><a href="/menu">Daftar Menu</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Jam Operasional</h3>
                <p>Senin - Minggu<br>Pukul 05.30 - 10.00 WIB</p>
                <p>Siap melayani pesanan antar langsung ke rumah atau kantor Anda.</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Sarapan Pagi. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>