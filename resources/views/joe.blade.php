<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <style>
       
    </style>

   
    <label>Enter a Temperature</label><br>
    <input type="text" id="textbox"><br>
    <input type="radio" id="cbutton" name="unit">  
    <label>Celsius</label>  
    <input type="radio" id="fbutton" name="unit">  
    <label>Fahrenheit</label>  
    <input type="submit" id="sub">
    <label id="templab"></label>
    <script src="{{asset('joe.js')}}"></script>
</body>
</html>