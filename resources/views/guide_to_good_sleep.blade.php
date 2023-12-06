@extends('layouts.app')
@section('content')

<h2 class=" text-center home_mattress_head" style="background-image: url('{{ asset("/layouts/img/back-2.jpeg") }}');"></h2>

<div class="container p2 page2 wow bounceInLeft">
    <div>
        <h4>BENEFITS OF GETTING GOOD SLEEP</h4>
        <p style="text-align: justify; margin: 0px;">When we sleep, our body restore, rejuvenate, and regenerate it is a time to recover from the previous day
            while repairing and preparing for the next. Adequate sleep reduces stress and illness, balances our
            emotions, and improves our overall well being. Sleep helps us conserve our energy resources to ensure
            maximum performance throughout the day.
        </p>
    </div>

    <div class="parent-content row">

        <div class="sub-content col-lg-6 wow bounceInLeft" style="margin-top: 25px;">

            <div class="mb-3">
                <h4>BENEFITS OF GETTING GOOD SLEEP</h4>
                <p style="text-align: justify">When we sleep, our body restore, rejuvenate, and regenerate. It is a time to recover from the
                    previous day while repairing and preparing for the next. Adequate sleep reduces stress and illness,
                    balances our emotions, and improves our overall well being. Sleep helps us conserve our energy
                    resources to ensure maximum performance throughout the day.
                </p>
            </div>

            <div>
                <h4>HEALTH BENEFITS OF A QUALITY MATTRESS </h4>
                <p style="text-align: justify; margin: 0px;">When it comes to getting adequate sleep, six hours of uninterrupted sleep is better than eight or
                    nine of fragmented sleep. Research shows that a mattress can either rob you of sleep, or encourage
                    it. If it's doing its job, it will reduce tossing and turning, provide proper spinal support,
                    improve circulation, and cushion the body's pressure points. A comfortable, supportive mattress can
                    provide significant relief to those with health issues and improve your chances of getting adequate
                    uninterrupted sleep.
                </p>
            </div>

        </div>


        <div class="p col-lg-6 wow bounceInRight" style="margin: auto;">
            <img class="para-img img-fluid wow bounceInRight" src="{{asset('layouts/img/young-woman-sleeping-home.jpg')}}" alt="" style="padding:20px; height:360px; width:100%">
        </div>

    </div>
</div>

<!-- Paragraph Section 1 -->
<div class="container md-5 mb-3 bottom_div" style="margin-top: 15px;">
    <div class="wow bounceInLeft">
        <div class="" style="margin-bottom: 3rem;">

            <h4>HOW DO YOU KNOW WHEN IT'S TIME FOR A NEW MATTRESS ?</h4>
            <p style="text-align: justify">Don't look at your warranty to tell you how long to keep your mattress. The warranty on a mattress is not
                an indicator of how long the product should be used before replacement. Normally, a mattress provides
                optimum service for about six to eight years of nightly use. If your mattress is no longer comfortable
                or supportive, and you're waking up tired, stiff, cranky, and with aching muscles and joints, it could
                be time for a new mattress.
            </p>

        </div>
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