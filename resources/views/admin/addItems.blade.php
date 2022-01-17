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
        <div class="form-container">
            <form class='product-form' action = "{{url('/uploadProduct')}}" method = "post" enctype = "multipart/form-data">

                @csrf

                <div class="title-container">
                    <input type="text" name="title" id="title" placeholder='Product name' required>
                </div>
                <div class="price-container">
                    <input type="number" name="price" id="price" placeholder='Product price' required>
                </div>
                <div class="desc-container">
                    <textarea name="description" id="description" cols="30" rows="10" placeholder='Product Description' required></textarea>
                </div>
                <div class="manf-container">
                    <select name="manufacturer" id="manufacturer" required>
                        <option value="none" disabled selected>Choose Manufacturer</option>
                        <option value="Dell">Dell</option>
                        <option value="HP">HP</option>
                        <option value="Lenovo">Lenovo</option>
                        <option value="Logitech">Logitech</option>
                        <option value="Razer">Razer</option>
                        <option value="Asus">Asus</option>
                        <option value="Microsoft">Microsoft</option>
                        <option value="Apple">Apple</option>    
                        <option value="Acer">Acer</option>    
                        <option value="Origin">Origin</option>    
                        <option value="Xidax">Xidax</option>    
                        <option value="BLD">BLD</option>
                        <option value="MainGear">MainGear</option>
                    </select>
                </div>
                <div class="categ-container">
                    <select name="category" id="category" required>
                        <option value="none" disabled selected>Choose category</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Custom PC">Custom PC</option>
                        <option value="Keyboard">Keyboard</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Speaker">Speaker</option>
                        <option value="Headset">Headset</option>
                        <option value="Webcam">Webscam</option>
                        <option value="Power Supply">Power Supply</option>    
                        <option value="Backpack">Backpack</option>    
                        <option value="Chromecast">Chromecast</option>    
                        <option value="VR">VR</option>    
                    </select>
                </div>
                <div class="img-container">
                    <input type="file" name="img" id="img" required>
                </div>
                <div class="btn-container">
                    <button type="submit">Add Data</button>
                    
                </div>
            </form>
        </div>
        

    </div>
</body>
</html>