<div class="area">
    <footer>
  <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <!-- <div class="information-block">
        <div class="information footer-links">
            <h5>Products</h5>
            <ul class="non-icon">
                <li class="footer_item"><a href="/home mattress">Mattress</a></li>
                <li class="footer_item"><a href="{{Route('royal')}}">Royal Mattress</a></li>
                <li class="footer_item"><a href="{{Route('pillows')}}">Pillows</a></li>
                <li class="footer_item"><a href="{{Route('protector')}}">Protector</a></li>
                <li class="footer_item"><a href="{{Route('topper')}}">Topper</a></li>
            </ul>
        </div>

        <div class="important_links footer-links">
            <h5>Support</h5>
            <ul>
                <li class="footer_item"><a href="{{ Route('policy') }}"><img class="new_footer_icons" src="{{ asset('layouts/img/hospital.png') }}" alt="">Privacy &
                        policy</a></li>
                <li class="footer_item"><a href="{{Route('conditions')}}"><img class="new_footer_icons" src="{{ asset('layouts/img/terms-and-conditions.png') }}"
                            alt="">Terms & conditions</a></li>
                <li class="footer_item"><a href="{{route('warranty')}}"><img class="new_footer_icons"
                            src="{{ asset('layouts/img/Warranty.png') }}" alt="">Warranty</a></li>

                <li class="footer_item"><a href="{{route('how_to_choose')}}"><img class="new_footer_icons"
                            src="{{ asset('layouts/img/check.png') }}" alt="">How to choose Right mattress?</a></li>
            </ul>
        </div>

        <div class="Collecitons footer-links">
            <h5>Payment Methods</h5>
           
            <ul class="d-flex">
                <div class="" style="margin-right: 10px">
                <li class="footer_item"> <img class="footer_icons" src="{{ asset('layouts/img/visa.png') }}" alt=""></li>
                <li class="footer_item"><img class="footer_icons" src="{{ asset('layouts/img/money.png') }}" alt=""></li>
                <li class="footer_item"><img class="footer_icons" src="{{ asset('layouts/img/atm-card.png') }}" alt=""></li>
                </div>
                <div class="" style="margin-right: 10px">
                <li class="footer_item"><img class="footer_icons" src="{{ asset('layouts/img/credit-card (1).png') }}" alt=""></li>
                <li class="footer_item"><img class="footer_icons" src="{{ asset('layouts/img/provider.png') }}" alt=""></li>
                <li class="footer_item"><img class="footer_icons" src="{{ asset('layouts/img/cashless-payment.png') }}" alt=""></li>
                </div>
            </ul>
        </div>

    </div>

    <div class="copywrite">
        <h5>Restin Industries</h5>
        <p class="footer_item">
            <i class="fa-solid fa-location-dot pe-2"></i>
            <a href="https://www.google.com/maps?q=N+101/7, MIDC, Hingna Road, Nagpur-440016, Maharashtra, India" target="_blank">
                N 101/7, MIDC, Hingna Road, Nagpur-440016<br>
                <span class="ms-1 ps-3">Maharashtra, India</span>
            </a>
        </p>
        <p class="footer_item"><i class="fa-solid fa-phone pe-2"></i> <a href="tel:+917755918227">+91 77559 18227</a></p>
        <p class="footer_item"><i class="fa-solid fa-envelope pe-2"></i> <a href="mailto:customer@restin.in">customer@restin.in</a></p>

        <ul class="non-icon d-flex">
            <li class="list-unstyled social">
                <a href="https://restin.in/" target="_blank">
                    <img class="footer_icons" src="{{ asset('layouts/img/facebook.png') }}" alt="Facebook">
                </a>
            </li>
            <li class=" list-unstyled social">
                <a href="https://restin.in/" target="_blank">
                    <img class="footer_icons" src="{{ asset('layouts/img/instagram.png') }}" alt="Facebook">
                </a>
            </li>
        </ul>
    </div>
    <div class="fixed-icon">
        <a href="https://wa.me/917755918227" target="_blank">
            <i class="bi bi-whatsapp text-white"></i>
        </a>
    </div>

</footer>
    <div class="bottom_copywrite footer_item">
        <p class=" footer_item">Copyright &copy; 2023 Restin Industries. All Rights Reserved</p>
    </div> -->

    <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
  <!-- Footer -->
  <footer
  class="text-center text-lg-start text-white"
  
  >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #6351ce"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://restin.in/" target="_blank" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://restin.in/" target="_blank" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="information-block">
    <div class="container text-center text-md-start mt-5 information footer-links">
      <!-- Grid row -->
      <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 g-4 mt-3 d-flex">
        <!-- Grid column -->
        <div class="col mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold text-white">Payment Methods</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <div class="row rows-cols-md-2 payment_methods_img d-flex justify-content-center align-items-center">
            <style>
              .payment_methods_img img{
                width: 100px; height: 100%; object-fit: scale-down;
              }
            </style>
          <img src="{{ asset('layouts/img/visa.png') }}" alt="" >
          <img class="footer_icons" src="{{ asset('layouts/img/money.png') }}" alt="">

          <img class="footer_icons" src="{{ asset('layouts/img/atm-card.png') }}" alt="">
          <img class="footer_icons" src="{{ asset('layouts/img/credit-card (1).png') }}" alt="">

          <img class="footer_icons" src="{{ asset('layouts/img/provider.png') }}" alt="">
          <img class="footer_icons" src="{{ asset('layouts/img/cashless-payment.png') }}" alt="">
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col mx-auto mb-4 ps-lg-5">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold text-white">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
            <a href="{{Route('homemattress')}}" class="text-white fs-6 fw-normal">Mattress</a>
          </p>
          <p>
            <a href="{{Route('royal')}}" class="text-white fs-6 fw-normal">Royal Mattress</a>
          </p>
          <p>
            <a href="{{Route('pillows')}}" class="text-white fs-6 fw-normal">Pillows</a>
          </p>
          <p>
           <a href="{{Route('protector')}}" class="text-white fs-6 fw-normal">Protector</a>
          </p>
          <p>
          <a href="{{Route('topper')}}" class="text-white fs-6 fw-normal">Topper</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold text-white">Supports</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p>
          <a href="{{ Route('policy') }}" class="text-white fs-6 fw-normal">Privacy & policy</a></
          </p>
          <p>
          <a href="{{Route('conditions')}}" class="text-white fs-6 fw-normal">Terms & conditions</a>
          </p>
          <p>
          <a href="{{route('warranty')}}" class="text-white fs-6 fw-normal">Warranty</a>
          </p>
          <p>
          <a href="{{route('how_to_choose')}}" class="text-white fs-6 fw-normal">How to choose Right mattress?</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="cold mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold text-white">Restin Industries</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #7c4dff; height: 2px"
              />
          <p><i class="fas fa-home mr-3 text-white"></i> 
              <a href="https://www.google.com/maps?q=N+101/7, MIDC, Hingna Road, Nagpur-440016, Maharashtra, India" target="_blank" class="ms-1 text-white fs-6 fw-normal"> 
                N 101/7, MIDC, Hingna Road, <br /> Nagpur-440016 Maharashtra, India
              </a></p>
          <p><i class="fas fa-envelope mr-3 text-white"></i><a href="mailto:customer@restin.in" class="ms-1 text-white fs-6 fw-normal"> customer@restin.in</a></p>
          <p><i class="fas fa-phone mr-3 text-white"></i><a href="tel:+917755918227" class="ms-1 text-white fs-6 fw-normal"> +91 77559 18227</a></p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
      Copyright ©  <a href="https://iceico.in/" target="_blank">restin.in</a> 2023
      Design by <a href="https://iceico.in/" target="_blank"> ICEICO Technology</a> <i class="mdi mdi-heart text-danger"></i>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</div>
<!-- End of .container -->
    
</div>

