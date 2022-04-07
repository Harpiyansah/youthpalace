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
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}" />

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
                                <img src="img/bintang.png" width="140" />                                    
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
                            @foreach($kamar as $item)
                                <div class="col">
                                    <div class="card h-100">
                                    <img id="imgcard" src="{{ $item->image }}" class="card-img-top" alt="kamar1">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $item->tipe_kamar }}</h4>
                                        <p class="card-text"><b>Fasilitas :</b><br>{{ $item->fasilitas_kamar }}</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#booking"><small class="text-muted">{{ $item->harga_kamar }}</small></a>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
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
                    @foreach($fasilitas as $item)
                        <div class="col-4">
                            <div class="card my-3" style="width: 22rem;">
                                <img id="imgcard" src="{{ $item->image  }}" class="card-img-top" alt="Foto Fasilitas">
                                <div class="card-body">
                                    <h5 class="text-center">{{ $item->nama_fasilitas }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
<script src="{{ asset('js/js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ asset('js/js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/js/bootstrap.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
