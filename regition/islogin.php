<?php
    include_once 'config.php';
    $login = $_POST['login'];
    $parol = md5($_POST['parol']);
    
    $sql = mysqli_query($link, "SELECT * FROM cilent WHERE username='$login' AND password='$parol'");
    $user = mysqli_fetch_assoc($sql);
    if ($user['id']>0){
        echo "Login va parol to'g'ri";
    }else{
        echo "Login yoki parol xato!";
    }
?>