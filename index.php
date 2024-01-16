<?php
include('include/header.php');
if(!empty($_GET['page'])) {
    if(file_exists("page/".$_GET['page'].".php")) {
        include("page/".$_GET['page'].".php");
    } else {
        include("page/errors_404.php");
    }
} else {
    include('page/beranda.php');
}
include('include/footer.php');
?>