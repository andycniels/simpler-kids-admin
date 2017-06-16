<?php
include 'header.php';
$id = $_GET['id'];
$name = $_GET['name'];
?>

<!-- Example Tables Card -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Rediger <?= $name?>
    </div>
    <div class="card-block">
    <?php
    require_once 'dbcon.php';
    $stmt = $link->prepare("
    SELECT 
        a.id,
        a.product_name,

        s.id,  
        s.size,

        u.ID,
        u.user_nicename,
        u.user_email,
        u.user_registered,
        u.active,
        u.address,
        u.zip,
        u.city,
        u.phone,
        u.company

        FROM simplar_kids_abonnement a, simplar_kids_size s, simplar_kids_users u
        WHERE u.ID = $id
        ");
    $stmt->execute();
    $stmt->bind_result($a_id, $a_pn,
                       $s_id, $s_s,
                       $u_id, $unn, $ue, $ur, $ua, $uad, $uz, $uc, $up, $company
                      );                
        while($stmt->fetch()) {}
        ?>
        
    <div class="container">
    <div class="row">  
        <div class="col-xs-12">
            <form action="" method="POST" name="product">
            <div class="form-group">
                <label for="exampleInputEmail1">Fulde navn *</label>
                <input style="<?= $input ?>" value="<?= $unn ?>" type="text" class="form-control" name="fullName" placeholder="<?= $error ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Evt. Firmanavn</label>
                <input type="text" class="form-control" value="<?= $company ?>" name="company">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Adresse *</label>
                <input style="<?= $input1 ?>" value="<?= $uad ?>" type="text" class="form-control" name="address" placeholder="<?= $error1 ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Postnummer *</label>
                <input style="<?= $input2 ?>" value="<?= $uz ?>" type="text" class="form-control" name="zip" placeholder="<?= $error2 ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">By *</label>
                <input style="<?= $input3 ?>" value="<?= $uc ?>" type="text" class="form-control" name="city" placeholder="<?= $error3 ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Telefon *</label>
                <input style="<?= $input4 ?>" value="<?= $up ?>" type="text" class="form-control" name="phone" placeholder="<?= $error4 ?>">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email *</label>
                <input style="<?= $input5 ?>" value="<?= $ue ?>" type="email" class="form-control" name="email" placeholder="<?= $error5 ?>">
            </div>
            <select name="abonnement" class="form-control">
            <option value="<?= $a_id ?>"><?= $a_pn ?></option>
            <?php
                require_once 'dbcon.php';
                $stmt = $link->prepare("SELECT id, product_name FROM simplar_kids_abonnement WHERE id != $a_id");
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
                
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="activeStatus" value="<?= $ua ?>" <?php if($ua == 1){
                            echo'checked';
                        } ?> >
                        Jeg ønsker at sætte mit abonnement på pause
                    </label>
                </div>
            <input name="editUser" type="submit" value="Gem">
            </form>
        </div>
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