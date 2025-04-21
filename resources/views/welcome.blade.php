@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="fw-bold mb-4">Jasa Pengerjaan Tugas Mahasiswa Terpercaya</h1>
                    <p class="lead mb-4">Kami menyediakan layanan joki tugas akademik yang profesional, tepat waktu, dan berkualitas tinggi untuk semua jenjang pendidikan.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#order" class="btn btn-light btn-lg">Pesan Sekarang</a>
                        <a href="#services" class="btn btn-outline-light btn-lg">Lihat Layanan</a>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Joki Tugas" class="img-fluid rounded-3" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section-padding bg-light" id="services">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3">Layanan Kami</h2>
                    <p class="lead">Kami menyediakan berbagai jenis layanan pengerjaan tugas akademik sesuai kebutuhan Anda</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-file-alt"></i></div>
                            <h4 class="mb-3">Makalah & Essay</h4>
                            <p>Layanan pembuatan makalah, essay, paper, dan berbagai jenis tugas tertulis lainnya dengan riset yang mendalam.</p>
                            <a href="#order" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-graduation-cap"></i></div>
                            <h4 class="mb-3">Skripsi & Thesis</h4>
                            <p>Bantuan dalam penyusunan skripsi, thesis, disertasi dengan metodologi penelitian yang sesuai standar akademik.</p>
                            <a href="#order" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                            <h4 class="mb-3">Tugas Pemrograman</h4>
                            <p>Jasa pengerjaan tugas coding, pemrograman, dan proyek IT dengan berbagai bahasa pemrograman populer.</p>
                            <a href="#order" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-chart-line"></i></div>
                            <h4 class="mb-3">Presentasi PowerPoint</h4>
                            <p>Pembuatan slide presentasi yang profesional, informatif, dan menarik untuk keperluan akademik dan bisnis.</p>
                            <a href="#order" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-paint-brush"></i></div>
                            <h4 class="mb-3">Desain Grafis</h4>
                            <p>Layanan desain grafis untuk berbagai keperluan akademik seperti poster, infografis, dan ilustrasi.</p>
                            <a href="#order" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-tasks"></i></div>
                            <h4 class="mb-3">Tugas Lainnya</h4>
                            <p>Berbagai jenis tugas lainnya seperti rangkuman, resume, laporan praktikum, dan tugas-tugas kuliah lainnya.</p>
                            <a href="#order" class="btn btn-outline-primary mt-3">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section-padding" id="why-us">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3">Keunggulan Kami</h2>
                    <p class="lead">Mengapa memilih layanan JokiTugas untuk membantu tugas akademik Anda?</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-check-circle fa-3x"></i>
                        </div>
                        <div>
                            <h4>100% Tepat Waktu</h4>
                            <p>Kami berkomitmen untuk menyelesaikan tugas sesuai dengan deadline yang telah disepakati tanpa mengecewakan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-gem fa-3x"></i>
                        </div>
                        <div>
                            <h4>Kualitas Terjamin</h4>
                            <p>Tugas dikerjakan oleh tim profesional berpengalaman dengan standar akademik tinggi dan bebas plagiarisme.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-sync-alt fa-3x"></i>
                        </div>
                        <div>
                            <h4>Revisi Gratis</h4>
                            <p>Kami memberikan revisi gratis untuk memastikan hasil kerja kami sesuai dengan kebutuhan dan keinginan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-lock fa-3x"></i>
                        </div>
                        <div>
                            <h4>Kerahasiaan Terjaga</h4>
                            <p>Kami menjamin 100% kerahasiaan data dan identitas klien serta transaksi yang dilakukan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-money-bill-wave fa-3x"></i>
                        </div>
                        <div>
                            <h4>Harga Terjangkau</h4>
                            <p>Kami menawarkan harga yang kompetitif dan terjangkau dengan berbagai pilihan paket sesuai kebutuhan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex mb-4">
                        <div class="me-4 text-primary">
                            <i class="fas fa-headset fa-3x"></i>
                        </div>
                        <div>
                            <h4>Dukungan 24/7</h4>
                            <p>Tim customer service kami siap membantu Anda 24/7 untuk menjawab pertanyaan dan memberikan solusi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section-padding bg-light" id="testimonials">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3">Apa Kata Mereka?</h2>
                    <p class="lead">Testimonial dari pelanggan yang telah menggunakan layanan kami</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Client" class="testimonial-avatar">
                            <h5 class="mb-3">Risa Amalia</h5>
                            <p class="text-muted mb-3">Mahasiswa Ilmu Komunikasi</p>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-0">"Saya sangat puas dengan hasil makalah yang dikerjakan. Tepat waktu dan sesuai dengan ketentuan dosen. Terima kasih JokiTugas!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Client" class="testimonial-avatar">
                            <h5 class="mb-3">Bima Satria</h5>
                            <p class="text-muted mb-3">Mahasiswa Teknik Informatika</p>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star-half-alt text-warning"></i>
                            </div>
                            <p class="mb-0">"Tugas pemrograman saya dikerjakan dengan baik dan berfungsi sempurna. Penjelasan kodenya juga sangat detail sehingga saya bisa memahaminya."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mx-auto">
                    <div class="card testimonial-card h-100">
                        <div class="card-body">
                            <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Client" class="testimonial-avatar">
                            <h5 class="mb-3">Anita Wijaya</h5>
                            <p class="text-muted mb-3">Mahasiswa Manajemen</p>
                            <div class="mb-3">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="mb-0">"Presentasi yang dibuat sangat menarik dan profesional. Dosen saya sangat terkesan dengan hasilnya. Terima kasih banyak!"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section-padding" id="pricing">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3">Daftar Harga</h2>
                    <p class="lead">Kami menawarkan berbagai paket dengan harga yang kompetitif sesuai kebutuhan Anda</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="card pricing-card h-100">
                        <div class="card-body">
                            <h5 class="mb-0">Paket Basic</h5>
                            <p class="text-muted mb-3">Untuk tugas-tugas ringan</p>
                            <h3 class="price">Rp 25K - 100K</h3>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Makalah (5-10 halaman)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Essay (3-5 halaman)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Presentasi (10-15 slide)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Tugas programming dasar</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Revisi 1x</li>
                            </ul>
                            <a href="#order" class="btn btn-outline-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card pricing-card h-100 scale" style="transform: scale(1.05); border: 2px solid var(--primary-color);">
                        <div class="card-body">
                            <span class="badge bg-primary position-absolute top-0 start-50 translate-middle px-3 py-2">Terpopuler</span>
                            <h5 class="mb-0 mt-3">Paket Standard</h5>
                            <p class="text-muted mb-3">Untuk tugas-tugas sedang</p>
                            <h3 class="price">Rp 100K - 350K</h3>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Makalah (10-20 halaman)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Laporan penelitian (15-30 halaman)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Presentasi kompleks (15-30 slide)</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Tugas programming menengah</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Revisi 2x</li>
                            </ul>
                            <a href="#order" class="btn btn-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card pricing-card h-100">
                        <div class="card-body">
                            <h5 class="mb-0">Paket Premium</h5>
                            <p class="text-muted mb-3">Untuk tugas-tugas berat</p>
                            <h3 class="price">Rp 450K - 1,5JT+</h3>
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Skripsi/Thesis</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Jurnal ilmiah</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Proyek programming kompleks</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Desain UI/UX</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Revisi unlimited</li>
                            </ul>
                            <a href="#order" class="btn btn-outline-primary w-100">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Form Section -->
    <section class="section-padding bg-light" id="order">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3">Pesan Sekarang</h2>
                    <p class="lead">Isi formulir di bawah ini untuk memesan layanan kami</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body p-lg-5 p-3">
                            <form id="orderForm" method="POST" action="{{ route('sendToWhatsapp') }}">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">No. Whatsapp</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="course" class="form-label">Mata Kuliah</label>
                                        <input type="text" class="form-control" id="course" name="course" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="major" class="form-label">Jurusan</label>
                                        <input type="text" class="form-control" id="major" name="major" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="semester" class="form-label">Kelas/Semester</label>
                                        <input type="text" class="form-control" id="semester" name="semester" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="deadline" class="form-label">Deadline (Hari dan Jam)</label>
                                        <input type="text" class="form-control" id="deadline" name="deadline" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="task_details" class="form-label">Detail Tugas</label>
                                        <textarea class="form-control" id="task_details" name="task_details" rows="5" required placeholder="Tugas wajib dijelaskan secara detail di awal, baik info tugas, format, atau request, bahkan contoh pengerjaan jika ada."></textarea>
                                        <small class="text-danger mt-2 d-block"><i class="fas fa-info-circle me-1"></i>Jika ada file yang ingin di lampirkan, bisa di lampirkan langsung lewat WhatsApp</small>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-primary w-100 btn-lg">Kirim ke WhatsApp</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section-padding" id="contact">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold mb-3">Hubungi Kami</h2>
                    <p class="lead">Punya pertanyaan? Hubungi kami melalui kontak berikut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-phone-alt"></i></div>
                            <h4 class="mb-3">Telepon / WhatsApp</h4>
                            <p>+62 852 2539 7226</p>
                            <a href="https://wa.me/6285225397226" class="btn btn-outline-primary mt-3" target="_blank">Chat Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-envelope"></i></div>
                            <h4 class="mb-3">Email</h4>
                            <p>info@jokitugas.com</p>
                            <a href="mailto:info@jokitugas.com" class="btn btn-outline-primary mt-3">Kirim Email</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center p-4">
                            <div class="card-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <h4 class="mb-3">Lokasi</h4>
                            <p>Jakarta, Indonesia</p>
                            <a href="#" class="btn btn-outline-primary mt-3">Lihat Peta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
