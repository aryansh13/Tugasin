<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugasin - Jasa Pengerjaan Tugas Terpercaya</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logoTugasin.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #256eb7;
            --secondary-color: #1b4f84;
            --accent-color: #4cc9f0;
            --text-color: #333;
            --light-bg: #f8f9fa;
            --card-bg: #fff;
            --footer-bg: #2b2d42;
        }
        
        [data-bs-theme="dark"] {
            --primary-color: #4cc9f0;
            --secondary-color: #256eb7;
            --text-color: #f8f9fa;
            --light-bg: #212529;
            --card-bg: #343a40;
            --footer-bg: #1a1d20;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            overflow-x: hidden;
            background-color: var(--light-bg);
            transition: background-color 0.3s ease;
        }
        
        .navbar {
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: background-color 0.3s ease;
        }

        [data-bs-theme="dark"] .navbar {
            background-color: var(--card-bg) !important;
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 100px 0;
        }
        
        .section-padding {
            padding: 80px 0;
        }

        .bg-light {
            background-color: var(--light-bg) !important;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
            margin-bottom: 20px;
            height: 100%;
            background-color: var(--card-bg);
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .card-icon {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            color: white;
        }
        
        .testimonial-card {
            padding: 30px;
            text-align: center;
        }
        
        .testimonial-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
        }
        
        .pricing-card {
            text-align: center;
            padding: 30px;
        }
        
        .pricing-card .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin: 20px 0;
        }
        
        .footer {
            background-color: var(--footer-bg);
            color: white;
            padding: 50px 0 20px;
            transition: background-color 0.3s ease;
        }
        
        .footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
        }
        
        .footer a:hover {
            color: white;
        }
        
        .social-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            transition: transform 0.3s ease;
        }
        
        .social-icon:hover {
            transform: translateY(-5px);
        }
        
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .whatsapp-float:hover {
            background-color: #128C7E;
        }

        /* Dark Mode Toggle */
        .dark-mode-toggle {
            width: 50px;
            height: 25px;
            position: relative;
            display: block;
            background: #ebebeb;
            border-radius: 200px;
            box-shadow: inset 0px 5px 15px rgba(0,0,0,0.1), inset 0px -5px 15px rgba(255,255,255,0.1);
            cursor: pointer;
            transition: 0.3s;
        }
        
        .dark-mode-toggle:after {
            content: "";
            width: 23px;
            height: 23px;
            position: absolute;
            top: 1px;
            left: 1px;
            background: linear-gradient(180deg, #ffcc89, #d8860b);
            border-radius: 180px;
            box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
            transition: 0.3s;
        }
        
        .dark-mode-toggle.active {
            background: #222;
        }
        
        .dark-mode-toggle.active:after {
            left: 26px;
            background: linear-gradient(180deg, #777, #3a3a3a);
        }
        
        .dark-mode-icon {
            margin-left: 10px;
            font-size: 1.2rem;
        }

        /* Responsive Adjustments */
        @media (max-width: 991.98px) {
            .hero-section {
                padding: 70px 0;
                text-align: center;
            }
            
            .hero-section .btn {
                margin: 5px;
            }
            
            .hero-section .d-flex {
                justify-content: center;
            }
            
            .section-padding {
                padding: 60px 0;
            }
            
            .dark-mode-toggle-wrapper {
                margin: 10px 0;
            }
            
            .navbar-collapse {
                padding: 15px 0;
            }
        }
        
        @media (max-width: 767.98px) {
            .pricing-card {
                margin-bottom: 30px;
            }
            
            .pricing-card.scale {
                transform: scale(1) !important;
                border-width: 1px !important;
            }
            
            .hero-section h1 {
                font-size: 2rem;
            }
            
            .section-padding {
                padding: 40px 0;
            }
            
            .footer {
                padding: 40px 0 20px;
                text-align: center;
            }
            
            .social-icons {
                justify-content: center;
                display: flex;
                margin-top: 20px;
            }
            
            .card-body {
                padding: 20px;
            }
            
            .social-icon {
                margin: 0 10px;
            }
            
            .whatsapp-float {
                width: 50px;
                height: 50px;
                font-size: 25px;
            }
        }
        
        @media (max-width: 575.98px) {
            .hero-section {
                padding: 50px 0;
            }
            
            .hero-section h1 {
                font-size: 1.75rem;
            }
            
            .lead {
                font-size: 1rem;
            }
            
            .section-padding {
                padding: 30px 0;
            }
            
            .card-body.p-5 {
                padding: 1.5rem !important;
            }
            
            .pricing-card .price {
                font-size: 2rem;
            }
        }
    </style>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logoTugasin.png') }}" alt="Tugasin Logo" height="30" class="me-2"><span style="color: #256eb7;">Tugasin</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#why-us">Keunggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Harga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                    <li class="nav-item ms-2 d-flex align-items-center dark-mode-toggle-wrapper">
                        <div class="dark-mode-toggle" id="darkModeToggle"></div>
                        <span class="dark-mode-icon"><i class="fas fa-moon"></i></span>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-primary w-100" href="#order">Pesan Sekarang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3"><img src="{{ asset('images/logoTugasin.png') }}" alt="Tugasin Logo" height="24" class="me-2"><span style="color: #256eb7;">Tugasin</span></h5>
                    <p>Layanan jasa pengerjaan tugas akademik terpercaya dengan hasil terbaik dan tepat waktu.</p>
                    <div class="social-icons mt-3">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <h5 class="mb-3">Layanan</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Makalah</a></li>
                        <li><a href="#">Skripsi</a></li>
                        <li><a href="#">Presentasi</a></li>
                        <li><a href="#">Desain Grafis</a></li>
                        <li><a href="#">Tugas Coding</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 mb-4">
                    <h5 class="mb-3">Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Layanan</a></li>
                        <li><a href="#testimonials">Testimoni</a></li>
                        <li><a href="#pricing">Harga</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-4">
                    <h5 class="mb-3">Kontak</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-map-marker-alt me-2"></i> Jakarta, Indonesia</li>
                        <li><i class="fas fa-phone me-2"></i> +62 852 2539 7226</li>
                        <li><i class="fas fa-envelope me-2"></i> info@jokitugas.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; {{ date('Y') }} JokiTugas. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6285225397226" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script>
        // Initialize tooltips
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

        // Dark Mode Toggle
        document.addEventListener('DOMContentLoaded', function() {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const darkModeIcon = document.querySelector('.dark-mode-icon i');
            const htmlElement = document.documentElement;
            
            // Check for saved theme preference or use user's system preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                htmlElement.setAttribute('data-bs-theme', savedTheme);
                if (savedTheme === 'dark') {
                    darkModeToggle.classList.add('active');
                    darkModeIcon.classList.replace('fa-moon', 'fa-sun');
                }
            } else {
                // Use system preference as default
                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    htmlElement.setAttribute('data-bs-theme', 'dark');
                    darkModeToggle.classList.add('active');
                    darkModeIcon.classList.replace('fa-moon', 'fa-sun');
                }
            }
            
            // Toggle dark mode
            darkModeToggle.addEventListener('click', function() {
                this.classList.toggle('active');
                
                if (this.classList.contains('active')) {
                    htmlElement.setAttribute('data-bs-theme', 'dark');
                    darkModeIcon.classList.replace('fa-moon', 'fa-sun');
                    localStorage.setItem('theme', 'dark');
                } else {
                    htmlElement.setAttribute('data-bs-theme', 'light');
                    darkModeIcon.classList.replace('fa-sun', 'fa-moon');
                    localStorage.setItem('theme', 'light');
                }
            });
            
            // Close navbar when clicking a nav item (on mobile)
            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const bsCollapse = new bootstrap.Collapse(navbarCollapse, {toggle: false});
            
            navLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    if (window.innerWidth < 992) {
                        bsCollapse.hide();
                    }
                });
            });
        });
    </script>
</body>
</html> 