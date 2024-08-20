@extends('nav')
@section('content')

<style>
    .ser{
        background-color: gray;
    }
    .f,.head{
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
   
    font-style: normal;
    text-align: center;
    }
    .head{
        font-weight: bold;
        font-size: 30px;
        margin-bottom: 0px;
    }
    .f{
        margin-top: 0px;
        margin-bottom: 2px;
    }
   .hoe{
    font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
   color: black;
   font-weight: bold;
    font-style: normal;
    text-decoration: none;
    border:3px solid black;
    border-radius: 3px;
    padding-left: 7px;
    padding-right: 7px;
    transition: background-color 0.5s;
   }
   .bim{
    text-align: center;
    padding-top: 2px;
    margin-top: 2px;
    color: black;
    padding-left: 3px;
  
   }
   .hoe:hover{
    background-color: black;
    color: gray;
   }
.abme{
    font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
   color: black;
   font-weight: bold;
    font-style: normal;
    font-size: 30px;
    margin-left: 2px;
    margin-right: 2px;
    margin-top: 2px;
    margin-bottom: 2px;
    
    text-align: center;
}

.abm{
    font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
   color: black;
   font-weight: 200;
    font-style: normal;
    font-size: 15px;
    margin-left: 2px;
    margin-right: 2px;
    margin-top: 2px;
    margin-bottom: 2px;
 
    text-align: center;
}
.mbtn{
    font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
   color: black;
   font-weight: bold;
    font-style: normal;
    text-decoration: none;
    text-align: center;
    
    border-radius: 3px;
    padding-left: 7px;
    padding-right: 7px;
    transition: background-color 0.5s;
    background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
    text-decoration:none;
  color: black;

  
}
.mbtn:after {
  content:attr(alt);
  width:20vw;
  height:8vw;
  background-color:#191919;

}
.mbtn:hover {
  animation:slidebg 2s linear infinite;
}

@keyframes slidebg {
  to {
    background-position:20vw;
  }
}
    .g{
        text-align: center;
        margin-left: 2px;
      
       
      

    }
    .amb{
        width: 500px;
        text-align: center;
    }
    .port{
        text-align: center;
        background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
        padding-bottom: 100px;
    }
    .porth{
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
   color: black;
   font-size: 40px;
   font-weight: bold;
    font-style: normal;
    text-decoration: none;
    text-align: center;
    margin-top: 5px;
    margin-bottom: 5px;
    }
    .portb{
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
   color: black;
   font-size:20px;
   font-weight: bold;
    font-style: normal;
    text-decoration: none;
    text-align: center;
    border:3px solid black;
    border-radius: 3px;
    }
    .portb:hover{
border: none;
color: white;
transition: 1s;
    left: 0;
    }
    
    </style>
<body style="background-color: black;">
<div class="ser">
<h1 class="head">
    Get Your Art Done By Me 
</h1>
<br><p class="f">
    With Exciting Different Packages
</p><br>
<div class="bim"><a href="/services" class="hoe">SERVICES</a></div>
</div>
<br>
<div class="ab">
    <div class="amb">
    <p class="abme">About Me  <p class="abm">Welcome to Don TTH's Creative Studio! I specialize in bringing your visions to life with a unique blend of semi-realistic portraits, custom Minecraft skins, captivating book covers, distinctive logos, and imaginative character designs. Whether you're looking to personalize your gaming experience, publish an eye-catching book, or develop a brand identity, my commission services are tailored to meet your specific needs and exceed your expectations. Explore my portfolio and let's create something extraordinary together!</p></p>
</div>
    <div class="g"><a href="/about" class="mbtn">MORE</a></div>
</div>
<div class="port">
    <p class="porth">Portfolio</p><br>
    <a href="/gallery" class="portb">View</a>
</div>
</body>


@endsection('content')