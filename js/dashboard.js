var myscrollposition = 0;
var currentpage  = 0;
var yrtset = false;
$('body').on('mousewheel DOMMouseScroll', function(e){
	var flag = true;
  if(typeof e.originalEvent.detail == 'number' && e.originalEvent.detail !== 0) {
    if(e.originalEvent.detail > 0) {    	
      	myscrollposition++;flag = true;
    } else if(e.originalEvent.detail < 0){    	
        myscrollposition--;flag = false;
    }
  } else if (typeof e.originalEvent.wheelDelta == 'number') {
    if(e.originalEvent.wheelDelta < 0) {    	
        myscrollposition++;flag = true;
    } else if(e.originalEvent.wheelDelta > 0) {    	
        myscrollposition--;flag = false;
    }
  }
  if (myscrollposition<0) {
  	myscrollposition=0;
  	return;
  }
  else if(flag && myscrollposition>=0 && myscrollposition<6){
  	$("#dashboard").css({"opacity":"-=0.2"});
  	$("#heading").css({"font-size":"-=10"});
  }
  else if(!flag && myscrollposition>=0 && myscrollposition<6){
  	if (currentpage == 1) {
	  	$("#dashboard").css({"opacity":"1"});
	  	$("#heading").css({"font-size":"10vw"});
	  	$("#about").css({"top":"100%"});
	  	$("body").css({"overflow":"hidden"});
	  	myscrollposition = 0;
	  	currentpage = 0;
  	}
  }
  else if (myscrollposition>=6 && myscrollposition<11) {
  	if (currentpage == 0) {
	  	$("#about").css({"top":"0%"});
	  	$("#dashboard").css({"opacity":"0"});
	  	if (!yrtset) {
	  		$("body").append('<div class="grtyoutube-popup grtyoutube-dark-theme">'+
			'<div class="grtyoutube-popup-content">'+
			'<span class="grtyoutube-popup-close"></span>'+
			'<iframe class="grtyoutube-iframe" src="https://www.youtube.com/embed/'+ 
			$(".youtube-link").attr("youtubeid")+
			'?rel=0&wmode=transparent&autoplay='+1+
			'&iv_load_policy=3" allowfullscreen frameborder="0" allow="autoplay; fullscreen"></iframe>'+'</div>'+'</div>');
			yrtset = true;
		}

	  	$("body").css({"overflow":"visible"});
	  	currentpage =1;
  	}
  }
  else{myscrollposition--;}
});
$('body').on('swipedown',function(){
	if (currentpage==1) {
		$("#about").css({"top":"100%"});
	  	$("body").css({"overflow":"hidden"});
  		$("#dashboard").css({"opacity":"1"});
  		myscrollposition = 0;
  		currentpage = 0;  	
	}
});
$('body').on('swipeup',function(){
	if (currentpage==0) {
		currentpage = 1;
		$("#about").css({"top":"0%"});
  		$("body").css({"overflow":"visible"});
  		$("#dashboard").css({"opacity":"0"});
	}
});
$(document).keyup(function(event) {
	if (event.keyCode == 27 && yrtset){
		$(".grtyoutube-popup").remove();
	}
});
$("body").on('click', function (event) {
	event.preventDefault();
	if (yrtset){
		console.log("outer");
		$(".grtyoutube-popup-close, .grtyoutube-popup").click(function(){
			console.log("inner");
			$(".grtyoutube-popup").remove();
		});
	}
});
$(".icon-scroll").on("click",function(){
  	$("#about").css({"top":"0%"});
  	$("#dashboard").css({"opacity":"0"});
  	if (!yrtset) {
  		$("body").append('<div class="grtyoutube-popup grtyoutube-dark-theme">'+
		'<div class="grtyoutube-popup-content">'+
		'<span class="grtyoutube-popup-close"></span>'+
		'<iframe class="grtyoutube-iframe" src="https://www.youtube.com/embed/'+ 
		$(".youtube-link").attr("youtubeid")+
		'?rel=0&wmode=transparent&autoplay='+1+
		'&iv_load_policy=3" allowfullscreen frameborder="0" allow="autoplay; fullscreen"></iframe>'+'</div>'+'</div>');
		yrtset = true;
	}
  	$("body").css({"overflow":"visible"});
  	currentpage =1;
  	myscrollposition = 10;
});