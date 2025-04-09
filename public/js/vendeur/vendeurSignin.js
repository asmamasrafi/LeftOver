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