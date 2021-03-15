menuIcon = document.querySelector("#menu_icon");
menu = document.querySelector("#menu");
menu_trick = document.querySelector("#menu_icon_trick")
console.log(menuIcon.classList)

var menuCookie = document.cookie;
if (menuCookie == "menu=close") {
    menuStatus = "open"
    Menu()
}
else
{
    menuStatus = "close"
}

menu_trick.addEventListener("click", function(e){
    if (menuIcon.classList == "menu_icon_open"){
        menuStatus = "open"
    }
    else if (menuIcon.classList == "menu_icon_close"){
        menuStatus = "close"
    }
    Menu()
})
function Menu(){
    if(menuStatus == "open"){
        menuIcon.classList.remove("menu_icon_open");
        menuIcon.classList.add("menu_icon_close");
        menu.classList.remove("menu_open")
        menu.classList.add("menu_close")
        document.cookie = "menu=close";

    }
    else if (menuStatus == "close") {
        menuIcon.classList.remove("menu_icon_close");
        menuIcon.classList.add("menu_icon_open");
        menu.classList.remove("menu_close")
        menu.classList.add("menu_open")
        document.cookie = "menu=open";

    }
}