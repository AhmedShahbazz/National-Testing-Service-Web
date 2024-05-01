
// Get the modal
var KhiModal = document.getElementById('KhiModal');

// Get the button that opens the modal
var btnKhiHover = document.getElementById("btnKhiHover");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeKhi")[0];

// When the user clicks on the button, open the modal 
btnKhiHover.onclick = function() {
    KhiModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    KhiModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == KhiModal) {
        KhiModal.style.display = "none";
    }
}