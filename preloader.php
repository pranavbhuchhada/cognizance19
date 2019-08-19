<div id="loader">
	<div id="preloader" style="height: 30vh;
			width: 30vw;
			position: absolute;
			transform: translate(-50%,-50%);
			margin: auto;
			top: 50%;
			left: 50%;background-color: black;">
		<h1 class="ml4" style="font-weight: 900;
		  font-size: 6vw;">
  			<span style="position: absolute;opacity: 0;transform: translate(-50%,-50%);" class="letters letters-1">&nbsp;&nbsp;DREAM&nbsp;</span>
  			<span class="letters letters-2">&nbsp;EXPLORE</span>
  			<span class="letters letters-3">INNOVATE</span>
		</h1>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script type="text/javascript">
		
		var ml4 = {};
		ml4.opacityIn = [0,1];
		ml4.scaleIn = [0.2, 1];
		ml4.scaleOut = 3;
		ml4.durationIn = 300;
		ml4.durationOut = 300;
		ml4.delay = 300;

		anime.timeline({loop: true})
		  .add({
		    targets: '.ml4 .letters-1',
		    opacity: ml4.opacityIn,
		    scale: ml4.scaleIn,
		    duration: ml4.durationIn,
		  }).add({
		    targets: '.ml4 .letters-1',
		    opacity: 0,
		    scale: ml4.scaleOut,
		    duration: ml4.durationOut,
		    easing: "easeInExpo",
		    delay: ml4.delay
		  }).add({
		    targets: '.ml4 .letters-2',
		    opacity: ml4.opacityIn,
		    scale: ml4.scaleIn,
		    duration: ml4.durationIn
		  }).add({
		    targets: '.ml4 .letters-2',
		    opacity: 0,
		    scale: ml4.scaleOut,
		    duration: ml4.durationOut,
		    easing: "easeInExpo",
		    delay: ml4.delay
		  }).add({
		    targets: '.ml4 .letters-3',
		    opacity: ml4.opacityIn,
		    scale: ml4.scaleIn,
		    duration: ml4.durationIn
		  }).add({
		    targets: '.ml4 .letters-3',
		    opacity: 0,
		    scale: ml4.scaleOut,
		    duration: ml4.durationOut,
		    easing: "easeInExpo",
		    delay: ml4.delay
		  }).add({
		    targets: '.ml4',
		    opacity: 0,
		    duration: 500,
		    delay: 500
		  });
	</script>
</div>
<script type="text/javascript">
	var loader = document.getElementById('loader');
	loader.style.height = window.innerHeight + "px";
	loader.style.width = window.innerWidth + "px";
	loader.style.backgroundColor = "black";
	loader.style.color = "#EEE";
	loader.style.overflow = "hidden";
	document.body.style.display = "none";
</script>