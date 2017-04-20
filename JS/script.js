// var profiles = document.getElementsByClassName("trainees");
//       var blur = document.getElementsByClassName("blur");
//       var x = document.getElementsByClassName("modal");
//       var modal0 = document.getElementById("myModal");
//       var modal1 = document.getElementById("myModal1");
//       var modal2 = document.getElementById("myModal2");
//       var box = document.getElementById("box1");
//       var popup_boxes = new Array("modal0","modal1","modal2")
//       function popup1(){
//           modal0.style.display = "block";
//         }
//       function popup2(){
//           modal1.style.display = "block";
//         }
//       function close1(){
//           modal0.style.display = "none";
//         }
//       function close2(){
//           modal1.style.display = "none";
//         }
//          for(i=0; i < profiles.length; i++){
//               profiles[i].onmouseover = function(){
//                 blur[0].style.filter = "blur(5px)";
//                 blur[1].style.filter = "blur(5px)";
//                 blur[2].style.filter = "blur(5px)";
//                 this.style.filter = "none";
//               }
//               profiles[i].onmouseout = function(){
//                 blur[0].style.filter = "none";
//                 blur[1].style.filter = "none";
//                 blur[2].style.filter = "none";
                
//               }
//           }
   



          
// $(document).ready(function(){
//   var profile = document.getElementsByClassName('profile-display');
//   var close = document.getElementsByClassName('fa');

//   $(profile).click(function(){
//     $(this).find(".modal").css("display","block")
//   })

//   if($('span.fa').data('clicked')) {
//     alert('yes');
//   }
// })


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

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropDown1() {
    document.getElementById("signin").classList.toggle("show");
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

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function dropDown2() {
    document.getElementById("signup").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}