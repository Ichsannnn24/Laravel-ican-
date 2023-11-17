<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-danger fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UTS Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    
    </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Home </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="container mt-5">
  <h2>Table Example</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Kode produk</th>
        <th>Nama Produk</th>
        <th>Jenis Produk</th>
        <th>Harga</th>
      </tr>
      </thead>
      <tbody>
      @for ($i = 0; $i < $jumlah; $i++)  
                <tr>
                    <th>{{ $kode_produk[$i]}}</th>
                    <th>{{$nama_produk[$i]}}</th>
                    <th>{{$jenis_produk[$i]}}</th>
                    <th>{{$harga[$i]}}</th>
                </tr>
       @endfor
      </tbody>

  </table>
  <a href="form" class="btn btn-success" role="button">Tambah Produk</a>    
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>