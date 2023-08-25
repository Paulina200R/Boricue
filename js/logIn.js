window.onload=inicio;

function inicio(){
    var bUp = document.getElementById("bUp").onclick=cambioSign;
    var bIn = document.getElementById("bIn").onclick=cambioUp;
    // var inp = document.getElementById("exampleInput").onclick=cambioInp;
}

function cambioSign(){
    var sIn = document.getElementById("sIn").style;
    sIn.visibility = "hidden"
    var sUp = document.getElementById("sUp").style;
    sUp.visibility = "visible"
}

function cambioUp(){
    var sIn = document.getElementById("sIn").style;
    sIn.visibility = "visible"
    var sUp = document.getElementById("sUp").style;
    sUp.visibility = "hidden"
}

// function cambioInp(){
//     var inp = document.getElementById("exampleInput").style;
//     inp.transform = "scale(1.05)"
// }