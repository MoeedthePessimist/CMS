<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <x-admin.admin-nav-component />
    <div class="admin-container">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">manufacturer</th>
                        <th scope="col">category</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                    <tr> 
                        <td data-label="name">{{$data->Title}}</td>
                        <td data-label="product">${{$data->Price}}</td>
                        <td data-label="manufacturer">{{$data->manufacturer}}</td>
                        <td data-label="category">{{$data->category}}</td>
                        <td data-label="delete"><a href="{{url('/deleteProduct',$data->id)}}">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>