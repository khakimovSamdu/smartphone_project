<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regition</title>
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
      <form action="reg.php" method="POST" id = 'regform'>
        <input type="text" name="ism" placeholder="Enter your firstname" required>
        <input type="text" name="fam" placeholder="Enter your lastname" required>
        <input type="text" name="login" placeholder="Enter your username" required>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="parol" placeholder="Create a password" id = 'pas1' required>
        <input type="password" name="configparol" placeholder="Confirm your password" id = 'pas2' required>
        <p id='mesg'></p>
        <button type="submit">Ro'yxatdan o'tish</button>
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <a href="login.php">Login</a>
        </span>
      </div>
    </div>
  </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/sweetalert.min.js"></script>
    
    <script type="text/javascript">
      $('#regform').submit(function(e){
        e.preventDefault();

        let p1 = $('#pas1').val();
        let p2 = $('#pas2').val();
        
        if (p1 != p2){
            $('#mesg').html('Parollar mos emas');
            $('#pas1').addClass('qizil');
            $('#pas2').addClass('qizil');
            return 0;
        }
        $.ajax({
            url:'reg.php',
            method:'POST',
            data:$('#regform').serialize(),
            success:function(data){
                console.log(data);
                let obj = jquery.parseJSON(data);
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