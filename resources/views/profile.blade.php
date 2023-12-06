@extends('layouts.app')
@section('content')
<style>
        .ecommerce-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f4f4f4;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .feature, .additional-words {
            display: flex;
            align-items: center;
        }

        .feature i, .additional-words i {
            font-size: 24px;
            margin-right: 10px;
            color: #007bff; /* Icon color */
        }

        .additional-words {
            flex-direction: column;
        }
        .abc{
            min-height:100%;
            
        }
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999999999999999999;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Styles for the pop-up form container */
        .popup-container {
            background: white;
            padding: 20px;
            border: 1px solid #ccc;
            max-width: 50%;
            width: 100%;
            text-align: center;
            border-radius: 10px;
        }
        
      @media screen and (max-width: 800px) {
            .popup-container {
                max-width: 85%;
            }
        }

        /* Styles for the form fields and labels */
        .popup-form label, .popup-form input {
            display: block;
            margin: 10px 0;
        }

        /* Styles for the close button */
        .close-button {
            background-color: #ff5733;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

       
    </style>

    <div class="container-fluid py-5 bg-light px-3 px-lg-5 px-md-5">
        <div class="d-flex">
            <h2 class="fs-1 fw-lighter p-3 pb-0">Profile </h2> 
                       @if (session('success'))
                            <div id="success-message" class="alert alert-success mx-5 text-center w-100">
                                {{ session('success') }}
                            </div>
                        @endif
         </div>
        
        <div class="row p-3 justify-content-between border rounded-3">
            
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="fs-6 fw-bold">{{$user->name}}</div>
                <div class="p-1" style="word-spacing: 2px;">{{$user->email}}</div>
                    <div class="p-1">{{$user->mobile}}</div>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3">
                <div class="fs-6 fw-bold"> Address : </div>
                <div class="p-1" style="word-spacing: 2px;">
                    {{$user->address}}
                </div>
                <div class="p-1" style="word-spacing: 2px;">
                    {{$user->pin}}
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-lg-3 align-self-end">
               <button value="{{$user->id}}"  id="openForm" class="btn btn-outline-primary w-100 open-button">Edit profile</button>
                
            </div>
            
        </div>
        
    </div>  
    
    
        <div class="ecommerce-row row px-5 bg-light m-0">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="abc mx-3 feature bg-white rounded-3 shadow bg-white p-4 my-2"><i class="fas fa-shipping-fast"></i> Free Shipping</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="abc mx-3 feature bg-white rounded-3 shadow bg-white p-4 my-2"><i class="fas fa-shield-alt"></i> Buyer Protection</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="abc mx-3 feature bg-white rounded-3 shadow bg-white p-4 my-2"><i class="fas fa-money-bill"></i> COD/Online Payment</div>
            </div>
            <div class="col-12 col-sm-12 col-md-6">
                <div class="abc mx-3 feature bg-white rounded-3 shadow bg-white p-4 my-2">
                    <p class="m-0"><i class="fas fa-check-circle"></i> 100% Satisfaction Guarantee</p></div>
            </div>
        </div>
        
   <div class="overlay" id="formOverlay" style="display:none;">
        <div class="popup-container">
            <div class="d-flex justify-content-between">
                <h2>Update Profile</h2>
                <button class="close-button" id="closeForm">X</button>
            </div>    
            <form action="{{ url('profile/update/' . $user->id) }}" method="post" class="popup-form  text-start">
                @csrf
                <label class="form-lebel" for="name">Name</label>
                <input class="form-control" type="text" id="name" name="name" value="{{$user->name}}" required>
                
                <label class="form-lebel" for="email">Email</label>
                <input class="form-control" type="email" id="email" name="email" value="{{$user->email}}" required>
                
                <label class="form-lebel" for="mobile">Mobile Number</label>
                <input class="form-control" type="tel" id="mobile" name="mobile" value="{{$user->mobile}}" required>
                
                <label class="form-lebel" for="address">Address</label>
                <textarea class="form-control" type="text" id="address" name="address" required>{{$user->address}}</textarea>
                
                <label class="form-lebel" for="pincode">Pin Code</label>
                <input class="form-control" type="text" id="pincode" name="pin"  value="{{$user->pin}}" required>
                
                <input class="btn btn-success w-100 mt-5" type="submit" value="Update">
            </form>
        </div>
    </div>
     
    <script>
        const openFormButton = document.getElementById('openForm');
        const closeFormButton = document.getElementById('closeForm');
        const formOverlay = document.getElementById('formOverlay');

        openFormButton.addEventListener('click', () => {
            formOverlay.style.display = 'flex';
        });

        closeFormButton.addEventListener('click', () => {
            formOverlay.style.display = 'none';
        });
        
        
         $(document).ready(function() {
            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 5000);
        });
    </script>
        
    
@endsection