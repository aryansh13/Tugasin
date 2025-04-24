<!DOCTYPE html>
<html lang="en" class="dark:bg-gray-950">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugasin - Jasa Pengerjaan Tugas Terpercaya</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logoTugasin.png') }}" type="image/png">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Aceternity UI -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        /* Dark mode toggle */
        .dark-mode-toggle {
            position: relative;
            width: 50px;
            height: 25px;
            background-color: #e2e8f0;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .dark-mode-toggle.active {
            background-color: #1e293b;
        }
        
        .dark-mode-toggle:after {
            content: "";
            position: absolute;
            width: 23px;
            height: 23px;
            border-radius: 50%;
            background: linear-gradient(180deg, #ffcc89, #d8860b);
            top: 1px;
            left: 1px;
            transition: all 0.3s ease;
        }
        
        .dark-mode-toggle.active:after {
            left: 26px;
            background: linear-gradient(180deg, #777, #3a3a3a);
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
            transition: all 0.3s ease;
        }
        
        .whatsapp-float:hover {
            transform: scale(1.1);
            background-color: #128C7E;
        }
    </style>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"},
                        secondary: {"50":"#f8fafc","100":"#f1f5f9","200":"#e2e8f0","300":"#cbd5e1","400":"#94a3b8","500":"#64748b","600":"#475569","700":"#334155","800":"#1e293b","900":"#0f172a","950":"#020617"},
                        accent: {"50":"#e3f2fd","100":"#bbdefb","200":"#90caf9","300":"#64b5f6","400":"#42a5f5","500":"#2196f3","600":"#1e88e5","700":"#1976d2","800":"#1565c0","900":"#0d47a1","950":"#083982"},
                    },
                    animation: {
                        scroll: "scroll 60s linear infinite",
                        "meteor-effect": "meteor 5s linear infinite",
                    },
                    keyframes: {
                        scroll: {
                            "0%": { transform: "translateX(0)" },
                            "100%": { transform: "translateX(-100%)" },
                        },
                    },
                },
                fontFamily: {
                    'sans': ['Poppins', 'sans-serif'],
                }
            }
        }
    </script>
</head>
<body class="antialiased font-sans bg-gradient-to-b from-gray-50 to-gray-100 dark:from-gray-950 dark:to-gray-900 text-gray-800 dark:text-gray-200 min-h-screen">
    <div class="meteor-effect">
        <div class="meteor"></div>
        <div class="meteor" style="top: 15%; left: 20%; animation-delay: 2s;"></div>
        <div class="meteor" style="top: 30%; left: 80%; animation-delay: 4s;"></div>
        <div class="meteor" style="top: 55%; left: 10%; animation-delay: 6s;"></div>
        <div class="meteor" style="top: 75%; left: 60%; animation-delay: 8s;"></div>
    </div>
    
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 backdrop-blur-lg bg-white/80 dark:bg-gray-900/80 border-b border-gray-200 dark:border-gray-800">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('images/logoTugasin.png') }}" alt="Tugasin Logo" class="h-8 w-auto mr-2">
                        <span class="text-primary-700 dark:text-primary-400 font-bold text-xl">Tugasin</span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Home</a>
                    <a href="#services" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Layanan</a>
                    <a href="#why-us" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Keunggulan</a>
                    <a href="#testimonials" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Testimoni</a>
                    <a href="#pricing" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Harga</a>
                    <a href="#contact" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Kontak</a>
                    <div class="flex items-center ml-4">
                        <div class="dark-mode-toggle" id="darkModeToggle"></div>
                        <span class="dark-mode-icon ml-2"><i class="fas fa-moon"></i></span>
                    </div>
                    <a href="#order" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-full shadow-sm transition-colors">Pesan Sekarang</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-gray-900 border-b border-gray-200 dark:border-gray-800">
            <div class="container mx-auto px-4 pt-2 pb-4 space-y-3">
                <a href="#home" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Home</a>
                <a href="#services" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Layanan</a>
                <a href="#why-us" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Keunggulan</a>
                <a href="#testimonials" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Testimoni</a>
                <a href="#pricing" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Harga</a>
                <a href="#contact" class="block text-gray-600 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">Kontak</a>
                <div class="flex items-center pt-2">
                    <div class="dark-mode-toggle" id="mobileToggle"></div>
                    <span class="dark-mode-icon ml-2"><i class="fas fa-moon"></i></span>
                </div>
                <a href="#order" class="mt-4 block text-center px-4 py-2 text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-full shadow-sm transition-colors">Pesan Sekarang</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/logoTugasin.png') }}" alt="Tugasin Logo" class="h-6 w-auto mr-2">
                        <span class="text-primary-400 font-bold text-lg">Tugasin</span>
                    </div>
                    <p class="text-gray-400 mb-4">Layanan jasa pengerjaan tugas akademik terpercaya dengan hasil terbaik dan tepat waktu.</p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div>
                    <h5 class="font-semibold text-lg mb-4">Layanan</h5>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Makalah</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Skripsi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Presentasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Desain Grafis</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tugas Coding</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold text-lg mb-4">Link</h5>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors">Testimoni</a></li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-white transition-colors">Harga</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold text-lg mb-4">Kontak</h5>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-primary-400"></i>
                            <span>Jakarta, Indonesia</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3 text-primary-400"></i>
                            <span>+62 852 2539 7226</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-primary-400"></i>
                            <span>info@jokitugas.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-8 border-gray-800">
            <div class="text-center text-gray-500">
                <p>&copy; {{ date('Y') }} JokiTugas. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Float Button -->
    <a href="https://wa.me/6285225397226" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        // Create meteors dynamically
        function createMeteors(count) {
            const meteorEffect = document.querySelector('.meteor-effect');
            for (let i = 0; i < count; i++) {
                const meteor = document.createElement('div');
                meteor.classList.add('meteor');
                meteor.style.left = `${Math.random() * 100}%`;
                meteor.style.top = `${Math.random() * 100}%`;
                meteor.style.animationDelay = `${Math.random() * 10}s`;
                meteorEffect.appendChild(meteor);
                
                // Add sparks
                for (let j = 0; j < 3; j++) {
                    const spark = document.createElement('div');
                    spark.classList.add('spark');
                    spark.style.left = `${Math.random() * 3 - 1.5}px`;
                    spark.style.top = `${Math.random() * 60}px`;
                    spark.style.animationDelay = `${Math.random() * 2}s`;
                    meteor.appendChild(spark);
                }
            }
        }
        
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Dark Mode Toggle
            const darkModeToggle = document.getElementById('darkModeToggle');
            const mobileToggle = document.getElementById('mobileToggle');
            const darkModeIcon = document.querySelector('.dark-mode-icon i');
            const htmlElement = document.documentElement;
            
            function toggleDarkMode(isActive) {
                if (isActive) {
                    htmlElement.classList.add('dark');
                    darkModeToggle.classList.add('active');
                    mobileToggle.classList.add('active');
                    darkModeIcon.classList.replace('fa-moon', 'fa-sun');
                    localStorage.setItem('theme', 'dark');
                } else {
                    htmlElement.classList.remove('dark');
                    darkModeToggle.classList.remove('active');
                    mobileToggle.classList.remove('active');
                    darkModeIcon.classList.replace('fa-sun', 'fa-moon');
                    localStorage.setItem('theme', 'light');
                }
            }
            
            // Check for saved theme preference or use user's system preference
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                toggleDarkMode(savedTheme === 'dark');
            } else {
                // Use system preference as default
                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    toggleDarkMode(true);
                }
            }
            
            // Toggle dark mode
            darkModeToggle.addEventListener('click', function() {
                toggleDarkMode(!this.classList.contains('active'));
            });
            
            mobileToggle.addEventListener('click', function() {
                toggleDarkMode(!this.classList.contains('active'));
            });
            
            // Close navbar when clicking a nav item (on mobile)
            const mobileNavLinks = document.querySelectorAll('#mobile-menu a');
            mobileNavLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                });
            });
            
            // Create meteors
            createMeteors(10);
        });
    </script>
</body>
</html> 