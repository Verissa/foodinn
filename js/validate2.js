function validate2() {
var cuisine_name = document.forms["image"].cuisine.value;
var image = document.forms["image"].file.value;
var stringonly =  /^[a-zA-Z]+$/;
if (cuisine_name == ""){
  alert("You forgot to fill in the cuisine name field");
return false;
}

if(!cuisine_name.match(stringonly)){
  alert("Only alphabets are allowed for the cuisine name field");
return false;
}
if (image == ""){
  alert("You forgot to select an image");
return false;
}

}