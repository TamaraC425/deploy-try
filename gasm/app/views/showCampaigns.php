<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Statistics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/show_statistics.css">
    </head>
<header>
    <link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/showCampaigns.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <h1 class="logo">GaSM</h1>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
            <ul>
                <li><a href="http://localhost:1234/gasm/public/"><strong>🏡Home</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/campaigns"><strong>campaigns</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/about"><strong>About</strong></a></li>
               <li><a href="http://localhost:1234/gasm/public/map"><strong>Map</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/statistics"><strong>Statistics</strong></a></li>
                <?php if(!isset( $_SESSION['username']))
        {
               echo '<li><a href="http://localhost:1234/gasm/public/loginForm/index"><strong>Login</strong></a></li>' ;}?>
            </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
    </label>
    <?php if(isset( $_SESSION['username']))
        {
       echo '<form class="logout" action="http://localhost:1234/gasm/public/loginForm/logout" method="POST">
    <input type="image"  src="https://image.flaticon.com/icons/svg/589/589061.svg" width="50" height="50">
</form>';} ?>
</header>
<body>
<div class="content">
<div class="blogpost-wrapper">
<?php      
           $stock = $this->model('Stock',$this->db);
            $arr=$stock->products;
            foreach($arr as $product) {
                echo '<div class="blog-post"><h3>'.
                   '<img src="'. $product -> image.'" alt="'. 
                   $product -> name  .'" />' .
                    '<p>'. $product -> name. '</p>'.  '<p>'. $product -> description. '</p><p>Posted by:' .
                     $product -> user . '</p>
                    <h3></div>';              
            }
        ?>  
</div>
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
