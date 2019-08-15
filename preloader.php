<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		html,body{
			max-width: 100% !important;
		}
		.ml4 {
		  position: relative;
		  font-weight: 900;
		  font-size: 6vw;
		}
		.ml4 .letters {
		  position: absolute;
		  transform: translate(-100%,-100%);
		  margin: auto;
		  left: 35vw;
		  top: 35vh;
		  opacity: 0; 
		}	
	</style>
</head>
<body>
	<div id="preloader">
		<h1 class="ml4">
  			<span class="letters letters-1">DREAM</span>
  			<span class="letters letters-2">EXPLORE</span>
  			<span class="letters letters-3">INNOVATE</span>
		</h1>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script type="text/javascript">
		var ml4 = {};
		ml4.opacityIn = [0,1];
		ml4.scaleIn = [0.2, 1];
		ml4.scaleOut = 3;
		ml4.durationIn = 100;
		ml4.durationOut = 100;
		ml4.delay = 300;

		anime.timeline({loop: true})
		  .add({
		    targets: '.ml4 .letters-1',
		    opacity: ml4.opacityIn,
		    scale: ml4.scaleIn,
		    duration: ml4.durationIn
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
</body>
</html>
