
// Get the PshModal
var PshModal = document.getElementById('PshModal');

// Get the button that opens the PshModal
var btnPshHover = document.getElementById("btnPshHover");

// Get the <span> element that closes the PshModal
var spanPshHover = document.getElementsByClassName("closePsh")[0];

// When the user clicks on the button, open the PshModal 
btnPshHover.onclick = function() {
    PshModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the PshModal
spanPshHover.onclick = function() {
    PshModal.style.display = "none";
}

// When the user clicks anywhere outside of the PshModal, close it
window.onclick = function(event) {
    if (event.target == PshModal) {
        PshModal.style.display = "none";
    }
}