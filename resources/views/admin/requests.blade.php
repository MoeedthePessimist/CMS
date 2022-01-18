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
                        <th scope="col">Email</th>
                        <th scope="col">Total Payment</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                        <tr>
                            <td data-label="name">{{$data->Name}}</td>
                            <td data-label="email">{{$data->Email}}</td>
                            <td data-label="payment">${{$data->payment}}</td>
                            <td data-label="confirm order"><a href = '/confirmOrder/{{$data->id}}'>Confirm</a></td>
                        </tr>
                    @endforeach                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>