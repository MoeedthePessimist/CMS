


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>

</head>
<body>

    <div class="header">
        <x-header.header />
    </div>

    
    <div class="carousel center-items">
        <div class="carousel-background"></div>
        <img class = 'carousel-logo' src="https://img.icons8.com/nolan/64/computer.png"/>
        <div class="carousel-desc center-items">
            <div class="carousel--heading">
                <span style="--i:1">D</span>
                <span style="--i:2">E</span>
                <span style="--i:3">X</span>
                <span style="--i:4">T</span>
                <span style="--i:5">R</span>
                <span style="--i:6">O</span>
            </div>        
            <div class="carousel--text">
                <p>BEST PRICE TO SPECS RATIO YOU WILL FIND IN THE MARKET INSHA'ALLAH</p>
            </div>
        </div>
    </div>

    <div class="slider">
        <div class="slide--container">
            @foreach($data as $data)
                <x-cards.card :title="$data->Title" :price="$data->Price" :image="$data->image"/>
            @endforeach
        </div>
    </div>

    
    
    <x-Footer.footer />



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/landing.js"></script>

</body>
</html>




