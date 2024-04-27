<?php
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
        echo "Ma'lumot yozildi";
    }else{
        $ret += ["xatolik"=>1, 'xabar'=>'Yozilmadi'];
        echo "Yozilmadi";
    }
    echo $sql.'<br>';
    mysqli_close($link);
    $arr = [$firstname, $lastname, $username, $email, $pasword];
    echo "<br>". json_encode($arr)."<br>";
    echo json_encode($ret);
?>