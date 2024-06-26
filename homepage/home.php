<?php include_once '../regition/config.php';?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smartphone shops</title>
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <header>
      <nav class="navbar">
        <div class="nav-logo">
          <a href="#"><img src="/images/logo.png" alt="logo"></a>
        </div>
        <div class="address">
          <a href="#" class="deliver">Yetkazib berish</a>
          <div class="map-icon">
            <span class="material-symbols-outlined">location_on</span>
            <a href="#" class="location">Location</a>
          </div>
        </div>

        <div class="nav-search">
          <select class="select-search">
            <option>All</option>
            <option>All Categories</option>
            <option>Amazon Devices</option>
          </select>
          <input type="text" placeholder="Search Amazon" class="search-input">
          <div class="search-icon">
            <span class="material-symbols-outlined">search</span>
          </div>
        </div>

        <div class="sign-in">
         <a href="#"> <p>Hello, sign in</p>
          <span>Account &amp; Lists</span></a>
        </div>

        <div class="returns">
          <a href="#"><p>Returns</p>
            <span>&amp; Orders</span></a>
        </div>

        <div class="cart">
          <a href="#">
            <span class="material-symbols-outlined cart-icon">shopping_cart</span>
            </a>
            <p>Cart</p>
        </div>
      </nav>
      
      <div class="banner">
        <div class="banner-content">
          <div class="panel">
            <span class="material-symbols-outlined">menu</span>
            <a href="#">All</a>
          </div>
  
          <ul class="links">
            <li><a href="#">Today's Deals</a></li>
            <li><a href="#">Customer Service</a></li>
            <li><a href="#">Registry</a></li>
            <li><a href="#">Gift Cards</a></li>
            <li><a href="#">Sell</a></li>
          </ul>
          <div class="deals">
            <a href="#">Shop deals in Electronics</a>
          </div>
        </div>
      </div>
    </header>

    <section class="hero-section">
      <table class="table table-striped table-dark table-bordered table-hover" style="margin-top:20px;">
        <tr>
          <th>№</th>
          <th>Name</th>
          <th>Company</th>
          <th>Color</th>
          <th>RAM</th>
          <th>Memory</th>
          <th>Price</th>
          <th>Amal</th>
        </tr>
        <?php
          $query = "SELECT * FROM `product`;";
          $sql = mysqli_query($link, $query);
          $i = 0;
          while($fetch = mysqli_fetch_assoc($sql)){
        ?>
              <tr id='t<?= $fetch['id']?>'>
                  <td><?= ++$i?></td>
                  <td><?= $fetch['name']?></td>
                  <td><?=$fetch['company']?></td>
                  <td><?=$fetch['color']?></td>
                  <td><?=$fetch['RAM']?></td>
                  <td><?=$fetch['memory']?></td>
                  <td><?=$fetch['price']?></td>
                  <td ><button class = "btn btn-lg btn-primary" onclick="product_update(<?=$fetch['id']?>)"><a style="text-decoration: none;color:white" href="product-update.php?id=<?=$fetch['id']?>">Update</a></button> 
                  <button class = "btn btn-lg btn-danger delete" id = "<?=$fetch['id']?>" >Delete</button></td>
              </tr>
            <?
          }
            ?>
        
      </table>
    </section>

    <section class="shop-section">
      <div class="shop-images">
        
        
        
      </div>
    </section>

    <footer>
      <div class="footer-items">
        <ul>
          <h3>Get to Know Us</h3>
          <li><a href="#">About us</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Press Release</a></li>
          <li><a href="#">Amazon Science</a></li>
        </ul>
        <ul>
          <h3>Connect with Us</h3>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Instagram</a></li>
        </ul>
        <ul>
          <h3>Make Money with Us</h3>
          <li><a href="#">Sell on Amazon</a></li>
          <li><a href="#">Sell under Amazon Accelerator</a></li>
          <li><a href="#">Protect and Build Your Brand</a></li>
          <li><a href="#">Amazon Global Selling</a></li>
          <li><a href="#">Become an Affiliate</a></li>
          <li><a href="#">Fulfillment by Amazon</a></li>
          <li><a href="#">Advertise Your Products</a></li>
          <li><a href="#">Amazon Pay on Merchants</a></li>
        </ul>
        <ul>
          <h3>Let Us Help You</h3>
          <li><a href="#">COVID-19 and Amazon</a></li>
          <li><a href="#">Your Account</a></li>
          <li><a href="#">Return Centre</a></li>
          <li><a href="#">100% Purchase Protection</a></li>
          <li><a href="#">Amazon App Download</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
    </footer>
    <script type = "text/javascript">
        // function product_update(id){
        //     $.get("get-product-info.php?id="+id, function(data, status){
        //         $('#editform').toggleClass('formoc');
        //         var obj = jQuery.parseJSON(data);
        //         $('#up_name').val(obj.name);
        //         $("#up_company").val(obj.company);
        //         $('#up_color').val(obj.color);
        //         $('#up_ram').val(obj.RAM);
        //         $('#up_memory').val(obj.memory);
        //         $('#up_price').val(obj.price);
        //     });
        // }

          $('.delete').click(function(){
              let id = $(this).attr("id");
              swal({
                  title:"Ishonchingiz komilmi?",
                  text:"O'chirilgandan so'ng tiklab bo'lmaydi.",
                  icon:"warning",
                  buttons:{
                      cancel:"Yo'q!",
                      catch:{
                          text:"Ha roziman!",
                          value:"qabul",
                      },
                  },
              })
              .then((willDelete) => {
                  if(willDelete == "qabul"){
                      $.ajax({
                          url:'delete.php',
                          type:"GET",
                          data:{
                            id:id,
                          },
                          success:function(data){
                              var obj = jQuery.parseJSON(data);
                              if (obj.xatolik == 0){
                                  $('#t'+id).remove();
                                  swal("Bajarildi", obj.xabar, "success");
                          
                              }
                          },
                          error:function(xhr){
                              alert("Kechirasiz serverda xatolik yuz berdi qaytadan urinib ko'ring");
                          },
                      });
                  }else{
                      swal("Bekor qilindi!");
                  }
              });
          })
    </script>

</body>
</html>