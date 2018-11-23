function validate(){

var cuisine_name = document.forms["search"].cuisine.value;
var restaurant =  document.forms["search"].restaurant.value;
var location = document.forms["search"].location.selectedIndex;

var stringonly =  /^[a-z]+( [a-z]+)*$/;
var regex = /^[a-zA-Z0-9!@#$%\^&*)(+=._-]*$/;

if (location == ""){
  alert("You forgot to select a location");
return false;
}

if (restaurant == ""){
  alert("You forgot to fill in the restaurant name");
return false;
}

if(!restaurant.match(stringonly)){
  alert("Only alphabets are allowed for the restaurant name");
return false;
}

if(!cuisine_name.match(stringonly)){
  alert("Only alphabets are allowed for the cuisine name");
return false;
}
}
