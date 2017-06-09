<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>SK - admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <!-- Custom styles for Simplar-Kids admin -->
    <link href="css/simplar.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Navigation -->
    <?php
    include 'nav.php';
    ?>

    <div class="content-wrapper py-3">

        <div class="container-fluid">

            <!-- Breadcrumbs -->
            <?php
            include 'breadcrumbs.php';
            ?>



<!-- Tilføj tøj -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tilføj tøj
                </div>
                <form class="form">
                    <p>Vælg abonnement</p>
                    <select class="form-control">
                        <option>Det nye</option>
                        <option>Det miljøvenlige</option>
                    </select>
                    <br>
                    <p>Vælg tøjtype</p>
                    <select class="form-control">
                        <option>Body - lang</option>
                        <option>Det - kort</option>
                        <option>Heldragt</option>
                    </select>
                    <br>
                    <p>Vælg Størrelse</p>
                    <select class="form-control">
                        <option>Pærmature</option>
                        <option>Newborn</option>
                        <option>56</option>
                        <option>OSV</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Antal</label>
                        <input type="number" class="form-control">
                    </div>
                    <input type="submit" value="Tilføj">
                </form>
            </div>
            
<!-- Afskriv tøj -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Afskriv tøj
                </div>
                <form class="form">
                    <p>Vælg abonnement</p>
                    <select class="form-control">
                        <option>Det nye</option>
                        <option>Det miljøvenlige</option>
                    </select>
                    <br>
                    <p>Vælg tøjtype</p>
                    <select class="form-control">
                        <option>Body - lang</option>
                        <option>Det - kort</option>
                        <option>Heldragt</option>
                    </select>
                    <br>
                    <p>Vælg Størrelse</p>
                    <select class="form-control">
                        <option>Pærmature</option>
                        <option>Newborn</option>
                        <option>56</option>
                        <option>OSV</option>
                    </select>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Antal</label>
                        <input type="number" class="form-control">
                    </div>
                    <input type="submit" value="Tilføj">
                </form>
            </div>
            
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.js"></script>

</body>

</html>