<footer id="footer" class="footer">
    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-6 d-flex align-items-center justify-content-center">
            <div class="footer-info">
              
              <h3 style="text-align: center">{{ $profile['name'] }}</h3>
              <div class="d-flex align-items-center justify-content-center">
                <p>
                  {{ $profile['address'] }}
                  {{ $profile['address2'] }}<br>
                </p>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-4 col-md-6 d-flex align-items-center justify-content-center">
            <div class="footer-info">
            <h4>Kontak Kami</h4>
            <div class=" d-flex align-items-center justify-content-center"></div>
              <p>
                <div class="row">
                  <div class="col-3">
                    <strong>Phone:</strong>
                  </div>
                  <div class="col-9">
                    {{ $profile['contact'] }}<br>
                    {{ $profile['contact2'] }}
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <strong>Email:</strong>
                  </div>
                  <div class="col-9">
                    {{ $profile['email'] }}
                  </div>
                </div>
              </p>
              <div class="social-links d-flex mt-3 ">
                <a href="#" class="d-flex align-items-center justify-content-center" onClick="return false;"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center" onClick="return false;"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center" onClick="return false;"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center" onClick="return false;"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer links column-->
        </div>
      </div>
    </div>

    {{-- <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div> --}}

  </footer>
  <!-- End Footer -->