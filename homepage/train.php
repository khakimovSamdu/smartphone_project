<?php
    include_once '../regition/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Data</title>
    <link rel="stylesheet" href="../regition/styles.css">
    <style>
        .formoc{
            display: none;
        }
    </style>
</head>
<body>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">Yangi qo'shish</button>

  <div class="container">
    <div class="registration form">
      <header>Product Update</header>
      <form  method="POST" id = 'editform' class='formoc'>
            <input type="text" name="name" placeholder="Smartphone name" value = "up_name" required>
            <input type="text" name="company" placeholder="Smartphone company" value="up_company"  required>
            <input type="text" name="color" placeholder="Smartphone color" value="up_color" required>
            <input type="text" name="ram" placeholder="Smartphone RAM" value="up_ram" required>
            <input type="text" name="memory" placeholder="Smartphone memory" value="up_memory" required>
            <input type="text" name="price" placeholder="Smartphone price" value="up_price" required>
            <button type="submit">Save</button>
      </form>
    </div>
  </div>
  <div id="maydon">

  </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    
    <script type="text/javascript">
        function yangila(){
            $.get('home.php', function(data, status){
                $('#maydon').html(data);
            });
        }
        yangila();

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