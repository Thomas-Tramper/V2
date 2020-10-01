body = document.querySelector("body")
console.dir(body)
body.addEventListener("click",function(event){
    if(event.target.id == "Red")
    {
        body.className = ("Red");
  
    }
    if(event.target.id == "Green")
    {
        body.className = ("Green");
  
    }
    if(event.target.id == "Blue")
    {
        body.className = ("Blue");
  
    }
    if(event.target.id == "Yellow")
    {
        body.className = ("Yellow");
  
    }
});