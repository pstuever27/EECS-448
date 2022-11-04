function changeColor(){
    const text = document.getElementById('text');
    var redBack = document.getElementById('red-back').value;
    var greenBack = document.getElementById('green-back').value;
    var blueBack = document.getElementById('blue-back').value;

    var redBorder = document.getElementById('red-border').value;
    var greenBorder = document.getElementById('green-border').value;
    var blueBorder = document.getElementById('blue-border').value;

    text.style.backgroundColor("rgb(${redBack}, ${greenBack}, ${blueBack})");
    text.style.borderColor(rgb(redBorder, greenBorder, blueBorder));

}

