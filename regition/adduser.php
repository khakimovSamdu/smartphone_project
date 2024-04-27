~<?php
    include_once 'config.php';

    $firstname = $_POST['ism'];
    $lastname = $_POST['fam'];
    $username = $_POST['login'];
    $email = $_POST['email'];
    $pasword = md5($_POST['parol']);
    $ret = [];
    $sql = mysqli_query($link, "INSERT INTO cilent (first_name, last_name, username, email, password) VALUES ('$firstname', '$lastname', '$username', '$email', '$pasword');");
    if($sql){
        $ret+= ['xatolik'=>0, 'xabar'=>"Muvaffaqiyatli yozildi"];
        echo "Sizning ma'lumotingiz bazaga qo'shildi";
    }else{
        $ret += ["xatolik"=>1, 'xabar'=>'Yozilmadi'];
        echo "Sizning ma'lumotingiz bazaga qo'shilmadi";
    }
    mysqli_close($link);
    echo json_encode($ret);
?>