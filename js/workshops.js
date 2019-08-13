$(".workshop-card").click(function(){
	var id = $(this).attr("id").split("_").pop();
	var modal = $("#workshop_m_" + id);
	modal.css({"display":"block"});
	$(".close").click(function(){
		modal.css({"display":"none"});
	});
	window.onclick = function(event) {
		if (event.target == document.getElementById("workshop_m_"+id)) {
			modal.css({"display":"none"});
		}
	}
});
// Get the modal
// var modal = document.getElementById("workshop_m_1");

// // Get the button that opens the modal
// var btn = document.getElementById("workshop_1");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
// 	console.log("HELLO");
//   	modal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//   modal.style.display = "none";
// }
// // When the user clicks anywhere outside of the modal, close it