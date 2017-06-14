<?php
include 'header.php';
$delete = $_GET['delete'];
$edit= $_GET['edit'];
$idURL= $_GET['id'];
$name= $_GET['name'];
$one = 1;

if ($delete == yes){
    require_once 'dbcon.php';
    $sql = "UPDATE simplar_kids_size SET hide=? WHERE id = $idURL";
    $stmt = $link->prepare($sql);
    $stmt->bind_param('s', $one);
    $stmt->execute();
    ?><script> window.location.replace('size.php') </script><?php
}

if ($edit == yes){
    echo "<div class='card mb-3'>
                <div class='card-header'>
                    <i class='fa fa-table'></i> Rediger en størrelse
                </div>
                <form class='form' action='#' method='POST'>
                    <div class='form-group'>
                        <input type='text' name='editSize' value='$name' class='form-control'>
                    </div>
                    <input class='btn btn-default' name='edit' type='submit' value='Rediger størrelse'>
                </form>
                <div class='card-footer small text-muted'>
                    Simplar-Kids
                </div>
            </div>";
}

if (isset($_POST["edit"])){
    $editSize = filter_input(INPUT_POST, 'editSize');
    if(!empty($_POST["editSize"])){
        require_once 'dbcon.php';
        $sql = "UPDATE simplar_kids_size SET size=? WHERE id = $idURL";
        $stmt = $link->prepare($sql);
        $stmt->bind_param('s', $editSize);
        $stmt->execute();
        ?><script> window.location.replace('size.php') </script><?php
    }
}

if (isset($_POST["add"])){
    $newSize = filter_input(INPUT_POST, 'size');
    $d = 0;
    if(empty($_POST["size"])){
        $error = '<p style="color:red;">Must not be empty</p>';
    }
    if(!empty($_POST["size"])){
        require_once 'dbcon.php';
        $sql = "INSERT INTO simplar_kids_size (size, hide) VALUES (?,?)";
        $stmt = $link->prepare($sql);                 
        $stmt->bind_param('ss', $newSize, $d);
        $stmt->execute();
        ?><script> window.location.replace('size.php') </script><?php
    }
}
?>
            <!-- add size -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Tilføj en størrelse
                </div>
                <form class="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="form-group">
                        <?= $error ?>
                        <input type="text" name="size" class="form-control">
                    </div>
                    <input class="btn btn-default" name="add" type="submit" value="Tilføj størrelse">
                </form>
                <div class="card-footer small text-muted">
                    Simplar-Kids
                </div>
            </div>


<!-- Example Tables Card -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Rediger størrelse
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Størrelse</th>
                                    <th>Rediger</th>
                                    <th>Slet</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Størrelse</th>
                                    <th>Rediger</th>
                                    <th>Slet</th>
                                </tr>
                            </tfoot>
                            <tbody>
            <?php
            require_once 'dbcon.php';
            $stmt = $link->prepare("SELECT id, size, orderBy, hide FROM simplar_kids_size WHERE hide = 0");
                $stmt->execute();
                $stmt->bind_result($id, $size, $ob, $h);                
                    while($stmt->fetch()) {
                    ?>      
                    <tr>
                        <td><?= $size ?></td>
                        <td class="text-center"><a href ="size.php?id=<?=$id?>&name=<?=$size?>&edit=yes"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                        <td class="text-center"><a href ="size.php?id=<?=$id?>&delete=yes" onclick="return confirm_alert(this);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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