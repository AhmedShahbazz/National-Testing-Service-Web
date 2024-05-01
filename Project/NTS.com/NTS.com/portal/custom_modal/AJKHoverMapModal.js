
// Get the AJKModal
var AJKModal = document.getElementById('AJKModal');

// Get the button that opens the AJKModal
var btnAJKHover = document.getElementById("btnAJKHover");

// Get the <span> element that closes the AJKModal
var spanAJKHover = document.getElementsByClassName("closeAJK")[0];

// When the user clicks on the button, open the AJKModal 
btnAJKHover.onclick = function() {
    AJKModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the AJKModal
spanAJKHover.onclick = function() {
    AJKModal.style.display = "none";
}

// When the user clicks anywhere outside of the AJKModal, close it
window.onclick = function(event) {
    if (event.target == AJKModal) {
        AJKModal.style.display = "none";
    }
}