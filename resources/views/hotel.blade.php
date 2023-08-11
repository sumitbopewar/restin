@extends('layouts.app')


@section('content')
<style>
.card {
    width: 400px;
    margin: 20px;
    padding: 0px;
}

.card-img-top:hover {
    position: relative;
    float: center;
    z-index: 2;
    width: 400px;
    height: auto;
    transform: scale(1.1);
    transition: transform 0.3s ease-in-out;
}

p{
    font-size: 1.2rem;
}
</style>


<h2 class=" text-center home_mattress_head" style="background-image: url('{{ asset('/layouts/img/back-2.jpeg') }}');">
    Hotel Mattress</h2>


<div class="container p2 page2">
    <div>
        <h4>BENEFITS OF GETTING GOOD SLEEP</h4>
        <p style="text-align: justify">When we sleep, our body restore, rejuvenate, and regenerate it is a time to
            recover from the previous day
            while repairing and preparing for the next. Adequate sleep reduces stress and illness, balances our
            emotions, and improves our overall well being. Sleep helps us conserve our energy resources to ensure
            maximum performance throughout the day.
        </p>
    </div>

    <div class="parent-content row" style="margin-top: 30px;">

        <div class="sub-content col-lg-6" style="margin-top: 25px;">

            <div class="mb-3">
                <h4>BENEFITS OF GETTING GOOD SLEEP</h4>
                <p style="text-align: justify">When we sleep, our body restore, rejuvenate, and regenerate. It is a time
                    to recover from the
                    previous day while repairing and preparing for the next. Adequate sleep reduces stress and illness,
                    balances our emotions, and improves our overall well being. Sleep helps us conserve our energy
                    resources to ensure maximum performance throughout the day.
                </p>
            </div>

            <div>
                <h4>HEALTH BENEFITS OF A QUALITY MATTRESS </h4>
                <p style="text-align: justify">When it comes to getting adequate sleep, six hours of uninterrupted sleep
                    is better than eight or
                    nine of fragmented sleep. Research shows that a mattress can either rob you of sleep, or encourage
                    it. If it's doing its job, it will reduce tossing and turning, provide proper spinal support,
                    improve circulation, and cushion the body's pressure points. A comfortable, supportive mattress can
                    provide significant relief to those with health issues and improve your chances of getting adequate
                    uninterrupted sleep.
                </p>
            </div>

        </div>


        <div class="p col-lg-6" style="margin: auto;">
            <img class="para-img img-fluid" src="{{asset('layouts/img/royal-img1.jpg')}}" alt=""
                style="padding: 0px; height:auto; width:100%">
        </div>

    </div>
</div>

<div class="container md-5 mb-3" style="margin-top: 30px;">
    <div class="">
        <div class="">

            <h4>HOW DO YOU KNOW WHEN IT'S TIME FOR A NEW MATTRESS ?</h4>
            <p style="text-align: justify">Don't look at your warranty to tell you how long to keep your mattress. The
                warranty on a mattress is not
                an indicator of how long the product should be used before replacement. Normally, a mattress provides
                optimum service for about six to eight years of nightly use. If your mattress is no longer comfortable
                or supportive, and you're waking up tired, stiff, cranky, and with aching muscles and joints, it could
                be time for a new mattress.
            </p>

        </div>

    </div>

</div>

<div class="container md-5 mb-3" style="margin-top: 30px; ">
    <div class="">
        <div class="">

            <h4>HOW TO CHOOSE THE RIGHT MATTRESS</h4>
            <div class="row">
                <div class="col-lg-6 col-md-12 m-auto">
                <p style="text-align: justify margin: auto">The difference between quality mattresses and
                    less
                    expensive mattresses includes features that you can
                    visibly see and other features that are not visible. One
                    can see the difference with the mattress top, the height
                    of a mattress and the outer fabric however, you can't see
                    the construction materials used underneath the top layer.
                    It's a combination, of all you can and can't see, that make for a quality mattress. All these factors help determine the durability and firmness along with the overall comfort level a mattress can provide. <br> One of the most important factors to achieve a better night's sleep is a comfortable amount of space. Generally, a mattress should be longer and wider than the amount of space you and your partner uses to sleep. The following sizes are a general guide to help you make a better decision.
                </p>
                </div>
                <div class="p col-lg-6 col-md-12" style="margin: auto;">
                    <img class="para-img img-fluid" src="{{asset('layouts/img/royal-img2.jpg')}}" alt=""
                        style="padding: 0px; height:auto; width:100%">
                </div>
            </div>
        </div>

    </div>

</div>


<div class="container md-5 mb-3" style="margin-top: 30px; ">
    <div class="">
        <div class="">

            <h4>POCKET SPRING</h4>
            <div class="row">
                <div class="col-lg-6 col-md-12 m-auto">
                <p style="text-align: justify margin: auto">
                Pocket spring case encased in layers of high density foam with proper pillar support to give you good spinal support and undisturbed sleep. Comes in variety of thickness to suit your requirement. Available in 6", 8”,10” & 12"
                </p>
                </div>
                <div class="p col-lg-6 col-md-12" style="margin: auto;">
                    <img class="para-img img-fluid" src="{{asset('layouts/img/Inspiring Pocket 3d layers.png')}}" alt=""
                        style="padding: 0px; height:auto; width:100%">
                </div>
            </div>
        </div>

    </div>

</div>




<!-- Card section -->

<section class="mx-3">
    <div class="row d-flex justify-content-center align-items-center cart-container">

        @foreach ($hotel as $item)
        <div class="_card col-lg-4 col-md-6">
            <div class="card-img">
                <img src="{{ asset('layouts/img/'.$item->image) }}" class="product_img" alt="" srcset="">
            </div>
            <div class="card-info">
                <p class="text-title product_name">{{$item->product}}</p>
            </div>
            <div class="_card-footer">
                <span class="text-title _product_price">Rs. {{$item->price}}</span>
                <div class="_card-button">
                    <a href="#"><i class="bi bi-cart3 cart_logo"></i></a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</section>


<!-- Carts Ends -->
@endsection