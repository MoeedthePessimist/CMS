<div class="cart-item">
    <div class="item-image">
        <img src="/productimages/{{$image}}" alt="">
    </div>
    <div class="item-info">
        <h1>{{$title}}</h1>
        <p>PRICE: ${{$price}}</p>
    </div>
    <div class="item-buttons">
        <a href="{{url('/removeCart', $id)}}">Remove from cart</a>
    </div>
</div>
