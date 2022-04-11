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
<body class="img-bg">
    <!-- Form Create -->
    <div id="loglog" class="col-lg-4 col-md-6">
        <!-- harus ada -->  
        <div class="row justify-content-center">
                <div class="card border-1 mb-5 col-lg-12" style="background-color: #ffffff; border-radius: 10px">
                    <div class="card-header bg-transparent pb-5">
        <form action="/creates/fasilitas" method="POST">
            @csrf
            <div class="row mt-2 mb-3">
                <a href="/" class="text-decoration-none" style="color: #000000; font-size: 30px;">
                    Youth<b>Palace</b>
                </a>
            </div>
            <div class="foto_fasilitas mb-2">
                <label for="foto_fasilitas" class="form-label ms-1">Foto Fasilitas</label>
                <input type="text" class="form-control" name="image" id="foto_fasilitas" value="" placeholder="Link Foto" autocomplete="off" >
            </div>
            <div class="nama_fasilitas mb-2">
                <label for="nama_fasilitas" class="form-label ms-1">Nama Fasilitas</label>
                <input type="text" class="form-control" name="nama_fasilitas" id="nama_fasilitas" value="" autocomplete="off" >
            </div>
            <div class="mt-4">
                <button class="w-45 btn btn-lg btn-primary bg-dark" type="submit" style="font-size: 15px" href="">Simpan</button>
            </div>
        </form>
                </div>
                </div>
    </div>
    <!-- akhir harus ada -->
    </div>
<!-- Akhir Form Login -->
</body>
</html>

<!-- Latest compiled and minified JavaScript -->
<script src="{{ asset('js/js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{ asset('js/js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{ asset('js/js/bootstrap.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
