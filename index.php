<?php
include 'header.php';

require_once 'dbcon.php';
$stmt = $link->prepare("
    SELECT a.id,
           a.price,
           a.product_name,
           
           u.fk_a_id,
           u.active
                                           
           FROM simplar_kids_abonnement a, simplar_kids_users u
                                    
           WHERE a.id = u.fk_a_id
           AND active = 0         
           AND u.fk_a_id = 2
");
    $stmt->execute();
    $stmt->bind_result($aid, $ap, $apn, $uaid, $ua);                
        while($stmt->fetch()) {}
    $newprice = $ap * $new;

    $stmt = $link->prepare("
    SELECT a.id,
           a.price,
           a.product_name,
           
           u.fk_a_id,
           u.active
                                           
           FROM simplar_kids_abonnement a, simplar_kids_users u
                                    
           WHERE a.id = u.fk_a_id
           AND active = 0         
           AND u.fk_a_id = 1
");
    $stmt->execute();
    $stmt->bind_result($aid, $ap, $apo, $uaid, $ua);                
        while($stmt->fetch()) {}
    $milprice = $ap * $old;
    $total = $newprice + $milprice;
?> 
                    <!-- Example Bar Chart Card -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-bar-chart"></i> Oversigt over abonnementer:
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-8">
                                    <canvas id="myBarChart" width="100" height="50"></canvas>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <hr class="hidden-sm-up">
                                    <div class="h4 mb-0 text-1">DKK: <?= number_format($newprice) ?></div>
                                    <div class="small text-muted"><?= $apn ?></div>
                                    <hr>
                                    <div class="h4 mb-0 text-2">DKK: <?= number_format($milprice) ?></div>
                                    <div class="small text-muted"><?= $apo ?></div>
                                    <hr>
                                    <div class="h4 mb-0 text-3">DKK: <?= number_format($total) ?></div>
                                    <div class="small text-muted">I alt: </div>
                                    <hr>
                                    <div class="h4 mb-0">CSR <?= number_format($csr) ?></div>
                                    <hr>
                                </div>
                            </div>
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