@extends('layouts.app')

@section('styles')
<style>
    body {
        background-image: linear-gradient(to right, #f0f2f5, #e0e7ff);
        background-attachment: fixed;
        background-size: cover;
        font-family: 'Inter', sans-serif;
        color: #1a237e;
        margin: 0;
        padding: 0;
    }

    .main-content {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
    }

    .dashboard-title {
        font-size: 2rem;
        color: #1a237e;
        margin-bottom: 2rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .welcome-banner {
        background-image: linear-gradient(135deg, rgba(25, 32, 72, 0.9), rgba(25, 32, 72, 0.7)), 
                         url('./images/furniture.jpg');
        background-size: cover;
        background-position: center;
        border-radius: 20px;
        padding: 4rem;
        color: white;
        text-align: left;
        margin-bottom: 2rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1.5s ease-in-out;
    }

    .welcome-banner h1 {
        font-size: 3rem;
        margin-bottom: 1.5rem;
        font-weight: 800;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .welcome-banner p {
        font-size: 1.25rem;
        opacity: 0.9;
        line-height: 1.8;
        max-width: 600px;
        margin-bottom: 2rem;
    }

    .welcome-button {
        display: inline-block;
        padding: 1rem 2rem;
        background: #ffca28;
        color: #1a237e;
        text-decoration: none;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .welcome-button:hover {
        transform: translateY(-5px);
        background: #ffc107;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
    }

    .info-card {
        background: white;
        padding: 2rem;
        border-radius: 16px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transform: scale(0.95);
        animation: slideIn 1s ease forwards;
        opacity: 0;
    }

    .info-card:hover {
        transform: scale(1);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .info-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #1a237e, #3949ab);
    }

    .info-card h3 {
        color: #1a237e;
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        font-weight: 700;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .info-card i {
        font-size: 1.75rem;
        color: #3949ab;
    }

    .info-card p {
        color: #4a5568;
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .features-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .features-list li {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 1rem;
        color: #2d3748;
    }

    .features-list li::before {
        content: '✓';
        display: inline-block;
        color: #3949ab;
        font-weight: bold;
    }

    .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1.5rem;
        margin-top: 3rem;
    }

    .stat-card {
        background: linear-gradient(135deg, #1a237e, #3949ab);
        padding: 1.5rem;
        border-radius: 12px;
        color: white;
        text-align: center;
        animation: fadeInUp 1s ease forwards;
    }

    .stat-number {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 0.9rem;
        opacity: 0.9;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-50px); }
        to { opacity: 1; transform: translateX(0); }
    }
</style>
@endsection

@section('content')
<main class="main-content">
    <div class="welcome-banner">
        <h1>Elegant Living</h1>
        <p>Temukan koleksi furnitur berkualitas tinggi untuk menghadirkan keindahan dan kenyamanan di rumah Anda</p>
        <a href="#collections" class="welcome-button">Lihat Koleksi</a>
    </div>

    <div class="stats-container">
        <div class="stat-card">
            <div class="stat-number">1000+</div>
            <div class="stat-label">Produk Tersedia</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">5000+</div>
            <div class="stat-label">Pelanggan Puas</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">15+</div>
            <div class="stat-label">Tahun Pengalaman</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">100%</div>
            <div class="stat-label">Garansi Produk</div>
        </div>
    </div>

    <div class="info-grid">
        <div class="info-card">
            <h3><i class="fas fa-couch"></i> Koleksi Kami</h3>
            <p>Kami menawarkan berbagai macam furnitur premium untuk setiap ruangan di rumah Anda. Setiap produk dipilih dengan teliti untuk memastikan kualitas terbaik.</p>
            <ul class="features-list">
                <li>Ruang Tamu Mewah</li>
                <li>Kamar Tidur Nyaman</li>
                <li>Ruang Makan Elegan</li>
                <li>Ruang Kerja Modern</li>
            </ul>
        </div>

        <div class="info-card">
            <h3><i class="fas fa-star"></i> Layanan Premium</h3>
            <p>Nikmati pengalaman berbelanja yang tak tertandingi dengan layanan premium kami yang dirancang khusus untuk kenyamanan Anda.</p>
            <ul class="features-list">
                <li>Pengiriman Gratis</li>
                <li>Konsultasi Desain</li>
                <li>Instalasi Profesional</li>
                <li>Garansi Produk</li>
            </ul>
        </div>

        <div class="info-card">
            <h3><i class="fas fa-medal"></i> Keunggulan</h3>
            <p>Kami berkomitmen untuk memberikan yang terbaik dalam setiap aspek, dari produk hingga layanan pelanggan.</p>
            <ul class="features-list">
                <li>Kualitas Premium</li>
                <li>Desain Eksklusif</li>
                <li>Pengiriman Tepat Waktu</li>
                <li>Dukungan 24/7</li>
            </ul>
        </div>
    </div>
</main>
@endsection

@section('scripts')
<script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
<script>
    // Smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endsection
