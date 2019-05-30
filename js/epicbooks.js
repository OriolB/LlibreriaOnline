$(document).ready(inici);

function inici() {
    $('.responsive').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: false,
        //nextArrow:'<img class="pictl" src="imatges/rightarrow.png" alt=""/>',
        //prevArrow:'<img class="pictr" src="imatges/leftarrow.png" alt=""/>',
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 750,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });

}

var femail = document.forms["formulari"]["email"];
femail.addEventListener("keyup", femailUser, false);

var fpassw = document.forms["formulari"]["password"];
fpassw.addEventListener("keyup", fPassw, false);

function fPassw(event) {
    var passw = event.target.value;
    document.getElementById("passwHelp").innerHTML = "";
    validaPassw(passw);
}

function validaPassw(passw) {
    var RegExPattern = /^[A-z0-9]{5,}$/;

    if (passw.match(RegExPattern)) {
        return true;
    } else {
        document.getElementById("passwHelp").innerHTML = "Error la contraseña tiene que ser mayor de 5 carácteres y solo puede incluir números y letras";
        return false;
    }
}
function femailUser(event) {
    var email = event.target.value;
    document.getElementById("emailHelp").innerHTML = "";
    validaEmail(email);

}

function validaEmail(email) {
    var emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,3}$/i;

    if (email.match(emailRegex)) {
        return true;
    } else {
        document.getElementById("emailHelp").innerHTML = "Valor Invalid, no te un format email correcte";
        return false;
    }
}

function validaForm() {
    var totOk = true;

    var t = document.forms["formulari"]["email"].value;
    if (validaEmail(t) == false) {
        totOk = false;
    }

    var t2 = document.forms["formulari"]["password"].value;
    if (validaPassw(t2) == false) {
        totOk = false;
    }

    if (t != "" && t2 != "" && totOk == true) {
        return true;
    } else {
        return false;
    }
}


function validaBuscar() {

    var fsearch = document.forms["buscador"]["searchbar"].value;
    
    var RegExPattern = /^[A-z0-9]{3,}$/;
    if (fsearch.match(RegExPattern)) {
        return true;
    } else {
        document.getElementById("searchHelp").innerHTML = "El termino usado debe incluir más de 3 carácteres";
        return false;
    }
}





