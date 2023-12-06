@extends('layouts.app')


@section('content')


<style>

@import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
    
*{
    font-family: 'Lato', sans-serif;
}

.content_container {
    margin-top: 8rem;
}

.f-size span {
    font-size: xxx-large;
    color: dimgrey;
}

.contents p {
    margin: 0;
}
</style>

        <style>
        .img-responsive {
            width: 476px;
            height: 95px;
            object-fit: contain;
        }
        </style>

<div class="container content_container">

    <div class="contents">
        
        <div class="row mb-3">
            
            <div class="col-lg-6 col-md-12 mb-4">
            <h3 class="mb-4">How to choose the right mattress</h3>
            <p class="mb-2">The difference between quality mattresses and less expensive mattresses includes features that
                you can visibly see and other features that are not visible. One can see the difference with the mattress
                top, the height of a mattress and the outer fabric; however you can’t see the construction materials used
                underneath the top layer. It’s a combination of all you can and can’t see, that make for a quality mattress.
                All these factors help determine the durability and firmness along with the overall comfort level a mattress
                can provide.</p>
                <h4 class="text-center mt-2 mb-2" style="font-size: 1.9rem;">Mattress size chart</h4>
                <img src="{{asset('layouts/img/mattress size chart.png')}}" class="img-fluid p-0" style="width: 440px; margin: auto; display: flex; justify-content: center;" alt="">
            </div>
                
            <img src="{{asset('layouts/img/royal-img2.jpg')}}" class="img-fluid col-lg-6 col-md-12 p-3" style="object-fit: contain;" alt="">
        
            <p>
                One of the most important factors to achieve a better night's sleep is a comfortable amount of space. Generally, a mattress should be longer and wider than the amount of space you and your partner users to sleep. The following size are a general guide to help you make a better decision.
            </p>
        </div>
        
        
        <!--<div class="mt-5 mb-5">-->
        <!--    <h4 class="text-center mb-4" style="font-size: 1.9rem; margin-top: -20px;">Mattress size chart</h4>-->
        <!--    <div class="mb-5" style="margin: auto; display: flex; justify-content: center;">-->
        <!--        <img src="{{asset('layouts/img/mattress size chart.png')}}" class="img-responsive img-fluid" alt="">-->
        <!--    </div>-->

            

            
        </div>
        <!--<h3 class="mb-5">For choosing the right mattress you can do the SLEEP test-->
        <!--</h3>-->
        <!--<div class="mb-5 f-size">-->
        <!--    <p> <span>S</span>elect a mattress.</p>-->
        <!--    <p> <span>L</span>ie down in your typical sleep position.</p>-->
        <!--    <p> <span>E</span>valuate the level of comfort and support.</p>-->
        <!--    <p> <span>E</span>ducate yourself about each selection.</p>-->
        <!--    <p> <span>P</span>artners should test beds together.</p>-->
        <!--</div>-->

        <!--<h3 class="mb-3">What to do with the old mattress</h3>-->
        <!--<p class="mb-5">The best way to get rid of the old Mattress is to ask the store you purchase a new mattress from-->
        <!--    to pick up the old mattress. Recyclers usually pick up the old mattress from Retailers and grind down all of-->
        <!--    the materials for recycling.</p>-->

        <h3 class="mb-3 text-center text-lg-end text-md-end">We also make mattress as per customers <br>
            specifications</h3>
        
        
        <div class="row mb-4">
            <img src="{{asset('layouts/img/mattress sizes.png')}}" class="img-fluid col-lg-6 col-md-12 p-3" alt="">
            <div class="col-lg-6 col-md-12">
            <p class="mb-2">Mattress are custom made to meet your sleeping needs and habits. You can choose the Thickness,
                Comfort level (Soft, Medium, Hard) & the Fabric to get the mattress you want at no extra cost.</p>
    
            <p class="mb-4">The best way to get rid of the old Mattress is to ask the store you purchase a new mattress from to pick up the old mattress. Recyclers usually pick up the old mattress from Retailers and grind down all of the materials for recycling.</p>
            </div>
        
        </div>



        <div class="mb-5" style="margin: auto; display: flex; justify-content: center;">
            <img src="{{asset('layouts/img/htc-img01.jpg')}}" class="img-responsive img-fluid p-1" alt="">
        </div>

        <p class="mb-3">The following chart shows that Waist, Shoulders & Hips constitute 2/3 of the body weight while
            sleeping. These parts are provided extra cushioning to ensure proper body support.</p>
        <p class="mb-5">Restin Mattresses are designed to support body weight so that the Person is put to maximum ease
            and comfort while sleeping.</p>

        <!--<div class="mb-5" style="margin: auto; display: flex; justify-content: center;">-->
        <!--    <img src="{{asset('layouts/img/mattress size chart.png')}}" class="img-responsive img-fluid" alt="">-->
        <!--</div>-->

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