//console.log("I like Pizza");
//let age;
//age = 21;
//console.log(age);
//document.getElementById("jo").innerHTML = "You are " + age + "years old";
//let username;

//document.getElementById("m").onclick = function(){
  //  username= document.getElementById("l").value;
   // console.log(username);
    // document.getElementById("jo").innerHTML = "hello" + username;
//}
//let joe = window.prompt("How Old Are You?");
//joe += 1;

//console.log(joe);

/*let x;
let y;
let z;

x = Number("3.14");

console.log(x, typeof x);*/
//let pi = 3.14159;
//let radius;
//let circumference;

//radius = window.prompt("Enter Radius");
//radius = Number(radius);

//circumference = 2 * pi * radius;

//console.log("The circumference is ", circumference);

/*let x=3.14;
x= Math.pow(x,4);

console.log(x);*/
/*
let a;
let b;
let c;

a = window.prompt("Enter side A");
a = Number(a);

b = window.prompt("Enter side B");
b = Number(b);

c = Math.sqrt(Math.pow(a,2) + Math.pow(b,2));
console.log("Side C is ",c);
*//*
document.getElementById("sub").onclick = function(){
  a = document.getElementById("atext").value;
a = Number(a);

b = document.getElementById("btext").value;
b = Number(b);

c = Math.sqrt(Math.pow(a,2) + Math.pow(b,2));

document.getElementById("c").innerHTML = "Side C:" + c;
}*//*
let count = 0;

document.getElementById("decbtn").onclick = function(){
  count-=1;
  document.getElementById("count").innerHTML = count;
}
document.getElementById("resbtn").onclick = function(){
  count=0;
  document.getElementById("count").innerHTML = count;
}
document.getElementById("incbtn").onclick = function(){
  count+=1;
  document.getElementById("count").innerHTML = count;
}
*/

//let userName = "Joe T";
//let phoneNumber= "452-345-2343";
/*
console.log(userName.length);
console.log(userName.charAt(0));
console.log(userName.indexOf("o"));
*/
//phoneNumber = phoneNumber.replaceAll("-","")
//console.log(phoneNumber);
/*
let fullName = "Gerard Way";
let firstName;
let lastName;
firstName = fullName.slice(0, fullName.indexOf(" "));
lastName = fullName.slice(fullName.indexOf(" "));
console.log(lastName);
console.log(firstName);
*/
/*
let age=window.prompt("What Is Your Age?");

if(age >=18){
  console.log("You are an Adult");
}
else if(age <=0){
  console.log("You Haven't Been Born Yet");
}
else{
  console.log("You Are A Child");
}
  */
 /*
 document.getElementById("but").onclick = function(){

  const vis = document.getElementById("vis")
  const mas = document.getElementById("mas")
  const pp = document.getElementById("pp")*/
  /*
  if(document.getElementById("checkcheck").checked){
    console.log("You are subscribed")
  }
  else{
    console.log("You are subscribed")
  }*/
 /*
if(vis.checked){
  console.log("You are Paying with Visa Card");

}
else if(mas.checked){
  console.log("You are Paying with Master Card");
  
}
else if(pp.checked){
  console.log("You are Paying with Paypal");
  
}
else{
  console.log("Please Select a Payment Method");
  
}
 }
*//*
let grade;
grade = window.prompt("Grade:")
switch(grade){
  case "A":
  console.log("You did great!");
  break;
  case "B":
  console.log("You did good!");
  break;
  case "C":
  console.log("You did fine!");
  break;
  case "D":
  console.log("You Passed!");
  break;
  case "F":
  console.log("Absolute Failure!");
  break;
  default:
  console.log(grade,"Is Not A Letter Grade");
}*//*
let rows = window.prompt("Enter Rows")
let columns = window.prompt("Enter column")

for(let j= 1; j<= rows; j+=1){
for(let i =1; i <=columns; i++){
  
  document.getElementById("sh").innerHTML += j
}
  document.getElementById("sh").innerHTML +="<br>";

}*//*
let area;
let width= window.prompt("Enter Width");
let height= window.prompt("Enter Height");
area = getArea(width, height);
console.log("The area is", area);
function getArea(width, height){
  let result = width*height;
  return result;
}*//*
const answer = Math.floor(Math.random() * 10 + 1);
let guesses = 0;

document.getElementById("sub").onlcick = function(){
  let guess= document.getElementById("guessField").value;
  guesses+=1;

  if(guess == answer){
    alert(`${answer} is the #. It took you ${guesses} guesses`)

  }
  else if(guess < answer){
    alert("Too small")
  }
  else{
    alert("Too large");
  }

}*//*
document.getElementById("sub").onclick = function(){
  let temp;

  if(document.getElementById("cbutton").checked){
   temp = document.getElementById("textbox").value;
   temp= Number(temp);
   temp = toCelsius(temp);

document.getElementById("templab").innerHTML = temp + "°C";
  }
  else if(document.getElementById("fbutton").checked){
    temp = document.getElementById("textbox").value;
    temp= Number(temp);
    temp = toFahrenheit(temp);
 
 document.getElementById("templab").innerHTML = temp + "°F";
  }
  else{
    document.getElementById("templab").innerHTML = "Select a Unit";
  }
}

let temp;
temp = toCelsius(temp);
console.log(temp);

function toCelsius(temp){
  return(temp - 32)*(5/9);
}
function toFahrenheit(temp){
  return temp*9/5 + 32;
}

*/
let frutis=["banana","apple","mango"]

console.log(fruits)











