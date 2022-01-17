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
                        <th scope="col">Message</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-label="name">Stupido</td>
                        <td data-label="email">stupido@gmail.com</td>
                        <td data-label="View feedback"><a class = 'view'>View Feedback</a></td>
                        <td data-label="delete feedback"><a>Confirm</a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>