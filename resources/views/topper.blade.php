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

        ul {
            margin-left: 2rem;
        }
    </style>

    <!--<h1>Home Mattress</h1>-->

    <h2 class=" text-center home_mattress_head"  style="background-image: url('{{ asset("/layouts/img/back-2.jpeg") }}');">Topper</h2>

    <div class="container product_container fonds">
        <p calss="">
            Mattress Toppers are the best way to enhance the Comfort of your Used Mattress without spending too much.
            Available in 2 models :Premium & Memory.

        </p>

        <h3>Premium</h3>

        <p>This High density Pu foam mattress topper provides FIRM support to give you a good night sleep. It replaces the
            discomfort of your sagged mattress as the Topper helps in providing all body support while sleeping. It adds to
            your sleeping experience and is comfortable for all kinds of sleepers.</p>
        <p>Firmness: Medium</p>

        <ul>
            <li>The mattress topper is made of High density Pu Foam.</li>
            <li>Fabric quality is Premium Damask Jaquard.</li>
            <li>There are elastic straps on all sides for acting as fasteners to your existing mattress.</li>
            <li>This mattress topper comes with 3 years of warranty.</li>
        </ul>


        <h3>Memory</h3>
        <p>This Memory foam mattress topper lets you tune the firmness and support of your mattress to give you the sleeping
            experience you have dreamed of. The topper is a good choice for sleepers with back, neck, and shoulder pain as
            well. No more tossing and turning all night long as RESTIN memory foam mattress topper is designed with a
            universal adaptive feel to provide the cooling, contouring and comfort so that you will wake up refreshed and
            rejuvenated regardless of your sleeping style</p>
        <p>Firmness: Medium Soft</p>

        <ul>
            <li>The mattress topper is made of memory foam.</li>
            <li>It comes with a detachable top cover.</li>
            <li>There are elastic straps on all sides for acting as fasteners to your existing mattress.</li>
            <li>This mattress topper comes with 3 years of warranty.</li>
            <li>It contours the body and distributes body weight evenly.</li>
        </ul>



    </div>
@endsection
