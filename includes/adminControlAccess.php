<?php 

    if($_SESSION['role'] != 'admin'){
        echo '<script> window.location="dashboard"; </script>';
    }
?>