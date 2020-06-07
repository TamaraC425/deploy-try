<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/register.css">
        <title>The Register Form</title>
    </head>
    <header>
    <link rel="stylesheet" type="text/css" href="http://localhost:1234/gasm/public/css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <h1 class="logo">GaSM</h1>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="http://localhost:1234/gasm/public/"><strong>🏡Home</strong></a></li>
                <li><a href="#"><strong>Events</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/about"><strong>About</strong></a></li>
                <li><a href="#"><strong>Info</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/statistics"><strong>Statistics</strong></a></li>
                <li><a href="http://localhost:1234/gasm/public/loginForm/index"><strong>Login</strong></a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
<body>
    <div class="wrap">
        <form class="login-form" action="http://localhost:1234/gasm/public/registerForm/submit" method="POST" >
            <div class="form-header">
            
                <h3>Signup to GaSM</h3>
                
            </div>
            <div class="formular">
                <input type="text" class="form-input" placeholder="First name" name="first_name">
            </div>
            <div class="formular">
                <input type="text" class="form-input" placeholder="Last name" name="last_name">
            </div>
            <div class="formular">
                <input type="text" class="form-input" placeholder="Username" name="username">
            </div>
            <div class="formular">
                <input type="text" class="form-input" placeholder="Role" name="role">
            </div>
            <div class="formular">
                <input type="password" class="form-input" placeholder="Organization" name="organization">
            </div>
            <div class="formular">
                <input type="email" class="form-input" placeholder="E-mail" name="email">
            </div>
            <div class="formular">
                <input type="date" class="form-input" placeholder="Birthdate" name="birth_date">
            </div>
            <div class="formular">
                <input type="password" class="form-input" placeholder="Password" name="password">
            </div>
            <div class="formular">
                <button class="form-button" type="submit">Register</button>
            </div>
            <div class="form-footer">
            Already have an account? <a href="http://localhost:1234/gasm/public/login.php">Login</a>
            </div>
        </form>
    </div>
</body>



<footer>
    <div class="first-footer-part">
        <h3>馃懆鈥嶐煈ㄢ€嶐煈р€嶐煈ontact details:</h3>
        <ul>
        <li>Email: gasm@recycle.com</li>
        <li> Tel: 0040748820151</li> 
        <li><Address> Flowers Street, 9</Address>
         <li>Contact us!馃挰</li>
        </li>   
     </ul>   
    </div>
    <span class='border'></span>   
    <div class="second-footer-part">
            <h3>馃槃Subscribe to our newsletter:</h1>
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