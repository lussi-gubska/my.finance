var modalplus = document.getElementById("myModalplus");
var modalminus = document.getElementById("myModalminus");
var modalperevod = document.getElementById("myModalperevod");


var btnplus = document.getElementById("myBtnplus");
var btnminus = document.getElementById("myBtnminus");
var btnperekaz = document.getElementById("myBtnperekaz");



var span = document.getElementsByClassName("close")[0];




btnplus.onclick = function() {
    modalplus.style.display = "flex";
}

btnminus.onclick = function() {
    modalminus.style.display = "flex";
}

btnperekaz.onclick = function() {
    modalperevod.style.display = "flex";
}




span.onclick = function() {
    modalplus.style.display = "none";
}

span.onclick = function() {
    modalminus.style.display = "none";
}

span.onclick = function() {
    modalperevod.style.display = "none";
}



window.onclick = function(event) {
    if (event.target == modalplus ) {
        modalplus.style.display = "none";
    }
    if (event.target == modalminus) {
        modalminus.style.display = "none";
    }
    if (event.target == modalperevod) {
        modalperevod.style.display = "none";
    }
    if (event.target == menu) {
       menu.style.display = "none";
    }
}

var burger = document.querySelector(".burger");
var menu = document.querySelector(".burger-left");

burger.onclick = function() {
    menu.style.display = "flex";

}


// var burger = document.querySelector(".burger");
// var menu = document.querySelector(".fin-left");

// burger.onclick = function() {
//     menu.style.display = "flex";
//     menu.classList.add(".modal");

// }