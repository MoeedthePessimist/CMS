<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

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
                        <th scope="col">Message</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $data)
                        <tr>
                            <td data-label="name">{{$data->name}}</td>
                            <td data-label="email">{{$data->email}}</td>
                            <label id='message' style = "display:none;">{{$data->message}}</label>
                            <td data-label="View feedback"><a class = 'view' >View Feedback</a></td>
                            <td data-label="delete feedback"><a href='/deleteFeedback{{$data->id}}'>Delete</a></td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>


    <script>




        document.querySelector('.view').addEventListener('click', ()=> {
            
            Swal.fire({
                title: document.getElementById('message').innerHTML,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                },
            })
        });
    </script>
    
</body>
</html>