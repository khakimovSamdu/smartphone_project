<?php include_once "../regition/config.php";?>
<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id='$id'";
    $sql = mysqli_query($link, $query);
    $fetch = mysqli_fetch_assoc($sql);
    echo $fetch;
?>