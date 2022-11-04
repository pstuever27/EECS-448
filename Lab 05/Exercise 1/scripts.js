document.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      validate();
    }
});

function validate(){
    var pass1 = document.getElementById('firstPass').value
    var pass2 = document.getElementById('secondPass').value
    if(pass1 == pass2){
        if(pass1.length < 8)
        {
            
            alert("Entered passwords are not at least 8 characters");
        }
        else{
            alert("Password validated");
        }
    }
    else{
        alert("Entered passwords do not match");
    }
}
