<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- MMK logo -->
    <link rel="shortcut icon" href="img/MMK-logo.jpg" type="image/x-icon">
    <!-- style -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MMK -Montalban Mahal Kita</title>
</head>
<body>
     <section class="main-homepage">
         <div class="header">
            <!-- NAv -->
             <div class="nav">
             <span><h5>Montalban</h5>Mahal Kita</span>
                <ul class="menu-container" id="menus">
                    <li><button id="myBtn" href="#">Contact</button></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><button id="myBtnRegister" href="#">Register</button></li>
                    <li><button id="myBtnLogin" href="#">Login</button></li>
                </ul>
                    <div class="burger-nav" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
             </div>
         </div>
         <!-- Body -->
         <div class="body">
            <div class="contact" id="contact">
             <!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span  class="close">&times;</span>
  <form action="" method="post">
    <h1>Contact Us</h1>
    <input type="text" placeholder="Username" required>
    <input type="text" placeholder="Phone" required>
    <input type="email" placeholder="Email" required>
    <input type="address" placeholder="Address" required>
    <textarea name="comment" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
    <input type="submit" id="submit" value="Submit">
    </form>
</div>

</div>
<!-- Slide-show -->
<div class="slide-show">
  <img class="mySlides w3-animate-fading" src="img/slide-1.jpg">
  <img class="mySlides w3-animate-fading" src="img/slide-2.jpg">
  <img class="mySlides w3-animate-fading" src="img/slide-3.jpg">
  <img class="mySlides w3-animate-fading" src="img/slide-4.jpg">
</div>
            </div>
   <!-- Gallery -->
            <div class="gallery" id="gallery">
                <div class="box-1">
                    <img src="img/gallery-1.jpg" alt="">
                </div>
                <div class="box-2">
                <img src="img/gallery-2.jpg" alt="">
                </div>
                <div class="box-3">
                <img src="img/gallery-3.jpg" alt="">
                </div>
                <div class="box-4">
                <img src="img/gallery-4.jpg" alt="">
                </div>
                <div class="box-5">
                <img src="img/gallery-5.jpg" alt="">
                </div>
                <div class="box-6">
                <img src="img/gallery-6.jpg" alt="">
                </div>
                <div class="box-7">
                <img src="img/gallery-7.jpg" alt="">
                </div>
                <div class="box-8">
                <img src="img/gallery-8.jpg" alt="">
                </div>
            </div>
            <!-- Services -->
            <div class="services" id="services">
                <span>SERVICES</span>
                <div class="serve">
                    <div class="ayuda"></div>
                    <div class="insurance"></div>
                    <div class="donate"></div>
                </div>
            </div>
        </div>
    
         <!-- Footer -->
   <div class="footer">
   <div class="top">
                <div class="link-1">
                    <ul>
                    <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Videos</a></li>
                    </ul>
                </div>
                <div class="link-2">
                <ul>
                <li><a href="">Home</a></li>
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Videos</a></li>
                    </ul>
                </div>
                <div class="link-3">
                <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="">Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <div class="icons">
                <i  class="fa">&#xf09a;</i>
                <i  class="fa">&#xf081;</i>
                <i  class="fa">&#xf16d;</i>
                <i  class="fa">&#xf0e0;</i>
                <i  class="fa">&#xf0d5;</i>
                </div>
                <div class="company-name">
                    <span>MMK is a community organization committed to pursuing community driven that empowers volunteerism.</span>
                </div>
                <div class="reserved">
                    <span>@ All rights Reserved, MMK</span>
                </div>
            </div>
   </div>
           <!-- Register -->
             <!-- The Modal -->
<div id="myRegister" class="register_modal">

<!-- Modal content -->
<div class="modal-content-register">
  <span class="close-register">&times;</span>
  <h1>Register</h1>
  <form class="form-register" action="" method="post">
    <input type="text" placeholder="Lastname" required>
    <input type="text" placeholder="Firstname" required>
    <input type="text" placeholder="Middlename" required>
    <input type="text"  placeholder="Birthdate" required>
    <input type="text" placeholder="Birthplace"  required>
    <input type="number" placeholder="Age" required>
<select name="" id="">
    <option value="" disable selected hidden>Choose Gender</option>
    <option value="">Male</option>
    <option value="">Female</option>
    <option value="">I dont want to say</option>
</select>
    <input type="text" placeholder="Precint #" required>
    <input type="text" placeholder="Civil Status" required>
    <input type="text" placeholder="Contact No." required>
    <div class="address">
    <input type="text" placeholder="Complete Home Address" required>   
    </div>
    <input type="text" placeholder="Occupation" required>   
    <input type="text" placeholder="Contact Person" required>
    <input type="text" placeholder="Email Address" required>      
    <input type="password" placeholder="Create Password" required>   
    <input type="password" placeholder="Confirm password" required>   
     <div class="submit">
     <input type="submit" id="submit" value="Submit">
     </div>
    </form>
</div>
</div>


         <!-- login -->

             <!-- The Modal  -->
<div id="myLogin" class="login_modal">

<!-- Modal content -->
<div class="modal-content-login">
  <span class="close-login">&times;</span>
  <form class="form-login" action="" method="post">
    <h1>Login</h1>
    <input type="email" placeholder="Enter your Email" required>
    <input type="password" placeholder="Enter your Password" required>
    <input type="submit" id="submit" value="Submit">
    </form>
</div>
</div>

     </section>
         <!-- javascript -->
    <script src="index.js"></script>
</body>
</html>