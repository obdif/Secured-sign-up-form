// I ADEKUNLE BLESSING OLAMIDE START THIS PROJECT ON THE 27TH OF JANUARY 2023 AT 3:13PM

function toggle(){
    let password = document.getElementById("password");
    let eye = document.getElementById("toggle");


    if(password.getAttribute('type') == "password"){
        password.setAttribute('type', 'text');
        eye.style.color = "blue";
    }else{
        password.setAttribute('type', 'password');
        eye.style.color = "black";

    }
}

//=================================== PROGRAMS FOR THE CONFIRMED PASSWORD TOGGLE=================================================
function tog(){
    let password = document.getElementById("pass");
    let eye = document.getElementById("tog");


    if(password.getAttribute('type') == "password"){
        password.setAttribute('type', 'text');
        eye.style.color ="blue";
    }else{
        password.setAttribute('type', 'pass');
    }
}


//=================================== CHECKING THE PASSWORD STRENGTH=================================================


function validatepassword(password){

    if(password.length === 0){
        document.getElementById("msg").innerHTML = "";
        return;
    }

    var matchedCase = new Array();
    matchedCase.push("[!@#$%^&*?'\":;.,><]");
    matchedCase.push("[A-Z]");
    matchedCase.push("[0-9]");
    matchedCase.push("a-z");


    var ctr = 0;

    for(var i = 0; i< matchedCase.length; i++){
        if(new RegExp(matchedCase[i]).test(password)){
            ctr++;
        }
    }




    //DISPLAY ....

    var color = "";
    var strength = "";
    switch(ctr){
        case 0:
        case 1:
            strength = "weak password";
            color = "red";
            break;

        case 2:
            strength ="medium password";
            color ="orange";
            break;
        case 3:
            strength = "strong password";
            color = "lightgreen";
            break;
            
    }
   

    document.getElementById("msg").innerHTML = strength;
    document.getElementById("msg").style.color =color;

}