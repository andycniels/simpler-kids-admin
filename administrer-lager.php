<?php
include 'header.php';
if (isset($_POST["updateSK"])){
    
    $abo = filter_input(INPUT_POST, 'abonnement', FILTER_SANITIZE_STRING);
    
    $inout = filter_input(INPUT_POST, 'inout', FILTER_SANITIZE_STRING);
    
    $c = array();
    foreach($_POST['checkclothes'] as $clothes){
        $c[] = $clothes;    
    }
    
    $s = array();
    foreach($_POST['checksize'] as $sizes) 
            $s[] = $sizes; 
    
    $antal= filter_input(INPUT_POST, 'antal', FILTER_SANITIZE_STRING);
    
    $c = implode("','",$c);
    $s = implode("','",$s);
        
    if ($inout == out){
        //Fra lager til kunden
        require_once 'dbcon.php';
        $stmt = $link->prepare("SELECT id, number FROM simplar_kids_s_a_c 
                            WHERE clothes_id IN ('".$c."')
                            AND size_id IN ('".$s."')
                            AND abonnement_id = $abo
                            ");
        $stmt->execute();
        $stmt->bind_result($id, $nu);

            while($stmt->fetch()) {
                $uid[] = $id;
            }

        $uid = implode("','",$uid);
        $nuout = $nu - $antal;
        
        $sql = "UPDATE simplar_kids_s_a_c SET number=? WHERE id IN ('".$uid."')";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $nuout);
        $stmt->execute();
        
        $stmt = $link->prepare("SELECT id, number FROM simplar_kids_out 
                            WHERE clothes_id IN ('".$c."')
                            AND size_id IN ('".$s."')
                            AND abonnement_id = 1
                            ");
        $stmt->execute();
        $stmt->bind_result($oid, $onu);

            while($stmt->fetch()) {
                $outid[] = $oid;
            }

        $outid = implode("','",$outid);
        $nuin = $onu + $antal;
        
        $sql = "UPDATE simplar_kids_out SET number=? WHERE id IN ('".$outid."')";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $nuin);
        $stmt->execute();    
    }
    ?><script> window.location.replace('index.php') </script><?php
    if ($inout == in){
        //Fra kunde til lager
        require_once 'dbcon.php';
        $stmt = $link->prepare("SELECT id, number FROM simplar_kids_s_a_c 
                            WHERE clothes_id IN ('".$c."')
                            AND size_id IN ('".$s."')
                            AND abonnement_id = 1
                            ");
        $stmt->execute();
        $stmt->bind_result($id, $nu);

            while($stmt->fetch()) {
                $uid[] = $id;
            }

        $uid = implode("','",$uid);
        $nuout = $nu + $antal;
        
        $sql = "UPDATE simplar_kids_s_a_c SET number=? WHERE id IN ('".$uid."')";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $nuout);
        $stmt->execute();
        
        $stmt = $link->prepare("SELECT id, number FROM simplar_kids_out 
                            WHERE clothes_id IN ('".$c."')
                            AND size_id IN ('".$s."')
                            AND abonnement_id = $abo
                            ");
        $stmt->execute();
        $stmt->bind_result($oid, $onu);

            while($stmt->fetch()) {
                $outid[] = $oid;
            }

        $outid = implode("','",$outid);
        $nuin = $onu - $antal;
        
        $sql = "UPDATE simplar_kids_out SET number=? WHERE id IN ('".$outid."')";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $nuin);
        $stmt->execute(); 
        ?><script> window.location.replace('index.php') </script><?php
    }
    if ($inout == outin){
        //Fra fabrik til lager
        require_once 'dbcon.php';
        $stmt = $link->prepare("SELECT id, number FROM simplar_kids_s_a_c 
                            WHERE clothes_id IN ('".$c."')
                            AND size_id IN ('".$s."')
                            AND abonnement_id = 2
                            ");
        $stmt->execute();
        $stmt->bind_result($id, $nu);

            while($stmt->fetch()) {
                $uid[] = $id;
            }

        $uid = implode("','",$uid);
        $nuout = $nu + $antal;
        
        $sql = "UPDATE simplar_kids_s_a_c SET number=? WHERE id IN ('".$uid."')";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $nuout);
        $stmt->execute();
        ?><script> window.location.replace('index.php') </script><?php
    }
    if ($inout == csr){
        require_once 'dbcon.php';
        $stmt = $link->prepare("SELECT id, number FROM simplar_kids_s_a_c 
                            WHERE clothes_id IN ('".$c."')
                            AND size_id IN ('".$s."')
                            AND abonnement_id = $abo
                            ");
        $stmt->execute();
        $stmt->bind_result($id, $nu);

            while($stmt->fetch()) {
                $uid[] = $id;
            }
        $result = count($uid);
        $newresult = $result * $antal;
        $uid = implode("','",$uid);
        $nuout = $nu - $antal;
        
        $sql = "UPDATE simplar_kids_s_a_c SET number=? WHERE id IN ('".$uid."')";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $nuout);
        $stmt->execute();
        
        $stmt = $link->prepare("SELECT count_csr FROM simplar_kids_csr WHERE id = 1");
        $stmt->execute();
        $stmt->bind_result($csr);

            while($stmt->fetch()) {
            }
        $newcsr = $newresult + $csr;
        
        
        
        $sql = "UPDATE simplar_kids_csr SET count_csr=? WHERE id = 1";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $newcsr);
        $stmt->execute();
        ?><script> window.location.replace('index.php') </script><?php
    }
}
?>


<!-- Tilføj tøj -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tilføj tøj eller administrere tøj
                </div>
                <form class="form" method="POST">
                    <p>Vælg handling</p>
                    <select name="inout" class="form-control">
                        <option value="out">Fra lager til kunden</option>
                        <option value="in">Fra kunde til lager</option>
                        <option value="outin">Fra fabrik til lager</option>
                        <option value="csr">Til CSR</option>
                    </select
                    <p>Vælg abonnement</p>
                    <select name="abonnement" class="form-control">
                        <option value="">Abonnement:</option>
                        <?php
                            require_once 'dbcon.php';
                            $stmt = $link->prepare("SELECT id, product_name FROM simplar_kids_abonnement");
                            $stmt->execute();
                            $stmt->bind_result($id, $name);

                                while($stmt->fetch()) {
                                    ?>
                            <option value="<?= $id ?>"><?= $name ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    <br>
                    <p>Vælg tøjtype</p>
                    <div class="checkbox">
                    <label>
                        <?php
                            require_once 'dbcon.php';
                            $stmt = $link->prepare("SELECT id, name FROM Simplar_Kids_clothes");
                            $stmt->execute();
                            $stmt->bind_result($id, $name);

                                while($stmt->fetch()) {
                                    ?>
                            <input type="checkbox" name="checkclothes[]" value="<?= $id ?>"> <?= $name ?> <br>
                        <?php
                            }
                        ?>
                    </label>
                    </div>
                    <br>
                    <p>Vælg Størrelse</p>
                    <label>
                        <?php
                            require_once 'dbcon.php';
                            $stmt = $link->prepare("SELECT id, size, orderBy FROM Simplar_Kids_size ORDER BY orderBy");
                            $stmt->execute();
                            $stmt->bind_result($id, $size, $ob);

                                while($stmt->fetch()) {
                                    ?>
                            <input type="checkbox" name="checksize[]" value="<?= $id ?>"> <?= $size ?> <br>
                        <?php
                            }
                        ?>
                    </label>
                    <br>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Antal</label>
                        <input type="number" name="antal" class="form-control">
                    </div>
                    <input name="updateSK" type="submit" value="Tilføj">
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