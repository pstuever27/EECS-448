var currentslide = 1;

next(currentslide);

function next(direction){
    var slides = document.getElementsByClassName("slide");
    currentslide += direction;
    if(currentslide > slides.length) { currentslide = 1}
    if(currentslide < 1) {currentslide = slides.length}
    
    for (i = 0; i < slides.length; i++) {
    slides[i].style.opacity = "0";
    }
    slides[currentslide-1].style.opacity = "1";
}


