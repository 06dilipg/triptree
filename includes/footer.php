  <!--================Footer Area =================-->

  <footer class="footer_area">

      <div class="footer_widget_area">

          <div class="container">

              <div class="row">

                  <div class="col-md-3 col-xs-6">

                      <aside class="f_widget about_widget">

                          <div class="f_title">

                              <h3>About Triptree</h3>

                          </div>

                          <p class="text-justify text-white">Triptree established by the people who are close to nature, with land and seas rich in wildlife and their strategy to help people reconnect with the nature and benefit from proximity to wildlife brings to you exquisite and serene accommodation.</p>

                      </aside>

                  </div>

                  <div class="col-md-3 col-xs-6">

                      <aside class="f_widget link_widget">

                          <div class="f_title">

                              <h3>Our Services</h3>

                          </div>

                          <ul>

                              <li><a href="about-us.php">- About Us</a></li>

                              <li><a href="homestay.php">- Homestay</a></li>

                              <li><a href="#">- Resorts</a></li>

                              <li><a href="#">- Happy Farms</a></li>

                          </ul>

                      </aside>

                  </div>

                  <div class="col-md-3 col-xs-6">

                      <aside class="f_widget link_widget">

                          <div class="f_title">

                              <h3>Extra Links</h3>

                          </div>

                          <ul>

                              <li><a href="faqs.php">- Faq’s</a></li>

                              <li><a href="terms-and-conditions.php">- Terms &amp; Conditions</a></li>

                              <li><a href="privacy-policy.php">- Privacy Policy</a></li>                              

                              <li><a href="contact-us.php">- Contact Us</a></li>

                          </ul>

                      </aside>

                  </div>

                  <div class="col-md-3 col-xs-6">

                      <aside class="f_widget about_widget text-white">



                          <div class="ab_wd_list">

                              <div class="f_title">

                                  <h3>Contact Us</h3>

                              </div>

                              <div class="media">

                                  <div class="media-left">

                                      <i class="fa fa-map-marker"></i>

                                  </div>
                      <?php
           $sql=      ("SELECT * FROM cms_contact");
           $res = $conn->query($sql);
            
            if($res->num_rows>0){

            while($row = mysqli_fetch_assoc($res)){
            $cnt_address = $row['cnt_address'];
            $cnt_email = $row['cnt_email'];
            $cnt_phno = $row['cnt_phno'];
            ?> 
                                  <div class="media-body">

                                      <h4><?php echo $cnt_address; ?></h4>

                                  </div>

                              </div>

                              <div class="media">

                                  <div class="media-left">

                                      <i class="fa fa-phone"></i>

                                  </div>

                                  <div class="media-body">

                                      <h4><?php echo $cnt_phno; ?></h4>

                                  </div>

                              </div>

                              <div class="media">

                                  <div class="media-left">

                                      <i class="fa fa-envelope"></i>

                                  </div>

                                  <div class="media-body">

                                      <h4><?php echo $cnt_email; ?></h4>

                                  </div>

                                <?php }}?>

                              </div>

                          </div>

                      </aside>

                  </div>

              </div>

          </div>

      </div>

      <div class="footer_copyright_area">

          <div class="container">

              <div class="text-center">

                  <h6>Copyright © Triptree 2019 . All rights reserved. </h6>

              </div>

          </div>

      </div>

  </footer>

  <!--================End Footer Area =================-->



  <!--================Search Box Area =================-->

  <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">

      <div class="search_box_inner">

          <h3>Search</h3>

          <div class="input-group">

              <input type="text" class="form-control" placeholder="Search for...">

              <span class="input-group-btn">

                  <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>

              </span>

          </div>

      </div>

  </div>

  <!--================End Search Box Area =================-->











  <!--================End Footer Area =================-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="js/jquery-2.2.4.js"></script>

  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="js/bootstrap.min.js"></script>

  <!-- Rev slider js -->

  <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>

  <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>

  <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>

  <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

  <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>

  <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>



  <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>

  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>

  <script src="vendors/isotope/isotope.pkgd.min.js"></script>

  <script src="vendors/counterup/waypoints.min.js"></script>

  <script src="vendors/counterup/jquery.counterup.min.js"></script>

  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>

  <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>

  <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>

  <!--        <script src="vendors/lightbox/js/lightbox.min.js"></script>-->

  <script src="vendors/lightbox/simpleLightbox.min.js"></script>



  <!-- instafeed-->





  <script src="js/gallery.js"></script>

  <script src="js/theme.js"></script>

  </body>
 


  </html>

