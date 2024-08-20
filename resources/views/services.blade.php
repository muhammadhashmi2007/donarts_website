@extends('nav')
@section('content')
<style>
    .back{
        background-color:black;
    }
    .p1,.heading{
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
    font-weight: bold;
    font-style: normal;
    }
    .p1,.p2,.p3,.p4,.p5,.p6,.p7{

    }
    .heading{
        text-align: center;
        font-size: 30px;
        color: white;
    }
    .full1,.full2,.full3,.full4,.full5,.full6,.full7{
        
        margin left: 30px;
        margin-right: 10px;
        padding-bottom: 13.33px;
        align: center;
        border: none;
        border-radius: 5px;
        transition: box-shadow 0.5s;
        background-color: white;
    }
    .full1:hover,.full2:hover,.full3:hover,.full4:hover,.full5:hover,.full6:hover,.full7:hover{
        box-shadow: 0 20px 20px rgba(0,0,255,0.5);
    }
    .pack{
        text-align: center;
    }
    .imp{
        color: white;
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
    font-weight: bold;
    font-style: normal;
    font-size: 30px;
    display: inline-block;
    padding-right: 1300px
    }
    .out{
        color: black;
        background-color: blue;
        border: none;
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 7px;
        padding-bottom: 7px;
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
    font-weight: bold;
    font-style: normal;
    transition: box-shadow 0.5s;
    }
    .out:hover{
        box-shadow: 0 20px 20px rgba(255,255,255,0.5);
    }
    .fom{
        text-align: center;
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
    font-weight: bold;
    font-style: normal;
    transition: box-shadow 0.5s;
    background-color: grey;
        }
    .submit{
        border: none;
        color: white;
        background-color: black;
        border-radius: 3px;
        font-family: "Oswald", sans-serif;
    font-optical-sizing: auto;
    font-weight: bold;
    font-style: normal;
    font-size: 17px;
    transition: background-color 0.5s;
    }
    .submit:hover{
        background-color: white;
        color: black;
        cursor: pointer;
    }
    .gform{
        font-size: 30px;
        text-decoration: none;
        color: black;
        
    }
    .gform:hover{
        background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
        border-radius: 3px
        animation:slidebg 2s linear infinite;

    }
    @keyframes slidebg {
  to {
    background-position:20vw;
  }
}
    
    </style>
<body class="back">
<p class="heading">
    PACKAGES
</p>
<form action="" method="POST" class="pack">
    @csrf
<button href="#" class="full1">
    <p class="p1">Digital Portrait</p>
   <li> Full Body Portrait</li></br>
    45$
    
</button>
<button href="#" class="full2">
    <p class="p1">Half Digital Portrait</p>
   <li> Semi Realistic Style Portrait</li></br>
    25$
    
</button>
<button href="#" class="full3">
    <p class="p1">Minecraft</p>
   <li> Minecraft Skin</li></br>
    10$
    
</button>
<button href="#" class="full4">
    <p class="p1">Character Design Package</p>
   <li> Full Character Sheet With Dramatic Poses</li></br>
    55$
  
</button>
<button href="#" class="full5">
    <p class="p1">Book Cover</p>
   <li> Book Cover Illustration</li></br>
    50$
    

</button>
<button href="#" class="full6">
    <p class="p1">Full Book Package</p>
   <li>Full Character Design For Your Book</li></br>
    120$
    
</button>
<button href="#" class="full7">
    <p class="p1">Logos</p>
   <li>Logo Designs</li></br>
    30$
   
</button>
</form></br>
<form class="fom">
<a href="https://forms.gle/mFDmKGmXFeWisph49" class="gform">Place Order</a>

</form>

</body>
@endsection('content')