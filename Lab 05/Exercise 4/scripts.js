document.addEventListener("keypress", function(event) {
    if(event.key === "Enter") {
        changeColor();
    }
})

var random = false;
var backgroundColors = [
    0, 
    0, 
    0
];

var borderAttribultes = [
    0,
    0,
    0,
    0
];

function getColor(){
    backgroundColors[0] = document.getElementById('red-back').value;
    backgroundColors[1]  = document.getElementById('green-back').value;
    backgroundColors[2]  = document.getElementById('blue-back').value;

    borderAttribultes[0] = document.getElementById('red-border').value;
    borderAttribultes[1] = document.getElementById('green-border').value;
    borderAttribultes[2] = document.getElementById('blue-border').value;
    borderAttribultes[3] = document.getElementById('width').value;
}


//This function sets the color values to random numbers, and the width to one of 3 values (the user can still put in a pixel or pt size if they want)
function randomize(){
    backgroundColors[0] = Math.random() * 255
    backgroundColors[1] = Math.random() * 255
    backgroundColors[2] = Math.random() * 255

    borderAttribultes[0] = Math.random() * 255
    borderAttribultes[1] = Math.random() * 255
    borderAttribultes[2] = Math.random() * 255
    borderAttribultes[3] = Math.random() * 50 + 'px';
    random = true;
    changeColor();
}

function changeColor(){
    const text = document.getElementById('text');
    if(!random){
        getColor();
    }
    else{
        random = false;
    }

    text.style.backgroundColor = "rgb(" +backgroundColors[0]+ ", " +backgroundColors[1]+ ", " +backgroundColors[2]+ ")";
    text.style.borderColor = "rgb(" +borderAttribultes[0]+ ", " +borderAttribultes[1]+ ", " +borderAttribultes[2]+ ")";
    text.style.borderWidth = borderAttribultes[3];
}

