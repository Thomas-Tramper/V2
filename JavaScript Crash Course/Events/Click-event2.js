var CE1 = document.querySelector("#list");
CE1.addEventListener("click", function(event){
    if(event.target.id == "Click1"){
        alert(event.target.parentNode.outerHTML);
    }
    if(event.target.id == "Click2"){
        alert(event.target.parentNode.outerHTML);
    }
    if(event.target.id == "Click3"){
        alert(event.target.parentNode.outerHTML);
    }
});
