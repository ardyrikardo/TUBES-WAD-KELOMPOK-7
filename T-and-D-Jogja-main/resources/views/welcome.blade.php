<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/style.css">
    <script src="https://kit.fontawesome.com/a4a6094be1.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Homepage</title>


</head>
<div class="page-header">
    <hr style=" border-color: #ab5139; border-width: 0.1cm;">
</div>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f2f2f2;">



    </div>
    <span class="border-right" style="color: #ab5139;" style="width: 3cm;">
        <a class="navbar-brand" href="#"><img class = "garis_vertikal" src="{{ asset('template') }}/img/tndjogja.png" alt="" height="39" width="202"></a>
    </span>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="color: gray;">Training  & Development Jogjakarta <span class="sr-only">(current)</span></a>
            </li>

        </ul>

    </div>

    <div class="collapse navbar-collapse justify-content-end">

        <table style="width: 80%;">

            <tr>

                <td>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><b>Programs</b> </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"><b>About</b> </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile.php">Profile</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </div>
                </td>
                <td>
                    <a href="{{ route('register') }}"><button class="btn btn-outline-light" style="width:100px;   color: #ab5139; border-radius: 10px;" type="button">Daftar</button></a>
                </td>
                <td>
                    <a href="{{ route('login') }}"><button class="btn btn-light" style="width:100px;   background-color:#ab5139; color: white; border-radius: 10px;" type="button">Login</button></a>
                </td>
            </tr>


        </table>

    </div>
</nav>

<body>
    <!-- JUMBOTRON -->

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        </div>
        <div class="container2">

            <div class="container rounded shadow p-3 mb-5 bg-white rounded" style="background-color: white; width: 900px;">
                <p><b>Lengkapi keahlianmu sekarang</b></p>
                <hr>

                <table style="width: 100%;">
                    <tr>
                        <td>
                            <p><b>Program</b></p>
                            <div class="dropdown">
                                <a style="color: grey;" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Semua Program
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </td>
                        <td>
                            <p><b>Kategori</b></p>
                            <div class="dropdown">
                                <a style="color: grey;" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kategori
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>

                        </td>
                        <td>
                            <p><b>Lokasi</b></p>
                            <div class="dropdown">
                                <a style="color: grey;" class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Lokasi
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p></p>
                            <a href="home.php"><button class="btn btn-light" style="width:180px;   background-color:#ab5139; color: white; border-radius: 10px;" type="button"><i class="fas fa-search"></i>  Cari Sekarang</button></a>

                        </td>



                    </tr>


                </table>

            </div>
        </div>
    </div>
    <!-- CLOSING JUMBOTRON -->

    <div class="container" style="margin-top: 8%;"><br>
        <b>Program Pilihan</b>
        <div class="row row-cols-1 row-cols-md-3" style="margin-top: 3%;">
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="{{ asset('template') }}/img/Jumbotron.png" class="card-img-top" alt="...">
                    <div class="card-header" style="background-color: #ab5139; height: 10%;">
                        <p style="text-align: center; color: white;"> AVAILABLE ONLINE</p>
                    </div>
                    <h3 class="card-tittle" style="margin-top: 2%;">Digital Marketing</h3>
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="{{ asset('template') }}/img/Jumbotron.png" class="card-img-top" alt="...">
                    <div class="card-header" style="background-color: red; height: 10%;">
                        <p style="text-align: center; color: white;"> UNAVAILABLE ONLINE</p>
                    </div>
                    <h5 class="card-tittle" style="margin-top: 2%;">Digital Marketing</h5>
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card h-100">
                    <img src="{{ asset('template') }}/img/Jumbotron.png" class="card-img-top" alt="...">
                    <div class="card-header" style="background-color: #ab5139; height: 10%;">
                        <p style="text-align: center; color: white;"> AVAILABLE ONLINE</p>
                    </div>
                    <h5 class="card-tittle" style="margin-top: 2%;">Digital Marketing</h5>
                    <div class="card-body">
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br><br><br><br>

    <!-- footer -->
    <footer>
        <div class="main-content">
            <div class="left box">
                <div class="footer logo">
                    <img src="{{ asset('template') }}/img/tndfooter.png" style="height: 40%; width: 70%; margin-top: 4%;" alt="">

                </div>

                <div class="content">


                </div>
            </div>
            <div class="center box">

                <div class="content">
                    <div class="place">
                        <span class="text" style="color: whitesmoke;">Programs</span>
                    </div>
                    <div class="phone">
                        <span class="text" style="color: whitesmoke;">Digital Marketting</span>
                    </div>
                    <div class="email">
                        <span class="text" style="color: whitesmoke;">Web Developer</span>
                    </div>
                </div>
            </div>
            <div class="right box">
                <h2 style="color: whitesmoke;">
                    Follow us</h2>
                <div class="content">
                    <div class="social">
                        <a href=""><span class="fab fa-facebook-f"></span></a>
                        <a href=""><span class="fab fa-twitter"></span></a>
                        <a href=""><span class="fab fa-instagram"></span></a>
                        <a href=""><span class="fab fa-youtube"></span></a>
                    </div>


                </div>


            </div>
            <hr style="color: whitesmoke;">

        </div>

    </footer>


    <!-- <div class="footer">

        <div class="footer-logo">
            <img src="img/tndfooter.png" style="height: 8%; width: 10%; margin-top: 4%;" alt="">
        </div>
        <div class="center box">
            afawf
        </div>
    </div> -->

    <!-- <center> <img src="img/tndjogja.png" style="height:8% ; width: 10% ;" alt=""> </center> -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
