@php
    use App\Http\Controllers\LandingController as landingController;
    use Illuminate\Support\Facades\DB;
    $userID = landingController::getUserId();
    $data = DB::table('carts')->where('userId', $userID)->get();
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cart.css">
    

</head>
<body>
    

    <!-- header -->
    <div class="header">
        <x-header.header />
    </div>

    
    <!-- cart-items container -->
    <div class="cart-items-container">
        <h1>USER CART</h1>
        
        @foreach($data as $data)
            <x-cartitem :data="$data" />
        @endforeach

        
    </div>

    <div class="checkout-bar">
        <div class="total">
            <p>
                Total Bill: ${{$total}}
            </p>
        </div>

        <form>
                <input type="hidden" name="name" value="">
                <input type="hidden" name="email" value="">
                <input type="hidden" name="payment" value="">
                <button type="submit">Buy</button>
            </form>

    </div>

    <!-- footer -->
    <x-Footer.footer />

</body>
</html>