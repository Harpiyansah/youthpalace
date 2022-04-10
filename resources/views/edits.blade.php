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

    <title>YouthPalace | Admin | Edit</title>
</head>
<body class="img-bg">
    <!-- Form Login -->
        <div id="loglog" class="col-lg-4 col-md-6">
            <!-- harus ada -->  
            <div class="row justify-content-center">
                    <div class="card border-1 mb-5 col-lg-12" style="background-color: #ffffff; border-radius: 10px">
                        <div class="card-header bg-transparent pb-5">
            <form action="{{ route('fasilitas.update', $item->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="row mt-2 mb-3">
                    <a href="/" class="text-decoration-none" style="color: #000000; font-size: 30px;">
                        Youth<b>Palace</b>
                    </a>
                </div>
                <input type="hidden" name="_method" value="PATCH">
                <div class="nama_fasilitas mb-2">
                    <label for="nama_fasilitas" class="form-label ms-1">Nama Fasilitas</label>
                    <input type="text" class="form-control" name="nama_fasilitas" id="nama_fasilitas" value="{{ $item['nama_fasilitas'] }}" autocomplete="off" >
                </div>
                <div class="mt-4">
                    <button class="w-45 btn btn-lg btn-primary bg-dark" type="submit" style="font-size: 15px" href="">Simpan</button>
                    <button class="w-45 btn btn-lg btn-primary bg-danger" style="font-size: 15px" href="/admin">Batal</button>
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