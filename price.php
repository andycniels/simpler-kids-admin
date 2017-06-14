<?php
include 'header.php';
$edit= $_GET['edit'];
$id= $_GET['id'];
$name= $_GET['pn'];
$name = str_replace('-', ' ', $name);
$des= $_GET['pd'];
$des = str_replace('-', ' ', $des);
$price= $_GET['price'];
$imgurl= $_GET['url'];

if (isset($_POST["edit"])){
    $name = filter_input(INPUT_POST,'name');
    $des = filter_input(INPUT_POST, 'des');
    $price = filter_input(INPUT_POST, 'price');
    $imgurl = filter_input(INPUT_POST, 'url');
    
    require_once 'dbcon.php';
    $sql = "UPDATE simplar_kids_abonnement SET product_name=?, product_description=?, img_url=?, price=? WHERE id = $id";
    $stmt = $link->prepare($sql);
    $stmt->bind_param('ssss', $name, $des, $imgurl, $price);
    $stmt->execute();
    ?><script> window.location.replace('price.php') </script><?php   
}

if ($edit == yes){
    echo "
            <div class='card mb-3'>
                <div class='card-header'>
                    <i class='fa fa-table'></i> Rediger abonnement
                </div>
                <form class='form' action='#' method='POST'>
                    <div class='form-group'>Pris
                        <input type='text' name='price' value='$price' class='form-control'>
                    </div>
                    <div class='form-group'>Navn
                        <input type='text' name='name' value='$name' class='form-control'>
                    </div>
                    <div class='form-group'>Beskrivelse
                        <textarea class='form-control' name='des' rows='3'>$des</textarea>
                    </div>
                    <div class='form-group'>Billede URL
                        <input type='text' name='url' value='$imgurl' name='url' class='form-control'>
                    </div>
                    <input class='btn btn-default' name='edit' type='submit' value='Rediger abonnement'>
                </form>
                <div class='card-footer small text-muted'>
                    Simplar-Kids
                </div>
            </div> 
    ";
}
?>



<!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Rediger abonnement
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Pris</th>
                                    <th>Abonnement</th>
                                    <th>Rediger</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Pris</th>
                                    <th>Abonnement</th>
                                    <th>Rediger</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
            require_once 'dbcon.php';
            $stmt = $link->prepare("SELECT id, product_name, product_description, img_url, price FROM simplar_kids_abonnement");
                $stmt->execute();
                $stmt->bind_result($id, $pn, $pd, $iu, $p);                
                    while($stmt->fetch()) {
                    $pname = str_replace(' ', '-', $pn);
                    $pdes = str_replace(' ', '-', $pd);
                    ?>      
                    <tr>
                        <td><?= $p ?></td>
                        <td><?= $pn ?></td>
                        <td class="text-center"><a href ="price.php?id=<?=$id?>&price=<?=$p?>&pn=<?=$pname?>&pd=<?=$pdes?>&url=<?=$iu?>&edit=yes"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
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