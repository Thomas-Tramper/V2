var gallery = document.querySelector(".gallery");

gallery.addEventListener("click", function(e){
    if (e.target.tagName === "IMG"){
        var overlay = document.createElement("div");
        overlay.id = "overlay";
        overlay.className = "overlay";
        document.body.appendChild(overlay);

        var largeImage = document.createElement("img");
        largeImage.id = "largeImage";
        var newSrc = e.target.src.split("_");
        largeImage.src = "img/" + newSrc[1];

        largeImage.addEventListener("load", function(){
            if (this.height > window.innerHeight) {
                this.ratio = window.innerHeight / this.height;
                this.width = this.width * this.ratio;
            }

            if (this.width > window.innerWidth){
                this.ratio = window.innerWidth / this.width;
                this.width = this.width * this.ratio;
            }

            this.style.height = "auto";

            overlay.appendChild(largeImage);
        })

        overlay.addEventListener("click", function(){
            if (overlay){
                overlay.parentNode.removeChild(overlay);
                window.removeEventListener("resize", window, false)
                window.removeEventListener("scroll", window, false)
            }
        },false)

        window.addEventListener("scroll", function(){
            if(overlay){
                overlay.style.top = 0;
            }
        },false)
    }
})