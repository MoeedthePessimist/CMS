<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- stylesheets -->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="/css/description.css">

</head>
<body>


        <!-- navbar -->
        <x-header.header />

        <!-- product info -->
        <div class="product-info-container">
            <!-- <img class = 'show' src="https://img.icons8.com/external-kiranshastry-lineal-color-kiranshastry/32/000000/external-close-banking-and-finance-kiranshastry-lineal-color-kiranshastry.png"/> -->
            <div class="product-info-img-container">
                <img class="product-info-img" src="/productimages/{{$data->image}}" alt="">
            </div>   
            <div class="product-info-infor">
                <h1 class="product-info-name">{{$data->Title}}</h1>
                <h2 class="product-info-price">${{$data->Price}}</h4>
                <h1>PRODUCT DESCRIPTION</h1>
                <p class="product-info-description">{{$data->description}}</p>
                <a href="#">Add To Card</a> 
            </div>   
        </div>
    
        <hr>

        <!-- review form -->
        <div class="product-rating">
            <form action = "{{url('/uploadReview')}}" method = "post" enctype = "multipart/form-data">
                
                @csrf
                
            
                <div class="name">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Your name..">
                </div>
                <div class="review">
                    <label for="review">Review</label>
                    <textarea id="review" name="review" placeholder="Write something.." style="height:200px"></textarea>
                </div>
                <div class="product-id" style='display:none'>
                    <select name="id" id="id">
                        <option value="{{$data->id}}"></option>
                    </select>
                </div>
                <div class="btn">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>


        <!-- reviews -->
        <div class="product-review" style='background-color: orange; padding: 2rem 3rem;'>
            <h1 style='font-weight: 700; font-size: 2rem'>USER REVIEWS</h1>
            @foreach($reviews as $data)
                <x-review :data="$data" />
            @endforeach

        </div>


        <!-- footer -->
        <x-footer.footer />
</body>
</html>