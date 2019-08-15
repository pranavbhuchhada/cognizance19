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
    <a href="http://www.cz19.in"><img src="/cognizance19/assets/cz_logo.png" class="img-fluid p-5"></a>
    <div id="social">
      <a href="https://www.facebook.com/czCHARUSAT/" class="fa fa-facebook" target="_blank"></a>
      <a href="https://www.instagram.com/cognizance_charusat/" target="_blank" class="fa fa-instagram"></a>
      <a href="https://www.youtube.com/channel/UC5ooaAF54LXWIil2GjUxrhw"  target="_blank" class="fa fa-youtube" ></a>
      <a href="mailto:info@cz19.in?Subject=Inquery%20CZ'19"  target="_blank" class="fa fa-envelope-o"></a>
    </div>
    <a href="javascript:void(0);" class="closebtn" onclick="closeNav();">&times;</a>
    <a href="/cognizance19/" onclick="closeNav();showDashboard();">Home</a>
    <a href="/cognizance19/events/" onclick="closeNav();">Events</a>
    <a href="/cognizance19/attraction/workshops.php" onclick="closeNav();">Workshops</a>
    <a href="/cognizance19/attraction/guestlectures.php" onclick="closeNav();">Guest Lectures</a>
    <a href="/cognizance19/attraction/disconight.php" onclick="closeNav();">Disco Nights</a>
    <a href="javascript:alert('Coming Soon..');" onclick="closeNav();">Sponsors</a>
    <a href="javascript:alert('Coming Soon..');" onclick="closeNav();">Accomodation</a>
</span>
<span style="font-size:30px;cursor:pointer;padding: 10px;position: fixed;top: 0;left: 0;z-index: 1;" onclick="openNav()">&#9776;</span>