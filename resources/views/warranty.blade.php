@extends('layouts.app')


@section('content')




<style>
    .warranty_container{
        /*border: 1px solid black;   */
        margin-top: 8rem;
        padding: 2rem;
        background-color: #deeefa;
        margin-bottom:5rem;
    }
    
    ._warranty{
        margin-top:1.5rem;
        margin-bottom: 2rem
    }
    
    li{
        margin-bottom: 1rem;
        margin-top: 1rem;
    }
    
    ul{
        margin-left: 2rem;
    }
    
    .m_point{
        font-weight: 600;
    }
    
    p{
        /*font-size: 2rem;*/
    }
</style>


<div class="container warranty_container">
<h2 class="text-center _warranty" style="font-weight: bold;">WARRANTY CARD</h2>
<p class="m_point">Dear Customer,</p>
<p>Thank you for choosing a Restin Mattress!</p>
<p>Please follow the instructions to get the best out of your mattress</p>
<ul>
    <li>Whenever required, clean the mattress with white sprit and damp cloth. Avoid detergent and dry-cleaning chemical.</li>
    <li>If the mattress gets wet, ensure that it dries up under the fan and not under direct sunlight. </li>
    <li>Lay the mattress on uniform surface only. Do not keep any object under mattress.</li>
    <li>Length and width of the bed should match the size of mattress.</li>
    <li>Turn your mattress head to foot once in 2 months.</li>
    <li>Do not bend, fold, or roll the mattress. This may weaken the bonding and eventually lead to Sagging of the mattress.</li>
    <li>Do not light a match or smoke near the mattress, the material used in the mattress can catch fire,    keep mattress away from flame.</li>
    <li>Avoid sitting on the edges or keeping heavy objects on it-it could ruin the Shape.</li>
</ul>

<p class="m_point">Terms Of Warranty</p>
<p > The company will replace the defective mattress, in a reasonable period of time. The company reserves the right to replace the defective product with a product of equal or higher value (with the extra charges being borne by the customer) and does not guarantee an exact match to your current mattress.</p>
<ul>
    <li>Warranty period is valid as mentioned in the table against material & workmanship defects. </li>
    <li>Body indentations are a normal occurrence in a new mattress and indicate the upholstery Layers are conforming to your body's contours.</li>
    <li>The defective mattress will be replaced by Restin Industries (hereafter referred to as The  Company) as per requirement.</li>
    <li>The warranty card must be stamped and signed by the dealer and produced along with the Invoice failing which the replacement will be considered void.</li>
    <li>The dealer should be contacted in case of any defects or please email to our Customer care.</li>
</ul>

<p class="m_point">The warrantee card is not valid for:</p>
<ul>
    <li>Customized sizes.</li>
    <li>Damage resulting from accidents, mishandling, burns and improper usage.</li>
    <li>Fabric damages such as tears, stains, colour fading, bleeding, </li>
    <li>Sagging due to improper bed stead (using of slats)</li>
    <li>Mattress not purchased from authorized dealers </li>
    <li>Folded mattress Wet mattress Mismatch in size of bed and mattress</li>
    <li>While the company will endeavour to replace the tem under warranty as soon as possible, it is not liable to do so within any specified time.</li>
    <li>The decision of the company regarding the nature of defects and applicability of this warranty will be final.</li>
    <li>Warranty does not cover depression of less than 25 mm.</li>
    <li>Models that are discontinued must be upgraded to equivalent or higher model with applicable price difference being borne by customer.</li>
    <li>Product features, specifications and guarantee terms are subject to change without notice.</li>
    <li>The Warranty period on a replaced product shall be automatically reduced to the balance period, as computed from the date of first sale of the product.</li>
    <li>Pro rata Warranty is applicable to this Product. The Rebate will be calculated on the Price paid by the Customer as mentioned in the Invoice. The Fixed warranty and pro rata Warranty are mentioned in the warranty card e.g. 2+3 = 5 i.e. Fixed  warranty 2 years + Extended pro rata warranty 3 years. This means that for the initial period of 2 years (fixed warranty period) we will provide Free Repairs or Replacement (at the discretion of the Company) to the customer.</li>
</ul>


<p class="m_point">Calculation of Pro rata Warranty.</p>
<ul>
    <li>Mattress Purchase Price Rs. 10000/-</li>
    <li>Warranty period: 2+3 = 5 years</li>
    <li>Customer usage: 4 years</li>
    <li>Balance warranty period: 1 year</li>
    <li>Calculation: 10000*1/5 = Rs.2000</li>
    <li>Will be the rebate provided to the Customer while buying a new Restin mattress.</li>
    <li>Claim, if any arising from the warranty will be restricted to courts within the Nagpur jurisdiction only.</li>
    <li>Any implied warranty on this product, including any implied warranty of merchantability or fitness for particular purpose, shall not exceed in duration the term of his limited warranty, which begins with the date of purchase by the consumer. The terms in this warrantee shall be the consumer's sole and exclusive remedy in the event of product failure during the warrantee period. We shall not be liable for incidental or consequential damages arising out of the use of this product or the inability to use the product, or the breach of this or any other express or implied warranty. </li>
</ul>

</div>

@endsection