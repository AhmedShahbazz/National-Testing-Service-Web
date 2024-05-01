
// Get the modal
var IslModal = document.getElementById('IslModal');

// Get the button that opens the modal
var btnIslHover = document.getElementById("btnIslHover");

// Get the <span> element that closes the modal
var spanIslHover = document.getElementsByClassName("closeIsl")[0];

// When the user clicks on the button, open the modal 
btnIslHover.onclick = function() {
    IslModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
spanIslHover.onclick = function() {
    IslModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == IslModal) {
        IslModal.style.display = "none";
    }
}