   <?php   
   error_reporting(E_ERROR | E_PARSE);
   include "assets/db_includes/connect.php";
   include "functions/functions.php";
   ?>
<!DOCTYPE html>
<html lang="en">
   <?php include 'assets/includes/header.php';?>
   <body>
      <?php include 'assets/includes/navheader.php';?>
      <!-- ***** Main Banner Area Start ***** -->
      <section class="section main-banner" id="top" data-section="section1">
         <video autoplay muted loop id="bg-video">
            <source src="assets/images/course-video.mp4" type="video/mp4" />
         </video>
         <div class="video-overlay header-text">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="caption">
                        <h6>Hello Students</h6>
                        <h2>Welcome to Education</h2>
                        <div class="main-button-red">
                           <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ***** Main Banner Area End ***** -->
      <section class="services">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="owl-service-item owl-carousel">
                     <div class="item">
                        <div class="icon">
                           <img src="assets/images/service-icon-01.png" alt="">
                        </div>
                        <div class="down-content">
                           <h4>Best Education</h4>
                        </div>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                           <h4>Best Teachers</h4>
                        </div>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                           <h4>Best Students</h4>
                        </div>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="assets/images/service-icon-02.png" alt="">
                        </div>
                        <div class="down-content">
                           <h4>Online Meeting</h4>
                        </div>
                     </div>
                     <div class="item">
                        <div class="icon">
                           <img src="assets/images/service-icon-03.png" alt="">
                        </div>
                        <div class="down-content">
                           <h4>Best Networking</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="upcoming-meetings" id="meetings">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-heading">
                     <h2>Upcoming Meetings</h2>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="categories">
                     <h4>New Updates</h4>
                     <marquee width="100%" direction="up" height="100px">
                        Recent events and marks announcement of the students
                     </marquee>
                     <div class="main-button-red">
                        <a href="meetings.php">All Upcoming Updates</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="meeting-item">
                           <div class="thumb">
                              <div class="price">
                                 <span>$22.00</span>
                              </div>
                              <a href="meeting-details.php"><img src="assets/images/meeting-01.jpg" alt="New Lecturer Meeting"></a>
                           </div>
                           <div class="down-content">
                              <div class="date">
                                 <h6>Nov <span>10</span></h6>
                              </div>
                              <a href="meeting-details.php">
                                 <h4>New Lecturers Meeting</h4>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="meeting-item">
                           <div class="thumb">
                              <div class="price">
                                 <span>$36.00</span>
                              </div>
                              <a href="meeting-details.php"><img src="assets/images/meeting-02.jpg" alt="Online Teaching"></a>
                           </div>
                           <div class="down-content">
                              <div class="date">
                                 <h6>Nov <span>24</span></h6>
                              </div>
                              <a href="meeting-details.php">
                                 <h4>Online Teaching Techniques</h4>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="meeting-item">
                           <div class="thumb">
                              <div class="price">
                                 <span>$14.00</span>
                              </div>
                              <a href="meeting-details.php"><img src="assets/images/meeting-03.jpg" alt="Higher Education"></a>
                           </div>
                           <div class="down-content">
                              <div class="date">
                                 <h6>Nov <span>26</span></h6>
                              </div>
                              <a href="meeting-details.php">
                                 <h4>Higher Education Conference</h4>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="meeting-item">
                           <div class="thumb">
                              <div class="price">
                                 <span>$48.00</span>
                              </div>
                              <a href="meeting-details.php"><img src="assets/images/meeting-04.jpg" alt="Student Training"></a>
                           </div>
                           <div class="down-content">
                              <div class="date">
                                 <h6>Nov <span>30</span></h6>
                              </div>
                              <a href="meeting-details.php">
                                 <h4>Student Training Meetup</h4>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="apply-now" id="apply">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 align-self-center">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="item">
                           <h3>APPLY FOR UG DEGREE</h3>
                         <div class="main-button-red">
                              <div class="scroll-to-section"><a href="#contact">ADMISSION OPEN</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12">
                        <div class="item">
                           <h3>APPLY FOR PG DEGREE</h3>
                           <div class="main-button-yellow">
                              <div class="scroll-to-section"><a href="#contact">ADMISSION OPEN</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="accordions is-first-expanded">
                     <article class="accordion">
                        <div class="accordion-head">
                           <span>About Edu Meeting HTML Template</span>
                           <span class="icon">
                           <i class="icon fa fa-chevron-right"></i>
                           </span>
                        </div>
                        <div class="accordion-body">
                           <div class="content">
                              </div>
                        </div>
                     </article>
                     <article class="accordion">
                        <div class="accordion-head">
                           <span>HTML CSS Bootstrap Layout</span>
                           <span class="icon">
                           <i class="icon fa fa-chevron-right"></i>
                           </span>
                        </div>
                        <div class="accordion-body">
                           <div class="content">
                          </div>
                        </div>
                     </article>
                     <article class="accordion">
                        <div class="accordion-head">
                           <span>Please tell your friends</span>
                           <span class="icon">
                           <i class="icon fa fa-chevron-right"></i>
                           </span>
                        </div>
                        <div class="accordion-body">
                           <div class="content">
                             </div>
                        </div>
                     </article>
                     <article class="accordion last-accordion">
                        <div class="accordion-head">
                           <span>Share this to your colleagues</span>
                           <span class="icon">
                           <i class="icon fa fa-chevron-right"></i>
                           </span>
                        </div>
                        <div class="accordion-body">
                           <div class="content">
                             </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="our-courses" id="courses">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-heading">
                     <h2>Our Popular Courses</h2>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="owl-courses-item owl-carousel">
                     <div class="item">
                        <img src="assets/images/course-01.jpg" alt="Course One">
                        <div class="down-content">
                           <h4>Electronics And Communication Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$160</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-02.jpg" alt="Course Two">
                        <div class="down-content">
                           <h4>Computer Science Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$180</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-03.jpg" alt="">
                        <div class="down-content">
                           <h4>Mechanical Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$140</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-04.jpg" alt="">
                        <div class="down-content">
                           <h4>Civil Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$120</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-01.jpg" alt="">
                        <div class="down-content">
                           <h4>Electrical and Electronics Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$250</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-02.jpg" alt="">
                        <div class="down-content">
                           <h4>Telecommunication Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$270</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-03.jpg" alt="">
                        <div class="down-content">
                           <h4>Information Science Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$340</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-04.jpg" alt="">
                        <div class="down-content">
                           <h4>Chemical Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$360</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-01.jpg" alt="">
                        <div class="down-content">
                           <h4>Instrumentation Technology</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$400</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-02.jpg" alt="">
                        <div class="down-content">
                           <h4>M.Tech in Civil Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$430</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-03.jpg" alt="">
                        <div class="down-content">
                           <h4>M.Tech in Mechanical Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$480</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="item">
                        <img src="assets/images/course-04.jpg" alt="">
                        <div class="down-content">
                           <h4>M.Tech in Computer Science Engineering</h4>
                           <div class="info">
                              <div class="row">
                                 <div class="col-8">
                                    <ul>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                       <li><i class="fa fa-star"></i></li>
                                    </ul>
                                 </div>
                                 <div class="col-4">
                                    <span>$560</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   
      <section class="our-facts">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="row">
                     <div class="col-lg-12">
                        <h2>A Few Facts About Our University</h2>
                     </div>
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-12">
                              <div class="count-area-content percentage">
                                 <div class="count-digit">94</div>
                                 <div class="count-title">Succesed Students</div>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="count-area-content">
                                 <div class="count-digit">126</div>
                                 <div class="count-title">Current Teachers</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-12">
                              <div class="count-area-content new-students">
                                 <div class="count-digit">2345</div>
                                 <div class="count-title">New Students</div>
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="count-area-content">
                                 <div class="count-digit">32</div>
                                 <div class="count-title">Awards</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 align-self-center">
                  <div class="video">
                     <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="contact-us" id="contact">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 align-self-center">
                  <div class="row">
                     <div class="col-lg-12">
                        <form id="contact" action="" method="post">
                           <div class="row">
                              <div class="col-lg-12">
                                 <h2>CONTACT FOR ADMISSIONS</h2>
                              </div>
                              <div class="col-lg-4">
                                 <fieldset>
                                    <input name="name" type="text" id="name" placeholder="YOURNAME...*" required="">
                                 </fieldset>
                              </div>
                              <div class="col-lg-4">
                                 <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="YOUR EMAIL..." required="">
                                 </fieldset>
                              </div>
                              <div class="col-lg-4">
                                 <fieldset>
                                    <input name="subject" type="text" id="subject" placeholder="SUBJECT...*" required="">
                                 </fieldset>
                              </div>
                              <div class="col-lg-12">
                                 <fieldset>
                                    <textarea name="message" type="text" class="form-control" id="message" placeholder="YOUR MESSAGE..." required=""></textarea>
                                 </fieldset>
                              </div>
                              <div class="col-lg-12">
                                 <fieldset>
                                    <button type="submit" id="form-submit" class="button" name="submit_enquiry">SUBMIT ENQUIRY</button>
                                 </fieldset>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="right-info">
                   <ul style="color:white;">
               <?php while ($row=mysqli_fetch_array($result)){                         
                        if($row['U_KEY']=='Phone Number')
                        echo "<li><h6>Phone Number</h6><span>{$row['U_VALUE']}</span></li>";
                                             
                        if($row['U_KEY']=='Email Address')
                        echo "<li><h6>Email Address</h6><span>{$row['U_VALUE']}</li></span>";
                                         
                        if($row['U_KEY']=='Street Address')
                        echo "<li><h6>Street Address</h6><span>{$row['U_VALUE']}</li></span>";
                                           
                        if($row['U_KEY']=='Website URL')
                        echo "<li><h6>Website URL</h6><span>{$row['U_VALUE']}</span></li>";
                    }   ?>
                  </ul>
                                 
                  </div>
               </div>
            </div>
         </div>
         <div class="footer">
            <p>Copyright © 2022 FreeBoon - Created By : 
              <a href="#" target="_blank" title="Build Better UI, Faster">WebPage</a>
            </p>
         </div>
      </section>
      <?php include 'assets/includes/footer.php';?>
   </body>
</html>