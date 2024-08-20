<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="Picsart_24-07-21_11-57-43-594.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
        <title>DonArtsHUBs</title>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
<header>  
  <nav class=navigation-panel>  <a href="/home" class="logo"><img src="Picsart_24-07-21_01-09-15-245.png" width=300px height=100px></a></br>
  <a href="/home" class="home-btn">HOME</a>
    <a href="/about" class="home-btn" type="text">ABOUT</a>
    <a href="/services" class="home-btn">SERVICES</a>
    <a href="/gallery" class="home-btn">GALLERY</a>
</ul> 
</nav>
</header> 
@yield('content') 
<footer>
    <nav class=footer-page>
    <a href="/home" class="logo"><img src="Picsart_24-07-21_01-09-15-245.png" width=300px height=100px></a>
    <a href="/home" class="home-btn">Home</a>
    <a href="/about" class="home-btn" type="text">About</a>
    <a href="/services" class="home-btn">Services</a>
    <a href="/gallery" class="home-btn">Gallery</a></br>
    <a href="https://www.instagram.com/dontth6?igsh=MTMwZGs5aXd6NWE0Mg==" class="insta"><img src="css\insta-simp.png" width=60px height=60px></a>
    <a href="https://www.reddit.com/user/DonTTH6/" class="red"><img src="css\reddit-simp.png" width=60px height=60px></a>
    <a href="https://x.com/Tth2Don?t=c2zx4g0pbT3k1LmkPdkyYg&s=09" class="x"><img src="css\x-simp.png" width=60px height=60px></a>
    <a href="https://www.deviantart.com/dontth6" class="dev"><img src="css\dev-simp.png" width=60px height=60px></a>
    <a href="https://discord.com/invite/CjJyRQDp" class="dis"><img src="css\discord-simp.png" width=60px height=60px></a>
    <a href="https://pin.it/iCv8YCqfK" class="pin"><img src="css\pin-simp.png" width=60px height=60px></a></br>
    <p class="j">
        Payment Method:
    </p>
    <a href="#" class="pay"><img src="paypal.png" width=100px height=100px></a>
    <div>
           Report a Bug</br>
        Email:muhammadhashmi764@gmail.com
    </div>
    </nav>
</footer>

    </body>
</html>
