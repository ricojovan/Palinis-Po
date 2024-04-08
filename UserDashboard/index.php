<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Palinis Po! - Homepage</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style2.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Open+Sans:wght@400;500;700&family=Poppins:wght@400;600&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#">
        <h1 class="logo">Palinis Po!</h1>
      </a>

      <button class="nav-toggle-btn" aria-label="Toggle Menu" data-nav-toggle-btn>
        <ion-icon name="menu-outline" class="menu-icon"></ion-icon>
        <ion-icon name="close-outline" class="close-icon"></ion-icon>
      </button>

      <nav class="navbar container">
        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About Us</a>
          </li>

          <li>
            <a href="#services" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li>
            <a href="#skills" class="navbar-link" data-nav-link>Where We Server</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link" data-nav-link>Pricing</a>
          </li>

          <li>
            <a href="#blog" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li>
            <a href="#" class="btn btn-primary">Login</a>
          </li>

          <li>
            <a href="#" class="btn btn-primary">Book Now!</a>
          </li>

        </ul>
      </nav>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-banner">

            <img src="./assets/images/cleaners-banner.jpg" width="800" height="864" loading="lazy" alt="Cleaners Photo"
              class="img-cover">

            <div class="elem elem-1">
              <p class="elem-title">12</p>

              <p class="elem-text">Years of Success</p>
            </div>

            <div class="elem elem-2">
              <p class="elem-title">800+</p>

              <p class="elem-text">Projects Completed</p>
            </div>

            <div class="elem elem-3">
              <ion-icon name="trophy"></ion-icon>
            </div>

            <img src="./assets/images/rotate-img.png" width="169" height="172" alt="I'm developer from New York"
              class="rotate-img">

          </div>

          <div class="hero-content">

            <h2 class="hero-title">
              <span>Welcome to Palinis Po!</span>
              <strong>Your Trusted<br>Home Cleaning Partner</strong>
            </h2>

            <p class="hero-text">
            At Palinis Po!, we understand the importance of a 
            clean and organized home. Your home is your sanctuary, 
            and it deserves the best care to maintain its beauty and comfort. 
            </p>

            <div class="btn-group">
              <a href="#contact" class="btn btn-primary blue">Book Now!</a>

              <a href="#about" class="btn">About Us</a>
            </div>

          </div>

        </div>

        <div class="custom-shape-divider-bottom-1711953435">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
    </svg>
</div>

      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <figure class="about-banner">

            <img src="./assets/images/about-cleaners.jpg" width="800" height="652" loading="lazy" alt="Ethan's Photo"
              class="img-cover">

            <img src="./assets/images/about-side.jpg" width="800" height="717" loading="lazy" alt="Ethan's Photo"
              class="abs-img">

            <div class="abs-icon abs-icon-1">
            <ion-icon name="leaf-outline"></ion-icon>
            </div>

            <div class="abs-icon abs-icon-2">
            <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="abs-icon abs-icon-3">
            <ion-icon name="accessibility-outline"></ion-icon>
            </div>

          </figure>

          <div class="about-content">

            <p class="section-subtitle">About Us</p>

            <h2 class="h2 section-title">Why Book Your Cleaning Service With Us?</h2>

<p class="section-text">
  <div class="abs-icon-new abs-icon-4">
    <ion-icon class="icon-about" name="checkmark-circle"></ion-icon>
      Simple<br> 
  </div>
      Set up a regular cleaning schedule or book a one-time service.
        <br><br>
  <div class="abs-icon-new abs-icon-4">
    <ion-icon class="icon-about" name="shield-checkmark"></ion-icon>
      Highly Trusted<br>
  </div>
      Our cleaners are rated by other customers, so you get the best of the best
        <br><br>
  <div class="abs-icon-new abs-icon-4">
    <ion-icon class="icon-about" name="home"></ion-icon>
      Convenient<br>
  </div>
      You can relax knowing your cleaning team will arrive on time and leave your home sparkling.
</p>

<br><br>

<p class="section-text">
At Palinis Po!, we are a team of dedicated professionals 
committed to delivering top-notch cleaning services tailored 
to meet your unique needs.
</p>

            <a href="#" class="btn btn-primary blue">Book Now!</a>

          </div>

        </div>
      </section>





      <!-- 
        - #Services
      -->

      <section class="section services" id="services">
        <div class="container">

          <p class="section-subtitle">Our Services</p>

          <h2 class="h2 section-title">Our Amazing Works</h2>

          <p class="section-text">
          Are you looking for the right cleaning company to make your home or 
          office look as good as new? At Palinis Po!, we come highly recommended 
          and cover all your house and office cleaning needs, including
          </p>

          <ul class="services-list">

            <li>
              <a href="#" class="services-card" style="background-image: url('./assets/images/services-1.jpg')">
                <div class="card-content">

                  <p class="card-subtitle">House Cleaning</p>

                  <h3 class="h3 card-title">Refresh your home with meticulous cleaning tailored to your needs.</h3>

                  <span class="btn-link">
                    <span>View Project</span>

                    <ion-icon name="arrow-forward"></ion-icon>
                  </span>

                </div>
              </a>
            </li>

            <li>
              <a href="#" class="services-card" style="background-image: url('./assets/images/services-2.jpg')">
                <div class="card-content">

                  <p class="card-subtitle">Office Cleaning</p>

                  <h3 class="h3 card-title">Maintain a pristine workspace for enhanced productivity and professionalism.</h3>

                  <span class="btn-link">
                    <span>View Project</span>

                    <ion-icon name="arrow-forward"></ion-icon>
                  </span>

                </div>
              </a>
            </li>

            <li>
              <a href="#" class="services-card" style="background-image: url('./assets/images/services-3.jpg')">
                <div class="card-content">

                  <p class="card-subtitle">Regular Cleaning</p>

                  <h3 class="h3 card-title">Keep your space consistently fresh and organized with routine maintenance.</h3>

                  <span class="btn-link">
                    <span>View Project</span>

                    <ion-icon name="arrow-forward"></ion-icon>
                  </span>

                </div>
              </a>
            </li>

            <li>
              <a href="#" class="services-card" style="background-image: url('./assets/images/services-4.jpg')">
                <div class="card-content">

                  <p class="card-subtitle">End of Lease Cleaning</p>

                  <h3 class="h3 card-title">Ensure a smooth transition with a thorough cleaning service.</h3>

                  <span class="btn-link">
                    <span>View Project</span>

                    <ion-icon name="arrow-forward"></ion-icon>
                  </span>

                </div>
              </a>
            </li>

            <li>
              <a href="#" class="services-card" style="background-image: url('./assets/images/services-5.jpg')">
                <div class="card-content">

                  <p class="card-subtitle">Deep Cleaning</p>

                  <h3 class="h3 card-title">Revitalize your space with a comprehensive, detailed cleaning session.</h3>

                  <span class="btn-link">
                    <span>View Project</span>

                    <ion-icon name="arrow-forward"></ion-icon>
                  </span>

                </div>
              </a>
            </li>

            <li>
              <a href="#" class="services-card" style="background-image: url('./assets/images/services-6.jpg')">
                <div class="card-content">

                  <p class="card-subtitle">Construction Cleaning</p>

                  <h3 class="h3 card-title">Clear away debris and dust to reveal the beauty of your newly constructed space.</h3>

                  <span class="btn-link">
                    <span>View Project</span>

                    <ion-icon name="arrow-forward"></ion-icon>
                  </span>

                </div>
              </a>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #SKILLS
      -->
<!-- 
      <section class="section skills" id="skills">
        <div class="container">

          <p class="section-subtitle">My Skills</p>

          <h2 class="h2 section-title">I Develop Skills Regularly</h2>

          <p class="section-text">
            Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate
          </p>

          <ul class="skills-list">

            <li class="skills-item">
              <div class="wrapper" style="width: 95%">
                <h3 class=" skills-title">CSS</h3>

                <data class="skills-data" value="95">95%</data>
              </div>

              <div class="skills-progress-box">
                <div class="skills-progress" style="width: 95%"></div>
              </div>
            </li>

            <li class="skills-item">
              <div class="wrapper" style="width: 75%">
                <h3 class="skills-title">React</h3>

                <data class="skills-data" value="75">75%</data>
              </div>

              <div class="skills-progress-box">
                <div class="skills-progress" style="width: 75%"></div>
              </div>
            </li>

            <li class="skills-item">
              <div class="wrapper" style="width: 90%">
                <h3 class="skills-title">MongoDB</h3>

                <data class="skills-data" value="90">90%</data>
              </div>

              <div class="skills-progress-box">
                <div class="skills-progress" style="width: 90%"></div>
              </div>
            </li>

            <li class="skills-item">
              <div class="wrapper" style="width: 70%">
                <h3 class="skills-title">Python</h3>

                <data class="skills-data" value="70">70%</data>
              </div>

              <div class="skills-progress-box">
                <div class="skills-progress" style="width: 70%"></div>
              </div>
            </li>

            <li class="skills-item">
              <div class="wrapper" style="width: 80%">
                <h3 class="skills-title">PHP</h3>

                <data class="skills-data" value="80">80%</data>
              </div>

              <div class="skills-progress-box">
                <div class="skills-progress" style="width: 80%"></div>
              </div>
            </li>

            <li class="skills-item">
              <div class="wrapper" style="width: 75%">
                <h3 class="skills-title">JavaScript</h3>

                <data class="skills-data" value="75">75%</data>
              </div>

              <div class="skills-progress-box">
                <div class="skills-progress" style="width: 75%"></div>
              </div>
            </li>

          </ul>

        </div>
      </section> -->





      <!-- 
        - #CONTACT
      -->

      <section class="section contact" id="contact">
        <div class="container">

          <div class="contact-card">

            <p class="card-subtitle">Don't be shy</p>

            <h2 class="h2 section-title">Drop Me a Line</h2>

            <div class="wrapper">

              <form action="" class="contact-form">

                <input type="text" name="name" placeholder="Name" required class="contact-input">

                <input type="email" name="email" placeholder="Email" required class="contact-input">

                <textarea name="message" placeholder="Message" required class="contact-input"></textarea>

                <button type="submit" class="btn-submit">Submit Message</button>

              </form>

              <ul class="contact-list">

                <li class="contact-item">

                  <div class="contact-icon">
                    <ion-icon name="location"></ion-icon>
                  </div>

                  <div>
                    <h3 class="contact-item-title">Address</h3>

                    <address class="contact-item-link">
                      JKANFJKAKNFA
                    </address>
                  </div>

                </li>

                <li class="contact-item">

                  <div class="contact-icon">
                    <ion-icon name="mail"></ion-icon>
                  </div>

                  <div>
                    <h3 class="contact-item-title">Email</h3>

                    <a href="mailto:hello@ethan.com" class="contact-item-link">EMAIL@EMAIL.COM</a>
                  </div>

                </li>

                <li class="contact-item">

                  <div class="contact-icon">
                    <ion-icon name="call"></ion-icon>
                  </div>

                  <div>
                    <h3 class="contact-item-title">Phone</h3>

                    <a href="#" class="contact-item-link">045454054</a>
                  </div>

                </li>

              </ul>

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog">
        <div class="container">

          <p class="section-subtitle">ASDA</p>

          <h2 class="h2 section-title">ASDASDAD</h2>

          <p class="section-text">
            Dliquip ex ea commo do conse namber onequa ute irure dolor in reprehen derit in voluptate
          </p>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-1.jpg" width="1181" height="843" loading="lazy"
                      alt="Jim Morisson Says when the musics over turn off the light" class="img-cover">
                  </a>
                </figure>

                <a href="#" class="card-tag">ASDASDDA</a>

                <h3 class="card-title">
                  <a href="#">ASDASDAD</a>
                </h3>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-2.jpg" width="1181" height="843" loading="lazy"
                      alt="Jim Morisson Says when the musics over turn off the light" class="img-cover">
                  </a>
                </figure>

                <a href="#" class="card-tag">ASDASD</a>

                <h3 class="card-title">
                  <a href="#">ASDAFAASDFSDGFCVSDFVSDFGS</a>
                </h3>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="card-banner">
                  <a href="#">
                    <img src="./assets/images/blog-3.jpg" width="1181" height="843" loading="lazy"
                      alt="Jim Morisson Says when the musics over turn off the light" class="img-cover">
                  </a>
                </figure>

                <a href="#" class="card-tag">ZXCSADFASF</a>

                <h3 class="card-title">
                  <a href="#">ETSDFFVSEFES</a>
                </h3>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">
    <div class="container">

      <p class="copyright">
        &copy; 2024 <a href="#" class="copyright-link">ASDASDA</a>. All Rights Reseverd
      </p>

      <ul class="footer-list">
        <li>
          <a href="#" class="footer-link">Terms & Condition</a>
        </li>

        <li>
          <a href="#" class="footer-link">Privacy Policy</a>
        </li>
      </ul>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-to-top" data-back-to-top>BACK TOP</a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>