<?php
error_reporting(0);
session_start();
session_destroy();

if($_SESSION['message'])
{
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'> 
    alert('$message');
    </script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IEEE_KCT</title>
    <link rel="stylesheet" href="styles.css">
    
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div>
    <Nav class="navbar navbar-expand-lg">
        <div class="container-fluid"> 
            <div class="nav-logo">
                <!-- <a class="navbar-brand" href="#">IEEE_KCT</a> -->
                <img src="images/KCT SB logo.png" width="100" height="60">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg id="toggle_icon" class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </button>    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><b>About</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#commitee"><b>Core Committee</b></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Faculty</a></li>
                            <li><a class="dropdown-item" href="#">Students</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#societies"><b>Societies</b></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="aps.php">Antenna and Propagation Society</a></li>
                            <li><a class="dropdown-item" href="cs.php">Computer Society</a></li>
                            <li><a class="dropdown-item" href="css.php">Control System Society</a></li>
                            <li><a class="dropdown-item" href="edus.php">Education Society</a></li>
                            <li><a class="dropdown-item" href="pels.php">Power and Energy Society</a></li>
                            <li><a class="dropdown-item" href="ras.php">Robotics and Automation Society</a></li>
                            <li><a class="dropdown-item" href="sps.php">Signal Processing Society</a></li>
                            <li><a class="dropdown-item" href="wie.php">Women in Engineering Society</a></li>
                                                  
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#societies"><b>Events</b></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="events.php#spotlight_events">Spotlight Events</a></li>
                            <li><a class="dropdown-item" href="events.php#projects">Projects</a></li>
                            <li><a class="dropdown-item" href="#upcomming_events">Upcoming Events</a></li>
                                                  
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><b>Contact</b></a>
                    </li>

                
                </ul>
            </div>
            <div id="icons-align" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link"><svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a></li>
                    <li class="nav-item"><a href="https://www.linkedin.com/company/ieeekctsb" class="nav-link"><svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>
                    <li class="nav-item"><a href="" class="nav-link"><svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg></a></li>
                    <li class="nav-item"><a href="mailto:ieeesb@kct.ac.in" class="nav-link"><svg class="icons" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a></li>
                    <li class="nav-item"><a href="register.php" class="nav-link"><button><strong>JOIN IEEE</strong></button></a></li>
                </ul>
            </div>
        </div>
    </Nav>
    </div>


    <!-- HOME-->
<br><br><br>
    <section id="home">
    <div class="container">
   
    <div class="row">
      <div class="col">
      <h1 class="home-title">IEEE</h1>
      <p>IEEE is a technical non-profit professional society dedicated to advancing technology and innovation for 
        the well-being of humanity.IEEE is the trusted voice for engineering, computing, and technology information around 
        the globe. </p>
      </div>
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="images/back/car1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/back/car2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/back/car3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/back/car4.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/back/car5.jpg" alt="Fifth slide">
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    <br>
    
    </div>
   
    
   
        <!-- <div class="home-bg">
            <div class="main-box">  
    <div class="text">
      <h1>IEEE</h1>
      <p>IEEE is a technical non-profit professional society dedicated to advancing technology and innovation for 
        the well-being of humanity.IEEE is the trusted voice for engineering, computing, and technology information around 
        the globe. </p>
    </div>
    <div class="slideshow">

    </div>


 
                 <div class="home-text">
                    <div class="home-title">
                        <h1>IEEE</h1>
                    </div>
                    <div class="home-para">
                        <p>IEEE is a technical non-profit professional society dedicated to advancing technology and innovation for 
                            the well-being of humanity.IEEE is the trusted voice for engineering, computing, and technology information around 
                            the globe. </p>
                    </div>
                </div> 
             </div>
        </div> -->
      
   
    </section>
    <!-- HOME ENDS-->

    <!-- ABOUT-->
    <section id="about">
        <div class="about">
            <div class="img" >
                <h1>About Us</h1>
                <hr>
                <p>The IEEE KCT SB is the elected representative body of the  IEEE student community in Kumaraguru College Of Technology. 
                    The student branch represents the interest of its members to facilitate social, recreational, sporting, cultural, educational, and 
                    career related purposes and works to foster a strong and meaningful relationship between the student and the industrial population, faculty, 
                    staff, and administrators. Our IEEE KCT SB founded in 1998 sub-entities include 6 Chapters and 1 Affinity Group.
                </p>
                <hr>
            </div>
            <div class="container">
                <div class="col1">
                    <h2 class="heading">Vision</h2>
                    <hr>
                    <p>
                        IEEE will be essential to the global technical community and to technical professionals everywhere, 
                        and be universally recognized for the contributions of technology and of technical professionals in improving global conditions.
                    </p>
                </div>
                <div class="col2">
                    <h2 class="heading">Mission</h2>
                    <hr>
                    <p>IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity.
                    </p>
                    <br>
                </div>
            </div>
        </div>
      </section>
    <!-- ABOUT ENDS-->
    <section id="commitee">

        <div id="comm">
            <div id="fac" class="grid">
                <div class="faculty-content">
                    <h1>Faculty</h1>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Necessitatibus quod nostrum excepturi nobis aspernatur a enim nemo possimus vero ducimus, odio, officia, 
                    voluptatum ut et praesentium? Consequuntur voluptates deleniti quidem fugit minima.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. In eius inventore sit incidunt dicta maxime nobis, 
                    adipisci ea cum deserunt sint eveniet quasi minus suscipit aperiam corrupti quae, explicabo aspernatur cupiditate. 
                    Maiores!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos ratione velit eum! Eos aut suscipit 
                    aspernatur labore itaque numquam alias quia perspiciatis! Tenetur voluptates ipsum nisi animi nesciunt eius minima 
                    quaerat quasi.
                    </p>
                </div>
            </div>
            <div class="grid gallery-grid">
                <div class="gallery">
                    <img src="images/faculty/sasikala.jpg">
                    <div class="desc">Dr. S. Sasikala <br>
                    IEEE SB - Counselor</div>
                </div>
                <div class="gallery">
                    <img src="pic.jpg">
                    <div class="desc">Mr. Kanagaraj S <br>
                    Co-counselor</div>
                </div>
                <div class="gallery">
                    <img src="images/faculty/bharathipriya.jpg">
                    <div class="desc">Ms. Bharathi Priya C <br>
                    IEEE CS - Co-ordinator</div>
                </div>
                <div class="gallery">
                    <img src="images/faculty/shivapriya.jpg">
                    <div class="desc">Dr. S. N. Shivappriya <br>
                    IEEE CS - Co-ordinator</div>
                </div>
                <div class="gallery">
                    <img src="images/faculty/alagumeenakshi.jpg">
                    <div class="desc">Dr. M. Alagumeenaakshi <br>
                    WIE - Advisor</div>
                </div>
                <div class="gallery">
                    <img src="images/faculty/maheswari.jpg">
                    <div class="desc">Dr. Maheswari K <br>
                    WIE - Co-ordinator</div>
                </div>
            </div>
            <br><br>
            <div id="stu">
                <div class="student_content">
                    <h1>Students</h1>
                    <hr>
                    <div class="student-para">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Odio provident delectus harum non, aliquam sit iure cum voluptatibus, quae laborum recusandae consequatur 
                            quidem perferendis error. Nihil distinctio, aspernatur voluptatibus modi numquam fuga.
                        </p>
                    </div>
                </div>
                <div class="grid gallery-grid">
                    <div class="gallery">
                        <img src="images/students/execom/arunan.jpg">
                        <div class="desc">Arunan A <br>
                        IEEE SB - Chairman</div>
                    </div>
                    <div class="gallery">
                        <img src="images/students/execom/pavin.jpg">
                        <div class="desc">Pavin P S<br>
                        IEEE SB - Vice Chair</div>
                    </div>
                    <div class="gallery">
                        <img src="images/students/execom/shriram.jpg">
                        <div class="desc">Shriram G<br>
                        IEEE SB - Secretary I</div>
                    </div>
                    <div class="gallery">
                        <img src="images/students/execom/shreya.jpg">
                        <div class="desc">Shreya Vijay<br>
                        IEEE SB - Treasurer</div>
                    </div>

                    <div class="gallery">
                        <img src="images/students/execom/dharshan.jpg">
                        <div class="desc">Dharshan K<br>
                        IEEE SB - Secretary II</div>
                    </div>

                    <div class="gallery">
                        <img src="images/students/execom/asfaq.jpg">
                        <div class="desc">Asfaq Moideen A<br>
                        IEEE SB - IPC & Advisor</div>
                    </div>


                   
                </div>
            </div>
        </div>

    </section>
        
    </section>
    <section id="upcomming_events">
    <div class="events">
        
            <h2>Upcoming Events</h2>
            <hr>
            <marquee direction="up" height="100%">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur vitae nostrum suscipit ipsam consequatur non reprehenderit. Ipsum magni accusamus voluptate quia excepturi exercitationem voluptatum nihil, quo error possimus voluptates non quam eius?
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos fugiat repellendus, distinctio dolorum dicta inventore earum eligendi numquam aut doloremque minus porro cumque voluptatem veritatis, beatae quisquam architecto? In animi adipisci culpa.
            </p>
        </marquee>
    </div>
    <br>
    <br>
    <br>
    </section>

    <footer id="footer">

        <div class="footer-container">
          <div class="copyright">
            &copy; Copyright <strong>Kumaraguru College of Technology</strong>. All Rights Reserved
          </div>
        </div>
      </footer>
    
    <script src="main.js"></script>
    <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>