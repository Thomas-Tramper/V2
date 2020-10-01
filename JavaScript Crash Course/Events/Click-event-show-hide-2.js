var button = document.querySelector("button");
var hide = document.querySelector("div");
button.addEventListener("click", function(){
   if(hide.className == "Show"){
       
       hide.className = (""); 
   }
   else{
       hide.className = ("Show"); 
   }
})