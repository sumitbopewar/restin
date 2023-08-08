@extends('layouts.app')


@section('content')


<style>
    .content_container{
        margin-top: 8rem;
    }
    
        .contents p{
        width: 50%;
        margin: auto;
    }
    
    .contents img{
        width: 50%;
        margin: auto;
    }
    
    .contents{
        display: flex;
        margin-bottom: 2rem;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    
    
    @media screen and (max-width: 1000px) {
        
    .contents{
            flex-direction: column;
        }
    .contents p{
        width: 100%;
    }
    .contents img{
        width: 100%;
    }
}
</style>

    <div class="container content_container">
        
        <h2>How To Choose The Right Mattress</h2>
        <div class="contents">
        <p>
            The difference between quality mattresses and less
         expensive mattresses includes features that you can
         visibly see and other features that are not visible. One
        can see the difference with the mattress top, the height 
        of a mattress and the outer fabric however, you can't see
         the construction materials used underneath the top layer.
         It's a combination, of all you can and can't see, that make for a quality mattress. All these factors help determine the durability and firmness along with the overall comfort level a mattress can provide.
        
        </p>
    
        <img src="matress/images/mattress_thickness.jpeg" alt="mattress size chart">
        </div>
        
        <div class="contents">
            <img src="matress/images/types_of_mattress.jpeg" alt="mattress size chart">
            <p>One of the most important factors to achieve a better night's sleep is a comfortable amount of space. Generally, a mattress should be longer and wider than the amount of space you and your partner uses to sleep.  The following sizes are a general guide to help you make a better decision.</p>
        </div>
        
        <style>
            .pocket_spring img{
               margin: auto;
               
            }
        </style>
        
            <h3>Pocket Spring</h3>
        <div class="contents">
            <p>Pocket spring case encased in layers of high density foam with proper pillar support to give you good spinal support and undisturbed sleep. Comes in variety of thickness to suit your requirement. Available in 6", 8”,10” & 12"</p>
            <img src="matress/images/3d mattress img.jpeg" alt="mattress size chart">
        </div>
    </div>

@endsection