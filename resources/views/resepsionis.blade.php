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

    <title>YouthPalace | Resepsionis</title>
</head>
<body>
    <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark shadow" style="background-color: #000000">
            <div class="container">
                <a class="navbar-brand" href="#">Youth<b>Palace</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item" id="rooms-item">
                        <a class="nav-link" href="/resepsionis" style="color: #ffffff">Resepsionis</a>
                    </li>
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

    <!-- Tabel -->
        <div id="kamar" class="container">
            <div class="main-search-input-wrap">
                <div class="main-search-input fl-wrap mb-3">
                    <div class="main-search-input-item d-flex">
                        <form action="{{ route('resepsionis.search') }}" method="post" class="d-flex">
                            @csrf
                            <input type="text" name="keywords" class="form-control w-100" value="" placeholder="Nama Tamu">
                            <button class="btn btn-dark btn-sm px-3 py-2" type="submit">Cari</button>
                        </form>     
                    </div> 
                </div>
            </div>
            <div class="d-flex">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Nama Tamu</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Tanggal Check In</th>
                            <th scope="col">Tanggal Check Out</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        @foreach ($bookings as $item)
                        <tr>
                            <td>{{ $item->nama_pemesan }}</td>
                            <td>{{ $item->nama_tamu }}</td>
                            <td>{{ $item->nomor_hp }}</td>
                            <td>{{ $item->tipe_kamar }}</td>
                            <td>{{ $item->check_in }}</td>
                            <td>{{ $item->check_out }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    <!-- Akhir Tabel -->

    <!-- Footer -->
        <footer id="footers" class="text-white text-center" style="background-color: #000000; bottom: 0;">
            <p>Dibuat oleh <a href="https://www.instagram.com/ynsh_pi/" class="text-white fw-bold">@Harpiyansah</a></p>
        </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>