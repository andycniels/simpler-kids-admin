<?php
include 'header.php';
?>
<!-- table 1 -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Hos kunder
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                         <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Abonnement</th>
                                    <th>Navn</th>
                                    <th>Størrelse</th>
                                    <th>Antal</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Abonnement</th>
                                    <th>Navn</th>
                                    <th>Størrelse</th>
                                    <th>Antal</th>
                                </tr>
                            </tfoot>
                             <tbody>
                         <?php
            require_once 'dbcon.php';
            $stmt = $link->prepare("
                SELECT a.id,
                       a.product_name,
                                           
                       c.id, 
                       c.name,
                                   
                       s.id,  
                       s.size,
                       s.orderBy,
                                           
                       sac.abonnement_id,
                       sac.size_id,
                       sac.clothes_id,
                       sac.number
                                           
                FROM simplar_kids_abonnement a, Simplar_Kids_clothes c, simplar_kids_size s, simplar_kids_out sac
                                    
                WHERE a.id = sac.abonnement_id
                AND c.id = sac.clothes_id         
                AND s.id = sac.size_id
                ORDER BY s.orderBy
                
                                ");
                $stmt->execute();
                $stmt->bind_result($a_id, $a_pn,
                                   $c_id, $c_n,
                                   $s_id, $s_s, $s_ob,
                                   $sac_aid, $sac_sid, $sac_cid, $sac_nu
                                  );                
                    while($stmt->fetch()) {
                    ?>      
                    <tr>
                        <td><?= $a_pn ?></td>
                        <td><?= $c_n ?></td>
                        <td><?= $s_s ?></td>
                        <td><?= $sac_nu ?></td>
                    </tr>        
                    <?php
                    }?>            
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