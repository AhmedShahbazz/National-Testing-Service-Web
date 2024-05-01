
// Get the AJKModal
var AJKModal = document.getElementById('AJKModal');

// Get the button that opens the AJKModal
var btnAJKHeading = document.getElementById("btnAJKHeading");

// Get the <span> element that closes the AJKModal
var spanAJKHeading = document.getElementsByClassName("closeAJK")[0];

// When the user clicks on the button, open the AJKModal 
btnAJKHeading.onclick = function() {
    AJKModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the AJKModal
spanAJKHeading.onclick = function() {
    AJKModal.style.display = "none";
}

// When the user clicks anywhere outside of the AJKModal, close it
window.onclick = function(event) {
    if (event.target == AJKModal) {
        AJKModal.style.display = "none";
    }
}