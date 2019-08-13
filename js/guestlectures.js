$(".guest-card").click(function(){
	var id = $(this).attr("id").split("_").pop();
	var modal = $("#guest_m_" + id);
	modal.css({"display":"block"});
	$(".close").click(function(){
		modal.css({"display":"none"});
	});
	window.onclick = function(event) {
		if (event.target == document.getElementById("guest_m_"+id)) {
			modal.css({"display":"none"});
		}
	}
});