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
<body>
    <!-- Form Login -->
        <div id="loglog" class="col-lg-4 col-md-6">
            <!-- harus ada -->  
            <div class="row justify-content-center">
                    <div class="card border-1 mb-5 col-lg-12" style="background-color: #ffffff; border-radius: 10px">
                        <div class="card-header bg-transparent pb-5">
            <form action="{{ route('kamar.update', $item->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="row mt-2 mb-3">
                    <a href="/" class="text-decoration-none" style="color: #000000; font-size: 30px;">
                        Youth<b>Palace</b>
                    </a>
                </div>
                <input type="hidden" name="_method" value="PATCH">
                <div class="tipe_kamar mb-2">
                    <label for="tipe_kamar" class="form-label ms-1">Tipe Kamar</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $item['tipe_kamar'] }}" autocomplete="off" >
                </div>
                <div class="fasilitas_kamar mb-2">
                    <label for="fasilitas_kamar" class="form-label ms-1">Fasilitas Kamar</label>
                    <br>
                    <textarea name="fasilitas_kamar" id="" class="form-control" cols="30" rows="10">
                        {{ $item->fasilitas_kamar }}
                    </textarea>
                </div>
                <div class="harga_kamar mb-2">
                    <label for="harga_kamar" class="form-label ms-1">Harga</label>
                    <input type="text" class="form-control" name="harga_kamar" id="harga_kamar" placeholder="" value="{{ $item->harga_kamar }}" autocomplete="off" >
                </div>
                <div class="jumlah_kamar mb-2">
                    <label for="jumlah_kamar" class="form-label ms-1">Jumlah Kamar</label>
                    <input type="text" class="form-control" name="jumlah_kamar" id="jumlah_kamar" placeholder="" value="{{ $item->jumlah_kamar }}" autocomplete="off" >
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