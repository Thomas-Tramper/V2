var button = document.querySelector("button");
var hide = document.querySelector("div");
button.addEventListener("click", function(){
    if(hide.style.opacity == 1)
    {
        hide.style.opacity = 0
    }
    else{
        hide.style.opacity = 1
    }
})