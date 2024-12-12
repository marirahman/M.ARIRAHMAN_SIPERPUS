<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Perpustakaan online dengan katalog buku, keanggotaan, dan fasilitas yang mudah diakses.">
    <meta name="keywords" content="Perpustakaan, Buku, Keanggotaan, Katalog Buku, Fasilitas Perpustakaan">
    <meta name="author" content="Perpustakaan">
    <title>Perpustakaan</title>

    <!-- Favicon -->
    <link rel="icon" href="path_to_favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Base Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Figtree', sans-serif;
        }

        body {
            background-color: #f9fafb;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header Styles */
        header {
            background-color: #1D4ED8;
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        nav {
            display: flex;
            gap: 1rem;
        }

        nav a {
            text-transform: uppercase;
            color: white;
            font-weight: 500;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #63B3ED;
        }

        /* Hero Section */
        .hero {
            background-color: #E0F7FA;
            padding: 6rem 1rem;
            text-align: center;
        }

        .hero h2 {
            font-size: 2.5rem;
            color: #1D4ED8;
            margin-bottom: 1rem;
        }

        .hero p {
            color: #555;
            font-size: 1.25rem;
        }

        /* Katalog Section */
        .section {
            padding: 4rem 1rem;
        }

        .section h2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
            color: #1D4ED8;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: box-shadow 0.3s;
        }

        .card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            color: #1D4ED8;
            margin-bottom: 1rem;
        }

        /* Kontak Section */
        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1rem;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .form-container button {
            background-color: #1D4ED8;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #2563EB;
        }

        /* Footer */
        footer {
            background-color: #1D4ED8;
            color: white;
            text-align: center;
            padding: 2rem 1rem;
            margin-top: auto;
        }

        footer p {
            font-size: 0.875rem;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            header .container {
                flex-direction: column;
                align-items: flex-start;
            }

            nav {
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .hero h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container">
        <h1>Perpustakaan</h1>
        <nav>
            <a href="#beranda">Beranda</a>
            <a href="#katalog">Katalog Buku</a>
            <a href="#tentang">Tentang Kami</a>
            <a href="#kontak">Kontak</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </nav>
    </div>
</header>

<section id="beranda" class="hero">
    <h2>Selamat Datang di Perpustakaan</h2>
    <p>Cari dan temukan buku favorit Anda di perpustakaan kami dengan mudah dan cepat!</p>
</section>

<section id="katalog" class="section">
    <h2>Katalog Buku</h2>
    <div class="container cards">
        <div class="card">
            <h3>Katalog Buku Fiksi</h3>
            <p>Temukan berbagai novel dan cerita menarik.</p>
        </div>
        <div class="card">
            <h3>Katalog Buku Non-Fiksi</h3>
            <p>Jelajahi berbagai buku pengetahuan dan referensi.</p>
        </div>
        <div class="card">
            <h3>Buku Anak-Anak</h3>
            <p>Daftar buku edukatif dan cerita untuk anak-anak.</p>
        </div>
    </div>
</section>

  
<section id="tentang" class="section">
    <div class="container">
        <h2>Tentang Kami</h2>
        <p>Kami adalah perpustakaan modern dengan koleksi buku lengkap yang dapat diakses dengan mudah oleh masyarakat. Kami berkomitmen untuk memberikan layanan terbaik bagi pengunjung kami.</p>
    </div>
</section>

<section id="kontak" class="section">
    <h2>Kontak Kami</h2>
    <div class="container form-container">
        <form id="contactForm">
            <input type="text" name="name" id="name" placeholder="Nama Anda" required>
            <input type="email" name="email" id="email" placeholder="Email Anda" required>
            <textarea name="message" id="message" rows="4" placeholder="Pesan Anda" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
        <p id="successMessage" style="display:none; color:green; margin-top:1rem;">
            Pesan Anda telah berhasil dikirim. Terima kasih telah menghubungi kami!
        </p>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        document.getElementById('successMessage').style.display = 'block';
        this.reset();
    });
</script>


<footer>
    <p>&copy; 2024 Perpustakaan. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>