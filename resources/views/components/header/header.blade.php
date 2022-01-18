@php
    use App\Http\Controllers\LandingController as landingController;
    use Illuminate\Support\Facades\DB;
    $userID = landingController::getUserId();
    $totalItems = DB::table('carts')->where('userId', $userID)->get();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <!-- bootstrap cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
    
    
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/nav.css">
    

</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            <!--Making the toggle button-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--Logo-->
            <a href="/" class="navbar-brand">
                <img style = 'display: inline;'src="https://img.icons8.com/nolan/35/computer.png"/>
                <span>Dextro</span>
            </a>
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/dash">
                            {{landingController::navOption();}}
                        </a> 
                    </li>
                    <li><a href="/">Home</a>
                    </li>
                    <li><a href="/shop">Shop</a>
                    </li>   
                    <li><a href="/about">About us</a>
                    </li>
                    <li><a href="/contact">Feedback</a>
                </li>       
                <li>
                    @if($userID > 0)
                        <a href="/viewCart/{{$userID}}"><img 
                        style='display: inline; margin-right: 3px' 
                        src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/20/000000/external-cart-grocery-flatart-icons-lineal-color-flatarticons.png"
                        />Cart({{count($totalItems)}})</a>
                    @endif
                </li>
                        @if (Route::has('login'))                        
                            @auth
                                    <li><a href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </a>
                                    </li>
                                    
                                    <!-- Authentication -->
                                    
                                    <li style = ' height: 6.5vh;'>
                                    <form method="POST" action="{{ route('logout') }}"  style = ' height: 100%; display: flex;  align-items: center;'>
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form> 
                                </li>
                            <!-- </div> -->
                            <!-- </li> -->
                            @else
                                <!-- <div  style = 'color: #eee;'>
                                    {{ __('Account') }}
                                </div> -->

                                <li><a href="{{ route('login') }}">Log in</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                        
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>



<!-- 

<div>
    Simplicity is the ultimate sophistication. - Leonardo da Vinci

</div> -->