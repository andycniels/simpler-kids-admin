<?php
include 'header.php';
?>
<!-- table 1 -->


 <?php
            require_once 'dbcon.php';
            $stmt = $link->prepare("SELECT a.id,
                                           a.product_name,
                                           
                                           c.id, 
                                           c.name, 
                                           c.number,
                                           
                                           s.id,  
                                           s.size,
                                           s.orderBy,
                                           
                                           sac.abonnement_id,
                                           sac.size_id,
                                           sac.clothes_id,
                                           sac.number,
                                           sac.in_out,
                                           sac.csr
                                           
                                    FROM simplar_kids_abonnement a, Simplar_Kids_clothes c, simplar_kids_size s, simplar_kids_s_a_c sac
                                    
                                               
                                    WHERE a.id = sac.abonnement_id
                                    AND c.id = sac.clothes_id         
                                    AND s.id = sac.size_id
                                    
                                    
                                    
                                    ORDER BY c.name
                                    ");
                $stmt->execute();
                $stmt->bind_result($a_id, $a_pn,
                                   $c_id, $c_n, $c_nu,
                                   $s_id, $s_s, $s_ob,
                                   $sac_aid, $sac_sid, $sac_cid, $sac_nu, $sac_io, $sac_csr
                                  );
                
                    while($stmt->fetch()) {
                        if ($s_id == 0){
                            echo 'HEJ';
                        }
                    ?>
                    <table>
                        <thead>
                            <tr>
                                <th>Navn</th>
                                <th>Størelse</th>
                                <th>Antal</th>
                                <th>Abonnement</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $c_n ?></td>
                                <td><?= $s_s ?></td>
                                <td><?= $sac_nu ?></td>
                                <td><?= $a_pn ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                    }
                        
                    
                    ?>

            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> 
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th><?= $c_n ?></th>
                                    <?php
                                    require_once 'dbcon.php';
                                    $stmt = $link->prepare("SELECT size FROM simplar_kids_size");
                                    $stmt->execute();
                                    $stmt->bind_result($size);
                
                                    while($stmt->fetch()) {
                                        echo '<th>'. $size .'</th>';
                                    }
                                    ?>
                                    <th>I alt</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    require_once 'dbcon.php';
                                    $stmt = $link->prepare("SELECT a.id,
                                                                   a.product_name,

                                                                   sac.abonnement_id,
                                                                   sac.number
                                                               
                                    FROM simplar_kids_abonnement a, simplar_kids_s_a_c sac
                                    
                                   
                                    
                                    WHERE a.id = sac.abonnement_id
                                    GROUP BY a.product_name
                                    
                                    ");
                                    $stmt->execute();
                                    $stmt->bind_result($a_id, $a_pn,
                                                       $sac_aid, $sac_nu
                                                    );
                
                                    while($stmt->fetch()) {
                                        echo '<tr>';
                                        echo '<td>'. $a_pn .'</td>';
                                        echo '<td>'. $sac_nu .'</td>';
                                        echo '</tr>';
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