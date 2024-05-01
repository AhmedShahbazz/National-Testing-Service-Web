
// Get the QtaModal
var QtaModal = document.getElementById('QtaModal');

// Get the button that opens the QtaModal
var btnQtaHover = document.getElementById("btnQtaHover");

// Get the <span> element that closes the QtaModal
var spanQtaHover = document.getElementsByClassName("closeQta")[0];

// When the user clicks on the button, open the QtaModal 
btnQtaHover.onclick = function() {
    QtaModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the QtaModal
spanQtaHover.onclick = function() {
    QtaModal.style.display = "none";
}

// When the user clicks anywhere outside of the QtaModal, close it
window.onclick = function(event) {
    if (event.target == QtaModal) {
        QtaModal.style.display = "none";
    }
}