// submit
function submit() {
    let ten = document.getElementById("ten").value;
    let email = document.getElementById("email").value;
    document.getElementById("demo").innerHTML = "<br><br><br><h2>Chào "+ten+"!<br>email: "+email+"</h2><br><p>Cảm ơn bạn để lại lời nhắn!";
    
} 
// dk
function dk(){
    document.getElementById('dn').style.display='none';
    document.getElementById('dk').style.display='block';
}
function signin(url){
    href="https://bt-nhom5-ltw.herokuapp.com/hoc-html.html";
}
function html(event){
    href="https://bt-nhom5-ltw.herokuapp.com/hoc-html.html";
}
// Get the modal
var modal = document.getElementById('dn');
var modal2 = document.getElementById('dk');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}