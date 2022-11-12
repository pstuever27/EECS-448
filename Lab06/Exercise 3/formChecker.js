
var login = false;
const regexExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


function checkLogin(){
    var user = document.getElementById('user').value;
    var pass = document.getElementById('pass').value;
    let confirm = document.getElementById('confirmation');


    if(user.length != 0 && user.match(regexExp)){
        if(pass.length != 0){
            confirm.innerHTML = "Login Successful!";
            login = true;
        }
    }
    else{
        confirm.innerHTML = "Login Unsuccessful";
        login = false;
    }
}

function finish(){ 
    var option1 = parseInt(document.getElementById('option1').value);
    var option2 = parseInt(document.getElementById('option2').value);
    var option3 = parseInt(document.getElementById('option3').value);

    var ship = document.getElementsByName('ship');
    var radio = false;

    for(var i = 0; i<ship.length; i++){
        if(ship[i].checked){
            radio = true;
        }
    }

    if(login){
            if(option1<0 || option2<0 || option3 < 0 || isNaN(option1) || isNaN(option2) || isNaN(option3) || radio == false){

                alert("Invalid Form Values");
            }
            else{
               document.forms['form1'].submit();
        }
    }
    else{
        alert("Please Login First!");
    }
}

