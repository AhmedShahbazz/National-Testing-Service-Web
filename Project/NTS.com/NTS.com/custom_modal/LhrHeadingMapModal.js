
// Get the LhrModal
var LhrModal = document.getElementById('LhrModal');

// Get the button that opens the LhrModal
var btnLhrHeading = document.getElementById("btnLhrHeading");

// Get the <span> element that closes the LhrModal
var spanLhr = document.getElementsByClassName("closeLhr")[0];

// When the user clicks on the button, open the LhrModal 
btnLhrHeading.onclick = function() {
    LhrModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the LhrModal
spanLhr.onclick = function() {
    LhrModal.style.display = "none";
}

// When the user clicks anywhere outside of the LhrModal, close it
window.onclick = function(event) {
    if (event.target == LhrModal) {
        LhrModal.style.display = "none";
    }
}