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

    <title>YouthPalace | Login</title>
</head>
<body class="img-bg">
    <!-- Form Login -->
        <div id="loglog" class="col-lg-4 col-md-6">
            <!-- harus ada -->  
            <div class="row justify-content-center">
                    <div class="card border-1 mb-5 col-lg-12" style="background-color: #ffffff; border-radius: 10px">
                        <div class="card-header bg-transparent pb-5">
            <form action="/register" method="post">
                @csrf
                <div class="row mt-2">
                    <a href="/" class="text-decoration-none" style="color: #000000; font-size: 30px;">
                        Youth<b>Palace</b>
                    </a>
                </div>
                <div class="mt-3 mb-3 text-center">
                    <a href="/login" class="text-decoration-none" style="color: #000000; font-size: 24px;">
                        Masuk
                    </a>
                </div>
                <div class="email mb-3">
                    <label for="email" class="form-label ms-1">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Anda" autocomplete="off" required>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="password mb-3">
                    <label for="password" class="form-label ms-1">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" autocomplete="off" required>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div>
                    <button class="w-45 btn btn-lg btn-primary bg-dark" type="submit" style="font-size: 15px" href="/register">Masuk</button>
                </div>
                <div class="row">
                    <p class="dont">Masuk akun jika anda admin atau resepsionis! <a href="/">Kembali ke beranda</a></p> 
                </div>
            </form>
                    </div>
                    </div>
        </div>
        <!-- akhir harus ada -->
        </div>
    <!-- Akhir Form Login -->

    <!-- Footer -->
        <footer id="footers" class="text-white text-center" style="background-color: #000000; bottom: 0;">
            <p>Dibuat oleh <a href="https://www.instagram.com/ynsh_pi/" class="text-white fw-bold">@Harpiyansah</a></p>
        </footer>
    <!-- Akhir Footer -->
</body>
</html>