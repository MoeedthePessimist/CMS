@php
    use App\Http\Controllers\LandingController as landingController;

    $userId = landingController::getUserID();
@endphp

<div class="prod-card-container">
    <div class="prod-img-container">
        <img src="/productimages/{{$prod_image}}" alt="image">
    </div>
    <div class="prod-name-container">
        <p>{{$prod_title}}</p>
        <p>({{$prod_manf}}) || ({{$prod_categ}})</p>
    </div>
    <div class="prod-price-container">
        <h4>${{$prod_price}}</h4>
    </div>

    <div class="prod-btns-container">
        <span><a href="/viewProduct/{{$prod_id}}" id='view'>More Info</a></span>    
        @if($userId)
            <span><a href="/addCart/{{$prod_id}}/{{$userId}}" id='add'>Add To Cart</a></span>
        @else
            <span><a href="/login" id='add'>Add To Cart</a></span>  
        @endif
    </div>
</div>