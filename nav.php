<?php
$title = basename($_SERVER['PHP_SELF'],'.php');
$title = str_replace('-', ' ', $title);
$title = ucfirst($title);

?>
<nav id="mainNav" class="navbar static-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img width="94px" class="img-responsive" src="img/sk.png"></a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="sidebar-nav navbar-nav">
                <li class="nav-item
                <?php
                if ($title == "Index"){
                    echo 'active';
                }         
                ?>
                ">
                    <a class="nav-link" href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="nav-item
                <?php
                if ($title == "Kunder"){
                    echo 'active';
                }         
                ?>           
                ">
                    <a class="nav-link" href="kunder.php"><i class="fa fa-users" aria-hidden="true"></i> Kunder</a>
                </li>
                <li class="nav-item">
                    <span class="nav-link" ><i class="fa fa-recycle" aria-hidden="true"></i> Abonnement status</span>
                    <ul class="sidebar-second-level" >
                        <li class="
                        <?php
                        if ($title == "Size"){
                            echo 'active';
                        }         
                        ?>           
                        ">
                            <a href="size.php">Rediger størrelser</a>
                        </li>
                        <li class="
                        <?php
                        if ($title == "Price"){
                            echo 'active';
                        }         
                        ?>           
                        ">
                            <a href="price.php">Rediger priser</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link"><i class="fa fa-archive" aria-hidden="true"></i> Lager</a>
                    <ul class="sidebar-second-level">
                        <li class="
                        <?php
                        if ($title == "Lager status"){
                            echo 'active';
                        }         
                        ?>            
                        ">
                            <a href="lager-status.php">Lager status</a>
                        </li>
                        <li class="
                        <?php
                        if ($title == "Administrer lager"){
                            echo 'active';
                        }         
                        ?>           
                        ">
                            <a href="administrer-lager.php">Administrer lager</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://aceksamen.simplar.dk/" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> Besøg Simplar-Kids.dk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>