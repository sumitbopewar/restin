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
</style>
<style>
    .product_container {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .pillow_img {
        object-fit: scale-down;
        /* width: 20%; */
        margin: auto;
    }

    .content_box {
        justify-content: space-around;
        padding: 15px;

    }


    .fonds {
        font-size: 1.1rem;
    }

    .product_content {
        width: 50%;
        padding: 10px;
    }

    .pillow_img {
        width: 50%;
        padding: 10px;
    }

    @media screen and (max-width: 1000px) {
        .content_box {
            flex-direction: column;
        }

        .product_content {
            width: 100%;
        }

        .pillow_img {
            width: 100%;
        }
    }
</style>

<!--<h1>Home Mattress</h1>-->

<h2 class=" text-center home_mattress_head" style="background-image: url('{{ asset("/layouts/img/back-2.jpeg") }}');">Pillow</h2>

<!--</section>-->
<div class="container product_container fonds ">
    <h3 style="font-size:50px;">Pillow</h3>
    <p calss="">
        The perfect mattress should always have the perfect pillows to accompany it ! <br> Your investment in your sleep has only been met halfway if you don’t have great pillows, too.
    </p>



    <div class="d-flex content_box ">
        <div class="product_content" style="align-self: center;">
            <h3 style="margin-bottom:10px;">Fiber Pillows</h3>
            <p style="text-align: justify">Pillows are filled with hypoallergenic polyester fibers-Polyester is a synthetic fabric engineered to mimic the softness, coolness, and breathability of natural cotton. They come in a wide range of sizes, as well as loft and firmness settings. It provides good support, is light weight, and spot washable.</p>
        </div>
        <div class="pillow_img">
            <img src="{{asset('layouts/img/pillow1.png')}}" class="product_img" alt="Pillow img" style="height: 300px; width: 560px;">


        </div>
    </div>
    <div class="d-flex content_box ">
    <div class="product_content">
        <h3>MEMORY FOAM PILLOWS</h3>
        <ul>
            <li style="margin: 10px"><b>Prevents cricks in your neck-</b> The dense material of a memory foam pillow prevents your neck from bending in awkward directions. This is why they are great to use when traveling.</li>
            <li style="margin: 10px"><b>Keeps your spine aligned-</b> As the memory foam pillow prevents your neck from bending, it allows your spine to remain aligned.</li>
            <li style="margin: 10px"><b>Molds to the shape of your head –</b> Memory foam pillows contour to the shape of your head, just as a memory foam mattress contours itself to your body.</li>
            <li style="margin: 10px">Memory foam pillows are available in a variety of shapes, which is convenient because the type of pillow needed will vary based upon your sleeping position.</li>
            <li style="margin: 10px"><b>No adjusting-</b> Memory foam does not require flipping, fluffing, or any of the adjustments of a regular pillow, as it will retain its shape and size.</li>
            <li style="margin: 10px"><b>Reduces snoring-</b> Regular pillows tilt your head upwards, causing air passages to close, However, memory foam pillows contour to your neck, allowing your air passages to remain open.</li>
        </ul>
    </div>
    <div class="pillow_img">
        <img src="{{asset('layouts/img/pillow.jpeg')}}" class="product_img" alt="Pillow img">
    </div>
</div>
</div>



@endsection