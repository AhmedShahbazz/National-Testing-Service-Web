
// Get the PshModal
var  = document.getElementById('PshModal');

// Get the button that opens the PshModal
var btnPshHeading = document.getElementById("btnPshHeading");

// Get the <span> element that closes the PshModal
var spanPshHeading = document.getElementsByClassName("closePsh")[0];

// When the user clicks on the button, open the PshModal 
btnPshHeading.onclick = function() {
    PshModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the PshModal
spanPshHeading.onclick = function() {
    PshModal.style.display = "none";
}

// When the user clicks anywhere outside of the PshModal, close it
window.onclick = function(event) {
    if (event.target == PshModal) {
        PshModal.style.display = "none";
    }
}