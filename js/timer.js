var deadline = new Date("sep 13, 2019 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var timeLeft = deadline - now;
    var days = Math.floor(timeLeft / (1000*60*60*24));
    var hours = Math.floor((timeLeft % (1000*60*60*24)) / (1000*60*60));
    var minutes = Math.floor((timeLeft % (1000*60*60)) / (1000*60));
    var seconds = Math.floor((timeLeft % (1000*60)) / 1000);
    document.getElementById("timer").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";
    if(timeLeft < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);