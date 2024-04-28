<?php
    include_once '../regition/config.php';
    $id = $_GET['id'];
    $query = "SELECT * FROM product WHERE id='$id'";
    $sql = mysqli_query($link, $query);
    $fetch = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product update</title>
    <link rel="stylesheet" href="../regition/styles.css">
</head>
<body>
  <div class="container">
    <div class="registration form">
      <header>Product Update</header>
      <form  method="POST" id = 'editform'>
            <input type="text" name="name" placeholder="Smartphone name" value = "<?= $fetch['name']?>" required>
            <input type="text" name="company" placeholder="Smartphone company" value="<?=$fetch['company']?>"  required>
            <input type="text" name="color" placeholder="Smartphone color" value="<?=$fetch['color']?>" required>
            <input type="text" name="ram" placeholder="Smartphone RAM" value="<?=$fetch['RAM']?>" required>
            <input type="text" name="memory" placeholder="Smartphone memory" value="<?=$fetch['memory']?>" required>
            <input type="text" name="price" placeholder="Smartphone price" value="<?=$fetch['price']?>" required>
            <button type="submit">Save</button>
      </form>
    </div>
  </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    
    <script type="text/javascript">
        $('#editform').submit(function(e){
            e.preventDefault();
            $.ajax({
                url:"update.php",
                method:"POST",
                data:$(this).serialize(),
                success:function(data){
                    console.log(data);
                    let obj = jQuery.parseJSON(data);
                    if(obj.xatolik==0){
                        swal("Good update!", obj.xabar, "success");
                    }
                    else{
                        swal("Update error!", obj.xabar, "error");
                    }
                },
                error:function(){
                    alert("Serverda xatolik yuz berdi!");
                }
            })
        })
    </script>
</body>
</html>