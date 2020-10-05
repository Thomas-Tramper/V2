var menuIcon = document.querySelector("#menu-icon");
var navUl = document.querySelector("#navigation");

console.log(menuIcon);
console.log(navUl);

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