<!DOCTYPE html>
<html lang="en">
   <?php 
      error_reporting(E_ERROR | E_PARSE);
       
       include 'assets/includes/header.php';
      include "assets/db_includes/connect.php";
        
       ?>
   <body>
      <?php include 'assets/includes/navheader.php';?>
      <section class="heading-page header-text" id="top">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <!--<h6>Get all details</h6>-->
                  <h2>Students Academic Results</h2>
               </div>
            </div>
         </div>
      </section>
      <section class="our-facts">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="row">
                     <!--<div class="col-lg-12">
                        <h2>A Few Facts About Our University</h2>
                        </div>-->
                        <div class="offset-8 col-4">
                              <form class="form-inline" method="POST" action="results.php">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Date of Birth..." name="date_of_birth" required="required" value="<?php echo isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '' ?>"/>
                                    <button class="btn " name="search" style="background-color: orange;color:white"><span class="glyphicon glyphicon-search"></span>Search</button>
                               
                                 </div>
                              </form>
                           </div>
                     <div class="count-area-content" style="color:white;">
                        <div class="row">
                           <div class="col-12 accordion-head" style="color:orange;">
                              <span>Students Academic Result</span>
                           </div>
                        </div>
                        <table class="table" style="color:white;">
                           <thead style="color:cyan;">
                              <tr>
                                 <th>USN</th>
                                 <th>Marks</th>
                                 <th>Grade</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 if(isset($_POST['search'])){
                                   $keyword = $_POST['date_of_birth'];
                                  // require 'conn.php';
                                   $query = mysqli_query($conn, "SELECT * FROM `students_result` WHERE `date_of_birth` LIKE '%$keyword%' ORDER BY `date_of_birth`") or die(mysqli_error());
                                   while($row = mysqli_fetch_array($query)){
                                 ?> 
                              <?php //foreach ($properties as $val) : ?>
                              <tr style="color:white;">
                                 <td><?php echo $row['USN'];?></td>
                                 <td><?php echo $row['marks'];?></td>
                                 <td><?php echo $row['grade'];?></td>
                              </tr>
                              <?php }
                                 }
                                 ?>
                           </tbody>
                        </table>
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
   </body>
</html>