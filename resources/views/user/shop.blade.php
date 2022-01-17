<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- stylesheets -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/shop.css">
    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/> -->
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/> -->
    <!-- Scripts -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    

    

</head>
<body>
    
    <!-- navbar -->
    <x-header.header />

    <!-- shop content -->
    <div class="shop-container">
        @foreach($data as $data)
            <x-shop.product :data="$data"/>
        @endforeach
    </div>

    <!-- footer -->
    <x-footer.footer />
</body>
</html>