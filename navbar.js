function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "cznav") {
		x.className += " responsive";
	} 
	else {
		x.className = "cznav";
	}
}
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 160 || document.documentElement.scrollTop > 160) {
	document.getElementById("othernav").style.top = "0";
	} else {
	document.getElementById("othernav").style.top = "-90px";
	}
}