function openNav() {
  document.getElementById("mySidenav").className = "sidenav is-active";
}

function closeNav() {
  document.getElementById("mySidenav").className = "sidenav";
}
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
	dropdown[i].addEventListener("click", function() {
		console.log("HELLO");
		this.classList.toggle("active");
		var dropdownContent = this.nextElementSibling;
		if (dropdownContent.style.display === "block") {
			dropdownContent.style.display = "none";
		} 
		else {
			dropdownContent.style.display = "block";
		}
  });
}