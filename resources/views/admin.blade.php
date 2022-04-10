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

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>YouthPalace | Admin</title>
</head>
<body>
    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark shadow" style="background-color: #000000">
            <div class="container">
                <a class="navbar-brand" href="#">Youth<b>Palace</b> / Admin</a>
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
                    <li class="nav-item" id="facilities-item">
                        <a class="nav-link" href="/resepsionis" style="color: #ffffff">Resepsionis</a>
                    </li>
                    <div class="collapse navbar-collapse ms-2" id="navbarNav">
                        <form action="/logout" method="post">
                            @csrf
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Logout
                                </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    <!-- Akhir Navbar -->

    <!-- Logo -->
        <section id="about" class="mb-3 mt-5" style="background-color: #c4c4c4">
            <div class="container">
                <div class="row mt-1">
                    <div class="col mt-5">
                    <p style="font-size: 2rem">Youth<b>Palace</b></p>
                    </div>
                </div>
            </div>
        </section>
    <!-- Akhir Logo -->

    <!-- Tabel Kamar -->
        <div id="kamar" class="container">
            <div class="row mt-1">
                <div class="col ms-3">
                <h4>Kamar</h4>
                </div>
            </div>
            <div class="d-flex">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Foto Kamar</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Fasilitas Kamar</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah Kamar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($kamar as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->image }}" style="width: 200px; height: 150px; border-radius: 10px" alt="">
                                </td>
                                <td>{{ $item['tipe_kamar'] }}</td>
                                <td>{{ $item['fasilitas_kamar'] }}</td>
                                <td>{{ $item['harga_kamar'] }}</td>
                                <td>{{ $item['jumlah_kamar'] }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                        <a href="{{ route('kamar.edit', $item->id) }}" class="btn btn-dark btn-sm">
                                            Ubah
                                        </a>
                                    <!-- Akhir button trigger modal-->

                                    <!-- Button trigger modal -->
                                        <form action="{{ route('kamar.delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    <!-- Akhir button trigger modal-->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <!-- Akhir Tabel Kamar -->

    <!-- Tabel Fasilitas -->
        <div id="facil" class="container">
            <div class="row mt-1">
                <div class="col ms-3">
                <h4>Fasilitas</h4>
                </div>
            </div>
            <div class="d-flex">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Foto Fasilitas</th>
                            <th scope="col">Nama Fasilitas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach($fasilitas as $item)
                            <tr>
                                <td>
                                    <img src="{{ $item->image }}"  style="width: 200px; height: 150px; border-radius: 10px" alt="">
                                </td>
                                <td>{{ $item['nama_fasilitas'] }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                        <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-dark btn-sm">
                                            Ubah
                                        </a>
                                    <!-- Akhir button trigger modal-->

                                    <!-- Button trigger modal -->
                                        <form action="{{ route('fasilitas.delete', $item->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    <!-- Akhir button trigger modal-->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <!-- Akhir Tabel Fasilitas -->

    <!-- Footer -->
        <footer class="text-white text-center" style="height: 2rem; background-color: #000000">
            <p>Dibuat oleh <a href="https://www.instagram.com/ynsh_pi/" class="text-white fw-bold">@Harpiyansah</a></p>
        </footer>
    <!-- Akhir Footer -->

    <script src="{{ asset('js/js/bootstrap.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>