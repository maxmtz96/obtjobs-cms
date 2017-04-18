var profiles = document.getElementsByClassName("profile_div");
var box = document.getElementById("box1");

function cat() {
	var modal = document.getElementById("myModal");
	
	modal.style.display = "block";
}

window.onclick = function(event) {
	var modal = document.getElementById("myModal");

    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Accordion for views -> mockup.php
var acc = function acc(){
	var acc = document.getElementsByClassName("accordion");

	for (var i = 0; i < acc.length; i++) {
		acc[i].onclick = function(){
			this.classList.toggle("active");

			var panel = this.nextElementSibling;
			
			if (panel.style.display === "block") {
				panel.style.display = "none";
			} else {
				panel.style.display = "block";
			}
		}
	}
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}