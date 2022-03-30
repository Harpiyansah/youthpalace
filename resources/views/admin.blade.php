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
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facilities</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    <!-- Akhir Navbar -->

    <!-- Logo -->
        <section id="about" class="mb-5 mt-3" style="background-color: #c4c4c4">
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
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Room's Image</th>
                    <th scope="col">Room's Type</th>
                    <th scope="col">Room's Facility</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-light">
                <tr>
                    <td><img class="w-50" src="img/ambassador.png" /></td>
                    <td>The Ambassador</td>
                    <td><b>Facilities :</b><br>Bed (king-size), bathroom (shower and bath tub), caffee machine, AC, LED TV 40 inch, balcon, sofa, wardrobe (triple door), breakfast, lunch, dinner, laundry, pastry, and accomodation to airport.</td>
                    <td>Tonight’s rate: Rp1,430,946</td>
                    <td><a href="" style="color: #000000">Ubah</a> | <a href="" style="color: red">Hapus</a></td>
                </tr>
                <tr>
                    <td><img class="w-50" src="img/premier.png" /></td>
                    <td>The Premier</td>
                    <td><b>Facilities :</b><br>Bed (queen-size), bathroom (shower and bath tub), coffee machine, AC, LED TV 32 inch, chair, wardrobe (regular), breakfast, lunch, and dinner.</td>
                    <td>Tonight’s rate: Rp1,104,125</td>
                    <td><a href="" style="color: #000000">Ubah</a> | <a href="" style="color: red">Hapus</a></td>
                </tr>
                <tr>
                    <td><img class="w-50" src="img/classic.png" /></td>
                    <td>The Classic</td>
                    <td><b>Facilities :</b><br>beds (single-bed), bathroom (shower), AC, LED TV 22 inch, chair, wardrobe (regular), and breakfast.</td>
                    <td>Tonight’s rate: Rp980.625</td>
                    <td><a href="" style="color: #000000">Ubah</a> | <a href="" style="color: red">Hapus</a></td>
                </tr>
            </tbody>
        </table>
    <!-- Akhir Tabel -->
</body>
</html>