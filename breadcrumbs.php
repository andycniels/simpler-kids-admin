<?php
$title = basename($_SERVER['PHP_SELF'],'.php');
$title = str_replace('-', ' ', $title);
$title = ucfirst($title)
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Simplar-Kids</a></li>
    <li class="breadcrumb-item active"><?= $title ?></li>
</ol>