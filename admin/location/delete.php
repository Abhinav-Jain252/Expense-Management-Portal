<?php
   
    include("../../conn.php");

    $ids = $_GET['id'];

    $delete = " DELETE FROM `location` WHERE location='$ids' ";

    $result = mysqli_query($conn2,$delete);

    echo '<script>window.location="index.php"</script>';
?>