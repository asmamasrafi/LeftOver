
let autocomplete;
function initAutocomplete(){
    autocomplete = new google.maps.places.Autocomplete(
    document.getElementById('autocomplete'),
    {

       
         types: ['establishment'],
         componentRestrictions: { 'country' : ['AU'] },
         fields: ['place_id', 'geometry', 'name']
});
autocomplete.addListener('place_changed',onPlaceChanged);
}
function onPlaceChanged() {
    var place = autocomplete.getPlace();

     if (!place.geometry){
       // User did not select a prediction; reset the input field
      document.getElementById('autocomplete').Placeholder='Enter a place';
  }
  else{
    document.getElementById('details').innerHTML=place.name;
  }
}

function ShowPassword(){
  var x = document.getElementById("myinput");
  var y = document.getElementById("hide1");
  var z = document.getElementById("hide2");
  if(x.type=='password'){
      x.type="text";
      y.style.display="block";
      z.style.display="none";
  }else{
      x.type="password";
      z.style.display="block";
      y.style.display="none";
  }
}
function ShowPassword2(){
  var x = document.getElementById("myinput2");
  var y = document.getElementById("hide3");
  var z = document.getElementById("hide4");
  if(x.type=='password'){
      x.type="text";
      y.style.display="block";
      z.style.display="none";
  }else{
      x.type="password";
      z.style.display="block";
      y.style.display="none";
  }
}
