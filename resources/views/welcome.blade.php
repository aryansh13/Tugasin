@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative overflow-hidden py-20 sm:py-24 lg:py-28">
        <!-- Background elements for hero -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-600/20 to-accent-600/20 dark:from-primary-900/30 dark:to-accent-900/30"></div>
            <div class="absolute bottom-0 left-0 right-0 top-0 bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)] bg-[size:14px_24px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_110%)]"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                        <span class="inline-block">
                            Jasa Pengerjaan
                            <span class="relative">
                                <span class="absolute inset-x-0 bottom-0 h-3 bg-accent-400/30 dark:bg-accent-500/30"></span>
                                <span class="relative">Tugas Mahasiswa</span>
                            </span>
                            Terpercaya
                        </span>
                    </h1>
                    <p class="text-lg text-gray-700 dark:text-gray-300 mb-8">Kami menyediakan layanan joki tugas akademik yang profesional, tepat waktu, dan berkualitas tinggi untuk semua jenjang pendidikan.</p>
                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                        <a href="#order" class="inline-flex h-12 items-center justify-center rounded-full bg-primary-600 px-6 py-3 text-sm font-medium text-white transition-colors hover:bg-primary-700 dark:bg-primary-500 dark:hover:bg-primary-600">
                            Pesan Sekarang
                        </a>
                        <a href="#services" class="inline-flex h-12 items-center justify-center rounded-full border border-primary-600 bg-transparent px-6 py-3 text-sm font-medium text-primary-600 transition-colors hover:bg-primary-50 dark:border-primary-400 dark:text-primary-400 dark:hover:bg-gray-800">
                            Lihat Layanan
                        </a>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative mx-auto max-w-[500px]">
                        <div class="absolute -bottom-10 -left-10 h-72 w-72 rounded-full bg-accent-400/30 dark:bg-accent-900/40 blur-3xl"></div>
                        <div class="absolute -right-10 -top-10 h-72 w-72 rounded-full bg-primary-400/30 dark:bg-primary-900/40 blur-3xl"></div>
                        <div class="relative rounded-2xl overflow-hidden border border-gray-200 shadow-xl dark:border-gray-800">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Joki Tugas" class="w-full h-auto object-cover">
                            <div class="absolute inset-0 bg-gradient-to-tr from-gray-900/20 to-gray-900/0 dark:from-gray-900/40 dark:to-gray-900/10"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Layanan Kami</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">Kami menyediakan berbagai jenis layanan pengerjaan tugas akademik sesuai kebutuhan Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Card 1 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-md dark:shadow-gray-800/30 p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden">
                    <!-- Card top light effect -->
                    <div class="absolute -top-10 -left-10 h-20 w-40 bg-primary-500/20 rounded-full blur-3xl group-hover:bg-primary-500/30 transition-all duration-500 group-hover:h-24 group-hover:w-48"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-primary-50 dark:bg-gray-700 text-primary-600 dark:text-primary-400 mb-6">
                            <i class="fas fa-file-alt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Makalah & Essay</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Layanan pembuatan makalah, essay, paper, dan berbagai jenis tugas tertulis lainnya dengan riset yang mendalam.</p>
                        <a href="#order" class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 transition-colors">
                            Pesan Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-md dark:shadow-gray-800/30 p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden">
                    <div class="absolute -top-10 -left-10 h-20 w-40 bg-accent-500/20 rounded-full blur-3xl group-hover:bg-accent-500/30 transition-all duration-500 group-hover:h-24 group-hover:w-48"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-accent-50 dark:bg-gray-700 text-accent-600 dark:text-accent-400 mb-6">
                            <i class="fas fa-graduation-cap text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Skripsi & Thesis</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Bantuan dalam penyusunan skripsi, thesis, disertasi dengan metodologi penelitian yang sesuai standar akademik.</p>
                        <a href="#order" class="inline-flex items-center text-accent-600 dark:text-accent-400 hover:text-accent-700 dark:hover:text-accent-300 transition-colors">
                            Pesan Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-md dark:shadow-gray-800/30 p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden">
                    <div class="absolute -top-10 -left-10 h-20 w-40 bg-primary-500/20 rounded-full blur-3xl group-hover:bg-primary-500/30 transition-all duration-500 group-hover:h-24 group-hover:w-48"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-primary-50 dark:bg-gray-700 text-primary-600 dark:text-primary-400 mb-6">
                            <i class="fas fa-laptop-code text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Tugas Pemrograman</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Jasa pengerjaan tugas coding, pemrograman, dan proyek IT dengan berbagai bahasa pemrograman populer.</p>
                        <a href="#order" class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 transition-colors">
                            Pesan Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-md dark:shadow-gray-800/30 p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden">
                    <div class="absolute -top-10 -left-10 h-20 w-40 bg-accent-500/20 rounded-full blur-3xl group-hover:bg-accent-500/30 transition-all duration-500 group-hover:h-24 group-hover:w-48"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-accent-50 dark:bg-gray-700 text-accent-600 dark:text-accent-400 mb-6">
                            <i class="fas fa-chart-line text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Presentasi PowerPoint</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Pembuatan slide presentasi yang profesional, informatif, dan menarik untuk keperluan akademik dan bisnis.</p>
                        <a href="#order" class="inline-flex items-center text-accent-600 dark:text-accent-400 hover:text-accent-700 dark:hover:text-accent-300 transition-colors">
                            Pesan Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-md dark:shadow-gray-800/30 p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden">
                    <div class="absolute -top-10 -left-10 h-20 w-40 bg-primary-500/20 rounded-full blur-3xl group-hover:bg-primary-500/30 transition-all duration-500 group-hover:h-24 group-hover:w-48"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-primary-50 dark:bg-gray-700 text-primary-600 dark:text-primary-400 mb-6">
                            <i class="fas fa-paint-brush text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Desain Grafis</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Layanan desain grafis untuk berbagai keperluan akademik seperti poster, infografis, dan ilustrasi.</p>
                        <a href="#order" class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 transition-colors">
                            Pesan Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="group relative bg-white dark:bg-gray-800 rounded-2xl shadow-md dark:shadow-gray-800/30 p-6 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden">
                    <div class="absolute -top-10 -left-10 h-20 w-40 bg-accent-500/20 rounded-full blur-3xl group-hover:bg-accent-500/30 transition-all duration-500 group-hover:h-24 group-hover:w-48"></div>
                    
                    <div class="relative z-10">
                        <div class="w-14 h-14 flex items-center justify-center rounded-xl bg-accent-50 dark:bg-gray-700 text-accent-600 dark:text-accent-400 mb-6">
                            <i class="fas fa-tasks text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Tugas Lainnya</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Berbagai jenis tugas lainnya seperti rangkuman, resume, laporan praktikum, dan tugas-tugas kuliah lainnya.</p>
                        <a href="#order" class="inline-flex items-center text-accent-600 dark:text-accent-400 hover:text-accent-700 dark:hover:text-accent-300 transition-colors">
                            Pesan Sekarang
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section id="why-us" class="py-20 relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <!-- Background grid pattern -->
            <div class="absolute inset-0 bg-white dark:bg-gray-950 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#303030_1px,transparent_1px),linear-gradient(to_bottom,#303030_1px,transparent_1px)] bg-[size:6rem_4rem]"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Keunggulan Kami</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">Mengapa memilih layanan JokiTugas untuk membantu tugas akademik Anda?</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Feature 1 -->
                <div class="group rounded-xl bg-white p-6 shadow-lg transition-all duration-300 hover:shadow-xl dark:bg-gray-800/50 dark:shadow-gray-700/10 dark:hover:shadow-gray-700/20">
                    <div class="flex gap-5">
                        <div class="relative flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-xl bg-primary-50 dark:bg-primary-900/20">
                            <i class="fas fa-check-circle text-2xl text-primary-600 dark:text-primary-400"></i>
                            <!-- Shine effect -->
                            <div class="absolute h-full w-full rounded-xl bg-gradient-to-br from-white/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white">100% Tepat Waktu</h3>
                            <p class="text-gray-600 dark:text-gray-400">Kami berkomitmen untuk menyelesaikan tugas sesuai dengan deadline yang telah disepakati tanpa mengecewakan.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="group rounded-xl bg-white p-6 shadow-lg transition-all duration-300 hover:shadow-xl dark:bg-gray-800/50 dark:shadow-gray-700/10 dark:hover:shadow-gray-700/20">
                    <div class="flex gap-5">
                        <div class="relative flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-xl bg-accent-50 dark:bg-accent-900/20">
                            <i class="fas fa-gem text-2xl text-accent-600 dark:text-accent-400"></i>
                            <div class="absolute h-full w-full rounded-xl bg-gradient-to-br from-white/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white">Kualitas Terjamin</h3>
                            <p class="text-gray-600 dark:text-gray-400">Tugas dikerjakan oleh tim profesional berpengalaman dengan standar akademik tinggi dan bebas plagiarisme.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="group rounded-xl bg-white p-6 shadow-lg transition-all duration-300 hover:shadow-xl dark:bg-gray-800/50 dark:shadow-gray-700/10 dark:hover:shadow-gray-700/20">
                    <div class="flex gap-5">
                        <div class="relative flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-xl bg-primary-50 dark:bg-primary-900/20">
                            <i class="fas fa-sync-alt text-2xl text-primary-600 dark:text-primary-400"></i>
                            <div class="absolute h-full w-full rounded-xl bg-gradient-to-br from-white/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white">Revisi Gratis</h3>
                            <p class="text-gray-600 dark:text-gray-400">Kami memberikan revisi gratis untuk memastikan hasil kerja kami sesuai dengan kebutuhan dan keinginan Anda.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="group rounded-xl bg-white p-6 shadow-lg transition-all duration-300 hover:shadow-xl dark:bg-gray-800/50 dark:shadow-gray-700/10 dark:hover:shadow-gray-700/20">
                    <div class="flex gap-5">
                        <div class="relative flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-xl bg-accent-50 dark:bg-accent-900/20">
                            <i class="fas fa-lock text-2xl text-accent-600 dark:text-accent-400"></i>
                            <div class="absolute h-full w-full rounded-xl bg-gradient-to-br from-white/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white">Kerahasiaan Terjaga</h3>
                            <p class="text-gray-600 dark:text-gray-400">Kami menjamin 100% kerahasiaan data dan identitas klien serta transaksi yang dilakukan.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="group rounded-xl bg-white p-6 shadow-lg transition-all duration-300 hover:shadow-xl dark:bg-gray-800/50 dark:shadow-gray-700/10 dark:hover:shadow-gray-700/20">
                    <div class="flex gap-5">
                        <div class="relative flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-xl bg-primary-50 dark:bg-primary-900/20">
                            <i class="fas fa-money-bill-wave text-2xl text-primary-600 dark:text-primary-400"></i>
                            <div class="absolute h-full w-full rounded-xl bg-gradient-to-br from-white/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white">Harga Terjangkau</h3>
                            <p class="text-gray-600 dark:text-gray-400">Kami menawarkan harga yang kompetitif dan terjangkau dengan berbagai pilihan paket sesuai kebutuhan.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="group rounded-xl bg-white p-6 shadow-lg transition-all duration-300 hover:shadow-xl dark:bg-gray-800/50 dark:shadow-gray-700/10 dark:hover:shadow-gray-700/20">
                    <div class="flex gap-5">
                        <div class="relative flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-xl bg-accent-50 dark:bg-accent-900/20">
                            <i class="fas fa-headset text-2xl text-accent-600 dark:text-accent-400"></i>
                            <div class="absolute h-full w-full rounded-xl bg-gradient-to-br from-white/50 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                        </div>
                        <div class="flex-grow">
                            <h3 class="mb-2 text-xl font-semibold text-gray-900 dark:text-white">Dukungan 24/7</h3>
                            <p class="text-gray-600 dark:text-gray-400">Tim customer service kami siap membantu Anda 24/7 untuk menjawab pertanyaan dan memberikan solusi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50 dark:bg-gray-900 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute top-0 left-0 right-0 h-96 overflow-hidden z-0">
            <div class="absolute h-80 w-80 rounded-full bg-primary-200/20 dark:bg-primary-800/20 -top-40 -left-20 blur-3xl"></div>
            <div class="absolute h-80 w-80 rounded-full bg-accent-200/20 dark:bg-accent-800/20 top-60 right-10 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Apa Kata Mereka?</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">Testimonial dari pelanggan yang telah menggunakan layanan kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="relative group">
                    <!-- Card glow effect -->
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-accent-600 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    
                    <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="mb-6">
                            <div class="flex justify-center mb-4">
                                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Client" class="w-20 h-20 rounded-full object-cover ring-4 ring-gray-100 dark:ring-gray-700">
                            </div>
                            <h3 class="text-xl font-semibold text-center text-gray-900 dark:text-white mb-1">Risa Amalia</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-center text-sm mb-4">Mahasiswa Ilmu Komunikasi</p>
                            
                            <!-- Star rating -->
                            <div class="flex justify-center mb-4">
                                <div class="flex space-x-1">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative">
                            <svg class="absolute -top-6 -left-6 h-12 w-12 text-gray-300 dark:text-gray-700 transform -scale-x-100" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative text-gray-600 dark:text-gray-300 text-center">"Saya sangat puas dengan hasil makalah yang dikerjakan. Tepat waktu dan sesuai dengan ketentuan dosen. Terima kasih JokiTugas!"</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="relative group">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-accent-600 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    
                    <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="mb-6">
                            <div class="flex justify-center mb-4">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Client" class="w-20 h-20 rounded-full object-cover ring-4 ring-gray-100 dark:ring-gray-700">
                            </div>
                            <h3 class="text-xl font-semibold text-center text-gray-900 dark:text-white mb-1">Bima Satria</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-center text-sm mb-4">Mahasiswa Teknik Informatika</p>
                            
                            <!-- Star rating -->
                            <div class="flex justify-center mb-4">
                                <div class="flex space-x-1">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star-half-alt text-yellow-400"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative">
                            <svg class="absolute -top-6 -left-6 h-12 w-12 text-gray-300 dark:text-gray-700 transform -scale-x-100" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative text-gray-600 dark:text-gray-300 text-center">"Tugas pemrograman saya dikerjakan dengan baik dan berfungsi sempurna. Penjelasan kodenya juga sangat detail sehingga saya bisa memahaminya."</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="relative group lg:col-span-1 md:col-span-2 md:mx-auto">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-accent-600 rounded-2xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    
                    <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                        <div class="mb-6">
                            <div class="flex justify-center mb-4">
                                <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Client" class="w-20 h-20 rounded-full object-cover ring-4 ring-gray-100 dark:ring-gray-700">
                            </div>
                            <h3 class="text-xl font-semibold text-center text-gray-900 dark:text-white mb-1">Anita Wijaya</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-center text-sm mb-4">Mahasiswa Manajemen</p>
                            
                            <!-- Star rating -->
                            <div class="flex justify-center mb-4">
                                <div class="flex space-x-1">
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                    <i class="fas fa-star text-yellow-400"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="relative">
                            <svg class="absolute -top-6 -left-6 h-12 w-12 text-gray-300 dark:text-gray-700 transform -scale-x-100" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                            </svg>
                            <p class="relative text-gray-600 dark:text-gray-300 text-center">"Presentasi yang dibuat sangat menarik dan profesional. Dosen saya sangat terkesan dengan hasilnya. Terima kasih banyak!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white dark:bg-gray-950 relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <!-- Background grid pattern -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#303030_1px,transparent_1px),linear-gradient(to_bottom,#303030_1px,transparent_1px)] bg-[size:6rem_4rem]"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Daftar Harga</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">Kami menawarkan berbagai paket dengan harga yang kompetitif sesuai kebutuhan Anda</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Basic Package -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-primary-400 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Paket Basic</h3>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Untuk tugas-tugas ringan</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-primary-600 dark:text-primary-400">Rp 25K - 100K</span>
                        </div>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Makalah (5-10 halaman)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Essay (3-5 halaman)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Presentasi (10-15 slide)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Tugas programming dasar</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Revisi 1x</span>
                            </div>
                        </div>
                        <a href="#order" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-primary-600 dark:text-primary-400 border border-primary-600 dark:border-primary-400 rounded-lg hover:bg-primary-50 dark:hover:bg-gray-700 transition-colors">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
                
                <!-- Standard Package -->
                <div class="group relative z-10 scale-105">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-accent-600 rounded-xl blur group-hover:opacity-75 transition duration-300 opacity-50"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-xl p-6 border-2 border-primary-500 dark:border-primary-400 overflow-hidden">
                        <div class="absolute top-0 right-0">
                            <div class="bg-primary-600 text-white text-xs font-semibold py-1 px-3 rounded-bl-lg">Terpopuler</div>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Paket Standard</h3>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Untuk tugas-tugas sedang</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-primary-600 dark:text-primary-400">Rp 100K - 350K</span>
                        </div>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Makalah (10-20 halaman)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Laporan penelitian (15-30 halaman)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Presentasi kompleks (15-30 slide)</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Tugas programming menengah</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-primary-600 dark:text-primary-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Revisi 2x</span>
                            </div>
                        </div>
                        <a href="#order" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-white bg-primary-600 rounded-lg hover:bg-primary-700 transition-colors">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
                
                <!-- Premium Package -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-accent-600 to-accent-400 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg p-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl overflow-hidden">
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">Paket Premium</h3>
                        <p class="text-gray-500 dark:text-gray-400 mb-4">Untuk tugas-tugas berat</p>
                        <div class="mb-6">
                            <span class="text-3xl font-bold text-accent-600 dark:text-accent-400">Rp 450K - 1,5JT+</span>
                        </div>
                        <div class="space-y-3 mb-6">
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-accent-600 dark:text-accent-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Skripsi/Thesis</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-accent-600 dark:text-accent-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Jurnal ilmiah</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-accent-600 dark:text-accent-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Proyek programming kompleks</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-accent-600 dark:text-accent-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Desain UI/UX</span>
                            </div>
                            <div class="flex items-start">
                                <i class="fas fa-check-circle text-accent-600 dark:text-accent-400 mt-1 mr-3"></i>
                                <span class="text-gray-600 dark:text-gray-300">Revisi unlimited</span>
                            </div>
                        </div>
                        <a href="#order" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-accent-600 dark:text-accent-400 border border-accent-600 dark:border-accent-400 rounded-lg hover:bg-accent-50 dark:hover:bg-gray-700 transition-colors">
                            Pesan Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section id="order" class="py-20 bg-gray-50 dark:bg-gray-900 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0 -z-10">
            <div class="absolute h-96 w-96 rounded-full bg-primary-200/20 dark:bg-primary-800/20 -top-40 -right-20 blur-3xl"></div>
            <div class="absolute h-96 w-96 rounded-full bg-accent-200/20 dark:bg-accent-800/20 -bottom-40 -left-20 blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Pesan Sekarang</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">Isi formulir di bawah ini untuk memesan layanan kami</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-accent-600 rounded-2xl blur opacity-30 group-hover:opacity-70 transition duration-300"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 md:p-8">
                        <form id="orderForm" method="POST" action="{{ route('sendToWhatsapp') }}">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama Lengkap</label>
                                    <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">No. Whatsapp</label>
                                    <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="course" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Mata Kuliah</label>
                                    <input type="text" id="course" name="course" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="major" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Jurusan</label>
                                    <input type="text" id="major" name="major" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="semester" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Kelas/Semester</label>
                                    <input type="text" id="semester" name="semester" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white" required>
                                </div>
                                <div>
                                    <label for="deadline" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Deadline (Hari dan Jam)</label>
                                    <input type="text" id="deadline" name="deadline" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white" required>
                                </div>
                                <div class="md:col-span-2">
                                    <label for="task_details" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Detail Tugas</label>
                                    <textarea id="task_details" name="task_details" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white" required placeholder="Tugas wajib dijelaskan secara detail di awal, baik info tugas, format, atau request, bahkan contoh pengerjaan jika ada."></textarea>
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-400 flex items-start">
                                        <i class="fas fa-info-circle mt-1 mr-2"></i>
                                        <span>Jika ada file yang ingin di lampirkan, bisa di lampirkan langsung lewat WhatsApp</span>
                                    </p>
                                </div>
                                <div class="md:col-span-2 mt-4">
                                    <button type="submit" class="relative inline-flex w-full h-12 overflow-hidden rounded-lg p-[1px] focus:outline-none">

                                        <span class="inline-flex h-full w-full cursor-pointer items-center justify-center rounded-lg bg-primary-600 px-6 py-3 text-base font-medium text-white backdrop-blur-3xl">
                                            Kirim ke WhatsApp
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white dark:bg-gray-950 relative overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <!-- Background grid pattern -->
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#303030_1px,transparent_1px),linear-gradient(to_bottom,#303030_1px,transparent_1px)] bg-[size:6rem_4rem]"></div>
        </div>
        
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-900 dark:text-white">Hubungi Kami</h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">Punya pertanyaan? Hubungi kami melalui kontak berikut</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact Card 1: Phone -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-primary-400 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl text-center">
                        <div class="w-14 h-14 rounded-full bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-phone-alt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Telepon / WhatsApp</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">+62 852 2539 7226</p>
                        <a href="https://wa.me/6285225397226" class="inline-flex items-center justify-center px-5 py-3 border border-primary-600 dark:border-primary-400 text-primary-600 dark:text-primary-400 rounded-lg hover:bg-primary-50 dark:hover:bg-gray-700 transition-colors" target="_blank">
                            Chat Sekarang
                        </a>
                    </div>
                </div>
                
                <!-- Contact Card 2: Email -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-accent-600 to-accent-400 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl text-center">
                        <div class="w-14 h-14 rounded-full bg-accent-50 dark:bg-accent-900/30 text-accent-600 dark:text-accent-400 flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-envelope text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Email</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">info@jokitugas.com</p>
                        <a href="mailto:info@jokitugas.com" class="inline-flex items-center justify-center px-5 py-3 border border-accent-600 dark:border-accent-400 text-accent-600 dark:text-accent-400 rounded-lg hover:bg-accent-50 dark:hover:bg-gray-700 transition-colors">
                            Kirim Email
                        </a>
                    </div>
                </div>
                
                <!-- Contact Card 3: Location -->
                <div class="group relative">
                    <div class="absolute -inset-0.5 bg-gradient-to-r from-primary-600 to-primary-400 rounded-xl blur opacity-0 group-hover:opacity-30 transition duration-300"></div>
                    <div class="relative bg-white dark:bg-gray-800 rounded-xl shadow-lg p-8 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl text-center">
                        <div class="w-14 h-14 rounded-full bg-primary-50 dark:bg-primary-900/30 text-primary-600 dark:text-primary-400 flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-map-marker-alt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3 text-gray-900 dark:text-white">Lokasi</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Jakarta, Indonesia</p>
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-primary-600 dark:border-primary-400 text-primary-600 dark:text-primary-400 rounded-lg hover:bg-primary-50 dark:hover:bg-gray-700 transition-colors">
                            Lihat Peta
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
