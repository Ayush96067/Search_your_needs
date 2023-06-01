<?php 
include 'config.php';


if(isset($_GET['name'])){

    $name = $_GET['name'];

}else{

    $name = " John - This is our default name";

}

if(isset($_GET['email'])){

    $email = $_GET['email'];

}else{

    $email = " john@238 - This is our default email";

}


if(isset($_GET['number'])){

    $number = $_GET['number'];

}else{

    $number = " 999999999- This is our default number";

}


if(isset($_GET['subject'])){

    $subject = $_GET['subject'];

}else{

    $subject = " DBMS - This is our default subject";

}
if(isset($_GET['message'])){

    $message = $_GET['message'];

}else{

    $message = "Excellent - This is our default message";

}




// $name = mysqli_real_escape_string($conn, $_POST['name']);
// $email = mysqli_real_escape_string($conn, $_POST['email']);
// $number = mysqli_real_escape_string($conn, $_POST['number']);
// $subject = mysqli_real_escape_string($conn, $_POST['subject']);
// $message = mysqli_real_escape_string($conn, $_POST['message']);
// $name=isset($_POST['name']);
// $email=isset($_POST['email']);
// $number=isset($_POST['number']);
// $subject=isset($_POST['subject']);

// $message=isset($_POST['message']);

// Insert form data into database
$stmt= $conn->prepare("INSERT INTO contact_form (name, email, number, subject, message) 
VALUES (?,?,?,?,?)");
$stmt->bind_param("ssiss", $name , $email, $number, $subject, $message);

$stmt->execute();

// $sql = "INSERT INTO contact_form (name, email, number, subject, message) 
// VALUES ('$name', '$email', '$number', '$subject', '$message')";

// if (mysqli_query($conn, $sql)) {
//     echo "Form submitted successfully.";
// } else {
//     echo "Error: " . mysqli_error($conn);
// }
$stmt->close();
$conn->close();
// mysqli_close($conn);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      complete responsive tour and travel agency website design tutorial
    </title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="tour and travel website/style.css" />


  </head>
  <body>
    <!-- header section starts  -->

    <header>
      <div id="menu-bar" class="fas fa-bars"></div>

      <a href="#" class="logo"><span>S</span>earch</a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">book</a>
        <a href="#packages">packages</a>
        <a href="#services">services</a>
        <a href="#gallery">gallery</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <a href="Login_v3/index.html"
          ><i class="fas fa-user" id="login-btn"></i
        ></a>
      </div>

      <form class="search-bar-container" action="action_page.php">
        <input type="search" id="search-bar" placeholder="search here..." />
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
    </header>

    <!-- header section ends -->

    <!-- login form container  -->

    <div class="login-form-container">
      <i class="fas fa-times" id="form-close"></i>

      <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email" />
        <input type="password" class="box" placeholder="enter your password" />
        <input type="submit" value="login now" class="btn" />
        <input type="checkbox" id="remember" />
        <label for="remember">remember me</label>
        <p>forget password? <a href="#">click here</a></p>
        <p>don't have and account? <a href="#">register now</a></p>
      </form>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="content">
        <h3>Search your needs</h3>
        <p>dicover new places with us</p>
        <a href="#" class="btn">discover more</a>
      </div>

      <div class="controls">
        <span class="vid-btn active" data-src="tour and travel website/images/vid-5.mp4"></span>
        <span class="vid-btn" data-src="tour and travel website/images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="tour and travel website/images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="tour and travel website/images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="tour and travel website/images/vid-1.mp4"></span>
      </div>

      <div class="video-container">
        <video
          src="tour and travel website/images/vid-5.mp4"
          id="video-slider"
          loop
          autoplay
          muted
        ></video>
      </div>
    </section>

    <!-- home section ends -->

    <!-- book section starts  -->
<!-- 
    <section class="book" id="book">
      <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="tour and travel website/images/book-img.svg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <h3>where to</h3>
            <input type="text" placeholder="place name" />
          </div>
          <div class="inputBox">
            <h3>how many</h3>
            <input type="number" placeholder="number of guests" />
          </div>
          <div class="inputBox">
            <h3>arrivals</h3>
            <input type="date" />
          </div>
          <div class="inputBox">
            <h3>leaving</h3>
            <input type="date" />
          </div>
          <input type="submit" class="btn" value="book now" />
        </form>
      </div>
    </section> -->

    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">
      <h1 class="heading">
        <span>L</span>
        <span>o</span>
        <span>c</span>
        <span>a</span>
        <span>l</span>
        <span>i</span>
        <span>t</span>
        <span>y</span>
        <br>
        <span>o</span>
        <span>v</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="tour and travel website/images/MVN.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Malviya Nagar</h3>
            <p>
            It’s famous for its large market, which has a variety of luxury restaurants and boutiques. <br>
            Malviya Nagar is one of the poshest and upmarket locations of Jaipur
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            
            <a href="Searching_Project_interface/areas/Malviya nagar.html" class="btn">Search</a>
          </div>
        </div>

        <div class="box">
          <img src="tour and travel website/images/cscheme.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> C Scheme</h3>
            <p>
            Luxurious and high scale apartments available <br>
Nearby medical facilities<br>
Prominent and famous locality<br>
Popular for white marble Birla Temple<br>
Elegant forts and monuments nearby
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            
            <a href="Searching_Project_interface/areas/C-Scheme.html" class="btn">Search</a>
          </div>
        </div>

        <div class="box">
          <img src="tour and travel website/images/SG.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Sanganer</h3>
            <p>
            Known as one of the coveted residential cum industrial suburbs, Sanganer is situated in the southern region of Jaipur
            <br>
            pilgrimage centre housing an ancient Jain..
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            
            <a href="Searching_Project_interface/areas/sanganer.html" class="btn">Search</a>
          </div>
        </div>

        <div class="box">
          <img src="tour and travel website/images/pp.jpeg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i>Pratap Nagar</h3>
            <p>
            Pratap Nagar is one of the largest residential area known as one of the fastest-growing cities in the south-eastern part of Jaipur.

            <br>Special Economic Zones (SEZ), IT Parks,...

            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            
            <a href="Searching_Project_interface/areas/Pratap nagar.html" class="btn">Search</a>
          </div>
        </div>

        <div class="box">
          <img src="tour and travel website/images/mns.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Mansarover</h3>
            <p>
            Mansarovar is a residential area located in south western parts of Jaipur. <br> Mansarovar is divided into nine sectors. With excellent connectivity to the other parts of the city and immediate...
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
           
            <a href="Searching_Project_interface/areas/Mansarover.html" class="btn">Search</a>
          </div>
        </div>

        <div class="box">
          <img src="tour and travel website/images/vs.jpeg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Vaishali Nagar</h3>
            <p>
            Vaishali Nagar is known as the most expensive and well-established residential neighbourhood <br> Superlative physical infrastructure and the presence of civic amenities .
            </p>
            <div class="stars">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            
            <a href="Searching_Project_interface/areas/Vaishali_nagar.html" class="btn">Search</a>
          </div>
        </div>
      </div>
    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">
      <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-hotel"></i>
          <h3>affordable hotels</h3>
          <p>
            Comfortable and clean rooms <br>
            Wifi and other connectivity <br>
            Parking facilities <br>
            24 hr / front desk <br>
            Housekeeping <br>

          </p>
        </div>
        <div class="box">
          <i class="fas fa-utensils"></i>
          <h3>Restaurant</h3>
          <p>
                Servind food and drinks <br>
                Taking orders and delivery
                <br> 
                Prepare meals <br>
                Comfortable atmosphere  
          </p>
        </div>
        <div class="box">
          <i class="fas fa-bullhorn"></i>
          <h3>safty </h3>
          <p>
            Trusted Transport <br>
            Authorized users <br>
            Emergency alerts
          </p>
        </div>
        <div class="box">
          <i class="fas fa-globe-asia"></i>
          <h3> Good experiance for all</h3>
          <p>
            Best facilities <br>
            Best accomodations <br>
            Only top ammenities are displayed
          </p>
        </div>
        <div class="box">
          <i class="fas fa-plane"></i>
          <h3>Booking and resrvtions</h3>
          <p>
            24*7 booking online <br>
            Call 10am to 10pm <br>
            Cheap prices 


          </p>
        </div>
        <div class="box">
          <i class="fas fa-hiking"></i>
          <h3>adventures</h3>
          <p>
            Join hands to get the best class hotels , villas at cheap rate and in good condition and also get discounts 
          </p>
        </div>
      </div>
    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">
      <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
      </h1>

      <div class="box-container">
        <div class="box">
          <img src="tour and travel website/images/g1.jpg" alt="" />
          <div class="content">
            <h3>V fitness</h3>
            <p>
            Best gym in whole jaipur when comes to machines and training
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/h1.jpg" alt="" />
          <div class="content">
            <h3>Fortis</h3>
            <p>
             One of the reputed hospitals
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/ho1.jpg" alt="" />
          <div class="content">
            <h3>Formount</h3>
            <p>
             World class hotel with heritage of jaipur
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/ho2.webp" alt="" />
          <div class="content">
            <h3>Rambagh Palace</h3>
            <p>
              Wonderful 7* hotel , with taste of Rajasthan
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/s1.jpg" alt="" />
          <div class="content">
            <h3>Jaishree Periwal</h3>
            <p>
            No. 1 in Jaipur / No. 1 in Rajasthan / No. 6 in India
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/s2.png" alt="" />
          <div class="content">
            <h3>Neerja Modi </h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/g3.jpg" alt="" />
          <div class="content">
            <h3>Ozi spa and gym</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/see.jpg" alt="" />
          <div class="content">
            <h3>See More</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
        <div class="box">
          <img src="tour and travel website/images/g-9.jpg" alt="" />
          <div class="content">
            <h3>amazing places</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus,
              tenetur.
            </p>
            <a href="#" class="btn">see more</a>
          </div>
        </div>
      </div>
    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">
      <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
      </h1>

      <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="box">
              <img src="tour and travel website/images/pic1.png" alt="" />
              <h3>john deo</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                adipisci quisquam sunt nesciunt fugiat odit minus illum
                asperiores dolorum enim sint quod ipsam distinctio molestias
                consectetur ducimus beatae, reprehenderit exercitationem!
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="tour and travel website/images/pic2.png" alt="" />
              <h3>john deo</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                adipisci quisquam sunt nesciunt fugiat odit minus illum
                asperiores dolorum enim sint quod ipsam distinctio molestias
                consectetur ducimus beatae, reprehenderit exercitationem!
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="tour and travel website/images/pic3.png" alt="" />
              <h3>john deo</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                adipisci quisquam sunt nesciunt fugiat odit minus illum
                asperiores dolorum enim sint quod ipsam distinctio molestias
                consectetur ducimus beatae, reprehenderit exercitationem!
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="box">
              <img src="tour and travel website/images/pic4.png" alt="" />
              <h3>john deo</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                adipisci quisquam sunt nesciunt fugiat odit minus illum
                asperiores dolorum enim sint quod ipsam distinctio molestias
                consectetur ducimus beatae, reprehenderit exercitationem!
              </p>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
      </h1>

      <div class="row">
        <div class="image">
          <img src="tour and travel website/images/contact-img.svg" alt="" />
        </div>

        <form action="">
          <div class="inputBox">
            <input type="text" name="name" placeholder="name" />
            <input type="email" name="email" placeholder="email" />
          </div>
          <div class="inputBox">
            <input type="number" name="number" placeholder="number" />
            <input type="text" name="subject" placeholder="subject" />
          </div>
          <textarea
            placeholder="message"
            name="message"
            id=""
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" class="btn" value="send message" />
        </form>
      </div>
    </section>


    <!-- $name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$number = mysqli_real_escape_string($conn, $_POST['number']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$message = mysqli_real_escape_string($conn, $_POST['message']); -->
    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">
      <div class="swiper-container brand-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="tour and travel website/images/1.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="tour and travel website/images/2.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="tour and travel website/images/3.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="tour and travel website/images/4.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="tour and travel website/images/5.jpg" alt="" /></div>
          <div class="swiper-slide"><img src="tour and travel website/images/6.jpg" alt="" /></div>
        </div>
      </div>
    </section>

    <!-- footer section  -->

    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>about us</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
            quas magni pariatur est accusantium voluptas enim nemo facilis sit
            debitis.
          </p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
          <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">france</a>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="#">home</a>
          <a href="#">book</a>
          <a href="#">packages</a>
          <a href="#">services</a>
          <a href="#">gallery</a>
          <a href="#">review</a>
          <a href="#">contact</a>
        </div>
        <div class="box">
          <h3>follow us</h3>
          <a href="#">facebook</a>
          <a href="#">instagram</a>
          <a href="#">twitter</a>
          <a href="#">linkedin</a>
        </div>
      </div>

      <h1 class="credit">
        created by <span> mr. web designer </span> | all rights reserved!
      </h1>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="tour and travel website/script.js"></script>
  </body>
</html>
