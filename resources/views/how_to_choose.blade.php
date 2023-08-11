@extends('layouts.app')


@section('content')


<style>
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

<div class="container content_container">

    <div class="contents">
        <h3 class="mb-5" style="font-family: Courier New;">How to choose the right mattress</h3>
        <p class="mb-5">The difference between quality mattresses and less expensive mattresses includes features that
            you can visibly see and other features that are not visible. One can see the difference with the mattress
            top, the height of a mattress and the outer fabric; however you can’t see the construction materials used
            underneath the top layer. It’s a combination of all you can and can’t see, that make for a quality mattress.
            All these factors help determine the durability and firmness along with the overall comfort level a mattress
            can provide.</p>

        <h3 class="mb-5" style="font-family: Courier New;">For choosing the right mattress you can do the SLEEP test
        </h3>
        <div class="mb-5 f-size">
            <p> <span>S</span>elect a mattress.</p>
            <p> <span>L</span>ie down in your typical sleep position.</p>
            <p> <span>E</span>valuate the level of comfort and support.</p>
            <p> <span>E</span>ducate yourself about each selection.</p>
            <p> <span>P</span>artners should test beds together.</p>
        </div>

        <h3 class="mb-3" style="font-family: Courier New;">What to do with the old mattress</h3>
        <p class="mb-5">The best way to get rid of the old Mattress is to ask the store you purchase a new mattress from
            to pick up the old mattress. Recyclers usually pick up the old mattress from Retailers and grind down all of
            the materials for recycling.</p>

        <h3 class="mb-5 text-end" style="font-family: serif;">WE ALSO MAKE MATTRESS AS PER CUSTOMERS <br>
            SPECIFICATIONS.</h3>
        <p class="mb-5">Mattress are custom made to meet your sleeping needs and habits. You can choose the Thickness,
            Comfort level (Soft, Medium, Hard) & the Fabric to get the mattress you want at no extra cost.</p>


        <p class="mb-5  ">The best way to get rid of the old Mattress is to ask the store you purchase a new mattress from to pick up the old mattress. Recyclers usually pick up the old mattress from Retailers and grind down all of the materials for recycling.</p>

        <style>
        .img-responsive {
            width: 650px;
            height: 180px;
        }
        </style>

        <div class="mb-5" style="margin: auto; display: flex; justify-content: center;">
            <img src="{{asset('layouts/img/htc-img01.jpg')}}" class="img-responsive img-fluid" alt="">
        </div>

        <p class="mb-3">The following chart shows that Waist, Shoulders & Hips constitute 2/3 of the body weight while
            sleeping. These parts are provided extra cushioning to ensure proper body support.</p>
        <p class="mb-5">Restin Mattresses are designed to support body weight so that the Person is put to maximum ease
            and comfort while sleeping.</p>

        <div class="mb-5" style="margin: auto; display: flex; justify-content: center;">
            <img src="{{asset('layouts/img/htc-img2.jpg')}}" class="img-responsive img-fluid" alt="">
        </div>

    </div>

</div>

@endsection