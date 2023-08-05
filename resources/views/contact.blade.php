@extends('layouts.app')


@section('content')

<style>
    .img-footer{
        width:100px;
        aspect-ratio: 3/2;
    object-fit: contain;
    }
    
    .fw-light{
        color: white;
        font-size: 3rem;
        font-weight: 600 !important;
    }
    .details{
        display: flex;
    }
    .detail{
        padding-left: 10px;
        font-size: 1.2rem;
    }
    .detail-head{
        font-size: 1.2rem;
        font-weight: 500;
    }
</style>


<!-- Contact Image Section -->
<div class="d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('/layouts/img/background_mattress.jpg') }}');height: 400px;
    background-size: cover;">
     <div class="">
        
            <h2 class="fw-light">Contacts</h2>
           
    </div>
</div>

<div class="text-center py-3">
    <h4 class="fw-bold pt-3">Get In Touch With Us</h3>
    <p class="text-secondary text-justify px-2">For more Information About Our Product & Services. Please Feel Free To Drop Us 
    An Email. Our Staff Always BE there To Help You Out. Do Not Hesitate!</p>
</div>
<div class="container pb-2">
    <div class="row d-flex justify-content-center align-items-center">
        
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 ">
           <div class="" style="min-height:100%;">
            <form class="" >
                <div class="my-2">
                    <input type="text" placeholder="Enter Name" class="bg border-0 ps-3 py-2 rounded-0 w-100">
                </div>
                <div class="row">
                    <div class="col-6 my-2">
                    <input type="email" placeholder="Enter Email" class="bg border-0 ps-3 py-2 rounded-0 w-100">
                    </div>
                    <div class="col-6 my-2">
                    <input type="number" placeholder="Enter Mobile No." class="bg border-0 ps-3 py-2 rounded-0 w-100">
                    </div>
                </div>
                <div class="my-2">
                    <textarea class="bg border-0 ps-3 py-2 rounded-0 w-100 " placeholder="Comments" rows="5"></textarea>
                </div>
                <div class="my-2">
                    <input type="submit" value="Submit" class="btn btn-info w-100 rounded-0">
                </div>
                
            </form>
            </div>
        </div>
        
    </div>
</div>  


@endsection