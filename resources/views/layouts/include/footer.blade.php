<style>
    .information-block {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
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
        text-align: right;
    }

    .footer-links h4 {
        font-size: 1.7rem;
    }

    ul li {
        font-size: 1rem;
        list-style: none;
    }

    /*  ul{
            padding-left: 0px;
        } */

    a {
        text-decoration: none;
        color: white;
        cursor: pointer;
    }

    .area {
        background: #264394;
        background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
        width: 100%;
        height: auto;
        position: absolute;
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

    <div class="information-block">
        <div class="information footer-links">
            <h4>Products</h4>
            <ul>
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
                <li><a href="">Privacy & policy</a></li>
                <li><a href="">Terms & conditions</a></li>
                <li><a href="">Warrenty</a></li>
            </ul>
        </div>

        <div class="Collecitons footer-links">
            <h4>Payment Methods</h4>
            <ul>
                <li>Visa Card</li>
                <li>Mastercard</li>
                <li>Debit Card</li>
                <li>Credit Card</li>
                <li>Bank Transfers</li>
                <li>Mobile payments</li>
            </ul>
        </div>
    </div>

    <div class="copywrite"> 
        <h3>Restin</h3>
        <p>Copyright © 2023 All rights reserved</p>
    </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
