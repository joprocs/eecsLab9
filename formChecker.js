document.getElementById('form').onsubmit = function (){

//variables set for email pass
const email = document.getElementById("#email").value;
const pass = document.getElementById("#pass").value;

//variables set for towels
const towel1 = document.getElementById("#bt1").value;


//variables set for beach balls
const ball1 = document.getElementById("#bb1").value;


//variables set for beach houses
const house1 = document.getElementById("#bh1").value;


//shipping
const ship7 = document.getElementById("freeship").value;
const ship3 = document.getElementById("threeday").value;
const ship1 = document.getElementById("overnite").value;


//email verify
if (email == "" || !email.includes("@") || !email.endswith(".com"))
{

    alert("please try again");
    return false;
}
if (pass== "")
{
    alert("please try again");
    return false;
}

//items
if ((towel1 == "" || towel1<0) )
{
    alert("please correctly choose an item");
    return false;
}
if ((ball1 == "" || ball1<0) )
{
    alert("please correctly choose an item");
    return false;
}
if ((house1 == "" || house1<0) )
{
    alert("please correctly choose an item");
    return false;
}


//ship
if (ship7 == '' && ship3 == '' && ship1 == '')
{
    alert("please choose a shipping option");
    return false;
}
}