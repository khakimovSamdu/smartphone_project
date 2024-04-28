<?php
    include_once "../regition/config.php";

    $name = $_POST['name'];
    $company = $_POST['company'];
    $color = $_POST['color'];
    $ram = $_POST['RAM'];
    $memory = $_POST['memory'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    $query = "UPDATE product SET name='$name', company='$company', RAM='$ram', memory='$memory', price='$price', color='$color' WHERE id='$id'";
    $sql = mysqli_query($link, $query);
    $fetch = mysqli_fetch_assoc($sql);
    $ret = []
    if($sql){
        $ret += ['xatolik'=>0, 'xabar'=>'Muvaffaqiyatli o\'zgartirildi'];
    }
    else{
        $et += ['xatolik'=>1, 'xabar'=>'Xatolik. O\'zgartirish amalga oshmadi'];
    }

    echo json_encode($ret);

?>