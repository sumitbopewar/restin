<style>
.information-block {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    z-index: 2;
}

footer {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    background: rgb(0, 26, 73);
    background: linear-gradient(142deg, rgba(0, 26, 73, 0.9864320728291317) 0%, rgba(0, 0, 96, 1) 17%, rgba(0, 52, 255, 1) 81%);
    color: white;
    /* background-image: url('WhatsApp Image 2023-07-28 at 4.40.49 PM.jpeg'); */
}

.footer-links {
    margin: 2rem
}

.copywrite {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin: 2rem;
    text-align: left;
}

.footer-links h4 {
    font-size: 1.7rem;
}

ul li {
    font-size: 1rem;
    list-style: none;
}

a {
    text-decoration: none;
    color: white;
    cursor: pointer;
}

a:hover {
    color: white;
}

.area {
    background: #264394;
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
    width: 100%;
    height: auto;
    position: absolute;
    padding-right: 5rem !important;
    padding-left: 4rem !important;
}

.circles {
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    margin: 0px;
}

.circles li {
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;

}

.circles li:nth-child(1) {
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2) {
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3) {
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4) {
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5) {
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6) {
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7) {
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8) {
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9) {
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10) {
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0% {
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100% {
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}

.footer_icons {
    width: 25px;
    height: 30px;
    margin: 5px;
    object-fit: scale-down;
}

@media screen and (max-width: 600px) {
    .area {
        padding-right: 1rem !important;
        padding-left: 1rem !important;
    }
}

.non-icon li {
    margin-bottom: 0.8rem;
}
</style>


<footer class="area">

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

    <style>

    </style>

    <div class="information-block">
        <div class="information footer-links">
            <h4>Products</h4>
            <ul class="non-icon">
                <li><a href="/home mattress">Mattress</a></li>
                <li><a href="">Royal Mattress</a></li>
                <li><a href="">Pillows</a></li>
                <li><a href="">Protector</a></li>
                <li><a href="">Topper</a></li>
            </ul>
        </div>

        <div class="important_links footer-links">
            <h4>Support</h4>
            <ul>
                <li><a href=""><img class="footer_icons" src="{{ asset('layouts/img/hospital.png') }}" alt="">Privacy &
                        policy</a></li>
                <li><a href=""><img class="footer_icons" src="{{ asset('layouts/img/terms-and-conditions.png') }}"
                            alt="">Terms & conditions</a></li>
                <li><a href="{{route('warranty')}}"><img class="footer_icons"
                            src="{{ asset('layouts/img/Warranty.png') }}" alt="">Warranty</a></li>
            </ul>
        </div>

        <div class="Collecitons footer-links">
            <h4>Payment Methods</h4>
            <ul>
                <li> <img class="footer_icons" src="{{ asset('layouts/img/visa.png') }}" alt="">Visa Card</li>
                <li><img class="footer_icons" src="{{ asset('layouts/img/money.png') }}" alt="">Mastercard</li>
                <li><img class="footer_icons" src="{{ asset('layouts/img/atm-card.png') }}" alt="">Debit Card
                </li>
                <li><img class="footer_icons" src="{{ asset('layouts/img/credit-card (1).png') }}" alt="">Credit Card
                </li>
                <li><img class="footer_icons" src="{{ asset('layouts/img/provider.png') }}" alt="">Bank Transfers</li>
                <li><img class="footer_icons" src="{{ asset('layouts/img/cashless-payment.png') }}" alt="">Mobile
                    payments</li>
            </ul>
        </div>

        <style>
        .social_icon {
            font-size: 1.5rem;
        }
        </style>
        <!-- 
        <div class="social-media footer-links">
            <h4>Social media</h4>
            <ul class="non-icon">
                <li><i class="fa-brands fa-square-facebook social_icon"></i> Facebook</li>
                <li><i class="fa-brands fa-square-instagram social_icon"></i> Instagram</li>
                <li><i class="fa-brands fa-square-twitter social_icon"></i> Twitter</li>
            </ul>
        </div> -->
    </div>

    <div class="copywrite ">
        <h4>Restin Industries</h4>
        <p><i class="fa-solid fa-location-dot"></i> N 101/7, MIDC, Hingna Road, Nagpur-440016
        <br>  <span style="margin-left: 1rem;">Maharashtra, India</span></p>
        <p><i class="fa-solid fa-phone"></i> +91 77559 18227</p>
        <p><i class="fa-solid fa-envelope"></i> customer@restin.in</p>
    </div>




</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>