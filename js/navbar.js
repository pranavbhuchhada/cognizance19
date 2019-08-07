function myFunction() {
	var x = document.getElementById("myTopnav");
	var myham = document.getElementsByClassName('hamburger')[0];
	var mymain = document.getElementsByTagName('main')[0];
	if (x.className === "cznav") {
		x.className += " responsive";
		myham.className += " is-active";
		mymain.style.display = "none";
		document.body.style.overflow = "visible";
		$("#hamburger").css({
			"left" : "auto",
			"right" : "0px;"
		});
	} 
	else {
		x.className = "cznav";
		mymain.style.display = "block";
		document.body.style.overflow = "hidden";
		myham.className = "hamburger hamburger--arrowalt";
		$("#hamburger").css({
			"right" : "0px",
			"right" : "auto;"
		});			
	}
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
	document.getElementById("othernav").style.top = "0";
	} else {
	document.getElementById("othernav").style.top = "-120px";
	}
}