
// Get the modalIsl
var modalIsl = document.getElementById('IslModal');

// Get the button that opens the modalIsl
var btnIslHeading = document.getElementById("btnIslHeading");

// Get the <span> element that closes the modalIsl
var spanIslHeading = document.getElementsByClassName("closeIsl")[0];

// When the user clicks on the button, open the modalIsl 
btnIslHeading.onclick = function() {
    modalIsl.style.display = "flex";
}

// When the user clicks on <span> (x), close the modalIsl
spanIslHeading.onclick = function() {
    modalIsl.style.display = "none";
}

// When the user clicks anywhere outside of the modalIsl, close it
window.onclick = function(event) {
    if (event.target == modalIsl) {
        modalIsl.style.display = "none";
    }
}