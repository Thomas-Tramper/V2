var menu = document.querySelector("#menu");
var menuPosition = 100;

window.onscroll = function() 
{ 
    toggleCSS(); 
};
function toggleCSS() {

    if (window.pageYOffset >= menuPosition ) 
    { 
        menu.classList.add("sticky")
    
    } else 
    { 
        menu.classList.remove("sticky" ); 
    }
    
}
