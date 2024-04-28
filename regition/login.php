<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="login form">
            <header>Login</header>
            <form action="check.php" method="POST" id = 'logform'>
                <input type="text" name = 'login' placeholder="Enter your username" required>
                <input type="password" name='parol' placeholder="Enter your password" id = "pass" required>
                <button type="submit">Kirish</button>
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                    <a href="register.php">Signup</a>
                </span>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/sweetalert.min.js"></script>
    
    <script type="text/javascript">
        $('#logform').submit(function(e){
            e.preventDefault();
            let malumot = $('#logform').serialize();
            $.ajax({
                url:"islogin.php",
                method:"POST",
                data:malumot,
                success:function(data){
                    // console.log(data);
                    let obj = jQuery.parseJSON(data);
                    if (obj.xatolik==0){
                        swal("Good job!", obj.xabar, "success");
                    }else{
                        $('#pass').val('');
                        swal("Xatolik!", obj.xabar, "error");
                    }
                },
                error:function(){
                    swal("Xatolik yuz berdi!", "Serverda xatolik!");
                }
            });
        })
    </script>
</body>
</html>