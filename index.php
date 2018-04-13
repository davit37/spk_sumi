<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css?=1">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownBarang" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Barang</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownBarang">
                            <a class="dropdown-item" href="?page=barang_add">Tambah</a>
                            <a class="dropdown-item" href="?page=barang_data">Data Barang</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
           
        </div>
    </nav><br>
    <div class="container">
        <div class="row justify-content-md-center">

         <?php include"inc/go.php"; ?>
         </div>
        
    </div>

    <div class="container-fluid">

    </div>

    <script src="asset/jquery/jquery.slim.min.js"></script>
    <script src="asset/popper.js/popper.min.js"></script>
    <script src="asset/bootstrap/js/bootstrap.min.js" ></script>
    <script defer src="asset/font-awesome/js/fontawesome-all.min.js" ></script>
    <script src="asset/sweetalert2.js"></script>
    <script src="asset/script/app.js"></script>
</body>

</html>