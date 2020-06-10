<!DOCTYPE html>
<html>
    <header>
        <link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/showCampaigns.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <h1 class="logo">GaSM</h1>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="http://localhost:1234/gasm/public/"><strong>🏡Home</strong></a></li>
                <li><a href="#"><strong>Campaigns</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/about"><strong>About</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/map"><strong>Map</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/statistics"><strong>Statistics</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/logMaprm/index"><strong>Login</strong></a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
    
<head>
    <link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/login.css">
    <title>Start a campaign</title>
</head>
<body>
    <div class="wrap">
        <form class="campaigns-form" action="http://localhost:1234/gasm/public/campaigns/submit" method="POST">
            <div class="form-header">
                <h3>🌿Start a campaign🌿</h3>
                
            </div>
            <div class="formular">
            <span class="error">*<?php if(isset($_POST["user"])&&!empty($_POST['user'])){} else{ if(!empty($data[0]['user'])) print_r($data[0]['user']);}?></span>
                <input type="text" class="form-input" placeholder="User" name="user" value="<?php echo isset($_POST["user"]) ? $_POST["user"] : '';?>">
            </div>

            <div class="formular">
            <span class="error">*<?php if(isset($_POST["name"])&&!empty($_POST['name'])){} else{ if(!empty($data[0]['name'])) print_r($data[0]['name']);}?></span>
                <input type="text" class="form-input" placeholder="Campaign name" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : '';?>">
            </div>

           <div class="formular">
            <span class="error">*<?php if(isset($_POST["description"])&&!empty($_POST['description'])){} else{ if(!empty($data[0]['description'])) print_r($data[0]['description']);}?></span>
                <input type="text" class="form-input" placeholder="Campaign description" name="description" value="<?php echo isset($_POST["description"]) ? $_POST["description"] : '';?>">
            </div>

            <div class="formular">
            <span class="error">*<?php if(isset($_POST["place"])&&!empty($_POST['place'])){} else{ if(!empty($data[0]['place'])) print_r($data[0]['place']);}?></span>
                <input type="text" class="form-input" placeholder="Location" name="place" value="<?php echo isset($_POST["place"]) ? $_POST["place"] : '';?>">
            </div>
            
            <div class="formular">
            <span class="error">*<?php if(isset($_POST["image"])&&!empty($_POST['image'])){} else{ if(!empty($data[0]['image'])) print_r($data[0]['image']);}?></span>
                <input type="text" class="form-input" placeholder="Link for a suggestive image" name="image" value="<?php echo isset($_POST["image"]) ? $_POST["image"] : '';?>">
            </div>

            <div class="formular">
                <button class="form-button" type="submit">Start Campaign</button>
            </div>
            <div class="form-footer">
            Want to get involved? See other campaigns here: <a href="http://localhost:1234/gasm/public/campaigns/showCampaigns">Campaigns</a>
            </div>
        </form>
    </div>
</body>



<footer>
    <div class="first-footer-part">
        <h3>👨‍👨‍👧‍👧Contact details:</h3>
        <ul>
        <li>Email: gasm@recycle.com</li>
        <li> Tel: 0040748820151</li> 
        <li><Address> Flowers Street, 9</Address>
         <li>Contact us!💬</li>
        </li>   
     </ul>   
    </div>
    <span class='border'></span>   
    <div class="second-footer-part">
            <h3>😄Subscribe to our newsletter:</h1>
            <input type="email" class="form-input" placeholder="E-mail">
            <br>
            <br>
            <button class="btn">Subscribe</button>  
     </ul>   
    </div>
    <span class='border'></span>   
    <div class="third-footer-part">
        <h3>You can also find us on:</h3>
    
        <a href="https://www.facebook.com/" class="fa fa-facebook" target="_blank"></a>
        <a href="https://www.twitter.com" class="fa fa-twitter" target="_blank"></a>
        <a href="https://www.instagram.com" class="fa fa-instagram" target="_blank"></a>
    
        </li>   
     </ul>   
    </div>
</footer>
</html>

