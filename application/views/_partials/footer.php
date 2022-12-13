  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Narademy</h3>
            <p>
              Jln. Jatiwaringin <br>
              Jakarta Timur, DKI Jakarta<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 8381 8333 672<br>
              <strong>Email:</strong> info@narademy.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Courses</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Programming</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">SAP ERP</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cloud Computing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Digital Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Linux Infrastructure</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Follow us in our social media to get notified about our updates.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Narademy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  
<div class="modal" id="myModal">
   <div class="modal-dialog ">
       <div class="modal-content">
           <div class="modal-header">
              <h4 class="modal-title">Edit Profile</h4>
           </div>
          <div class="modal-body">
            <form class="form-horizontal" method="post" action="<?= base_url("setting_user/edit_profile") ?>">
                  <div class="modal-body">
  
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Name</label>
                          <div class="col-xs-8">
                              <input name="name" class="form-control" type="text" placeholder="Name..." required>
                          </div>
                      </div>
  
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Email</label>
                          <div class="col-xs-8">
                              <input name="email" class="form-control" type="text" placeholder="Email..." required>
                          </div>
                      </div>
  
                      <div class="form-group">
                          <label class="control-label col-xs-3" >Password</label>
                          <div class="col-xs-8">
                              <input name="password" class="form-control" type="password" placeholder="Password..." required>
                          </div>
                      </div>
                  </div>
            </div><br>
              <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                  <button class="btn btn-primary">Simpan</button>
              </div>
          </form>
       </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>