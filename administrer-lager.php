<?php
include 'header.php';
if (isset($_POST["updateSK"])){
    
    $abo = filter_input(INPUT_POST, 'abonnement', FILTER_SANITIZE_STRING);
    echo $abo;
    
    foreach($_POST['checkclothes'] as $clothes) 
            echo $clothes;
    
    foreach($_POST['checksize'] as $sizes) 
            echo $sizes; 
    
    $antal= filter_input(INPUT_POST, 'antal', FILTER_SANITIZE_STRING);
    echo $antal;
    
    
    
    require_once 'dbcon.php';
    $stmt = $link->prepare("SELECT 
                            id
                            FROM simplar_kids_s_a_c 
                            WHERE clothes_id IN ($clothes)
                            AND size_id IN ($sizes)
                            AND abonnement_id = $abo
                          
                            ");
    $stmt->execute();
    $stmt->bind_result($id);

        while($stmt->fetch()) {
            echo '<h1>';
            echo $id;
            echo '</h1>';
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
                    <select name="abonnement" class="form-control">
                        <option value="">Fra lager til kunden</option>
                        <option value="">Udefra og til lager</option>
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
                    </select
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
            
<!-- Afskriv tøj -->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Afskriv tøj til CSR
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