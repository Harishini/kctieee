<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Computer Society</title>

        <link rel="stylesheet" href="soc-style.css">
        <link rel="stylesheet" href="styles.css">
        <script src="https://kit.fontawesome.com/cc260aa82c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </head>
    <body>
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
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about"><b>About</b></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="index.php#commitee"><b>Core Committee</b></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Faculties</a></li>
                                <li><a class="dropdown-item" href="#">Students</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#societies"><b>Societies</b></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="aps.php">Antenna and Propagation Society</a></li>
                                <li><a class="dropdown-item" href="">Computer Society</a></li>
                                <li><a class="dropdown-item" href="css.php">Control System Society</a></li>
                                <li><a class="dropdown-item" href="edus.php">Education Society</a></li>
                                <li><a class="dropdown-item" href="pels.php">Power and Energy Society</a></li>
                                <li><a class="dropdown-item" href="ras.php">Robotics and Automation Society</a></li>
                                <li><a class="dropdown-item" href="sps.php">Signal Processing Society</a></li>
                                <li><a class="dropdown-item" href="wie.php">Women in Engineering Society</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#upcomming_events"><b>Upcoming Events</b></a>
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
        <section id="section">
            <div class="cs_content">
                <br>
                <h1>COMPUTER SOCIETY</h1>
                <br>

                <div class="about">
                    <img src="images/society_logo/CS logo.png" class="logo">
                    <br>
                    <h2>ABOUT</h2>
                    <br>
                    <p>IEEE CS is the trusted organization dedicated to engaging the engineers, scientists, academia, and industry professionals from 
                        across the globe driving continued advancements in computer science and technology. From conferences to publications, programs, and committees, 
                        as well as through dialogue and collaboration, IEEE CS creates the environment, resources, and tools to shape, impact, and celebrate the global 
                        computer science and technology community. By inspiring and connecting professionals from all areas of computing and at every career level, 
                        IEEE CS guides the future of its members and the greater industry, enabling new technological opportunities to better serve our world.
                    </p>
                </div>

                <hr>
                <h2>OFFICE BEARERS</h2>
                <br>
                <div class="grid gallery-grid">
                <div class="gallery">
                    <img src="images/students/computer_society/officers/harishini.jpg">
                    <div class="desc">Harishini <br>
                    Chair</div>
                </div>
                <div class="gallery">
                <img src="images/students/computer_society/officers/devasenan.jpg">
                    <div class="desc">Devasenan <br>
                    Vice Chair</div>
                </div>
                <div class="gallery">
                <img src="images/students/computer_society/officers/karan.jpg">
                    <div class="desc">Karan <br>
                    Secretary</div>
                </div>
                <div class="gallery">
                <img src="images/students/control_system/officers/Shivaram.jpg">
                    <div class="desc">Shivaram <br>
                    Treasurer</div>
                </div>
                <div class="gallery">
                <img src="images/students/computer_society/officers/Suryaprakashjpg">
                    <div class="desc">Suryaprakash<br>
                    Events Lead</div>
                </div>
                <div class="gallery">
                <img src="images/students/computer_society/officers/bagawathy.jpg">
                    <div class="desc">Bagawathy <br>
                    Media Lead</div>
                </div>
                <div class="gallery">
                <img src="images/students/computer_society/officers/mayuri.jpg">
                    <div class="desc">Mayuri <br>
                    Document Lead</div>
                </div>
                
            </div>
                <hr>
                <h2>GALLERY</h2>
                <br>
                <div class="container">
          <div class="row">
    <div class="col-sm">
    <div class="event_gallery">
    <img src="images/students/computer_society/events/blogomania.png">
</div>
    </div>
    <div class="col-sm">
    <div class="event_gallery">
    <img src="images/students/computer_society/events/e-poster.jpg">
</div>
    </div>
    <div class="col-sm">
    <div class="event_gallery">
    <img src="images/students/computer_society/events/uplift.png">
</div>
    </div>
  </div>
</div>
               
            
        </section>

        <footer id="footer">

            <div class="container">
                <div class="copyright">
                &copy; Copyright <strong>Kumaraguru College of Technology</strong>. All Rights Reserved
                </div>
            </div>
            </footer>
            <script src="main.js"></script>
    </body>
</html>