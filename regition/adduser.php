<?php
    include_once 'config.php';

    $firstname = $_POST['ism'];
    $lastname = $_POST['fam'];
    $username = $_POST['login'];
    $email = $_POST['email'];
    $pasword = md5($_POST['parol']);
    $reg = [];
    $sql = mysqli_query($link, "INSERT INTO cilent (first_name, last_name, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$pasword');");
    if($sql){
        $reg+= ['xatolik'=>0, 'xabar'=>"Muvaffaqiyatli yozildi"];
        // echo "Ma'lumot yozildi";
    }else{
        $reg += ["xatolik"=>1, 'xabar'=>'Yozilmadi'];
        // echo "Yozilmadi";
    }
    mysqli_close($link);

    echo json_encode($reg);
?>