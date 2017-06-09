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



<!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Kunder
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Navn</th>
                                    <th>Email</th>
                                    <th>Abonnements type</th>
                                    <th>Størrelse</th>
                                    <th>Dato for oprettelse</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Navn</th>
                                    <th>Email</th>
                                    <th>Abonnements type</th>
                                    <th>Størrelse</th>
                                    <th>Dato for oprettelse</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td class="text-center"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">
                    Updated yesterday at 11:59 PM
                </div>
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