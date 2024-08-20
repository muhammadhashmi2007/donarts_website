@extends('nav')
@section('content')
<style>
    .head{
        color: rgb(0, 0, 0);
    
        font-family: "Oswald", sans-serif;
        font-optical-sizing: auto;
        font-weight: 600;
        font-style: normal;
        font-size: 50px;
        text-align: center;
    }
    .galback{
        background-image: url('gallery.jpg');
        padding-bottom: 10px;
        padding-top: 10px;
    
    }
    .gal{
        background-color: black;
        width: 1500px;
        text-align: center;
    }
    .a:hover{
        box-shadow: 0 20px 20px rgba(0,0,255,0.5);
opacity: 0.75;
    }
    .a{
        opacity: 2;
            transition: opacity 0.5s;
    }
    
</style>
<body class="galback">

<p class="head">PORTFOLIO</p>
<div class="gal">
    <a class="a" href=# onload="gallery.a.style.opacity='1'"><img src="drawing1.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing2.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing3.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing4.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing5.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing6.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing7.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing8.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing9.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing10.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing11.jpg" width="300px" height="350px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing12.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing13.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing14.jpg" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing15.png" width="300px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing16.jpg" width="185px" height="300px" ></a>
    <a class="a" href=# onload="document.a.style.opacity='1'"><img src="drawing17.jpg" width="185px" height="300px" ></a>
 
</div>
</body>
@endsection('content')