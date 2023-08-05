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
            
            .product_container{
                margin-top: 2rem;
                margin-bottom: 2rem;
            }
            
              .pillow_img {
                object-fit: scale-down;
                /* width: 20%; */
                margin: auto;
            }
        
            .content_box{
                justify-content: space-around;
                padding: 15px;
                
            }
          
            
            .fonds{
                font-size: 1.1rem;
            }
            
                    .product_content{
            width: 50%;
            padding: 10px;
        }
        .pillow_img{
            width: 50%;
            padding: 10px;
        }
            
            @media screen and (max-width: 1000px) {
                .content_box{
                    flex-direction: column;
              }
                
                        .product_content{
                            width: 100%;
                        }
                        .pillow_img{
                            width: 100%;
                        }
            }
        
        
    </style>

    <h2 class=" text-center home_mattress_head" style="background-image: url('{{ asset("/layouts/img/back-2.jpeg") }}');">Protector</h2>
    
    <div class="container product_container fonds">
    
    <div class="d-flex content_box ">
        <div class="product_content">
            <ul>
                <li>Mattress Protector extends the life of your mattress. This will not change the feel of your mattress and provides comfort as it naturally absorbs moisture. 100% waterproof with airflow technology allows air to circulate through the protector, but repels liquids.</li>
                
                <li>Protects Mattress against allergens, dust mites, bacteria, perspiration, urine and fluids. Ideal for use when putting infants to bed to protect your mattress against bed wetting.</li>
                
                <li>Mattress Protector is made of Water proof, Dustproof fabric with the Top Surface of Premium Terry cloth with TPU coating on the back.</li>
                
                <li>PERFECT FIT: Fits your mattress of 78×72-inch size with thickness up to 10″ (skirting provided up to 18 “). Available in all sizes. Can be custom made also.</li>
                
                <li>EASY TO CLEAN: Machine washable, which adds the convenience of washing and drying easily. Use mild detergent and cold wash. While drying, keep the Terry Side up.</li>
                
                <li>Available in LIGHT & DARK shade.</li>
                
                <li>Available in REGULAR & PREMIUM model.</li>
                
            </ul>
        </div>
        <div class="pillow_img">
        <img src="{{asset('layouts/img/topper.jpeg')}}" class="product_img" alt="Pillow img">
        </div>
    </div>
   
    </div>

@endsection