
<?php
    
    // session
    session_start();
    if( isset($_SESSION['login']) ) {
        // $result = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username'");
        // if( mysqli_num_rows($result) === 1 ) {
        //     // cek password
        //     $row = mysqli_fetch_assoc($result);

        //     if( $row['username'] === 'admin' ) {
        //         $_SESSION['login'] = true;
        //         header('Location: admin/indexAdmin.php');
        //         exit;
        //     } else {
        //         $_SESSION['login'] = true;
        //         header('Location: user/index.php');
        //         exit;
        //     }
        // }
        // header('Location: admin/indexAdmin.php');
        // header('Location: user/index.php');
        header('Location: logout.php');
    }
    // session
    // belum bisa me redirect jika sudah login ke halaman user atau admin, -> jadi dibuat jika tab ditutup harus login lagi. => problemnya tidak bisa mengenali session tersebut admin atau user, -> jadi belum bisa menggunakan fitur ini.
    // akan tetapi session tetap aktif -> jadi jika memaksa masuk lewat url maka tidak bisa, harus login terlebih dahulu.



    include_once('../conn.php');

    if( isset($_POST['login']) ) {
        $username = $_POST['username_user'];
        $password = $_POST['password_user'];

        $result = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username_user='$username'");

        // cek username
        if( mysqli_num_rows($result) === 1 ) {
            // cek password
            $row = mysqli_fetch_assoc($result);

            if( $password === $row['password_user'])  {
                if( $row['username_user'] == 'admin' ) {
                    $_SESSION['login'] = true;
                    // $_SESSION['login'] = $row['nama'];
                    header('Location: ../admin');
                    exit;
                } 
                else {
                    // $_SESSION['login'] = true;
                    //$_SESSION['login'] = $row['nama'];
                    header('Location: index.php');
                    exit;
                }
                

            } else {
                echo "<script>alert('username atau password yang Anda masukkan salah!')</script>";
            }

            // $namas = $row['username'];
            // function nama($nama) {
            //     return $nama;
            // }

            // $namaUser = nama($namas);
            


            // if( password_verify($password, $row['password']) ) {

            //     // cek session
            //     $_SESSION['login'] = true;

            //     header("Location: index.php");
            //     exit;
            // } else {
            //     echo "<script>alert('username atau password yang Anda masukkan salah!')</script>";
            // }
        }
    }
    // echo $namaUser;


    $pass = password_hash('admin1234', PASSWORD_DEFAULT);
    $passss = password_hash('rikiwidiantoro', PASSWORD_DEFAULT);

?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <!-- <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Masuk</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
        <style>
            h5 {
                font-size: 30px;
                margin-top: 40px;
                margin-bottom: 0px;
                font-weight: 600;
            }
            .registrasi {
                margin: -20px 0px 16px;
            }
            .registrasi a {
                font-weight: 500;
            }
            footer {
                margin-top: -8px;
                padding: 10px 100px;
            }
            .footer-copyright {
                margin-top: -10px;
                padding: 10px 85px;
                text-align: center;
            }
            footer a:hover, .isi a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body class="grey lighten-5">

        <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="grey lighten-4">
                <div class="nav-wrapper container">
                   
                </div>
            </nav>
        </div>
        <!-- navbar -->


        <div class="container isi">
            <div class="row">
                <div class="col s8 offset-s2">
                    <h5 class="center">Login</h5>
                </div>
            </div>
            <div class="row">
                <div class="col s8 offset-s2">
                    <form action="" method="post">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">person</i>
                                <input id="username" type="text" name="username_user">
                                <label for="username">Username</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" type="password" name="password_user">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row center">
                            <div class="col s12">
                                <button class="btn grey darken-2 waves-effect waves-light" type="submit" name="login">login
                                    <i class="material-icons right">send</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row registrasi">
                <div class="col m12 s12 center">
                    <p>ingin kembali <a href="../index.php" class="teal-text text-lighten-1">Dashboard</a></p>
                </div>
            </div>
        </div>

        <!-- footer -->
        <hr>
      

        <!--JavaScript at end of body for optimized loading-->
        <!-- <script type="text/javascript" src="js/materialize.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>
