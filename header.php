<?php
require_once 'dbcon.php';
$stmt = $link->prepare("SELECT COUNT(fk_a_id) FROM simplar_kids_users WHERE fk_a_id = 2 AND active = 0");
$stmt->execute();
$stmt->bind_result($new);                
    while($stmt->fetch()) {}

$stmt = $link->prepare("SELECT COUNT(fk_a_id) FROM simplar_kids_users WHERE fk_a_id = 1 AND active = 0");
$stmt->execute();
$stmt->bind_result($old);                
    while($stmt->fetch()) {}

$stmt = $link->prepare("SELECT COUNT(active) FROM simplar_kids_users WHERE active = 1");
$stmt->execute();
$stmt->bind_result($active);                
    while($stmt->fetch()) {}

$stmt = $link->prepare("SELECT count_csr FROM simplar_kids_csr WHERE id = 1");
$stmt->execute();
$stmt->bind_result($csr);                
    while($stmt->fetch()) {}
?>
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
    <script type="text/javascript">
        function confirm_alert(node) {
        return confirm("Er du sikker du at du vil slette?");
        }
    </script>
    <!-- Indhold til diagram -->
    <script>
        anew = '<?php echo $new ;?>';
        aold = '<?php echo $old ;?>';
        aactive = '<?php echo $active ;?>';
    </script>
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