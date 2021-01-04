<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d54cbc2746.js" crossorigin="anonymous"></script>

    <title>Register</title>
</head>

<body>
    <div class="page-header">
        <hr style=" border-color: #ab5139; border-width: 0.1cm;">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #f2f2f2;">



        </div>
        <span class="border-right" style="color: #ab5139;" style="width: 3cm;">
      <a class="navbar-brand" href="index.html"><img class="garis_vertikal" src="{{ asset('template') }}/img/tndjogja.png" alt="" height="39"
          width="202"></a>
    </span>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: gray;">Training & Development Jogjakarta <span
              class="sr-only">(current)</span></a>
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
                        <a href="register.html"><button class="btn btn-outline-light"
                style="width:100px;   color: #ab5139; border-radius: 10px;" type="button">Daftar</button></a>
                    </td>
                    <td>
                        <a href="login.html"><button class="btn btn-light"
                style="width:100px;   background-color:#ab5139; color: white; border-radius: 10px;"
                type="button">Login</button></a>
                    </td>
                </tr>


            </table>

        </div>
    </nav>


    <br><br><br><br>
    <div class="container px-lg-7">
        <div class="row mx-lg-n5">
            <!-- Col 1 -->
            <div class="col py-3 px-lg-5">
                <img src="{{ asset('template') }}/img/JogjaDaftar.jpg" alt="" width="550px" height="650px">
            </div>
            <!-- Col 2 -->
            <div class="col py-3 px-lg-5 ">
                <br><br>
                <h4 align="center">
                    <font color="">Daftar</font>
                    <center>
                        <div class="col py-1 px-sm-5 mt-0" style="width: 220px; height: 50px;">
                            <hr color="#ab5139;">
                        </div>
                        <div>
                            <p style="font-size: 16px;">Daftarkan dirimu & lengkapi pengetahuanmu bersama kami</p>
                        </div>
                    </center>
                </h4>


                <form method="POST" action="{{ route('register') }}" class="user">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="col-sm-12 py-2">
                            <div class="col-12">
                                <input type="text" class="form-control form-control-user" name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 py-2">
                            <div class="col-12">
                                <input type="text" class="form-control form-control-user" name="last_name" placeholder="{{ __('Last Name') }}" value="{{ old('last_name') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 py-2">
                            <div class="col-12  ">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 py-2">
                            <div class="col-12  ">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Password') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 py-2">
                            <div class="col-12  ">
                                <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required>
                            </div>
                        </div>
                    </div>


                    <div>
                        <center>
                            <div class="col-sm-11 mt-5">
                                <button type="submit" class="btn btn-block mt-5 justify-content-center shadow p-2 mb-0" data-toggle="modal" data-target="#exampleModal" style="border-radius: 5px; background-color: #ab5139; color: #f2f2f2;" name="daftar">
                  Daftar Sekarang
                </button>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <p style="color:black;">Sudah punya akun? <b><a href="{{ route('login') }}" class="text-primary">Login</a></b></p>
                            </div>
                        </center>
                    </div>

                </form>

            </div>


        </div>
        <div class="col-sm">

        </div>
    </div>
    </div>
    <!-- Container -->
    </div>
    </div>
    </div>

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
