<?php
// tjekker om der er klikket på login
if (isset($_POST["login"])){
   
    $un = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $pwd = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    
    if(empty($un)){
        $error = '<p style="color:red;">Udfyld en korrekt email</p>';
    }
    else if(empty($pwd)){
        $error2 = '<p style="color:red;">Skriv et password</p>';
    }else{
    
    
    require_once 'dbcon.php';
    $sql = "SELECT user_email, user_pass FROM simplar_kids_users WHERE user_email=?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param('s',$un);
    $stmt->execute();

    $stmt->bind_result($id, $un, $pwdHash);
    //hvis logget ind kommer man til hemmelig side
    if($stmt->fetch()){		
        $pwd = $pwd;
        $pwdHash = $pwdHash;
        if(password_verify($pwd,$pwdHash)){
            session_start();
            $_SESSION['id'] = $id;
            ?> <script> window.location.replace('index.php') </script> <?php
        }
        if(!password_verify($pwd,$pwdHash)){
            echo '<p style="color:red;">Wrong password, try again</p>';
        }
    }

    }
}
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

</head>

<body id="page-top">

    
   
    <div class="container">
        <div class="row">
            <div class="logo">
                <img src="img/sk.png">
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login på Simplar-Kids admin</h3>
                    </div>
                    <div class="panel-body">
                        <form name="login" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <input class="btn btn-lg btn-success btn-block" name="login" type="submit" value="Log ind">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>



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