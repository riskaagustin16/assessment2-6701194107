<?php 
    // session_start();
 //    if (!empty($_SESSION['login'])){
 //        header("location: dashboard.php");
 //        exit;
 //    }

    $conn = mysqli_connect("localhost", "root", "", "ass2pabw");
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Registrasi</title>


    <!-- Custom fonts for this template -->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->
    <link rel="stylesheet" type="text/css" href="">
    <style type="text/css">
        body{
            background-color: #e30505;
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-body">
                        <h3 class="text-center font-weight-light my-4">Registrasi</h3><hr>
                        <form method="post" action="fungsi.php?create_akun">
                            <div class="form-group">
                                <label class="small mb-1" for="nama">Nama Lengkap</label>
                                <div class="input-group">
                                    <input class="form-control py-4" id="nama" type="text" placeholder="Masukkan nama lengkap" name="nama_lengkap" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="jk">Jenis Kelamin</label>
                                <div class="input-group">
                                    <input class="form-control py-4" id="jk" type="text" placeholder="Masukkan jenis kelamin" name="jenis_kelamin" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="username">Username</label>
                                <div class="input-group">
                                    <input class="form-control py-4" id="username" type="text" placeholder="Masukkan username" name="username" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="small mb-1" for="pw">Password</label>
                                <div class="input-group">
                                    <input class="form-control py-4" id="pw" type="password" placeholder="Masukkan password" name="password" />
                                </div>
                            </div>
                            
                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="login.php">Batal</a>
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/datatables-demo.js"></script>

</body>

</html>