<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>YouthPalace | Home</title>
</head>
<body>
    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark shadow" style="background-color: #000000">
            <div class="container">
            <a class="navbar-brand" href="/">Youth<b>Palace</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item" id="rooms-item">
                    <a class="nav-link" href="#kamar" style="color: #ffffff">Kamar</a>
                </li>
                <li class="nav-item" id="facilities-item">
                    <a class="nav-link" href="#facil" style="color: #ffffff">Fasilitas</a>
                </li>
                <li class="nav-item" id="booking-item">
                    <a class="nav-link" href="#booking" style="color: #ffffff">Pesan Kamar</a>
                </li>
                <div class="collapse navbar-collapse ms-2" id="navbarNav">
                    <a href="/login"><button id="btnlog" type="button" class="btn btn-secondary btn-sm">Masuk</button></a>
                </ul>
            </div>
            </div>
        </nav>
    <!-- Akhir Navbar -->

    <!-- Carousel -->
        <section class="text-center mb-5">
            <img src="img/banner.png" class="banner ms-2" alt="banner">
            <img src="img/boxbanner.png" class="boxbanner ms-2" alt="box">
        </section>
    <!-- Akhir Carousel -->

    <!-- About -->
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img id="fotokotak1" src="img/foto2kotak.png" />
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="ms--3 mb-5">
                                <h2 style="text-shadow: 0px 4px 15px #ffffff">Youth<b>Palace</b></h2>
                                <svg width="164" height="24" viewBox="0 0 164 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M157.918 14.3201C157.659 14.5711 157.54 14.9341 157.599 15.2901L158.488 20.2101C158.563 20.6271 158.387 21.0491 158.038 21.2901C157.696 21.5401 157.241 21.5701 156.868 21.3701L152.439 19.0601C152.285 18.9781 152.114 18.9341 151.939 18.9291H151.668C151.574 18.9431 151.482 18.9731 151.398 19.0191L146.968 21.3401C146.749 21.4501 146.501 21.4891 146.258 21.4501C145.666 21.3381 145.271 20.7741 145.368 20.1791L146.258 15.2591C146.317 14.9001 146.198 14.5351 145.939 14.2801L142.328 10.7801C142.026 10.4871 141.921 10.0471 142.059 9.65009C142.193 9.25409 142.535 8.96509 142.948 8.90009L147.918 8.17909C148.296 8.14009 148.628 7.91009 148.798 7.57009L150.988 3.08009C151.04 2.98009 151.107 2.88809 151.188 2.81009L151.278 2.74009C151.325 2.68809 151.379 2.64509 151.439 2.61009L151.548 2.57009L151.718 2.50009H152.139C152.515 2.53909 152.846 2.76409 153.019 3.10009L155.238 7.57009C155.398 7.89709 155.709 8.12409 156.068 8.17909L161.038 8.90009C161.458 8.96009 161.809 9.25009 161.948 9.65009C162.079 10.0511 161.966 10.4911 161.658 10.7801L157.918 14.3201Z" fill="url(#paint0_linear_105_190)"/>
                                    <path d="M122.918 14.3201C122.659 14.5711 122.54 14.9341 122.599 15.2901L123.488 20.2101C123.563 20.6271 123.387 21.0491 123.038 21.2901C122.696 21.5401 122.241 21.5701 121.868 21.3701L117.439 19.0601C117.285 18.9781 117.114 18.9341 116.939 18.9291H116.668C116.574 18.9431 116.482 18.9731 116.398 19.0191L111.968 21.3401C111.749 21.4501 111.501 21.4891 111.258 21.4501C110.666 21.3381 110.271 20.7741 110.368 20.1791L111.258 15.2591C111.317 14.9001 111.198 14.5351 110.939 14.2801L107.328 10.7801C107.026 10.4871 106.921 10.0471 107.059 9.65009C107.193 9.25409 107.535 8.96509 107.948 8.90009L112.918 8.17909C113.296 8.14009 113.628 7.91009 113.798 7.57009L115.988 3.08009C116.04 2.98009 116.107 2.88809 116.188 2.81009L116.278 2.74009C116.325 2.68809 116.379 2.64509 116.439 2.61009L116.548 2.57009L116.718 2.50009H117.139C117.515 2.53909 117.846 2.76409 118.019 3.10009L120.238 7.57009C120.398 7.89709 120.709 8.12409 121.068 8.17909L126.038 8.90009C126.458 8.96009 126.809 9.25009 126.948 9.65009C127.079 10.0511 126.966 10.4911 126.658 10.7801L122.918 14.3201Z" fill="#FEBD57"/>
                                    <path d="M87.9184 14.3201C87.6594 14.5711 87.5404 14.9341 87.5994 15.2901L88.4884 20.2101C88.5634 20.6271 88.3874 21.0491 88.0384 21.2901C87.6964 21.5401 87.2414 21.5701 86.8684 21.3701L82.4394 19.0601C82.2854 18.9781 82.1144 18.9341 81.9394 18.9291H81.6684C81.5744 18.9431 81.4824 18.9731 81.3984 19.0191L76.9684 21.3401C76.7494 21.4501 76.5014 21.4891 76.2584 21.4501C75.6664 21.3381 75.2714 20.7741 75.3684 20.1791L76.2584 15.2591C76.3174 14.9001 76.1984 14.5351 75.9394 14.2801L72.3284 10.7801C72.0264 10.4871 71.9214 10.0471 72.0594 9.65009C72.1934 9.25409 72.5354 8.96509 72.9484 8.90009L77.9184 8.17909C78.2964 8.14009 78.6284 7.91009 78.7984 7.57009L80.9884 3.08009C81.0404 2.98009 81.1074 2.88809 81.1884 2.81009L81.2784 2.74009C81.3254 2.68809 81.3794 2.64509 81.4394 2.61009L81.5484 2.57009L81.7184 2.50009H82.1394C82.5154 2.53909 82.8464 2.76409 83.0194 3.10009L85.2384 7.57009C85.3984 7.89709 85.7094 8.12409 86.0684 8.17909L91.0384 8.90009C91.4584 8.96009 91.8094 9.25009 91.9484 9.65009C92.0794 10.0511 91.9664 10.4911 91.6584 10.7801L87.9184 14.3201Z" fill="#FEBD57"/>
                                    <path d="M52.9184 14.3201C52.6594 14.5711 52.5404 14.9341 52.5994 15.2901L53.4884 20.2101C53.5634 20.6271 53.3874 21.0491 53.0384 21.2901C52.6964 21.5401 52.2414 21.5701 51.8684 21.3701L47.4394 19.0601C47.2854 18.9781 47.1144 18.9341 46.9394 18.9291H46.6684C46.5744 18.9431 46.4824 18.9731 46.3984 19.0191L41.9684 21.3401C41.7494 21.4501 41.5014 21.4891 41.2584 21.4501C40.6664 21.3381 40.2714 20.7741 40.3684 20.1791L41.2584 15.2591C41.3174 14.9001 41.1984 14.5351 40.9394 14.2801L37.3284 10.7801C37.0264 10.4871 36.9214 10.0471 37.0594 9.65009C37.1934 9.25409 37.5354 8.96509 37.9484 8.90009L42.9184 8.17909C43.2964 8.14009 43.6284 7.91009 43.7984 7.57009L45.9884 3.08009C46.0404 2.98009 46.1074 2.88809 46.1884 2.81009L46.2784 2.74009C46.3254 2.68809 46.3794 2.64509 46.4394 2.61009L46.5484 2.57009L46.7184 2.50009H47.1394C47.5154 2.53909 47.8464 2.76409 48.0194 3.10009L50.2384 7.57009C50.3984 7.89709 50.7094 8.12409 51.0684 8.17909L56.0384 8.90009C56.4584 8.96009 56.8094 9.25009 56.9484 9.65009C57.0794 10.0511 56.9664 10.4911 56.6584 10.7801L52.9184 14.3201Z" fill="#FEBD57"/>
                                    <path d="M17.9184 14.3201C17.6594 14.5711 17.5404 14.9341 17.5994 15.2901L18.4884 20.2101C18.5634 20.6271 18.3874 21.0491 18.0384 21.2901C17.6964 21.5401 17.2414 21.5701 16.8684 21.3701L12.4394 19.0601C12.2854 18.9781 12.1144 18.9341 11.9394 18.9291H11.6684C11.5744 18.9431 11.4824 18.9731 11.3984 19.0191L6.96839 21.3401C6.74939 21.4501 6.50139 21.4891 6.25839 21.4501C5.66639 21.3381 5.27139 20.7741 5.36839 20.1791L6.25839 15.2591C6.31739 14.9001 6.19839 14.5351 5.93939 14.2801L2.32839 10.7801C2.02639 10.4871 1.92139 10.0471 2.05939 9.65009C2.19339 9.25409 2.53539 8.96509 2.94839 8.90009L7.91839 8.17909C8.29639 8.14009 8.62839 7.91009 8.79839 7.57009L10.9884 3.08009C11.0404 2.98009 11.1074 2.88809 11.1884 2.81009L11.2784 2.74009C11.3254 2.68809 11.3794 2.64509 11.4394 2.61009L11.5484 2.57009L11.7184 2.50009H12.1394C12.5154 2.53909 12.8464 2.76409 13.0194 3.10009L15.2384 7.57009C15.3984 7.89709 15.7094 8.12409 16.0684 8.17909L21.0384 8.90009C21.4584 8.96009 21.8094 9.25009 21.9484 9.65009C22.0794 10.0511 21.9664 10.4911 21.6584 10.7801L17.9184 14.3201Z" fill="#FEBD57"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_105_190" x1="146" y1="14" x2="156.5" y2="14" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.526042" stop-color="#FEBD57"/>
                                    <stop offset="0.526142" stop-color="white" stop-opacity="0"/>
                                    <stop offset="0.9999" stop-color="white" stop-opacity="0.0104167"/>
                                    </linearGradient>
                                    </defs>
                                </svg>                                    
                            </div>
                        </div>
                        <div class="row">
                            <div id="lorem" class="ms-3">
                            <p>Nikmati dan jadikan liburan terbaik Anda di kota ini dengan menginap di Youth<b>Palace</b>. Hotel kami dinominasikan sebagai hotel dengan pelayanan terbaik di kota,
                                sudah banyak tamu yang telah menyetujuinya. Hotel kami memiliki kualitas bintang 4,5 (termasuk pelayanan dan pemeliharaan).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- AKhir About -->

    <!-- Kamar -->
        <section id="kamar">
            <div class="container">
                <div class="row">
                    <div class="col ms-3 mb-3">
                        <h3>Kamar</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                <img id="imgcard" src="img/ambassador.png" class="card-img-top" alt="kamar1">
                                <div class="card-body">
                                    <h4 class="card-title">The Ambassador</h4>
                                    <p class="card-text"><b>Fasilitas :</b><br>Kasur (king-size), kamar mandi (shower dan bath tub), mesin kopi, AC, LED TV 40 inch, balkon, sofa, lemari (tiga pintu), sarapan, makan siang, makan malam, jasa cuci pakaian, dan transpostasi ke bandara.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#booking"><small class="text-muted">Harga per malam: Rp1,430,946</small></a>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                <img id="imgcard" src="img/premier.png" class="card-img-top" alt="kamar2">
                                <div class="card-body">
                                    <h4 class="card-title">The Premier</h4>
                                    <p class="card-text"><b>Fasilitas :</b><br>Kasur (queen-size), kamar mandi (shower dan bath tub), mesin kopi, AC, LED TV 32 inch, kursi, lemari (regular), sarapan, makan siang, dan makan malam.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#booking"><small class="text-muted">Harga per malam: Rp1,104,125</small></a>
                                </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                <img id="imgcard" src="img/classic.png" class="card-img-top" alt="kamar3">
                                <div class="card-body">
                                    <h4 class="card-title">The Classic</h4>
                                    <p class="card-text"><b>Fasilitas :</b><br>Dua kasur (single-bed), kamar mandi (shower), AC, LED TV 22 inch, kursi, lemari (regular), dan sarapan.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#booking"><small class="text-muted">Harga per malam: Rp980.625</small></a>
                                </div>
                                </div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir Kamar -->

    <!-- Fasilitas -->
        <section id="facil" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col mt-5 ms-3 mb-3">
                        <h3>Fasilitas</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="card" style="width: 22rem;">
                            <img id="imgcard" src="img/kolam.png" class="card-img-top" alt="kolam">
                            <div class="card-body">
                                <h5 class="text-center">Kolam Renang</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 22rem;">
                            <img id="imgcard" src="img/pastry.png" class="card-img-top" alt="pastri">
                            <div class="card-body">
                                <h5 class="text-center">Stand Kue</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 22rem;">
                            <img id="imgcard" src="img/mobil.png" class="card-img-top" alt="mobil">
                            <div class="card-body">
                                <h5 class="text-center">Transportasi ke Bandara</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <div class="card" style="width: 22rem;">
                            <img id="imgcard" src="img/ballroom.png" class="card-img-top" alt="bolrum">
                            <div class="card-body">
                                <h5 class="text-center">Ruang Konferensi</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 22rem;">
                            <img id="imgcard" src="img/resto.png" class="card-img-top" alt="resto">
                            <div class="card-body">
                                <h5 class="text-center">Restoran dan Fine Dinning</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card" style="width: 22rem;">
                            <img id="imgcard" src="img/spa.png" class="card-img-top" alt="spa">
                            <div class="card-body">
                                <h5 class="text-center">Spa</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir Fasilitas -->

    <!-- Form Booking -->
        <section id="booking">
            <div class="container">
                <div class="row">
                    <div class="mt-5 ms-3 mb-3">
                        <h3>Form Pemesanan</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <img id="fotokotak" src="img/foto2kotak.png" />
                    </div>
                    <div class="col-6">
                    <div class="col-lg-10 col-md-12">
                        <!-- harus ada -->  
                        <div class="row justify-content-center">
                                <div class="card border-1 mb-5 col-lg-12" style="background-color: #ffffff; border-radius: 10px">
                                    <div class="card-header bg-transparent pb-5">
                        <form action="/register" method="post">
                            @csrf
                            <div class="mt-3 mb-3 text-center">
                                <a href="#" class="text-decoration-none" style="color: #000000; font-size: 24px;">
                                    Form Pemesanan Kamar
                                </a>
                            </div>
                            <div class="check_in mb-3">
                                <label for="check_in" class="form-label ms-1">Check In</label>
                                <input type="date" class="form-control @error('check_in') is-invalid @enderror" name="check_in" id="check_in" placeholder="" autocomplete="off" required>
                                @error('check_in')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="check_out mb-3">
                                <label for="check_out" class="form-label ms-1">Check Out</label>
                                <input type="date" class="form-control @error('check_out') is-invalid @enderror" name="check_out" id="check_out" placeholder="" autocomplete="off" required>
                                @error('check_out')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="nama_pemesan mb-3">
                                <label for="nama_pemesan" class="form-label ms-1">Nama Pemesan</label>
                                <input type="text" class="form-control @error('nama_pemesa') is-invalid @enderror" name="nama_pemesan" id="nama_pemesan" placeholder="Nama Lengkap" autocomplete="off" required>
                                @error('nama_pemesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="email mb-3">
                                <label for="email" class="form-label ms-1">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Anda" autocomplete="off" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="nomor_hp mb-3">
                                <label for="nomor_hp" class="form-label ms-1">Nomor HP</label>
                                <input type="number" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" id="nomor_hp" placeholder="Nomor HP Anda" autocomplete="off" required>
                                @error('nomor_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="nama_tamu mb-3">
                                <label for="nama_tamu" class="form-label ms-1">Nama Tamu</label>
                                <input type="text" class="form-control @error('nama_tamu') is-invalid @enderror" name="nama_tamu" id="nama_tamu" placeholder="Nama Lengkap" autocomplete="off" required>
                                @error('nama_tamu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="tipe_kamar mb-3">
                                <label for="tipe_kamar" class="form-label ms-1">Tipe Kamar</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option value="amb">The Ambassador</option>
                                    <option value="prem">The Premier</option>
                                    <option value="class">The Classic</option>
                                    </select>
                                @error('nama_tamu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="jumlah_kamar mb-4">
                                <label for="jumlah_kamar" class="form-label ms-1">Jumlah Kamar</label>
                                <input type="number" class="form-control @error('jumlah_kamar') is-invalid @enderror" name="jumlah_kamar" id="jumlah_kamar" placeholder="0" autocomplete="off" required>
                                @error('jumlah_kamar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="d-flex-justify-content-between text-center">
                                <a href="{{ route('pdf') }}" class="btn w-45 btn btn-lg btn-primary bg-dark" type="submit" style="font-size: 15px">Konfirmasi Pemesanan</a>
                            </div>
                        </form>
                                </div>
                                </div>
                    </div>
                    <!-- akhir harus ada -->
                    </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir Form Booking -->

    <!-- Footer -->
        <footer style="background-color: #c4c4c4; height: 170px;">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <h4 id="logof">Youth<b>Palace</b></h4>
                    </div>
                    <div id="logofl" class="row">
                        <p id="logof">Nikmati kemewahan hotel kami</p>
                    </div>
                </div>
                <div class="col-6">
                    <div id="contactus" class="row">
                        <p>Hubungi kami</p>
                    </div>
                    <div id="logofl" class="row">
                        <p class="ms-3">Jl. Gatot Subroto 83, Bandung 40262,<br>
                            Jawa Barat, Indonesia<br>
                            Telepon : +62 22 7310 799<br>
                            Fax : +62 22 7310 988</p>
                    </div>
                </div>
            </div>
        </footer>
    <!-- Akhir Footer -->
</body>
</html>

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
