@extends('layouts.app')


@section('content')




<style>
    .warranty_container{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        margin-top: 8rem;
        padding: 2rem;
        margin-bottom:5rem;
        background-size: cover;
    }
    
    ._warranty{
        margin-top:1.5rem;
        margin-bottom: 2rem
    }
    
    li{
        margin-bottom: 1rem;
        margin-top: 1rem;
    }
    
    ul{
        margin-left: 2rem;
    }
    
    .m_point{
        font-weight: 600;
    }
    
    p{
        /*font-size: 2rem;*/
    }
    
            .box {
            position: relative;
        }

        .corners {
            width: 10%;
            position: absolute;
        }

        .cor1 {
            top: 0;
            left: 0;
            
        }

        .cor2 {
            top: 0;
            right: 0;
        }

        .cor3 {
            bottom: 0;
            left: 0;
        }

        .cor4 {
            bottom: 0;
            right: 0;
        }
        .back_img{
            background:url('layouts/img/warrenty_family.png');
            background-size:100% 100%;
        }
</style>


<style>
    .privacy-page-top {
    color: #888888;
    font-family: 'Cabin', sans-serif;
    font-size: 1.5em;
    margin-top: 5%;
    font-weight: bold;
    margin-left: 12%;
}
.privacy-page-body {
    display: inline-block;
    margin-left: 12%;
    margin-right: 5%;
}

.privacy-page-title {
    font-family: "Roboto", sans-serif;
    color: #2781bc;
    font-size:4.5em;
    margin-bottom: 5%;
    font-weight: lighter;
    display: inline-block;
    width: 100%;
    margin-top: 26px;
}

.privacy-paragraph-heading {
    font-family: "Abhaya Libre", sans-serif;
    color: black;
    font-weight: bolder;
    font-size: 1.5em;
    margin-bottom: 3%;
}

.privacy-content {
    font-family: 'Abhaya Libre', sans-serif;
    margin-bottom: 8%;
    display: inline-block;
    width: 100%;
}

.privacy-paragraph-body{
    margin-right: 4%;
    margin-bottom: 4em;
}

.privacy-paragraph-text-followed{
    margin-bottom:1em;
    color: #717171;
}

.privacy-paragraph-text {
    color: #717171;
}

.privacy-paragraph-body {
    line-height: 2em;
    font-family: 'Cabin', sans-serif;
}

.privacy-policy-nav-menu {
    width:27%;
    display: inline-block;
    position: relative;
    vertical-align: top;
}

.privacy-nav-menu-wrapper{
    background-color: #f39c12;
    list-style-type: none;
    padding: 0;
    margin:0;
    display: block;
}

.privacy-nav-menu-wrapper a{
    display: block;
    height: inherit;
    width: inherit;
    padding-left: 1em;
    padding-bottom: 1em;
    padding-top: 1em;
}

.privacy-nav-menu2, .privacy-nav-menu1{
    display: block;
    background-color: #f39c12;
}
.site-map-link:hover, .privacy-policy-link, .privacy-policy-link:hover {
    color: white;
    text-decoration: none;

}

.privacy-nav-menu2 {
    background-color: white;
    border-bottom-width: 2px;
    border-bottom-style: groove;
    border-bottom-color: #f6f6f6;
}

.site-map-link{
    color: #f39c12;
    text-decoration: none;

}

.privacy-nav-menu2:hover{
    background-color: #f39c12;
}

@media (min-width: 481px) and (max-width:1080px){
    .privacy-content {
        font-family: 'Abhaya Libre', sans-serif;
        margin-bottom: 8%;
        display: inline-block;
        width: 100%;
    }
}
@media (max-width: 481px) {

    .privacy-page-body, .privacy-page-top, .privacy-page-title, .privacy-content {
        width: 90%;
        margin-right: 0;
        text-align: left;
    }

    .privacy-policy-nav-menu {
        width: 80%;
        margin-bottom: 3.5em;
    }

    .privacy-page-top {
        padding-bottom: 15px;
    }

    .privacy-page-title {
        font-size: 3em;
        line-height: 1em;
    }
}
</style>

<div class="container warranty_container overflow-hidden box pb-0 pe-0">
    
        <img src="layouts/img/corner_top_right.png" class="corners cor1">
        <img src="layouts/img/corner4.png" class="corners cor2">
        <!--<img src="layouts/img/corner2.png" class="corners cor3">-->
        <!--<img src="layouts/img/corner3.png" class="corners cor4">-->
    
<!--<h2 class="text-center _warranty" style="font-weight: bold;">WARRANTY CARD</h2>-->
<h2 class="text-center _warranty mt-0" style="font-weight: bold;">
    <img src="layouts/img/warrenty_text.png" class="w-50">
</h2>
<!-- <p class="m_point">Dear Customer,</p>
<p>Thank you for choosing a Restin Mattress!</p>
<p>Please follow the instructions to get the best out of your mattress</p>
<ul>
    <li>Whenever required, clean the mattress with white sprit and damp cloth. Avoid detergent and dry-cleaning chemical.</li>
    <li>If the mattress gets wet, ensure that it dries up under the fan and not under direct sunlight. </li>
    <li>Lay the mattress on uniform surface only. Do not keep any object under mattress.</li>
    <li>Length and width of the bed should match the size of mattress.</li>
    <li>Turn your mattress head to foot once in 2 months.</li>
    <li>Do not bend, fold, or roll the mattress. This may weaken the bonding and eventually lead to Sagging of the mattress.</li>
    <li>Do not light a match or smoke near the mattress, the material used in the mattress can catch fire,    keep mattress away from flame.</li>
    <li>Avoid sitting on the edges or keeping heavy objects on it-it could ruin the Shape.</li>
</ul>

<p class="m_point">Terms Of Warranty</p>
<p> The company will replace the defective mattress, in a reasonable period of time. The company reserves the right to replace the defective product with a product of equal or higher value (with the extra charges being borne by the customer) and does not guarantee an exact match to your current mattress.</p>
<ul>
    <li>Warranty period is valid as mentioned in the table against material & workmanship defects. </li>
    <li>Body indentations are a normal occurrence in a new mattress and indicate the upholstery Layers are conforming to your body's contours.</li>
    <li>The defective mattress will be replaced by Restin Industries (hereafter referred to as The  Company) as per requirement.</li>
    <li>The warranty card must be stamped and signed by the dealer and produced along with the Invoice failing which the replacement will be considered void.</li>
    <li>The dealer should be contacted in case of any defects or please email to our Customer care.</li>
</ul>

<p class="m_point">The warrantee card is not valid for:</p>
<ul>
    <li>Customized sizes.</li>
    <li>Damage resulting from accidents, mishandling, burns and improper usage.</li>
    <li>Fabric damages such as tears, stains, colour fading, bleeding, </li>
    <li>Sagging due to improper bed stead (using of slats)</li>
    <li>Mattress not purchased from authorized dealers </li>
    <li>Folded mattress Wet mattress Mismatch in size of bed and mattress</li>
    <li>While the company will endeavour to replace the tem under warranty as soon as possible, it is not liable to do so within any specified time.</li>
    <li>The decision of the company regarding the nature of defects and applicability of this warranty will be final.</li>
    <li>Warranty does not cover depression of less than 25 mm.</li>
    <li>Models that are discontinued must be upgraded to equivalent or higher model with applicable price difference being borne by customer.</li>
    <li>Product features, specifications and guarantee terms are subject to change without notice.</li>
    <li>The Warranty period on a replaced product shall be automatically reduced to the balance period, as computed from the date of first sale of the product.</li>
    <li>Pro rata Warranty is applicable to this Product. The Rebate will be calculated on the Price paid by the Customer as mentioned in the Invoice. The Fixed warranty and pro rata Warranty are mentioned in the warranty card e.g. 2+3 = 5 i.e. Fixed  warranty 2 years + Extended pro rata warranty 3 years. This means that for the initial period of 2 years (fixed warranty period) we will provide Free Repairs or Replacement (at the discretion of the Company) to the customer.</li>
</ul>


<p class="m_point">Calculation of Pro rata Warranty.</p>
<div class="row">
    <div class="col-md-7 col-lg-7 col-sm-12">
        <ul class="pb-4">
            <li>Mattress Purchase Price Rs. 10000/-</li>
            <li>Warranty period: 2+3 = 5 years</li>
            <li>Customer usage: 4 years</li>
            <li class="my-0">Balance warranty period: 1 year</li>
            <li>Calculation: 10000*1/5 = Rs.2000</li>
            <li >Will be the rebate provided to the Customer while buying a new Restin mattress.</li>
            <li style="text-align: justify;">Claim, if any arising from the warranty will be restricted to courts within the Nagpur jurisdiction only.</li>
            <li style="text-align: justify;" class="my-0">Any implied warranty on this product, including any implied warranty of merchantability or fitness for particular purpose, shall not exceed in duration the term of his limited warranty, which begins with the date of purchase by the consumer. The terms in this warrantee shall be the consumer's sole and exclusive remedy in the event of product failure during the warrantee period. We shall not be liable for incidental or consequential damages arising out of the use of this product or the inability to use the product, or the breach of this or any other express or implied warranty. </li>
        </ul>
    </div>
    <div class="col-md-5 col-lg-5 col-sm-12 ">
        <img src="layouts/img/warrenty_family.png">
    </div>
</div> -->

    <div class="privacy-page-body">
        <div class="privacy-content">
            <div class="privacy-paragraph-heading">Dear Customer</div>
            <div class="privacy-paragraph-body privacy-paragraph-text">
                <p>Thank you for choosing a Restin Mattress!</p>
                <p>Please follow the instructions to get the best out of your mattress</p>
            </div>
            <div class="privacy-paragraph-body privacy-paragraph-text-followed">
                <ul>
                    <li><p>Whenever required, clean the mattress with white sprit and damp cloth. Avoid detergent and dry-cleaning chemical.</p></li>
                    <li><p>If the mattress gets wet, ensure that it dries up under the fan and not under direct sunlight.</p></li>
                    <li><p>Lay the mattress on uniform surface only. Do not keep any object under mattress.</p></li>
                    <li><p>Length and width of the bed should match the size of mattress.</p></li>
                    <li><p>Turn your mattress head to foot once in 2 months.</p></li>
                    <li><p>Do not bend, fold, or roll the mattress. This may weaken the bonding and eventually lead to Sagging of the mattress.</p></li>
                    <li><p>Do not light a match or smoke near the mattress, the material used in the mattress can catch fire, keep mattress away from flame.</p></li>
                    <li><p>Avoid sitting on the edges or keeping heavy objects on it-it could ruin the Shape.</p></li>
                </ul>
            </div>
            <div class="privacy-paragraph-heading">Terms Of Warranty</div>
            <div class="privacy-paragraph-body privacy-paragraph-text-followed">
                <p>The company will replace the defective mattress, in a reasonable period of time. The company reserves the right to replace the defective product with a product of equal or higher value (with the extra charges being borne by the customer) and does not guarantee an exact match to your current mattress.</p>
                <ul>
                    <li><p>Warranty period is valid as mentioned in the table against material & workmanship defects.</p></li>
                    <li><p>Body indentations are a normal occurrence in a new mattress and indicate the upholstery Layers are conforming to your body's contours.</p></li>
                    <li><p>The defective mattress will be replaced by Restin Industries (hereafter referred to as The Company) as per requirement.</p></li>
                    <li><p>The warranty card must be stamped and signed by the dealer and produced along with the Invoice failing which the replacement will be considered void.</p></li>
                    <li><p>The dealer should be contacted in case of any defects or please email to our Customer care.</p></li>
                </ul>
            </div>
                <div class="privacy-paragraph-body privacy-paragraph-text-followed">
                        <p>The warrantee card is not valid for:</p>
                        <ul>
                            <li><p>Customized sizes.</p></li>
                            <li><p>Damage resulting from accidents, mishandling, burns and improper usage.</p></li>
                            <li><p>Fabric damages such as tears, stains, colour fading, bleeding,</p></li>
                            <li><p>Sagging due to improper bed stead (using of slats)</p></li>
                            <li><p>Mattress not purchased from authorized dealers</p></li>
                            <li><p>Folded mattress Wet mattress Mismatch in size of bed and mattress</p></li>
                            <li><p>While the company will endeavour to replace the tem under warranty as soon as possible, it is not liable to do so within any specified time.</p></li>
                            <li><p>The decision of the company regarding the nature of defects and applicability of this warranty will be final.</p></li>
                            <li><p>Warranty does not cover depression of less than 25 mm.</p></li>
                            <li><p>Models that are discontinued must be upgraded to equivalent or higher model with applicable price difference being borne by customer.</p></li>
                            <li><p>Product features, specifications and guarantee terms are subject to change without notice.</p></li>
                            <li><p>The Warranty period on a replaced product shall be automatically reduced to the balance period, as computed from the date of first sale of the product.</p></li>
                            <li><p>Pro rata Warranty is applicable to this Product. The Rebate will be calculated on the Price paid by the Customer as mentioned in the Invoice. The Fixed warranty and pro rata Warranty are mentioned in the warranty card e.g. 2+3 = 5 i.e. Fixed warranty 2 years + Extended pro rata warranty 3 years. This means that for the initial period of 2 years (fixed warranty period) we will provide Free Repairs or Replacement (at the discretion of the Company) to the customer.</p></li>
                        </ul>
                    </div>
                    <div class="privacy-paragraph-heading">Calculation of Pro rata Warranty.</div>
                    <div class="privacy-paragraph-body privacy-paragraph-text">
                        <ul>
                            <li><p>Mattress Purchase Price Rs. 10000/-</p></li>
                            <li><p>Warranty period: 2+3 = 5 years</p></li>
                            <li><p>Customer usage: 4 years</p></li>
                            <li><p>Balance warranty period: 1 year</p></li>
                            <li><p>Calculation: 10000*1/5 = Rs.2000</p></li>
                            <li><p>Will be the rebate provided to the Customer while buying a new Restin mattress.</p></li>
                            <li><p>Claim, if any arising from the warranty will be restricted to courts within the Nagpur jurisdiction only.</p></li>
                            <li><p>Any implied warranty on this product, including any implied warranty of merchantability or fitness for particular purpose, shall not exceed in duration the term of his limited warranty, which begins with the date of purchase by the consumer. The terms in this warrantee shall be the consumer's sole and exclusive remedy in the event of product failure during the warrantee period. We shall not be liable for incidental or consequential damages arising out of the use of this product or the inability to use the product, or the breach of this or any other express or implied warranty.</p></li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="div">
                    <img src="layouts/img/warrenty_family.png">
                </div> -->
                <!-- <div class="privacy-policy-nav-menu">
                    <ul class="privacy-nav-menu-wrapper">
                        <li class='privacy-nav-menu1' ><a href="../privacy" class="privacy-policy-link">Privacy Policy </a></li>
                        <li class="privacy-nav-menu2" ><a href="#" class="site-map-link">Site Map</a></li>
                    </ul>
                </div> -->
        </div>

</div>

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

@endsection