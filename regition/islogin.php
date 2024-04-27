<?php
    include_once 'config.php';
    $login = $_POST['login'];
    $parol = md5($_POST['parol']);
    
    $sql = mysqli_query($link, "SELECT * FROM cilent WHERE username='$login' AND password='$parol'");
    $user = mysqli_fetch_assoc($sql);
    $db = new CILENT();
    $user = $db->getdata('cilent', ['username'=>$login, 'password'=>$parol]);
    $ret = [];

    if ($user['id']>0){
        $ret += ['xatolik'=>0, 'xabar'=>"Siz tizimga kirdingiz"];
    }else{
        // echo "Login yoki parol xato!";
        $ret += ['xatolik'=>1, 'xabar'=>"Login yoki parol xato!"];

    }

    echo json_encode($ret);
?>