// holder hele nav
var tabbedMenu = document.querySelector("#tabbed-menu")
// holder hele ul/fane bar 
var tabbedMenuTabs = tabbedMenu.querySelector("#tabbed-menu_tabs")
// holder alle li/ fane bar item 
var tab = document.querySelectorAll("li")
// holder alle div/ fane item 
var contentTabbed = tabbedMenu.querySelector("#tabbed-menu_content").querySelectorAll("div")
// 🍪 cookie
var getCookie = document.cookie;

// hvis fane bar item 3 var på gøre metode remove og Menu 
if (getCookie == "GemMenu=2") {
    remove()
    Menu(2)
}
// hvis fane bar item 2 var på gøre metode remove og Menu 
if (getCookie == "GemMenu=1") {
    remove()
    Menu(1)
}
// hvis fane bar item 1 var på gøre ingen ting da det er standard 

// venter på et click ind for ul eller ul
tabbedMenuTabs.addEventListener("click", function(e){

    // hvis det er ul der bliv click på så gå videre 
    if (e.target.id != "tabbed-menu_tabs") {
        // hvis der ikke er nogle class active så gå til remove 
        if (document.querySelector(".active") != null) {
            remove()
        }
    }
    // hvis der klikke på id tab1 så gå til Menu med tallet 0
    if(e.target.id == "tab1")
    {
        Menu(0)
    }
    // hvis der klikke på id tab2 så gå til Menu med tallet 1
    if(e.target.id == "tab2")
    {
        Menu(1)
    }
    // hvis der klikke på id tab3 så gå til Menu med tallet 2
    if(e.target.id == "tab3")
    {
        Menu(2)
    }
})
// denne funktion finder alle class med active og show og fjerner dem med active og show
function remove(){
    document.querySelector(".active").classList.remove("active")
    document.querySelector(".show").classList.remove("show")
}
//finder ud af hvilken af faner der skal vises 
function Menu(MenuSet)
{
    // hvis MenuSet = 0 skal det være fane 1
    if (MenuSet == 0) {
        // add class active til id tab1
        tab[0].classList.add("active")
        // add class show til id con1
        contentTabbed[0].classList.add("show")
        // gemmer hvilket fane der var åben sidst 
        document.cookie = "GemMenu= 0"
    }
    // hvis MenuSet = 1 skal det være fane 2
    if (MenuSet == 1) {
        // add class active til id tab2
        tab[1].classList.add("active")
        // add class show til id con2
        contentTabbed[1].classList.add("show")
        // gemmer hvilket fane der var åben sidst 
        document.cookie = "GemMenu= 1"
    }
    // hvis MenuSet = 2 skal det være fane 3
    if (MenuSet == 2) {
        // add class active til id tab3
        tab[2].classList.add("active")
        // add class show til id con2
        contentTabbed[2].classList.add("show")
        // gemmer hvilket fane der var åben sidst 
        document.cookie = "GemMenu= 2"
    }
}
