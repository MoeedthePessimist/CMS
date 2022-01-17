<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <script src="js/contact.js"></script>


</head>
<body>

<!-- header component -->
    <x-header.header />

    <div class="form-container center">
        <form action="POST" class='center'>
            <div class="heading">
                <h1>Share Your Feedback</h1>
            </div>
            <div class="name center">
                <input type="text" name="name" id="name" placeholder='Enter name'>
            </div>
            <div class="email center">
                <input type="email" name="email" id="email" placeholder='Enter email'>
            </div>
            <div class="message center">
                <textarea name="message" id="message" cols="30" rows="10" placeholder = 'Type your message'></textarea>
            </div>
            <div class="submit-b center">
                <input type="submit" value="submit">
            </div>
        </form>
    </div>
    

    <!-- footer componenet -->
    <x-footer.footer />


</body>
</html>