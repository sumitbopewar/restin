@extends('new_layouts.include.app')


@section('content')

<style>
    .img-footer {
        width: 100px;
        aspect-ratio: 3/2;
        object-fit: contain;
    }

    .fw-light {
        color: white;
        font-size: 3rem;
        font-weight: 600 !important;
    }

    .details {
        display: flex;
    }

    .detail {
        padding-left: 10px;
        font-size: 1.2rem;
    }

    .detail-head {
        font-size: 1.2rem;
        font-weight: 500;
    }
    .img_res{
    height: 40vh;
    background-position: 82%;
    background-size: cover;
    background-repeat: no-repeat;
    }
    .bg{
        background: #deeefa;
        outline: none;
    }
    .btn-info {
    color: #000;
    background-color: #0dcaf0;
    border: 1px solid #0dcaf0;
    }
</style>



<!-- Contact Image Section -->
<div class="d-flex justify-content-center align-items-center img_res" style="background-image: url('/layouts/img/contact header(1).png');">
    <div class="">

        <h2 class="fw-light"></h2>
        <!--<p class="text-dark"><a class="text-dark" href=""><i class="fa-solid fa-house pe-3"></i>Home <i class="fa-solid fa-arrow-right-long px-3"></i> </a>Contacts</p>-->

    </div>
</div>

 <div class="text-center py-3 wow fadeInUp">
    <h4 class="fw-bold pt-3">Get In Touch With Us</h4>
        <p class="text-secondary text-center px-2">For more information about our product & services, Please feel free
            to drop us
            an email.<br> Do Not Hesitate!</p>
</div>
<div class="container p-5">
    @if (session('success'))
              <script>
                            document.addEventListener("DOMContentLoaded", function () {
    
                                Swal.fire({
                                  title: 'Submited!',
                                    text: 'You will be contacted soon.',
                                    icon: 'success',
                                });
                                
                            });
                            </script>
        @endif
         @if (session('error'))
                           
                            <script>
                            document.addEventListener("DOMContentLoaded", function () {
    
                                Swal.fire({
                                   title: 'error!',
                                    icon: 'error',
                                });
                                
                            });
                            </script>
         @endif
    <div class="row d-flex justify-content-center align-items-center mb-4">
      
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 shadow  py-2 wow bounceInLeft">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3722.2135110700037!2d78.98993407479814!3d21.10405228518917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd495370eab2b61%3A0xc3d02fda1e4fceb!2sRestin%20Industries!5e0!3m2!1sen!2sin!4v1691574861221!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
       
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 py-2 wow bounceInRight">
            <div class="" style="min-height:100%;">
                <form class="" action="contact_detail" method="POST">
                    @csrf
                    <div class="my-2">
                        <input type="text" placeholder="Enter Name" name="name" class="bg border-0 ps-3 py-2 rounded-0 w-100" required>
                    </div>
                    <div class="row">
                        <div class="col-6 my-2">
                            <input type="email" placeholder="Enter Email" name="email" class="bg border-0 ps-3 py-2 rounded-0 w-100" required>
                        </div>
                        <div class="col-6 my-2">
                            <input type="tel" placeholder="Enter Mobile No." name="mobile"   class="bg border-0 ps-3 py-2 rounded-0 w-100" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <textarea class="bg border-0 ps-3 py-2 rounded-0 w-100 " name="message" placeholder="Comments" rows="5" required></textarea>
                    </div>
                    <div class="my-2">
                        <input type="submit" value="Submit" class="btn-info w-100 rounded-0">
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>





<!--footer-->

<script>
    $(document).ready(function() {
    $('.dropdown').hover(
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
        },
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
        }
    );
});
</script>

 <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 5000);
        });
    </script>
    
@endsection