<script type="text/javascript">
  function showDashboard() {
      $("#dashboard").css({"opacity":"1"});
      $("#heading").css({"font-size":"10vw"});
      $("#about").css({"top":"100%"});
      $("body").css({"overflow":"hidden"});
      myscrollposition = 0;
      currentpage = 0;
  }
  function showAbout(){
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
      $(".grtyoutube-popup").on('click', function (event) {
        event.preventDefault();
        if (yrtset){
          $(".grtyoutube-popup-close, .grtyoutube-popup").click(function(){
            $(".grtyoutube-popup").remove();
          });
        }
      });
    }
      $("body").css({"overflow":"visible"});
      currentpage =1;
      myscrollposition = 10;
  }
</script>
<span id="mySidenav" class="sidenav">
  <a href="javascript:void(0);" class="closebtn" onclick="closeNav();">&times;</a>
  <a href="javascript:void(0);" onclick="closeNav();showDashboard();"><h3>Home</h3></a>
  <a href="javascript:void(0);" onclick="closeNav();showAbout()"><h3>About</h3></a>
<!--   <a href="javascript:void(0);" onclick="closeNav();">Contact Us</a>
  <a href="javascript:void(0);" onclick="closeNav();">Sponsors</a>
  <a href="javascript:void(0);" onclick="closeNav();"><h3>Attraction</h3></a>
  <a href="javascript:void(0);" onclick="closeNav();">Workshops</a>
  <a href="javascript:void(0);" onclick="closeNav();">Guest Lectures</a>
  <a href="javascript:void(0);" onclick="closeNav();">Disco Nights</a>
  <a href="javascript:void(0);" onclick="closeNav();"><h3>Events</h3></a>
  <a href="javascript:void(0);" onclick="closeNav();">Tech</a>
  <a href="javascript:void(0);" onclick="closeNav();">Non - Tech</a>
  <a href="javascript:void(0);" onclick="closeNav();"><h3>Accomodation</h3></a>   -->
</span>
<span style="font-size:30px;cursor:pointer;padding: 10px;position: fixed;top: 0;left: 0;z-index: 1;" onclick="openNav()">&#9776;</span>