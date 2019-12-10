// When the user clicks anywhere outside of the login form, close it
$(function(){
var modal = document.getElementById('_dropdownMenu');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
});