
function submit() {
    let ten = document.getElementById("ten").value;
    let email = document.getElementById("email").value;
    document.getElementById("demo").innerHTML = "<br><br><br><h2>Chào "+ten+"!<br>email: "+email+"</h2><br><p>Cảm ơn bạn để lại lời nhắn!";
    
} 

// Get the modal
var modal = document.getElementById('dn');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}