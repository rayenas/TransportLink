<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/cdn.jsdelivr.net_npm_bootstrap@5.1.3_dist_css_bootstrap.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

*{
   scroll-padding-top: 2rem;
   scroll-behavior: smooth;
   box-sizing: border-box;
   list-style: none;
   text-decoration: none;
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

.banner{
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;

   
}
.banner2{
    width: 100%;
    height: 100vh;
    background-size: cover;
    background-position: center;
    
    
   
}

.navbar{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 30px;
    background-color: #fff;
    box-shadow: 0 1px 4px hsl(0 4% 15% / 10%);
    padding: 35px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
     z-index: 100;
    
}
.logo{
    width: 73px;
    cursor: pointer;
    position: relative;
    left: 90px;
    top: -32px;
}


.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 60px;
    position: relative;
    top: -20px;
}
.navbar ul li a{
    text-decoration: none;
    color: #000;
    text-transform: uppercase;
}
.navbar ul li a:hover{
    color: #f7770f;
}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: #f7770f;
    position: absolute;
    left: 0;
    bottom: -10px;
    transition: 0.2s;
    
}
.navbar ul li:hover::after{
    width: 100%;
    
} 


h1{
    position: relative;
    left: 36%;
    top: 15%;
}
a {
  text-decoration: none;
  color: #fff;
}
a:hover {
  color: #fff;
}
/*2222222222222222222222222*/

    

/*footer*/

.footer{
  background: #000;
  color: #8a8a8a;
  font-size: 14px;
  padding: 0px 0 0px;
}
.footer h3{
  color: #fff;
}
.footer p{
  color: #8a8a8a;
  margin-bottom: 20px;
}
.footer-col-1, .footer-col-2, .footer-col-3,.footer-col-4{
  min-width: 250px;
  margin-bottom: 20px;
  display: inline-block;
}
.footer-col-1{
  flex-basis: 30%;
}
.footer-col-2{
  flex: 1;
  text-align: center;
}
.footer-col-2 img{
  width: 180px;
  margin-bottom: 20px;
 
}
.footer-col-3,.footer-col-4{
  flex-basis: 12%;
  text-align: center;
}
footer ul{
  list-style-type: none;
}
.app-logo img{
  width: 280px;
}
.app-logo{
  margin-top: 20px;
}
.footer hr{
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
}
.copyright{
  text-align: center;
}

  </style>
</head>
<body>
  <div class="banner">
    
    <div class="navbar" >
      <a href="home.html"><img src="assets/image/logo-removebg-preview.png" class="logo" ></a>
      <ul>
        <li><a href="home.html">home</a></li>
        <li><a href="login.html">about</a></li>
        
      </ul>
      </div>
      
      <div class="container">
  <img src="C:\Users\rayen\OneDrive\Bureau\exe\assets\image\2.png" alt="">
        </div>
      
      </div>   

</div>


     
       

<!--22222222222222222222222222222-->




<div class="banner2">

<h1 style="font-family: RoxboroughCF;">How We Can
        help you</h1>
      
        
        <div class="container" style="
        position: relative;
        top: 154px;
        left: 12%;
    ">
          <div class="row">
            <div class="col">
              
          <div class="card" style="width: 18rem;">
            <img src="image\6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">"Unlock a world of possibilities – subscribe to our premium services today and experience excellence like never before!"</p>
              <a href="form2.php" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="image\9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">"Your voice matters! Join us in shaping the future by sharing your thoughts. We value your opinion."        <br> .</p>
                  <a href="form.php" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
</div>
</div>


<!------footer----->
<div class="footer">
<div class="container2">
  <div class="row">
    <div class="footer-col-1">
      <h3>Download Our App</h3>
      <p>Download App for Android and ios mobile phone.</p>
      <div class="app-logo">
        <img src="C:\Users\rayen\Downloads\app-store-png-logo-33115.png" alt="">
        
      </div>
    </div>
    <div class="footer-col-2">
      <img src="#" alt="">
      <p>Download App for Android and ios mobile phone.</p>
    </div>
    <div class="footer-col-3">
      <h3>Download Our App</h3>
      <ul>
        <li>Coupons</li>
        <li>blog Post</li>
        <li>Return Policy</li>
      </ul>
    </div>
    <div class="footer-col-4">
      <h3>Download Our App</h3>
      <ul>
        <li>facebook</li>
        <li>instgram</li>
        <li>twitter</li>
      </ul>
    </div>
    
  </div>
  <hr>
  <p class="copyright">Copyright 2020 - Easy Tutorials</p>
</div>
</div>
  <script src="assets/js/cdn.jsdelivr.net_npm_bootstrap@5.1.3_dist_js_bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>