  <footer class="site-footer footer-large footer-dark text-white footer-style2">


      <!-- FOOTER BLOCKES START -->
      <div class="footer-top bg-no-repeat bg-bottom-right" style="background-image:url(images/background/footer-bg.png)">
          <div class="container">
              <div class="row">

                  <div class="col-lg-12">
                      <div class="footer-h-left">
                          <div class="widget widget_about">
                              <div class="logo-footer clearfix">
                                  <!--<a href="#">
                                <img src="images/logo/torshaa logo.png" alt="">
                            </a>-->
                              </div>
                              <p style="font-family: 'Montserrat';">TORSHAA is backed by a team that consists of pharma industry colleagues and experts in respective areas of Sourcing, Technology, Regulatory and Logistics etc to provide a complete solution to customers across the globe in chosen area. </p>
                          </div>
                      </div>
                  </div>


                  <div class="col-lg-12">
                      <div class="footer-h-left">
                          <div class="widget recent-posts-entry">
                              <!--<h3 class="widget-title">Get in touch</h3>-->
                              <ul class="widget_address">
                                  <li style="font-family: 'Montserrat';"><a href="torshaa@torshaapharma.com"><i class="fa fa-envelope"></i>torshaa@torshaapharma.com</a></li>
                              </ul>
                          </div>
                          <!--<ul class="social-icons  wt-social-links footer-social-icon">
            <li><a href="javascript:void(0);" class="fa fa-google"></a></li>
            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
        </ul>-->
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="footer-h-left" style="border-top: 1px solid; padding-top: 5px;">
                          <div class="widget widget_services">
                              <!--<h3 class="widget-title">Useful links</h3>-->
                              <ul>
                                  <li style="font-family: 'Montserrat';"><a href="index.php"><i class="fa fa-circle font-12 mr-2"></i>Home</a></li>
                                  <li style="font-family: 'Montserrat';"><a href="about.php"><i class="fa fa-circle font-12 mr-2"></i>About Us</a></li>
                                  <li style="font-family: 'Montserrat';"><a href="manufacturing.php"><i class="fa fa-circle font-12 mr-2"></i>Business Arena</a></li>
                                  <li style="font-family: 'Montserrat';"><a href="api.php"><i class="fa fa-circle font-12 mr-2"></i>Products</a></li>
                                  <li style="font-family: 'Montserrat';"><a href="contact.php"><i class="fa fa-circle font-12 mr-2"></i>Contact</a></li>

                                  <!--<li><a href="#"><i class="fa fa-circle font-12 mr-2"></i>Rehabilitation </a></li>
<li><a href="#"><i class="fa fa-circle font-12 mr-2"></i>Pediatrician </a></li>-->
                              </ul>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
      <!-- FOOTER COPYRIGHT -->

      <div class="footer-bottom">
          <div class="container">
              <div class="wt-footer-bot-left d-flex " style="justify-content: center;">
                  <span class="copyrights-text d-flex align-items-center" style="font-family: 'Montserrat';"><span class="ml-2 site-text-primary text-white-50"></span></span> <!--<span class="site-text-primary d-flex align-items-center text-white-50">Design By : Technofra</span>-->
                  <ul class="copyrights-nav">
                      <li><a href="javascript:void(0);" style="font-family: 'Montserrat';">COPYRIGHT © <span id="year"></span> </a></li>
                      <li><a href="javascript:void(0);" style="font-family: 'Montserrat';">TORSHAA Pharma Solution LLP ALL RIGHT RESERVED.</a></li>
                      <li><a href="#" style="font-family: 'Montserrat';">DESIGNED BY TECHNOFRA</a></li>
                  </ul>
              </div>
          </div>
      </div>


  </footer>
  <script src="js/jquery-2.2.0.min.js"></script><!-- JQUERY.MIN JS -->
  <script src="js/popper.min.js"></script><!-- POPPER.MIN JS -->
  <script src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
  <script src="js/bootstrap-select.min.js"></script><!-- Form js -->
  <script src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
  <script src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
  <script src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
  <script src="js/waypoints-sticky.min.js"></script><!-- STICKY HEADER -->
  <script src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
  <script src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
  <script src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
  <script src="js/theia-sticky-sidebar.js"></script><!-- STICKY SIDEBAR  -->
  <script src="js/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
  <script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->

  <script src="js/switcher.js"></script><!-- SHORTCODE FUCTIONS  -->
  <!-- REVOLUTION JS FILES -->

  <script src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
  <script src="plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

  <!-- REVOLUTION SLIDER SCRIPT FILES -->
  <script src="js/rev-script-2.js"></script>
  <script>
      document.getElementById("year").innerHTML = new Date().getFullYear();
  </script>

  <script>
      /*I'll be cleaning this code up. There's definitely some redundancy in calling a new Date() object, for example*/

      //create document ready function
      $(document).ready(function() {

          //create function to display the time
          function displayTime() {
              //create variable currentTime and have the Date() object store computer's time
              var currentTime = new Date();
              //create variables for hours, minutes, and seconds		
              var hours = currentTime.getHours();
              var minutes = currentTime.getMinutes();
              var seconds = currentTime.getSeconds();
              var meridiem = " AM";

              if (hours > 11) {
                  hours = hours - 12;
                  meridiem = " PM";
              }
              if (hours === 0) {
                  hours = 12;
              }
              if (hours < 10) {
                  hours = "0" + hours;
              }
              if (minutes < 10) {
                  minutes = "0" + minutes;
              }
              if (seconds < 10) {
                  seconds = "0" + seconds;
              }
              $("#clock").text(hours + ":" + minutes + ":" + seconds + meridiem);
              //set variable to change clockDiv in HTML
              //var clockDiv = document.getElementById('clock');

              //innerText to set text inside an HTML element
              //clockDiv.innerText = hours + ":" + minutes + ":" + seconds + meridiem;
          }

          function displayDay() {
              var currentDay = new Date();
              var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
              var day = days[currentDay.getDay()];
              $("#day").text(day);
          }

          function displayDate() {
              var currentDate = new Date();
              var year = currentDate.getFullYear();
              var date = currentDate.getDate();
              var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
              var month = months[currentDate.getMonth()];
              if (date < 10) {
                  date = "0" + date;
              }

              $("#date").text(month + " " + date + " " + year);
          }
          displayTime();
          setInterval(displayTime, 1000);
          displayDay();
          displayDate();

      });
  </script>
  </body>

  </html>