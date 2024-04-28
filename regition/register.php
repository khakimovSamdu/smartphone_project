<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!---Custom CSS File--->
    <link rel="stylesheet" href="styles.css">
    <style type="text/css">
        .qizil{
            border: 1px solid red;
        }
    </style>
</head>
<body>
  <div class="container">
    <div class="registration form">
      <header>Signup</header>
      <form action="adduser.php" method="POST" id = 'regform'>
        <input type="text" name="ism" placeholder="Enter your firstname" required>
        <input type="text" name="fam" placeholder="Enter your lastname" required>
        <input type="text" name="login" placeholder="Enter your username" id = "lgn" required>
        <p id="helpblock" style="color:red; font-size: 14px; display: none; padding:none; margin-buttom:none;"></p>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="parol" placeholder="Create a password" id = 'pas1' required>
        <input type="password" name="configparol" placeholder="Confirm your password" id = 'pas2' required>
        <p id='mesg' style="font-size:14px; color:red;"></p>
        <button type="submit">Ro'yxatdan o'tish</button>
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
          <a href="login.php">Login</a>
        </span>
      </div>
    </div>
  </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    
    <script type="text/javascript">
      $("#lgn").on("keyup", function(){
          let  l = $(this).val();
          $.ajax({
              url:"login-tek.php",
              method:"POST",
              data:{
                  login:l,
              },
              success:function(data){
                  let obj = jQuery.parseJSON(data);
                  if (obj.xatolik!=0){
                      $('#helpblock').css('display', 'block');
                      $("#helpblock").html(obj.xabar);
                  }else{
                      $("#helpblock").css('display', 'none');
                  }
              },
              error:function(xhr){
                  alert("Siz server bilan bog'lana olmadingiz");
              }
          })
      });

      $('#regform').submit(function(e){
        e.preventDefault();

        let p1 = $('#pas1').val();
        let p2 = $('#pas2').val();
        // console.log(p1);
        
        if (p1 != p2){
            $('#mesg').html('Parollar mos emas');
            $('#pas1').addClass('qizil');
            $('#pas2').addClass('qizil');
            return 0;
        }
        $.ajax({
            url:'adduser.php',
            method:'POST',
            data:$('#regform').serialize(),
            success:function(data){
                // console.log(data);
                let obj = jQuery.parseJSON(data);
                if (obj.xatolik == 0){
                    swal("Good job!", obj.xabar, "success");
      
                }
                else{
                    swal("Xatolik!", obj.xabar, "error");
                }
            },
            error:function(){
                alert('Xatolik yuz berdi');
            }
        });

      })
    </script>
</body>
</html>