var menu = document.getElementById("menu");
console.dir(menu);

var active = document.querySelector(".active");
console.dir(active);

var h1 = document.querySelectorAll("h1");
for (i = 0; i < h1.length; i++) {
    console.dir(h1[i])  
}

var p = document.querySelectorAll("p");
for (i = 0; i < p.length; i++) {
    console.dir(p[i])   
}

var imgAlt = document.querySelectorAll("img")
imgAlt.forEach(imgAlt1 => {
    imgAlt1.setAttribute("alt","Biledet er underlagt copyright");
});

var overskrift = document.querySelector("h1");
overskrift.innerHTML = "Oerskriften er udskift";

var h1v2 = document.querySelectorAll("h1");
for (let i = 0; i < h1v2.length; i++) {
    h1v2[i].setAttribute("class","title")
}

var li = document.querySelectorAll("li");
for(i in li ){
    console.dir(li[i]);
}

var pg = document.querySelector("#playground");
var pglu = document.createElement("lu");
var li1 = document.createElement("li");
var li2 = document.createElement("li");
var li3 = document.createElement("li");
pglu.appendChild(li1);
pglu.appendChild(li2);
pglu.appendChild(li3);
pg.appendChild(pglu);
console.log(pg);

var img = document.querySelectorAll("img");
img2 = img[1].src;
img[1].src = img[0].src;
img[0].src = img2;

var p = document.querySelector("#deleteme");
p.parentNode.removeChild(p);

var p2 = document.querySelector("#deletemetoo");
p2.remove();


