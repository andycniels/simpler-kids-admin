<?php
include 'header.php';
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
                                    <th>Kunde status</th>
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
                                    <th>Kunde status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php
                            require_once 'dbcon.php';
                            $stmt = $link->prepare("
                                SELECT a.id,
                                       a.product_name,

                                       s.id,  
                                       s.size,
                                       s.orderBy,
                                       
                                       u.ID,
                                       u.user_nicename,
                                       u.user_email,
                                       u.user_registered,
                                       u.active

                                FROM simplar_kids_abonnement a, simplar_kids_size s, simplar_kids_users u

                                WHERE a.id = fk_a_id        
                                AND s.id = fk_size_id
                                AND u.active < 3
                                ORDER BY u.ID

                                ");
                $stmt->execute();
                $stmt->bind_result($a_id, $a_pn,
                                   $s_id, $s_s, $s_ob,
                                   $u_id, $unn, $ue, $ur, $ua
                                  );                
                    while($stmt->fetch()) {
                    ?>      
                    <tr>
                        <td><?= $u_id ?></td>
                        <td><?= $unn ?></td>
                        <td><?= $ue ?></td>
                        <td><?= $a_pn ?></td>
                        <td><?= $s_s ?></td>
                        <td><?= $ur ?></td>
                        <td>
                            <?php 
                            if ($ua == 0){echo '<p style="color:green;">Aktiv</p>';} 
                            if ($ua == 1){echo '<p style="color:red;">Inaktiv</p>';} 
                            ?>
                        </td>
                        <td class="text-center">
                        <a href="rediger-kunder.php?id=<?=$u_id?>&name=<?=$unn?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>        
                    <?php
                    }
                    ?>
                            </tbody>
                        </table>
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