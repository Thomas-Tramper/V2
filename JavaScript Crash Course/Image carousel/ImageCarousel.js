// holder menu icon div
var menuIcon = document.querySelector("#menu-icon");
// holder nav bar/ off canvas Menu
var navUl = document.querySelector("#navigation");

var id = 0
// main holder alle billederne i Carousel og dot som viser hvilken billedet der er på skærmen   
var main = document.querySelector("#Carousel")
// holder kun alle img i main 
var imgMain = main.querySelectorAll("img")

// holder dot som viser hvilken billedet der er på skærmen
var Dots = document.querySelector("#Dots")

// venter på at der bliver klikket på menu icon så den kan åben og lukke 
menuIcon.addEventListener("click", function(e)
{
    if(navUl.classList.contains("open-menu"))
    {
        navUl.classList.remove("open-menu");
        menuIcon.classList.remove("close-menu");
    }
    else
    {
        navUl.classList.add("open-menu");
        menuIcon.classList.add("close-menu");
    }
})
var shiftingArea = document.querySelector(".shifting_area")
shiftingArea.addEventListener("click", function(e){
        if (e.target.classList == "shift_right"){
            id = id+1
            Carousel()
            clearInterval(autoSwitch);  
        }
        if (e.target.classList == "shift_left"){
            id = id-1
            Carousel()
            clearInterval(autoSwitch);
        }
})
Dots.addEventListener("click", function(e)
{
    if (e.target.tagName == "DIV") {
        for (let index = 0; index < dots.length; index++) {
            if (e.target== dots[index]) {
                id = index
                Carousel()
            }   
        }
        
    }
})

// setInterval køre hver 3000ms når det så køre kalder den på function Id
var autoSwitch = setInterval(Id, 3000);


// dette for loop køre så langt som imgMain holder af billeder
//  hver gang den køre så create den en div som gemmes i temp
//  der efter add det temp til article
for (let index = 0; index < imgMain.length; index++) {
    var temp = document.createElement("div")
    Dots.appendChild(temp)
}
// holder alle de create div
var dots = Dots.querySelectorAll("div")

// dots 0 er standard som får class show 
dots[0].classList.add("show")

function Id(){
    
    id++
    if (id > imgMain.length-1) {
        id = 0;
    }
    Carousel()

}

function Carousel(){
    
    
    // remove pre, new og show 
    document.querySelector(".pre").classList.remove("pre");
    document.querySelector(".now").classList.remove("now");
    document.querySelector(".show").classList.remove("show");

    // hvis id er længere end imgMain.length så er id = 0 
    if (id > imgMain.length-1) {
        id = 0;
    }
    if (id < 0) {
        id = imgMain.length-1
    }
    // add class now til det billede som er position som med id 
    imgMain[id].classList.add("now");
    // add class show til det dot som er position som med id 
    dots[id].classList.add("show")
    // hvis id er = 0 så skal det anden sidste i rækken ha class pre
    if (id == 0) {
        imgMain[imgMain.length-1].classList.add("pre");
    }
    else{
        imgMain[id-1].classList.add("pre");
    }
    console.log(id)
    console.log(imgMain[id].alt)
}