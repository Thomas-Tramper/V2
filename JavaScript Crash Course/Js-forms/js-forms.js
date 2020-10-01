var person = document.querySelector("#person");
var udskrivPerson = document.querySelector("#fullname");
person.addEventListener("submit",function(e){
    e.preventDefault();
    var firstName = person.firstName.value;
    var lastName = person.lastName.value;
    udskrivPerson.innerHTML = firstName + " " + lastName;
} ,false)


var plus = document.querySelector("#plus");
var udskrivPlusRes = document.querySelector("#plusRes");
plus.addEventListener("submit", function(e){
    e.preventDefault();
    var num1 = plus.number1.value;
    var num2 = plus.number2.value;
    udskrivPlusRes.innerHTML = Number(num1) + Number(num2);
})

var price = document.querySelector("#price");
var udskrivPriceRes = document.querySelector("#priceRes");
price.addEventListener("submit", function(e){
    e.preventDefault();
    var beforePrice = price.price.value;
    PriceNow = beforePrice * 1.25;
    console.log(PriceNow);
    PriceNow -= beforePrice * 0.10;
    console.log(PriceNow);

    udskrivPriceRes.innerHTML = PriceNow;
})

var email = document.querySelector("#email");
email.addEventListener("submit",function(e){
    e.preventDefault();
    var mail = email.email.value;
    if (mail.search("@") >= 0 )
    {
        if (mail.includes(".")) {
            mails = mail.split(".");
            if (mails[mails.length-1].length == 3 || mails[mails.length-1].length == 2) {
                alert("Du har indtastet en gyldig email adresse")
            } else {
                alert("Indtast venligst en gyldig email adresse")
            }
        } else {
            alert("Indtast venligst en gyldig email adresse")
        }
        
    }else
    {
        alert("Indtast venligst en gyldig email adresse")
    }
})