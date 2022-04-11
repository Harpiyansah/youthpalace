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
        <form action="/create/kamar" method="POST">
            @csrf
            <div class="row mt-2 mb-3">
                <a href="/" class="text-decoration-none" style="color: #000000; font-size: 30px;">
                    Youth<b>Palace</b>
                </a>
            </div>
            <div class="foto_kamar mb-2">
                <label for="foto_kamar" class="form-label ms-1">Foto Kamar</label>
                <input type="text" class="form-control" name="image" id="foto_kamar" value="" placeholder="Link Foto" autocomplete="off" >
            </div>
            <div class="tipe_kamar mb-2">
                <label for="tipe_kamar" class="form-label ms-1">Tipe Kamar</label>
                <input type="text" class="form-control" name="tipe_kamar" id="tipe_kamar" value="" autocomplete="off" >
            </div>
            <div class="fasilitas_kamar mb-2">
                <label for="fasilitas_kamar" class="form-label ms-1">Fasilitas Kamar</label>
                <br>
                <textarea name="fasilitas_kamar" name="fasilitas_kamar" id="fasilitas_kamar" class="form-control" cols="30" rows="10">
                </textarea>
            </div>
            <div class="harga_kamar mb-2">
                <label for="harga_kamar" class="form-label ms-1">Harga</label>
                <input type="text" class="form-control" name="harga_kamar" id="harga_kamar" placeholder="" value="" autocomplete="off" >
            </div>
            <div class="jumlah_kamar mb-2">
                <label for="jumlah_kamar" class="form-label ms-1">Jumlah Kamar</label>
                <input type="text" class="form-control" name="jumlah_kamar" id="jumlah_kamar" placeholder="" value="" autocomplete="off" >
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
